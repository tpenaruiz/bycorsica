<?php

namespace App\Http\Controllers\Front;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CategoryController extends Controller
{
    public function __construct()
    {
    }

    /**
     * @param $category
     * @return string
     * @throws \Exception
     * @throws \Throwable
     */
    public function category($category){
        $data = \App\Produits
            ::join('sousCategories', 'produits.id_sousCategorie', '=', 'sousCategories.id')
            ->join('categories', 'sousCategories.id_categorie', '=', 'categories.id')
            ->join('medias', 'produits.id_media', '=', 'medias.id')
            ->select('*',
                'sousCategories.id AS idSousCat',
                'sousCategories.status AS statusSousCat',
                'sousCategories.id_media AS idMediaSousCat',
                'sousCategories.libelle AS libelleSousCat',
                'sousCategories.description AS descriptionSousCat',
                'produits.id AS idProd',
                'produits.id_media AS idMediaProd',
                'produits.id_sousCategorie AS idSousCatProd',
                'produits.description AS descriptionProd',
                'produits.status AS statusProd',
                'categories.id AS idCat',
                'categories.id_media AS idMediaCat',
                'categories.libelle AS libelleCat',
                'categories.description AS descriptionCat',
                'categories.status AS statusCat',
                'medias.id AS idMedia',
                'medias.type AS typeMedia',
                'medias.libelle AS libelleMedia',
                'medias.description AS descriptionMedia',
                'medias.chemin AS cheminMedia'
            )
            ->where('produits.status', '=', 'Actif')
            ->where('produits.disponible', '=', 'Oui')
            ->where('categories.id', '=', $category)
            ->paginate(16);
        return view('front.category.category', compact('data'))->render();
    }

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function sousCategory($sousCategory){
        $data = \App\Produits::with('medias', 'sousCategories', 'tva', 'fournisseurs', 'langues')
            ->where('status', '=', 'Actif')
            ->where('disponible', '=', 'Oui')
            ->where('id_sousCategorie', '=', $sousCategory)
            ->paginate(16);
        return view('front.category.sousCategory', compact('data'))->render();
    }
}
