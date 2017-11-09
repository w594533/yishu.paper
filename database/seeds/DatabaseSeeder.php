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
         $this->call(ProductCategoryTableSeeder::class);
         $this->call(SystemInfosTableSeeder::class);
        $this->call(BannersTableSeeder::class);
        $this->call(BranchesTableSeeder::class);
        $this->call(CompanyHistoriesTableSeeder::class);
        $this->call(AdminMenuTableSeeder::class);
    }
}
