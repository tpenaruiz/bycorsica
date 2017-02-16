<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class Commandes_produits_pivotSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $commandesProduitPivot = [
            [
                'id_commande' => '1',
                'id_produit' => '1',
                'quantite' => 1
            ],
            [
                'id_commande' => '1',
                'id_produit' => '2',
                'quantite' => 1
            ],
            [
                'id_commande' => '1',
                'id_produit' => '3',
                'quantite' => 1
            ]
        ];
        DB::table('commandes_produits_pivot')->delete();
        DB::table('commandes_produits_pivot')->truncate();
        foreach($commandesProduitPivot as $row){
            \App\Commandes_Produits_Pivot::create($row);
        }
    }
}
