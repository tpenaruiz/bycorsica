<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class FaqSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faq = [
            [
                'id_langue' => '1',
                'question' => 'Question ',
                'reponse' => 'Reponse ',
                'ordre' => 1
            ]
        ];
        DB::table('faq')->delete();
        DB::table('faq')->truncate();
        foreach($faq as $row){
            \App\Faq::create($row);
        }
    }
}
