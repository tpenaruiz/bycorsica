<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AdressesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for($i=1;$i<=10;$i++){
            $adresses = [
                [
                    'id_user' => '1',
                    'id_pays' => '1',
                    'id_ville' => '1',
                    'libelle' => 'Lorem Ipsum',
                    'adresse' => 'Adresse '.$i,
                    'adresse_suppl' => 'Adresse suppl '.$i,
                    'complement' => 'Complement '.$i,
                    'status' => 'Actif'
                ]
            ];
        }

        DB::table('adresses')->delete();
        DB::table('adresses')->truncate();
        foreach($adresses as $row){
            \App\Adresses::create($row);
        }
    }
}
