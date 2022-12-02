<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAttributesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('attributes', function (Blueprint $table) {
            $table->id();
            $table->integer('size')->nullable();
            $table->string('color')->nullable();
            $table->string('placeoforigin')->nullable();
            $table->char('shelf_life',12)->nullable();
            $table->string('style')->default('fresh');
            $table->unsignedBigInteger('inventory')->default(1200);
            $table->char('weight',12)->nullable();
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
        Schema::dropIfExists('attributes');
    }
}
