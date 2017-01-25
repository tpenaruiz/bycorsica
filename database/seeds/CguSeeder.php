<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CguSeeder extends Seeder
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
        DB::table('cgu')->delete();
        DB::table('cgu')->truncate();
        foreach($legals as $row){
            \App\Cgu::create($row);
        }
    }
}
