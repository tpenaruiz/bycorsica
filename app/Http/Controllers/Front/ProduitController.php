<?php

namespace App\Http\Controllers\Front;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ProduitController extends Controller
{
    public function __construct()
    {
    }

    public function index(){
        return view('front.produit.index');
    }
}
