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
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| BACKS OFFICES
|
*/
/**
 * Administration Dashboard
 */
Route::get('/administration', ['as' => 'administration', 'uses' => 'Admin\AdminController@index']);

/**
 * Gestion Users
 * Moteur de recherche Page Users
 * Status Innactif - Actif (Ajax-)
 */
Route::resource('administration/users', 'Admin\UsersController');
Route::post('administration/users/search', ['as' => 'users.search', 'uses' => 'Admin\UsersController@search']);
Route::post('administration/users/statusOff/{users}', ['as' => 'users.statusOff', 'uses' => 'Admin\UsersController@statusOff']);
Route::post('administration/users/statusOn/{users}', ['as' => 'users.statusOn', 'uses' => 'Admin\UsersController@statusOn']);

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| FRONTS OFFICES
|
*/
/**
 * La Home Page
 */
Route::get('/', ['as' => 'home', 'uses' => 'Front\HomeController@index']);

/**
 * présentation du produit
 */
Route::get('/produit/{produit}', ['as' => 'produit', 'uses' => 'Front\ProduitController@index']);
Route::post('/produit/{produit}', ['as' => 'produit.store', 'uses' => 'Front\ProduitController@store']);

/**
 * Inscription
 */
Route::get('/registration', ['as' => 'registration', 'uses' => 'Front\RegistrationController@index']);

/**
 * Moteur de recherche du site E-commerce
 */
Route::get('/search', ['as' => 'search', 'uses' => 'Front\SearchController@index']);

/**
 * Catégorie
 */
Route::get('/category', ['as' => 'category', 'uses' => 'Front\CategoryController@index']);

/**
 * Profil
 * Gestion du compte
 */
Route::get('/account', ['as' => 'account', 'uses' => 'Front\AccountController@index']);

/**
 * Panier
 */
Route::get('/basket', ['as' => 'basket', 'uses' => 'Front\BasketController@index']);

/**
 * Commandes
 * Phase 1 Connection
 * Phase 2 Adresse
 * Phase 3 Livraison
 * Phase 4 Paiement
 */
Route::get('/commande/phase1', ['as' => 'commandePhase1', 'uses' => 'Front\CommandeController@stepOne']);
Route::get('/commande/phase2', ['as' => 'commandePhase2', 'uses' => 'Front\CommandeController@stepTwo']);
Route::get('/commande/phase3', ['as' => 'commandePhase3', 'uses' => 'Front\CommandeController@stepThree']);
Route::get('/commande/phase4', ['as' => 'commandePhase4', 'uses' => 'Front\CommandeController@stepFour']);

/**
 * Legals
 * CGU
 * CGV
 * Mentions Legal
 */
Route::get('/cgu', ['as' => 'cgu', 'uses' => 'Front\LegalsController@cgu']);
Route::get('/cgv', ['as' => 'cgv', 'uses' => 'Front\LegalsController@cgv']);
Route::get('/mentionsLegal', ['as' => 'mentionsLegal', 'uses' => 'Front\LegalsController@mentionsLegal']);

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
|  Authentification
|  Login,
|  Register,
|  Forgot Pass,
|  Reset Pass
|
*/
Auth::routes();

Route::get('/home', 'HomeController@index');
