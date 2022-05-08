<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePayementTbl extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('payement', function (Blueprint $table) {
            $table->id();
            $table->date('date')->nullable();
            $table->bigInteger('autorisation_id')->unsigned();
            $table->foreign('autorisation_id')->references('id')->on('autorisation');
            $table->string('quittence')->nullable();
            $table->date('date_quittence')->nullable();
            $table->integer('annee')->nullable();
            $table->string('trim')->nullable();
            $table->boolean('active')->nullable();
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
        Schema::dropIfExists('payement');
    }
}
