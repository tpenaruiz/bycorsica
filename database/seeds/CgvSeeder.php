<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CgvSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for($i=1;$i<=10;$i++){
            $legals = [
                [
                    'id_langue' => '1',
                    'title' => 'Titre '.$i,
                    'contenue' => 'Contenue '.$i
                ]
            ];
        }

        DB::table('cgv')->delete();
        foreach($legals as $row){
            \App\Cgv::create($row);
        }
    }
}