<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $categories = [
            "MILITARY & DEFENCE" => ['Army', 'Air Force', 'Navy '],

        
        
        
        ];
        DB::table('categories')->truncate();

        foreach($categories as $key => $value){
            // 'name' => 'Seeder Category'
        
        DB::table('categories')->insert(
            [
                'name' => $key
            ]   
        );

        
    }
}
}
