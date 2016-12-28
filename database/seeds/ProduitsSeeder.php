<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProduitsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for($i=1;$i<=10;$i++) {
            $produits = [
                [
                    'id_media' => '1',
                    'id_sousCategorie' => '2',
                    'id_tva' => '1',
                    'id_fournisseur' => '1',
                    'id_langue' => '1',
                    'nom' => 'Nom produit '.$i,
                    'description' => 'Description du produit '.$i,
                    'prix' => $i,
                    'disponible' => 'Oui',
                    'status' => 'Actif'
                ]
            ];
        }

        DB::table('produits')->delete();
        DB::table('produits')->truncate();
        foreach($produits as $row){
            \App\Produits::create($row);
        }
    }
}
