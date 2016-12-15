<?php

namespace App\Http\Controllers\Front;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class BasketController extends Controller
{
    public function construct(){
    }

    public function index(){
        return view('front.basket.index');
    }
}
