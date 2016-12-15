<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Helpers\ActivationService;

class AuthController extends Controller
{
	protected $redirectTo = '/';
	protected $activation_service;

     /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct(ActivationService $activation_service)
    {
        $this->activation_service = $activation_service; 
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //   
    }

    public function activateUser($token){
       	if($user = $this->activation_service->activateUser($token)){
       		auth()->login($user);
       		return redirect($this->redirectTo)->with('status', \Lang::get('auth.activate_account'));
       	}
       	abord(404);
    }
}