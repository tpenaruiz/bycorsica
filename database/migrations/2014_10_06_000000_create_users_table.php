<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id')->unsigned();
            $table->integer('id_role')->unsigned();
            $table->integer('id_ville')->unsigned()->nullable();
            $table->string('nom', 50);
            $table->string('prenom', 50);
            $table->string('email')->unique();
            $table->date('date_naissance')->nullable();
            $table->string('password');
            $table->enum('status', array('Actif', 'Archivé'));
            $table->string('forgotPass', 60)->nullable();
            $table->datetime('derniere_connexion')->nullable();
            $table->rememberToken();
            $table->timestamps();

            $table->foreign('id_role')->references('id')->on('roles');
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
        Schema::drop('users');
    }
}
