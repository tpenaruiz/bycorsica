<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFournisseursTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('fournisseurs', function (Blueprint $table) {
            $table->increments('id')->unsigned();
            $table->integer('id_fabriquant')->unsigned();
            $table->integer('id_langue')->unsigned();
            $table->string('nom');
            $table->text('description');
            $table->timestamps();

            $table->foreign('id_fabriquant')->references('id')->on('fabriquants');
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
        Schema::drop('fournisseurs');
    }
}
