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
        for($i=1;$i<=10;$i++){
            $commandes = [
                [
                    'id_user' => '1',
                    'id_tva' => '1',
                    'reference' => '000162'.$i,
                    'montant' => $i,
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
}
