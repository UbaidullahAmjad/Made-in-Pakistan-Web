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
            $table->string('document')->nullable();
            $table->string('order_no')->nullable();
            $table->string('order_date')->nullable();
            $table->string('update_date')->nullable();
            $table->string('payment_method')->nullable();
            $table->string('retail_price')->nullable();
            $table->string('status')->nullable();
            $table->string('printed')->nullable();
            $table->string('actions')->nullable();
            $table->integer('customer_id')->nullable();
            $table->integer('seller_id')->nullable();
            $table->integer('offer_id')->nullable();
            $table->integer('product_id')->nullable();
            $table->integer('total')->nullable();
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
