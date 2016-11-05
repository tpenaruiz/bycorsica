<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSousCategoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sousCategories', function (Blueprint $table) {
            $table->increments('id')->unsigned();
            $table->integer('id_langue')->unsigned()->nullable();
            $table->integer('id_categorie')->unsigned();
            $table->integer('id_media')->unsigned();
            $table->string('libelle');
            $table->string('description')->nullable();
            $table->enum('status', array('Actif', 'Archivé'));
            $table->timestamps();

            $table->foreign('id_langue')->references('id')->on('langues');
            $table->foreign('id_categorie')->references('id')->on('categories');
            $table->foreign('id_media')->references('id')->on('medias');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('sousCategories');
    }
}
