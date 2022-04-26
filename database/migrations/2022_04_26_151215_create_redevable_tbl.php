<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRedevableTbl extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('redevable', function (Blueprint $table) {
            $table->id();
            $table->string('nom');
            $table->string('adress')->nullable();
            $table->string('type')->nullable();
            $table->string('cin')->nullable();
            $table->string('email')->nullable();
            $table->integer('telephone')->nullable();
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
        Schema::dropIfExists('redevable');
    }
}
