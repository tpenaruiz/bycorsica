<?php

namespace App\Http\Controllers\Front;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Auth;

class AccountController extends Controller
{
    public function __construct(){
    	//code
    }

    public function index(){

    	$user = Auth::user();
    	$adresses = \App\Adresses::where('id_user', '=', Auth::user()->id)->get();    
        return view('front.account.index', compact('user', 'adresses'));
    }

    public function updateInfos(Request $request){

        if($request->ajax()){
            return response()->json(['test' => "ok"]);
        }
    }
}
