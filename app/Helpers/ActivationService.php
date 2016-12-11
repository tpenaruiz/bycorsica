<?php

namespace App\Helpers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use Illuminate\Support\Facades\Mail;
use App\Mail\Activation;


class ActivationService
{
	protected $resendAfter = 24; 

    protected function getToken(){
    	return hash_hmac('sha256', str_random(40), config('app.key'));
    }

    private function createToken($user){
    	$token = $this->getToken();
    	$activation = new \App\UserActivations;
    	$activation->users_id = $user->id;
    	$activation->token = $token;
    	$activation->save();
    	return $token;
    }

    private function regenerateToken($user){
    	$token = $this->getToken();
    	$activation = \App\UserActivations::where('users_id', '=', $user->id)->first();
    	$activation->token = $token;
    	$activation->save();
    	return $token;
    }


    public function getActivation($user){
    	$activation = \App\UserActivations::where('users_id', '=', $user->id)->first();
    	return $activation;
    }

    public function getActivationByToken($token){
        $activation = \App\UserActivations::where('token', '=', $token)->first();
        return $activation;
    }

    public function createActivation($user){
    	$activation = $this->getActivation($user);
    	if (!$activation) {
    		return $this->createToken($user);
    	}
    	return $this->regenerateToken($user);
    }

    public function deleteActivation($token){
    	$activation = \App\UserActivations::where('token', '=', $token)->first();
    	$activation->delete();
    }

    private function shouldSend($user){
    	$activation = $this->getActivation($user);
    	return $activation === null || strtotime($activation->created_at) + 60 * 60 * $this->resendAfter < time();
    }

    public function sendMailActivation($user){
    	if ($user->status ==="Actif" || !$this->shouldSend($user)) {
    		return; 
    	}

    	$token = $this->createActivation($user);

        $user_activations = new \App\UserActivations;
        $user_activations->users_id = $user->id;
        $user_activations->token = $token;
    	Mail::to($user->email)->send(new Activation($user_activations));
    }

    public function activateUser($token){
        $activation = $this->getActivationByToken($token);

        if ($activation === null) {
            return null;
        }

        $user = \App\Users::find($activation->users_id);
        $user->status = "Actif";
        $user->save();

        $this->deleteActivation($token);

        return $user;
    }
}
