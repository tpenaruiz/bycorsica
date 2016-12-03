<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class StockSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for($i=1; $i<=10; $i++){
            $stock = [
                [
                    'id_produit' => '1',
                    'stock' => $i
                ]
            ];
        }

        DB::table('stock')->delete();
        DB::table('stock')->truncate();
        foreach($stock as $row){
            \App\Stock::create($row);
        }
    }
}
