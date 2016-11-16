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
Route::get('/administration', ['as' => 'administration', 'uses' => 'Admin\AdminController@index']);
Route::resource('administration/users', 'Admin\UsersController');
Route::post('administration/users/search', ['as' => 'users.search', 'uses' => 'Admin\UsersController@search']);
Route::post('administration/users/statusOff/{users}', ['as' => 'users.statusOff', 'uses' => 'Admin\UsersController@statusOff']);
Route::post('administration/users/statusOn/{users}', ['as' => 'users.statusOn', 'uses' => 'Admin\UsersController@statusOn']);

/**
 * Front Office
 */
Route::get('/', ['as'=>'home', 'uses' => 'Front\HomeController@index']);
Route::get('/produit/{produit}', ['as'=>'produit', 'uses' => 'Front\ProduitController@index']);
Route::post('/produit/{produit}', ['as'=>'produit.store', 'uses' => 'Front\ProduitController@store']);

Route::get('/registration', ['as'=>'registration', 'uses' => 'Front\RegistrationController@index']);

/*
Route::get('/', function () {
    return view('welcome');
});
*/
