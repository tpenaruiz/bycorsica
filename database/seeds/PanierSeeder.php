<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PanierSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $panier = [
            [
                'id_commande' => '1',
                'id_produit' => '1',
                'quantite' => 1
            ]
        ];
        DB::table('panier')->delete();
        DB::table('panier')->truncate();
        foreach($panier as $row){
            \App\Panier::create($row);
        }
    }
}
