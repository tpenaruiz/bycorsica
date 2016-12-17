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
                ->join('categories', 'produits.id_categorie', '=', 'categories.id')
                ->join('tva', 'produits.id_tva', '=', 'tva.id')
                ->join('fournisseurs', 'produits.id_fournisseur', '=', 'fournisseurs.id')
                ->join('langues', 'produits.id_langue', '=', 'langues.id')
                ->select('*', 'produits.id AS idProd', 'medias.libelle AS mediaLibelle', 'myPurchase.id AS idPurchase')
                ->where('ip', '=', $myIp)
                ->get();

            $view->with('myPurchase', $myPurchase);
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
