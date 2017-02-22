<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CommandesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $commandes = [
            [
                'id_user' => '1',
                'id_tva' => '1',
                'id_adresse' => '1',
                'reference' => '000162',
                'montant' => 1,
                'status' => 'En cours'
            ],
            [
                'id_user' => '1',
                'id_tva' => '1',
                'id_adresse' => '1',
                'reference' => '000163',
                'montant' => 1,
                'status' => 'En cours'
            ],
            [
                'id_user' => '1',
                'id_tva' => '1',
                'id_adresse' => '1',
                'reference' => '000163',
                'montant' => 1,
                'status' => 'En cours'
            ]
        ];
        DB::table('commandes')->delete();
        DB::table('commandes')->truncate();
        foreach($commandes as $row){
            \App\Commandes::create($row);
        }
    }
}
