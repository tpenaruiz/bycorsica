<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProduitsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('produits', function (Blueprint $table) {
            $table->increments('id')->unsigned();
            $table->integer('id_media')->unsigned();
            $table->integer('id_categorie')->unsigned();
            $table->integer('id_tva')->unsigned();
            $table->integer('id_fournisseur')->unsigned();
            $table->integer('id_langue')->unsigned();
            $table->string('nom');
            $table->text('description');
            $table->float('prix');
            $table->enum('disponible', array('Oui', 'Non'));
            $table->enum('status', array('Actif', 'Archivé'));
            $table->timestamps();

            $table->foreign('id_media')->references('id')->on('medias');
            $table->foreign('id_categorie')->references('id')->on('categories');
            $table->foreign('id_tva')->references('id')->on('tva');
            $table->foreign('id_fournisseur')->references('id')->on('fournisseurs');
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
        Schema::drop('produits');
    }
}
