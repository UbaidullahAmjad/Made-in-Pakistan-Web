<?php

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSettingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('settings', function (Blueprint $table) {
            $table->id();
            
            $table->string('phone');
            
            $table->string('address');
            $table->string('category');
            $table->binary('slide_image')->nullable();
            $table->binary('brand_images')->nullable();
            $table->string('header_logo')->nullable();
            $table->string('footer_logo')->nullable();
            $table->timestamps();
        });
        // DB::table('settings')->create([
        //     'phone' => "['0313-1234567', '0313-7654321', '0313-7651234']",
        //     'address' => 'Phase 7, Bahria Town Rawalpindi',
        //     'category' => "['52','53','54','54']",
            
        // ]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('settings');
    }
}
