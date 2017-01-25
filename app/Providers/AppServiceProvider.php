<?php

namespace App\Providers;

use Illuminate\Routing\Route;
use Illuminate\Support\Facades\Request;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        /**
         * Function appeler à chaque fois, qui permet de manipuler la vue
         */
        // Purchase Product
        view()->composer('front.layout.header', function($view){
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
                ->select('*', 'produits.id AS idProd', 'medias.libelle AS mediaLibelle', 'myPurchase.id AS idPurchase', 'fournisseurs.nom AS fournisseurNom', 'tva.nom AS tvaNom', 'produits.nom AS produitNom', \DB::raw('produits.prix+(produits.prix*tva.valeur)/100 as prixttc'))
                ->where('ip', '=', $myIp)
                ->get();

            $myPurchasePriceTTC = \DB::table('myPurchase')
                ->join('produits', 'myPurchase.id_produit', '=', 'produits.id')
                ->join('tva', 'produits.id_tva', '=', 'tva.id')
                ->select(\DB::raw('sum(produits.prix+(produits.prix*tva.valeur)/100) as prixtotalttc'))
                ->where('ip', '=', $myIp)
                ->first();

            $view->with(compact('myPurchase', 'myPurchasePriceTTC'));
        });

        // Categories
        view()->composer('front.layout.header', function($view){
           $categories = \App\Categories::with('langues', 'medias')
               ->where('status', '=', 'Actif')
               ->where('libelle', '!=', 'by corsica')
               ->get();

            $view->with('categories', $categories);
        });

        // Categories And SubCategories
        view()->composer('front.layout.header', function($view){
            $souscategories = \App\SousCategories::with('langues', 'categories', 'medias')
                ->where('status', '=', 'Actif')
                ->get();

            $view->with('souscategories', $souscategories);
        });

        // Breadcrumbs
        view()->composer('front.blocks.breadcrumbs', function($view){
            $breadcrumbs = explode('/', $_SERVER['REQUEST_URI']);
            $home = $breadcrumbs[2]; // Public
            $suite = $breadcrumbs[3]; // After Public
            $view->with('suite', $suite);
        });
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
