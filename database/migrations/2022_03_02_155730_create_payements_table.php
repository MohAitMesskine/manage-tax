<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePayementsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('payements', function (Blueprint $table) {
            $table->id();
            $table->date('date');
            $table->bigInteger('oder_id')->unsigned()->nullable();
            $table->bigInteger('purchase_id')->unsigned()->nullable();

            $table->bigInteger('created_by')->unsigned()->nullable();
            $table->bigInteger('updated_by')->unsigned()->nullable();

            $table->string('type')->nullable();//send received
            $table->string('paid_by')->nullable();//cash
            $table->decimal('amount', $precision = 15, $scale = 2);
            $table->string('attachment')->nullable();
            $table->boolean('approval_status')->nullable();
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
        Schema::dropIfExists('payements');
    }
}
