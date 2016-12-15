<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MyPurchaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for($i=1;$i<=10;$i++){
            $myPurchase = [
                [
                    'ip' => '192.168.1.15',
                    'id_produit' => '1',
                    'quantite' => $i
                ]
            ];
        }

        DB::table('myPurchase')->delete();
        DB::table('myPurchase')->truncate();
        foreach($myPurchase as $row){
            \App\MyPurchase::create($row);
        }
    }
}
