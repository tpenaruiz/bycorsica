<?php

namespace App\Http\Controllers\Front;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CommandeController extends Controller
{
    public function __construct()
    {
    }

    public function stepOne(){
        return view('front.commande.stepOne');
    }

    public function stepTwo(){
        return view('front.commande.stepTwo');
    }
}