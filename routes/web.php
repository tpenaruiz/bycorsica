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
Route::get('/search', ['as'=>'search', 'uses' => 'Front\SearchController@index']);
Route::get('/category', ['as'=>'category', 'uses' => 'Front\CategoryController@index']);
Route::get('/account', ['as'=>'account', 'uses' => 'Front\AccountController@index']);
Route::get('/basket', ['as'=>'basket', 'uses' => 'Front\BasketController@index']);
Route::get('/commande/phase1', ['as'=>'commandePhase1', 'uses' => 'Front\CommandeController@stepOne']);
Route::get('/commande/phase2', ['as'=>'commandePhase2', 'uses' => 'Front\CommandeController@stepTwo']);

/**
 * Authentification
 * Login,
 * Register,
 * Forgot Pass,
 * Reset Pass
 */
Auth::routes();
Route::get('/home', 'Auth\AuthController@index');
