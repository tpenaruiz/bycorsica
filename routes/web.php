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




/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| FRONTS OFFICES
|
*/
/**
 * Choix Languages
 */
Route::get('language', ['as' => 'language', 'uses' => 'Front\HomeController@language']);

/**
 * La Home Page
 */
Route::get('/', ['as' => 'home', 'uses' => 'Front\HomeController@index']);

/**
 * présentation du produit
 */
Route::get('/produit/{produit}', ['as' => 'produit', 'uses' => 'Front\ProduitController@index']);
Route::post('/produit/{produit}', ['as' => 'produit.store', 'uses' => 'Front\ProduitController@store']);
Route::post('/produit/listSurprise/{produit}', ['as' => 'produit.addProductForSurprise', 'uses' => 'Front\ProduitController@addProductForSurprise']);

/**
 * Inscription
 */
Route::get('/registration', ['as' => 'registration', 'uses' => 'Front\RegistrationController@index']);

/**
 * Moteur de recherche du site E-commerce
 */
Route::get('/search', ['as' => 'search', 'uses' => 'Front\SearchController@index']);
Route::post('/search', ['as' => 'searchPost.searchEngine', 'uses' => 'Front\SearchController@searchEngine']);
Route::post('/search/addBasket/{produit}', ['as' => 'searchPost.addBasketInRedirectBasket', 'uses' => 'Front\SearchController@addBasketInRedirectBasket']);
Route::post('/search/myPurchase/{produit}', ['as' => 'searchPost.addBasketInRedirectHome', 'uses' => 'Front\SearchController@addBasketInRedirectHome']);
Route::post('/search/listSurprise/{produit}', ['as' => 'searchPost.addProductForSurprise', 'uses' => 'Front\SearchController@addProductForSurprise']);

/**
 * Mes Achat, MyPurchase
 */
Route::post('/myPurchase/quantiteUpdate/{myPurchase}', ['as' => 'myPurchase.quantiteUpdate', 'uses' => 'Front\MyPurchaseController@updateQuantite']);
Route::post('/myPurchase/{myPurchase}', ['as' => 'myPurchase.destroy', 'uses' => 'Front\MyPurchaseController@destroy']);

/**
 * Catégorie
 */
Route::get('/category/{category}', ['as' => 'category', 'uses' => 'Front\CategoryController@category']);
Route::get('/sousCategory/{sousCategory}', ['as' => 'sousCategory', 'uses' => 'Front\CategoryController@sousCategory']);

/**
 * Profil
 * Gestion du compte
 * Consultation et maj infos
 * Consutlation et maj adresses
 */
Route::get('/account/{anchor}', ['as' => 'account', 'uses' => 'Front\AccountController@index'])->middleware('auth');;
Route::post('/account/infos/update', ['as' => 'account.infos.update', 'uses' => 'Front\AccountController@infosUpdate']);
Route::get('/account/address/update/{addresse}', ['as' => 'account.address.update', 'uses' => 'Front\AccountController@addressEdit']);
Route::post('account/address/update/{addresse}', ['as' => 'account.address.update', 'uses' => 'Front\AccountController@addressUpdate']);
Route::get('account/address/create', ['as' => 'account.address.create', 'uses' => 'Front\AccountController@addressCreate']);
Route::post('account/address/store', ['as' => 'account.address.store', 'uses' => 'Front\AccountController@addressStore']);
Route::delete('account/address/destroy/{adresse}', ['as' => 'account.address.destroy', 'uses' => 'Front\AccountController@addressDestroy']);
Route::delete('account/liste_cadeaux/destroy/{list_cadeaux}', ['as' => 'account.list_cadeaux.destroy', 'uses' => 'Front\AccountController@list_cadeauxDestroy']);

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
Route::get('/commande/{commande}', ['as' => 'commande', 'uses' => 'Front\CommandeController@index']);

/**
 * Contact
 */
Route::get('/contact', ['as' => 'contact', 'uses' => 'Front\ContactController@index']);
Route::post('/contact', ['as' => 'contact', 'uses' => 'Front\ContactController@post']);

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
|  Activation,
|  Forgot Pass,
|  Reset Pass
|
*/
Auth::routes();
Route::get('/user/activation/{token}', ['as' => 'user/activation', 'uses' => 'Auth\AuthController@activateUser']);
Route::get('/logout', 'Auth\LoginController@logout');
Route::get('/home', 'HomeController@index');

Route::get('/log', 'LogController@index');