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
        for($i=1;$i<=10;$i++){
            $faq = [
                [
                    'id_langue' => '1',
                    'question' => 'Question '.$i,
                    'reponse' => 'Reponse '.$i,
                    'ordre' => $i
                ]
            ];
        }

        DB::table('faq')->delete();
        DB::table('faq')->truncate();
        foreach($faq as $row){
            \App\Faq::create($row);
        }
    }
}
