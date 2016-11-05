<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTvaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tva', function (Blueprint $table) {
            $table->increments('id')->unsigned();
            $table->integer('id_pays')->unsigned();
            $table->float('multiplicate');
            $table->string('nom');
            $table->float('valeur');
            $table->timestamps();

            $table->foreign('id_pays')->references('id')->on('pays');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('tva');
    }
}
