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

class SearchController extends Controller
{
    public function __construct()
    {
    	// code ...
    }

    public function index(){
    	return view('front.search.index');
    }
}