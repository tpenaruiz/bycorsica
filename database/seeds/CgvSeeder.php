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
        $legals = [
            [
                'id_langue' => '1',
                'title' => 'Titre ',
                'contenue' => 'Contenue '
            ]
        ];
        DB::table('cgv')->delete();
        DB::table('cgv')->truncate();
        foreach($legals as $row){
            \App\Cgv::create($row);
        }
    }
}
