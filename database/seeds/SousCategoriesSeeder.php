<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SousCategoriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $sousCategories = [
            [
                'id_langue' => '1',
                'id_categorie' => '1',
                'id_media' => '7',
                'libelle' => 'VINS',
                'description' => 'Description',
                'status' => 'Actif'
            ],
            [
                'id_langue' => '1',
                'id_categorie' => '1',
                'id_media' => '8',
                'libelle' => 'SPIRITUEUX ET LIQUEURS',
                'description' => 'Description',
                'status' => 'Actif'
            ],
            [
                'id_langue' => '1',
                'id_categorie' => '1',
                'id_media' => '9',
                'libelle' => 'BIÈRES',
                'description' => 'Description',
                'status' => 'Actif'
            ],
            [
                'id_langue' => '1',
                'id_categorie' => '2',
                'id_media' => '10',
                'libelle' => 'LES FROMAGES',
                'description' => 'Description',
                'status' => 'Actif'
            ],
            [
                'id_langue' => '1',
                'id_categorie' => '2',
                'id_media' => '11',
                'libelle' => 'LA CHARCUTERIE',
                'description' => 'Description',
                'status' => 'Actif'
            ],
            [
                'id_langue' => '1',
                'id_categorie' => '3',
                'id_media' => '12',
                'libelle' => 'PRODUITS APÉRITIFS & TERRINES',
                'description' => 'Description',
                'status' => 'Actif'
            ],
            [
                'id_langue' => '1',
                'id_categorie' => '3',
                'id_media' => '13',
                'libelle' => 'MIELS & CONFITURES',
                'description' => 'Description',
                'status' => 'Actif'
            ],
            [
                'id_langue' => '1',
                'id_categorie' => '3',
                'id_media' => '14',
                'libelle' => 'BISCUITS & GATEAUX',
                'description' => 'Description',
                'status' => 'Actif'
            ],
            [
                'id_langue' => '1',
                'id_categorie' => '4',
                'id_media' => '15',
                'libelle' => 'HUILES ESSENTIELLES',
                'description' => 'Description',
                'status' => 'Actif'
            ],
            [
                'id_langue' => '1',
                'id_categorie' => '4',
                'id_media' => '16',
                'libelle' => 'EAUX FLORALES',
                'description' => 'Description',
                'status' => 'Actif'
            ],
            [
                'id_langue' => '1',
                'id_categorie' => '4',
                'id_media' => '17',
                'libelle' => 'PRODUITS DE SOIN',
                'description' => 'Description',
                'status' => 'Actif'
            ],
            [
                'id_langue' => '1',
                'id_categorie' => '5',
                'id_media' => '18',
                'libelle' => 'LES FROMAGES',
                'description' => 'Description',
                'status' => 'Actif'
            ],
            [
                'id_langue' => '1',
                'id_categorie' => '5',
                'id_media' => '19',
                'libelle' => 'LA CHARCUTERIE',
                'description' => 'Description',
                'status' => 'Actif'
            ]
        ];
        DB::table('sousCategories')->delete();
        DB::table('sousCategories')->truncate();
        foreach($sousCategories as $row){
            \App\SousCategories::create($row);
        }
    }
}
