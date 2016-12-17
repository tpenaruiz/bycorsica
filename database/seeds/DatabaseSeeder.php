<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        /**
         * RESET : Foreign Key and Primary Key
         */
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');

        /**
         * Call Seeders class
         */
        $this->call(RolesSeeder::class);
        $this->call(LanguesSeeder::class);
        $this->call(MediasSeeder::class);
        $this->call(PaysSeeder::class);
        $this->call(VillesSeeder::class);
        $this->call(UsersSeeder::class);
        $this->call(AdressesSeeder::class);
        $this->call(CguSeeder::class);
        $this->call(CgvSeeder::class);
        $this->call(CharteQSeeder::class);
        $this->call(FaqSeeder::class);
        $this->call(NewslettersSeeder::class);
        $this->call(TvaSeeder::class);
        $this->call(CategoriesSeeder::class);
        $this->call(SousCategoriesSeeder::class);
        $this->call(CommandesSeeder::class);
        $this->call(FabriquantsSeeder::class);
        $this->call(FournisseursSeeder::class);
        $this->call(ProduitsSeeder::class);
        $this->call(StockSeeder::class);
        $this->call(PanierSeeder::class);
        $this->call(PromotionsSeeder::class);
        $this->call(MyPurchaseSeeder::class);
        $this->call(ProductForSurpriseSeeder::class);

        /**
         * RESET : Foreign Key and Primary Key
         */
        DB::statement('SET FOREIGN_KEY_CHECKS=1;');
    }
}
