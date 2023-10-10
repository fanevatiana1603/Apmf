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
        Schema::create('employes', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('id_poste');
            $table->foreign('id_poste')->references('id_poste')->on('postes');
            $table->string('matricule');
            $table->string('img')->nullable();
            $table->string('nom');
            $table->string('prenom');
            $table->string('email');
            $table->integer('contact');
            $table->integer('status')->default(0); //1: active   0:desactive
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
        Schema::dropIfExists('employe');
    }
};
