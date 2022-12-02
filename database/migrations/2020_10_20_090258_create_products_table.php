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
            $table->string('name')->nullable();
            $table->text('description')->nullable();
            $table->string('active')->default(1);
            $table->integer('min_price')->nullable();
            $table->integer('max_price')->nullable();
            $table->string('per_product')->nullable();
            $table->string('brand_name')->nullable();
            $table->integer('qty');
            $table->integer('category_id')->unsigned();
            $table->integer('subcategory_id')->unsigned();
            $table->integer('size')->nullable();
            $table->string('placeoforigin')->nullable();
            $table->integer('shelf_life_days')->nullable();
            $table->integer('shelf_life_weeks')->nullable();
            $table->integer('shelf_life_months')->nullable();
            $table->string('color')->nullable();
            $table->string('port')->nullable();
            $table->integer('weight')->nullable();
            $table->string('weight_unit')->nullable();
            $table->string('type')->nullable();
            $table->string('style')->nullable();
            $table->string('supply_days')->nullable();
            $table->string('supply_weeks')->nullable();
            $table->string('supply_months')->nullable();
            $table->string('supply_availibility')->nullable();
            $table->integer('product_capcity')->nullable();
            $table->string('capacity_per_item')->nullable();
            $table->string('capacity_per_duration')->nullable();
            $table->string('certification')->nullable();
            $table->string('model_no')->nullable();
            $table->string('payment_terms')->nullable();
            $table->string('features')->nullable();
            $table->integer('stock')->nullable();
            $table->string('packaging_details')->nullable();
            $table->integer('minimum_order_qty');
            $table->string('tags')->nullable();
            $table->integer('item_id')->nullable();
            $table->integer('seller_id')->nullable();
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

