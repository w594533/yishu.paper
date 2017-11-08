<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PostsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      #新闻
      $category_ids = [20, 21, 22];
      foreach ($category_ids as $key => $category_id) {
        $products = factory('App\Models\Post', 11)->create([
          'category_id' => $category_id,
        ]);
      }
    }
}
