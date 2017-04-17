<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePatternMailTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('patternMail', function (Blueprint $table) {
            $table->increments('id')->unsigned();
            $table->integer('id_langue')->unsigned();
            $table->integer('id_type')->unsigned();
            $table->string('expediteur')->nullable();
            $table->text('destinateur');
            $table->string('objet')->nullable();
            $table->text('contenu');
            $table->integer('id_attachment')->nullable();
            $table->enum('status', array('Actif', 'Archivé'))->nullable();
            $table->timestamps();

            $table->foreign('id_langue')->references('id')->on('langues');
            $table->foreign('id_type')->references('id')->on('typeMail');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('patternMail');
    }
}
