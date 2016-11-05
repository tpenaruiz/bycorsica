<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePromotionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('promotions', function (Blueprint $table) {
            $table->increments('id')->unsigned();
            $table->integer('id_produit')->unsigned();
            $table->integer('id_langue')->unsigned();
            $table->float('pourcentage');
            $table->text('description')->nullable();
            $table->timestamps();

            $table->foreign('id_produit')->references('id')->on('produits');
            $table->foreign('id_langue')->references('id')->on('langues');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('promotions');
    }
}
