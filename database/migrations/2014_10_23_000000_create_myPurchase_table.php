<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMyPurchaseTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('myPurchase', function (Blueprint $table) {
            $table->increments('id')->unsigned();
            $table->integer('id_produit')->unsigned();
            $table->string('ip');
            $table->integer('quantite');
            $table->timestamps();

            $table->foreign('id_produit')->references('id')->on('produits');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('myPurchase');
    }
}
