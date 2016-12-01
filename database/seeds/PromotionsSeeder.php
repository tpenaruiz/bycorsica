<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PromotionsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for($i=1;$i<=10;$i++){
            $promotion = [
                [
                    'id_produit' => $i,
                    'id_langue' => '1',
                    'pourcentage' => $i,
                    'description' => 'Description'.$i
                ]
            ];
        }

        DB::table('promotions')->delete();
        foreach($promotion as $row){
            \App\Promotions::create($row);
        }
    }
}
