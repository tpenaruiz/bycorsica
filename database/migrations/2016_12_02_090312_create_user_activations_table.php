<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUserActivationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_activations', function (Blueprint $table) {
            $table->increments('id')->unsigned();
            $table->integer('users_id')->unsigned();
            $table->string('token')->index();
            //$table->timestamp(); /// TODO, ici bug du framework Laravel (modifier manuellement, le timestamp createdAt et updatedAt => timestamp) !!!
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('user_activations');
    }
}
