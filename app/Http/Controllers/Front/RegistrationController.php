<?php

/**
 * Created by PhpStorm.
 * User: thomas
 * Date: 07/11/2016
 * Time: 10:00
 */
namespace App\Http\Controllers\Front;

use Illuminate\Http\Request;

use App\Http\Requests;

class RegistrationController
{
    public function __construct()
    {
    	// code ...
    }

    public function index(){
    	return view('front.registration.index');
    }
}