<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCommandesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('commandes', function (Blueprint $table) {
            $table->increments('id')->unsigned();
            $table->integer('id_user')->unsigned();
            $table->integer('id_tva')->unsigned()->nullable();
            $table->integer('id_commande_produit_pivot')->unsigned()->nullable();
            $table->integer('reference');
            $table->float('montant');
            $table->enum('status', array('En cours', 'Terminer', 'Annuler', 'Erreur'));
            $table->timestamps();

            $table->foreign('id_user')->references('id')->on('users');
            $table->foreign('id_tva')->references('id')->on('tva');
            $table->foreign('id_commande_produit_pivot')->references('id')->on('commandes_produits_pivot');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('commandes');
    }
}
