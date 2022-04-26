<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->date('date');
            $table->bigInteger('customer_id')->unsigned();

            $table->bigInteger('store_id')->unsigned();
            $table->string('source')->nullable();

            $table->bigInteger('shipping_id')->unsigned()->nullable();

            $table->decimal('quantity', $precision = 10, $scale = 2);
            $table->decimal('price_total', $precision = 15, $scale = 2);
            $table->decimal('shipping_cost', $precision = 15, $scale = 2);
            $table->decimal('products_cost', $precision = 15, $scale = 2)->nullable();
            $table->string('shipping_cost_by');

            $table->decimal('paid', $precision = 15, $scale = 2)->nullable();
            $table->string('payment_status')->nullable();

            $table->bigInteger('assign_to_operator')->unsigned()->nullable();
            $table->bigInteger('assign_to_shipper')->unsigned()->nullable();

            $table->string('city')->nullable();

            $table->string('order_status')->nullable();
            $table->string('package_status')->nullable();

            $table->text('shipping_note')->nullable();
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
        Schema::dropIfExists('orders');
    }
}
