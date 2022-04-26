<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePurchasesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('purchases', function (Blueprint $table) {
            $table->id();
            $table->string('reference')->nullable();
            $table->date('date');
            $table->bigInteger('product_id');
            $table->bigInteger('supplier_id');
            $table->bigInteger('warehouse_id');
            $table->decimal('price', $precision = 15, $scale = 2);
            $table->decimal('quantity', $precision = 10, $scale = 2);
            $table->decimal('shipping', $precision = 15, $scale = 2);
            $table->decimal('paid', $precision = 15, $scale = 2)->nullable();
            $table->string('payment_status')->nullable();
            $table->string('status')->nullable();
            $table->text('note')->nullable();

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
        Schema::dropIfExists('purchases');
    }
}
