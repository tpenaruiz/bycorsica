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
            $table->string('libelle');
            $table->string('adresse');
            $table->string('adresse_suppl')->nullable();
            $table->string('telephone_port')->nullable();
            $table->string('telephone_fixe')->nullable();
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
