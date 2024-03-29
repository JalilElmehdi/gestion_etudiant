<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('etudiants',function(Blueprint $table){
            $table->id();
            $table->string('nom');
            $table->string('sexe');
            $table->string('email');
            $table->string('password');
            $table->unsignedBigInteger('id_filiere');
            $table->foreign('id_filiere')->references('id_filiere')->on('filieres');
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
        //
    }
};
