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
            //$table->timestamp(); // TODO, (je crois c'est parce qu'il manquer le id en primary key faudrai tester) Pourquoi timestamp() ne fonctionne pas ? et timestamp(created_at) fonctionne !
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
