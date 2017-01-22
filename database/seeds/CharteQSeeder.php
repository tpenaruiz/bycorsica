<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CharteQSeeder extends Seeder
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
        DB::table('charteQ')->delete();
        DB::table('charteQ')->truncate();
        foreach($legals as $row){
            \App\CharteQ::create($row);
        }
    }
}
