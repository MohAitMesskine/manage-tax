<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('code')->nullable();
            $table->string('name');
            $table->string('sku')->unique()->nullable();
            $table->text('description')->nullable();
            $table->bigInteger('category_id')->nullable();
            $table->bigInteger('unit_id')->nullable();
            $table->decimal('cost', $precision = 15, $scale = 2)->nullable();
            $table->decimal('price', $precision = 15, $scale = 2)->nullable();
            $table->decimal('quantity', $precision = 10, $scale = 2)->nullable();
            $table->decimal('quantity_alert', $precision = 10, $scale = 2)->nullable();
            $table->boolean('active');
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
        Schema::dropIfExists('products');
    }
}
