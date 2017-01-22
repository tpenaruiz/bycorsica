<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategoriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $categories = [
            [
                'id_langue' => '1',
                'id_media' => '1',
                'libelle' => 'cave',
                'description' => 'Description',
                'status' => 'Actif'
            ],
            [
                'id_langue' => '1',
                'id_media' => '2',
                'libelle' => 'épicerie fine',
                'description' => 'Description',
                'status' => 'Actif'
            ],
            [
                'id_langue' => '1',
                'id_media' => '3',
                'libelle' => 'charcuterie & fromages',
                'description' => 'Description',
                'status' => 'Actif'
            ],
            [
                'id_langue' => '1',
                'id_media' => '4',
                'libelle' => 'soins de beauté',
                'description' => 'Description',
                'status' => 'Actif'
            ],
            [
                'id_langue' => '1',
                'id_media' => '5',
                'libelle' => 'by corsica',
                'description' => 'Description',
                'status' => 'Actif'
            ],
            [
                'id_langue' => '1',
                'id_media' => '6',
                'libelle' => 'l\'art d\'offrir',
                'description' => 'Description',
                'status' => 'Actif'
            ],
        ];
        DB::table('categories')->delete();
        DB::table('categories')->truncate();
        foreach($categories as $row){
            \App\Categories::create($row);
        }
    }
}
