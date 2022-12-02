<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Database\Seeders\ProductSeeder;
use \App\Models\User;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // User::factory(10)->create();
        //  \App\Models\Product::factory(10)->create();
        //factory(Product::class,12)->create();

        $this->call(RoleSeeder::class);    
        $this->call(CategoriesTableSeeder::class);    

        //$this->call(ProductSeeder::class);
     }

}
