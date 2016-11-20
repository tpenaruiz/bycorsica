<?php

namespace App\Http\Controllers\Front;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PageContentController extends Controller
{
    public function __construct()
    {
    }

    public function cgu(){
        return view('front.pageContent.cgu');
    }

    public function cgv(){
        return view('front.pageContent.cgv');
    }

    public function mentionsLegal(){
        return view('front.pageContent.mentionsLegal');
    }
}
