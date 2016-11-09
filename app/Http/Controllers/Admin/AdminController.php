<?php

/**
 * Created by PhpStorm.
 * User: bilel
 * Date: 05/11/2016
 * Time: 12:45
 */
namespace App\Http\Controllers\Admin;

use App\Http\Requests;
use Symfony\Component\HttpKernel\Tests\Controller;

class AdminController
{
    public function __construct()
    {
    }

    public function index(){
        return view('admin.home.index');
    }
}