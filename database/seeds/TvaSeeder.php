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
        for($i=1; $i<=10; $i++){
            $tva = [
                [
                    'id_pays' => $i,
                    'multiplicate' => $i.'.'.$i-1,
                    'nom' => 'name'.$i,
                    'valeur' => $i.'.'.$i-1
                ]
            ];
        }

        DB::table('tva')->delete();
        foreach($tva as $row){
            \App\Tva::create($row);
        }
    }
}
