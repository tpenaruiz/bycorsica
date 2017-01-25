<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class FournisseursSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $fournisseurs = [
            [
                'id_fabriquant' => '1',
                'id_langue' => '1',
                'nom' => 'Nom ',
                'description' => 'Description '
            ]
        ];
        DB::table('fournisseurs')->delete();
        DB::table('fournisseurs')->truncate();
        foreach($fournisseurs as $row){
            \App\Fournisseurs::create($row);
        }
    }
}
