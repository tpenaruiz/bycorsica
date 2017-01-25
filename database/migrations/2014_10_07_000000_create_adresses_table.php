<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAdressesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('adresses', function (Blueprint $table) {
            $table->increments('id')->unsigned();
            $table->integer('id_user')->unsigned();
            $table->integer('id_pays')->unsigned();
            $table->integer('id_ville')->unsigned();
            $table->integer('code_postal');
            $table->string('libelle');
            $table->string('prenom');
            $table->string('nom');
            $table->string('company')->nullable();
            $table->string('adresse');
            $table->string('adresse_suppl')->nullable();
            $table->string('telephone');
            $table->string('telephone2')->nullable();
            $table->string('complement')->nullable();
            $table->enum('status', array('Actif', 'Archivé'));
            $table->timestamps();

            $table->foreign('id_user')->references('id')->on('users');
            $table->foreign('id_pays')->references('id')->on('pays');
            $table->foreign('id_ville')->references('id')->on('villes');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('adresses');
    }
}