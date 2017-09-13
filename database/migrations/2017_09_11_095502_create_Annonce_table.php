<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAnnonceTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Annonce', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('fk_user');
            $table->integer('fk_Categorie');
            $table->integer('fk_Type');
            $table->integer('Numero');
            $table->string('Rue');
            $table->string('Ville');
            $table->integer('Code_postal');
            $table->boolean('Meuble');
            $table->integer('Tarif');
            $table->integer('Surface');
            $table->boolean('Jardin');
            $table->boolean('Etage');
            $table->integer('Nb_pieces');
            $table->integer('Nb_chambres');
            $table->string('Desc');
            $table->string('Photo');
            $table->string('Ges');
            $table->string('Energie');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('Annonce');
    }
}
