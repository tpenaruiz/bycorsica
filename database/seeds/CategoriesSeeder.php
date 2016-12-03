<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategoriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for($i=1;$i<=10;$i++){
            $categories = [
                [
                    'id_langue' => '1',
                    'libelle' => 'libelle '.$i,
                    'description' => 'Description '.$i,
                    'status' => 'Actif'
                ]
            ];
        }

        DB::table('categories')->delete();
        DB::table('categories')->truncate();
        foreach($categories as $row){
            \App\Categories::create($row);
        }
    }
}
