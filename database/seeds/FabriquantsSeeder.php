<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class FabriquantsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for($i=1;$i<=10;$i++) {
            $fabriquants = [
                [
                    'id_langue' => '1',
                    'nom' => 'Nom '.$i,
                    'description' => 'Description '.$i
                ]
            ];
        }

        DB::table('fabriquants')->delete();
        DB::table('fabriquants')->truncate();
        foreach($fabriquants as $row){
            \App\Fabriquants::create($row);
        }
    }
}
