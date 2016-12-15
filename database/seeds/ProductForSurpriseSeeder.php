<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductForSurpriseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for($i=1;$i<=10;$i++){
            $myProductForSurprise = [
                [
                    'id_user' => '1',
                    'id_produit' => '1'
                ]
            ];
        }

        DB::table('productForSurprise')->delete();
        DB::table('productForSurprise')->truncate();
        foreach($myProductForSurprise as $row){
            \App\ProductForSurprise::create($row);
        }
    }
}
