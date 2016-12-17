<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class LanguesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $langues = [
            [
                'code' => 'FR',
                'libelle' => 'Français'
            ],
            [
                'code' => 'EN',
                'libelle' => 'English'
            ]
        ];

        DB::table('langues')->delete();
        DB::table('langues')->truncate();
        foreach($langues as $row){
            \App\Langues::create($row);
        }
    }
}
