<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class NewslettersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for($i=1;$i<=10;$i++){
            $newsletters = [
                [
                    'id_langue' => '1',
                    'email' => 'email.random'.$i.'@gmail.com',
                    'status' => 'Actif'
                ]
            ];
        }

        DB::table('newsletters')->delete();
        DB::table('newsletters')->truncate();
        foreach($newsletters as $row){
            \App\Newsletters::create($row);
        }
    }
}
