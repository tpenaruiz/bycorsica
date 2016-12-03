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
                    'id_commande' => '1',
                    'id_produit' => '1',
                    'quantite' => $i
                ]
            ];
        }

        DB::table('panier')->delete();
        DB::table('panier')->truncate();
        foreach($panier as $row){
            \App\Panier::create($row);
        }
    }
}
