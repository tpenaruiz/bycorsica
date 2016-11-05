<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCharteQTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('charteQ', function (Blueprint $table) {
            $table->increments('id')->unsigned();
            $table->integer('id_langue')->unsigned()->nullable();
            $table->string('title');
            $table->text('contenue');
            $table->timestamps();

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
        Schema::drop('charteQ');
    }
}
