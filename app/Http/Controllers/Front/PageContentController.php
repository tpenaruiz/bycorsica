<?php

namespace App\Http\Controllers\Front;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class LegalsController extends Controller
{
    public function __construct()
    {
    }

    public function cgu(){
        return view('front.legals.cgu');
    }

    public function cgv(){
        return view('front.legals.cgv');
    }

    public function mentionsLegal(){
        return view('front.legals.mentionsLegal');
    }
}
