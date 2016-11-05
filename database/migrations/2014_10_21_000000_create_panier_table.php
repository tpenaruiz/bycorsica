<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePanierTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('panier', function (Blueprint $table) {
            $table->increments('id')->unsigned();
            $table->integer('id_commande')->unsigned();
            $table->integer('id_produit')->unsigned();
            $table->integer('quantite');
            $table->timestamps();

            $table->foreign('id_commande')->references('id')->on('commandes');
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
        Schema::drop('panier');
    }
}
