<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         $this->call(AdminsMenuTableSeeder::class);
         $this->call(CategoriesTableSeeder::class);
         $this->call(PostsTableSeeder::class);
         $this->call(CooperationTableSeeder::class);
        //  $this->call(AtlasTableSeeder::class);
         $this->call(ProductTableSeeder::class);
         $this->call(SystemInfosTableSeeder::class);
    }
}
