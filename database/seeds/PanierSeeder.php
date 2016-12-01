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
        for($i=1;$i<=10;$i++){
            $panier = [
                [
                    'id_commande' => $i,
                    'id_produit' => $i,
                    'quantite' => $i
                ]
            ];
        }

        DB::table('panier')->delete();
        foreach($panier as $row){
            \App\Panier::create($row);
        }
    }
}
