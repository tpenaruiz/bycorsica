<?php

/**
 * Created by PhpStorm.
 * User: thomas
 * Date: 07/11/2016
 * Time: 10:00
 */
namespace App\Http\Controllers\Front;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use MyFunction;

class HomeController extends Controller
{
    public function __construct()
    {
    }

    public function index(){
        // Récupération des catégories + médias pour la home
        $categ = \App\Categories::with('langues', 'medias')
            ->where('status', '=', 'Actif')
            ->get();

        $populaire = \DB::table('commandes')
            ->join('users', 'commandes.id_user', '=', 'users.id')
            ->join('tva', 'commandes.id_tva', '=', 'tva.id')
            ->join('produits', 'commandes.id_produit', '=', 'produits.id')
            ->join('medias', 'produits.id_media', '=', 'medias.id')
            ->select('*', 'produits.id AS idProd', 'medias.libelle AS mediaLibelle', 'tva.id AS idTva', \DB::raw('produits.prix+(produits.prix*tva.valeur)/100 as prixttc'), 'commandes.created_at AS commandes_created_at', 'commandes.status AS commandesStatus')
            ->orderBy('commandes.created_at', 'desc')
            ->groupBy('id_produit')
            ->limit(8)
            ->get();

        $bestSellers = \DB::table('commandes')
            ->join('users', 'commandes.id_user', '=', 'users.id')
            ->join('tva', 'commandes.id_tva', '=', 'tva.id')
            ->join('produits', 'commandes.id_produit', '=', 'produits.id')
            ->join('medias', 'produits.id_media', '=', 'medias.id')
            ->select('*', 'produits.id AS idProd', 'medias.libelle AS mediaLibelle', 'tva.id AS idTva', \DB::raw('produits.prix+(produits.prix*tva.valeur)/100 as prixttc'), 'commandes.created_at AS commandes_created_at', 'commandes.status AS commandesStatus')
            ->where('commandes.status', '=', 'Terminer')
            ->orderBy('commandes.created_at', 'desc')
            ->groupBy('id_produit')
            ->limit(8)
            ->get();

        return view('front.home.index', compact('categ', 'populaire', 'bestSellers'));
    }

    /**
     * @return \Illuminate\Http\RedirectResponse
     * return Lang
     */
    public function language(){
        session()->set('locale', session('locale') == 'fr' ? 'en' : 'fr');
        return redirect()->back();
    }
}