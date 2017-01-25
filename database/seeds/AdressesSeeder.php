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
        $adresses = [
            [
                'id_user' => '1',
                'id_pays' => '1',
                'id_ville' => '1',
                'code_postal' => '92800',
                'libelle' => 'Lorem Ipsum',
                'prenom' => 'Toto',
                'nom' => 'Tata',
                'company' => 'SocieteLa',
                'adresse' => 'Adresse ',
                'adresse_suppl' => 'Adresse suppl ',
                'telephone' => '0612345789',
                'telephone2' => '0112345789',
                'complement' => 'Complement ',
                'status' => 'Actif'
            ],
            [
                'id_user' => '1',
                'id_pays' => '1',
                'id_ville' => '1',
                'code_postal' => '92800',
                'libelle' => 'Lorem Ipsum',
                'prenom' => 'Toto',
                'nom' => 'Tata',
                'company' => 'SocieteLa',
                'adresse' => 'Adresse ',
                'adresse_suppl' => 'Adresse suppl ',
                'telephone' => '0612345789',
                'telephone2' => '0112345789',
                'complement' => 'Complement ',
                'status' => 'Actif'
            ]
        ];
        DB::table('adresses')->delete();
        DB::table('adresses')->truncate();
        foreach($adresses as $row){
            \App\Adresses::create($row);
        }
    }
}
