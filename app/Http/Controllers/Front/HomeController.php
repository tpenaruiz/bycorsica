<?php

/**
 * Created by PhpStorm.
 * User: thomas
 * Date: 07/11/2016
 * Time: 10:00
 */
namespace App\Http\Controllers\Front;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use MyFunction;

class HomeController extends Controller
{
    public function __construct()
    {
    }

    public function index(){
        return view('front.home.index');
    }

    /**
     * @return \Illuminate\Http\RedirectResponse
     * return Lang
     */
    public function language(){
        session()->set('locale', session('locale') == 'fr' ? 'en' : 'fr');
        return redirect()->back();
    }
}