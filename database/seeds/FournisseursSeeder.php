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
        for($i=1;$i<=10;$i++) {
            $fournisseurs = [
                [
                    'id_fabriquant' => '1',
                    'id_langue' => '1',
                    'nom' => 'Nom '.$i,
                    'description' => 'Description '.$i
                ]
            ];
        }

        DB::table('fournisseurs')->delete();
        DB::table('fournisseurs')->truncate();
        foreach($fournisseurs as $row){
            \App\Fournisseurs::create($row);
        }
    }
}
