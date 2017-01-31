<?php

namespace App\Http\Controllers\Front;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ProduitController extends Controller
{
    public function __construct()
    {
    }

    public function index($produit){

        $produit = \DB::table('produits')
                ->join('medias', 'produits.id_media', '=', 'medias.id')
        		->join('tva', 'produits.id_tva', '=', 'tva.id')
        		->select('*', 'produits.id', 'produits.nom', 'produits.description', \DB::raw('produits.prix+(produits.prix*tva.valeur)/100 AS prixttc'), 'medias.chemin as chemin')
        		->where('produits.id', '=', $produit->id)
        		->first();

        return view('front.produit.index', compact('produit', $produit));
    }
}
