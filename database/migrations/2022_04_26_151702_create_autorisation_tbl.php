<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAutorisationTbl extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('autorisation', function (Blueprint $table) {
            $table->id();
            $table->string('numero')->nullable()->unique();
            $table->bigInteger('redevable_id')->unsigned();
            $table->date('date')->nullable();
            $table->string('type')->nullable();
            $table->string('rc')->nullable();
            $table->string('sup')->nullable();
            $table->decimal('montant')->nullable();
            $table->string('categorie')->nullable();
            $table->string('souscate')->nullable();
            $table->string('article')->nullable();
            $table->string('numerolot')->nullable();
            $table->string('pattante')->nullable();
            $table->text('observation')->nullable();
            $table->string('valeurlocative')->nullable();
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
        Schema::dropIfExists('autorisation');
    }
}
