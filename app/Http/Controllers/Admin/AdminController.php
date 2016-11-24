<?php

/**
 * Created by PhpStorm.
 * User: bilel
 * Date: 05/11/2016
 * Time: 12:45
 */
namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Ficelle;

class AdminController extends Controller
{
    public function __construct()
    {
    }

    public static function ficelle(){
        $ficelle = new Ficelle();
        return $ficelle;
    }

    public function index(){
        return view('admin.home.index');
    }
}