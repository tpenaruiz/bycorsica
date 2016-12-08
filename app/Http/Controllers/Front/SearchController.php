<?php

/**
 * Created by PhpStorm.
 * User: thomas
 * Date: 07/11/2016
 * Time: 10:00
 */
namespace App\Http\Controllers\Front;

use App\Http\Requests\SearchEngine;
use App\Http\Controllers\Controller;
use App\Produits;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Cookie;

class SearchController extends Controller
{
    public function __construct()
    {
    	// code ...
    }

    /**
     * @param SearchEngine $request
     * @return string
     * @throws \Exception
     * @throws \Throwable
     */
    public function searchEngine(SearchEngine $request){
        $searchEngine = \App\Produits::with('medias', 'categories', 'tva', 'fournisseurs', 'langues')
            ->where('nom', 'like', '%'.$request->search.'%')
            ->orWhere('id', 'like', $request->search)
            ->orWhere('prix', 'like', '%'.$request->search.'%')
            ->orderBy('created_at', 'desc')
            ->paginate(12);
        $searchEngine->setPath('search');
        $inputSearch = $request->search;
        return view('front.search.index', compact('searchEngine', 'inputSearch'))->render();
    }

    /**
     * @param Request $request
     */
    public function addBasket(Request $request, Produits $produit){
        // Create Cookie for Product
        //$mesProduit = Cookie::make('mesProduit', $produit, 60); // 60 = 60 minutes
//        return response('Hello World')->cookie(
//            'mesProduit', $produit, 60
//        );
        $mesProduit = $request->cookie('mesProduit', $produit, 60);

        // AJAX
        if($request->ajax()){
            return response()->json([
               'mesProduit' => $mesProduit
            ]);
        }
        return redirect()->route('home');
    }

    public function index(){
    	return view('front.search.index');
    }
}