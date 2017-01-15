<?php

use Illuminate\Database\Seeder;

class VillesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // TODO Donnée Générer depuis un import sql externe, (trouver une table complète des ville IMPORTANT)

        $ville = [
            [
                'id_pays' => '75',
                'libelle' => 'Paris',
                'code_postal' => '75000',
            ]
        ];
        DB::table('villes')->delete();
        DB::table('villes')->truncate();
        foreach($ville as $row){
            \App\Users::create($row);
        }
    }
}
