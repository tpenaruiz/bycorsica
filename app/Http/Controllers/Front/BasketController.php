<?php

namespace App\Http\Controllers\Front;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class BasketController extends Controller
{
    public function construct(){
    }

    public function index(){

    	$myIp = $_SERVER['REMOTE_ADDR'];
        if($myIp === "::1"){
            $myIp = "127.0.0.1";
        }else{
            $myIp = $_SERVER['REMOTE_ADDR'];
        }

    	$myPurchase = \DB::table('myPurchase')
                ->join('produits', 'myPurchase.id_produit', '=', 'produits.id')
                ->join('medias', 'produits.id_media', '=', 'medias.id')
                ->join('sousCategories', 'produits.id_sousCategorie', '=', 'sousCategories.id')
                ->join('tva', 'produits.id_tva', '=', 'tva.id')
                ->join('fournisseurs', 'produits.id_fournisseur', '=', 'fournisseurs.id')
                ->join('langues', 'produits.id_langue', '=', 'langues.id')
                ->select('*', 'produits.id AS idProd', 'medias.libelle AS mediaLibelle', 'myPurchase.id AS idPurchase', 'fournisseurs.nom AS fournisseurNom', 'tva.nom AS tvaNom', 'produits.nom AS produitNom', \DB::raw('produits.prix+(produits.prix*tva.valeur)/100 as produitPrixTtc'), \DB::raw('(produits.prix+(produits.prix*tva.valeur)/100)*myPurchase.quantite as prixProduitTotalTtc'))
                ->where('ip', '=', $myIp)
                ->get();

        $myPurchasePriceTTC = \DB::table('myPurchase')
                ->join('produits', 'myPurchase.id_produit', '=', 'produits.id')
                ->join('tva', 'produits.id_tva', '=', 'tva.id')
                ->select(\DB::raw('sum((produits.prix+(produits.prix*tva.valeur)/100)*myPurchase.quantite) as prixtotalttc'))
                ->where('ip', '=', $myIp)
                ->first();
        
        return view('front.basket.index')->with(compact('myPurchase', 'myPurchasePriceTTC'));
    }
}
