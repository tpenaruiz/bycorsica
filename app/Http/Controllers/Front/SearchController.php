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
use Illuminate\Support\Facades\Redirect;

class SearchController extends Controller
{
    public function __construct()
    {
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

        return view('front.search.index', compact('searchEngine'))->render();
    }

    /**
     * @param Produits $produit
     * @return $this
     */
    public function addBasketInRedirectHome(Request $request, Produits $produit){
        // Save Table MyPurchase
        $myPurchase = new \App\MyPurchase;
        if($request->ip() === "::1"){
            $myPurchase->ip = "127.0.0.1";
        }else{
            $myPurchase->ip = $request->ip();
        }
        $myPurchase->id_produit = $produit->id;
        $myPurchase->quantite = 1;
        $myPurchase->save();

        return redirect()->route('home');
    }

    /**
     * @param Produits $produit
     * @return $this
     */
    public function addBasketInRedirectBasket(Request $request, Produits $produit){
        // Save Table MyPurchase
        $myPurchase = new \App\MyPurchase;
        if($request->ip() === "::1"){
            $myPurchase->ip = "127.0.0.1";
        }else{
            $myPurchase->ip = $request->ip();
        }
        $myPurchase->id_produit = $produit->id;
        $myPurchase->quantite = 1;
        $myPurchase->save();

        return redirect()->route('basket');
    }

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index(){
        return view('front.search.index');
    }

    /**
     * @param Request $request
     * @param Produits $produit
     * @return \Illuminate\Http\JsonResponse|\Illuminate\Http\RedirectResponse
     */
    public function addProductForSurprise(Request $request, Produits $produit){
        $mesList = \App\ProductForSurprise::where('id_user', '=', \Auth::user()->id)->where('id_produit', '=', $produit->id)->count();
        if($mesList === 0){
            $produitForSurprise = new \App\ProductForSurprise;
            $produitForSurprise->id_user = \Auth::user()->id;
            $produitForSurprise->id_produit = $produit->id;
            $produitForSurprise->save();
            $message = \Lang::get('general.addSurpise');
        }else{
            $message = \Lang::get('general.WarningSurpise');
        }
        // AJAX
        if($request->ajax()){
            return response()->json([
                'message' => $message
            ]);
        }
        return redirect()->route('search');
    }

}