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

class SearchController extends Controller
{
    public function __construct()
    {
    	// code ...
    }

    public function searchEngine(SearchEngine $request){
        $searchEngine = \App\Produits::with('medias', 'categories', 'tva', 'fournisseurs', 'langues')
            ->where('nom', 'like', '%'.$request->search.'%')
            ->orWhere('id', 'like', $request->search)
            ->orWhere('prix', 'like', '%'.$request->search.'%')
            ->orderBy('created_at', 'desc')
            ->get();
        $inputSearch = $request->search;
        return view('front.search.index', compact('searchEngine', 'inputSearch'));
    }

    public function index(){
    	return view('front.search.index');
    }
}