<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TvaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $tva = [
            [
                'id_pays' => 1,
                'multiplicate' => 1,
                'nom' => 'name',
                'valeur' => 1
            ]
        ];
        DB::table('tva')->delete();
        DB::table('tva')->truncate();
        foreach($tva as $row){
            \App\Tva::create($row);
        }
    }
}
