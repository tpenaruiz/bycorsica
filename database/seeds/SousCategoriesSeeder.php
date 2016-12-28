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
        for($i=1;$i<=10;$i++){
            $sousCategories = [
                [
                    'id_langue' => '1',
                    'id_categorie' => $i,
                    'id_media' => '1',
                    'libelle' => 'Libelle'.$i,
                    'description' => 'Description'.$i,
                    'route' => '/',
                    'status' => 'Actif'
                ]
            ];
        }

        DB::table('sousCategories')->delete();
        DB::table('sousCategories')->truncate();
        foreach($sousCategories as $row){
            \App\SousCategories::create($row);
        }
    }
}
