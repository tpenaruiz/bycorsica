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
        $fabriquants = [
            [
                'id_langue' => '1',
                'nom' => 'Nom ',
                'description' => 'Description '
            ]
        ];
        DB::table('fabriquants')->delete();
        DB::table('fabriquants')->truncate();
        foreach($fabriquants as $row){
            \App\Fabriquants::create($row);
        }
    }
}
