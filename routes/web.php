<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

/**
 * Back Office
 */
Route::get('/administrateur', ['as' => 'administrateur', 'uses' => 'Admin\AdminController@index']);



/**
 * Front Office
 */



/**
 * Middle Office
 */

Route::get('/', function () {
    return view('welcome');
});
