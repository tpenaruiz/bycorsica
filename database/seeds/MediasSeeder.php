<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MediasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $medias = [
            [
                'type' => 'photo',
                'libelle' => 'cave',
                'description' => 'description',
                'chemin' => 'front/img/category_01.jpg'
            ],
            [
                'type' => 'photo',
                'libelle' => 'épicerie fine',
                'description' => 'description',
                'chemin' => 'front/img/category_02.jpg'
            ],
            [
                'type' => 'photo',
                'libelle' => 'charcuterie & fromages',
                'description' => 'description',
                'chemin' => 'front/img/category_03.jpg'
            ],
            [
                'type' => 'photo',
                'libelle' => 'soins & rituels de beauté',
                'description' => 'description',
                'chemin' => 'front/img/category_04.jpg'
            ],
            [
                'type' => 'photo',
                'libelle' => 'by corsica',
                'description' => 'description',
                'chemin' => 'front/img/category_05.jpg'
            ],
            [
                'type' => 'photo',
                'libelle' => 'l\'art d\'offrir',
                'description' => 'description',
                'chemin' => 'front/img/category_06.jpg'
            ],
            [
                'type' => 'photo',
                'libelle' => 'vins',
                'description' => 'description',
                'chemin' => 'front/img/vins.jpeg'
            ],
            [
                'type' => 'photo',
                'libelle' => 'spiritueux et liqueurs',
                'description' => 'description',
                'chemin' => 'front/img/spiritueux.jpeg'
            ],
            [
                'type' => 'photo',
                'libelle' => 'Bières',
                'description' => 'description',
                'chemin' => 'front/img/bieres.jpeg'
            ],
            [
                'type' => 'photo',
                'libelle' => 'fromages',
                'description' => 'description',
                'chemin' => 'front/img/fromages.jpeg'
            ],
            [
                'type' => 'photo',
                'libelle' => 'charcuterie',
                'description' => 'description',
                'chemin' => 'front/img/charcuterie.jpeg'
            ],
            [
                'type' => 'photo',
                'libelle' => 'appéritif et terrines',
                'description' => 'description',
                'chemin' => 'front/img/terrines.jpeg'
            ],
            [
                'type' => 'photo',
                'libelle' => 'Miels et confitures',
                'description' => 'description',
                'chemin' => 'front/img/confiture.jpeg'
            ],
            [
                'type' => 'photo',
                'libelle' => 'Biscuit et gateaux',
                'description' => 'description',
                'chemin' => 'front/img/gateaux.jpeg'
            ],
            [
                'type' => 'photo',
                'libelle' => 'huiles essentielles',
                'description' => 'description',
                'chemin' => 'front/img/huiles_essentielles.jpeg'
            ],
            [
                'type' => 'photo',
                'libelle' => 'eaux florales',
                'description' => 'description',
                'chemin' => 'front/img/eaux_florales.jpeg'
            ],
            [
                'type' => 'photo',
                'libelle' => 'produit de soin',
                'description' => 'description',
                'chemin' => 'front/img/produits_soins.jpeg'
            ],
            [
                'type' => 'photo',
                'libelle' => 'fromages',
                'description' => 'description',
                'chemin' => 'front/img/fromages.jpeg'
            ],
            [
                'type' => 'photo',
                'libelle' => 'charcuterie',
                'description' => 'description',
                'chemin' => 'front/img/charcuterie.jpeg'
            ]
        ];
        DB::table('medias')->delete();
        DB::table('medias')->truncate();
        foreach($medias as $row){
            \App\Medias::create($row);
        }
    }
}
