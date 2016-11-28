<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;

class LegalsController extends Controller
{
    public function __construct()
    {
    }

    public function cgu(){
        $cgu = \App\Cgu::with('langues')->get();
        return view('front.legals.cgu', compact('cgu'));
    }

    public function cgv(){
        $cgv = \App\Cgv::with('langues')->get();
        return view('front.legals.cgv', compact('cgv'));
    }

    public function mentionsLegal(){
        $mention = \App\CharteQ::with('langues')->get();
        return view('front.legals.mentionsLegal', compact('mention'));
    }
}