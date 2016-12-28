<?php

namespace App\Providers;

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
                ->select('*', 'produits.id AS idProd', 'medias.libelle AS mediaLibelle', 'myPurchase.id AS idPurchase')
                ->where('ip', '=', $myIp)
                ->get();

            $view->with('myPurchase', $myPurchase);
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
