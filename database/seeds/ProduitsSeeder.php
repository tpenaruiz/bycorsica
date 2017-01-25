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
        $produits = [
            [
                'id_media' => '1',
                'id_sousCategorie' => '1',
                'id_tva' => '1',
                'id_fournisseur' => '1',
                'id_langue' => '1',
                'reference' => 'ref001',
                'nom' => 'Produit 1',
                'description' => 'Description du produit',
                'prix' => '29',
                'disponible' => 'Oui',
                'status' => 'Actif'
            ],
            [
                'id_media' => '1',
                'id_sousCategorie' => '2',
                'id_tva' => '1',
                'id_fournisseur' => '1',
                'id_langue' => '1',
                 'reference' => 'ref002',
                'nom' => 'Produit 2',
                'description' => 'Description du produit',
                'prix' => '33',
                'disponible' => 'Oui',
                'status' => 'Actif'
            ],
            [
                'id_media' => '1',
                'id_sousCategorie' => '3',
                'id_tva' => '1',
                'id_fournisseur' => '1',
                'id_langue' => '1',
                 'reference' => 'ref003',
                'nom' => 'Produit 3',
                'description' => 'Description du produit',
                'prix' => '104',
                'disponible' => 'Oui',
                'status' => 'Actif'
            ],
            [
                'id_media' => '1',
                'id_sousCategorie' => '4',
                'id_tva' => '1',
                'id_fournisseur' => '1',
                'id_langue' => '1',
                 'reference' => 'ref004',
                'nom' => 'Produit 4',
                'description' => 'Description du produit',
                'prix' => '106',
                'disponible' => 'Oui',
                'status' => 'Actif'
            ],
            [
                'id_media' => '1',
                'id_sousCategorie' => '5',
                'id_tva' => '1',
                'id_fournisseur' => '1',
                'id_langue' => '1',
                'reference' => 'ref005',
                'nom' => 'Produit 5',
                'description' => 'Description du produit',
                'prix' => '0.99',
                'disponible' => 'Oui',
                'status' => 'Actif'
            ],
            [
                'id_media' => '1',
                'id_sousCategorie' => '6',
                'id_tva' => '1',
                'id_fournisseur' => '1',
                'id_langue' => '1',
                'reference' => 'ref006',
                'nom' => 'Produit 6',
                'description' => 'Description du produit',
                'prix' => '99',
                'disponible' => 'Oui',
                'status' => 'Actif'
            ],
            [
                'id_media' => '1',
                'id_sousCategorie' => '7',
                'id_tva' => '1',
                'id_fournisseur' => '1',
                'id_langue' => '1',
                'reference' => 'ref007',
                'nom' => 'Produit 7',
                'description' => 'Description du produit',
                'prix' => '10',
                'disponible' => 'Oui',
                'status' => 'Actif'
            ],
        ];
        DB::table('produits')->delete();
        DB::table('produits')->truncate();
        foreach($produits as $row){
            \App\Produits::create($row);
        }
    }
}
