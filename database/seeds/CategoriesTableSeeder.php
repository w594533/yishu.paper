<?php

use Illuminate\Database\Seeder;

class CategoriesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('categories')->delete();
        
        \DB::table('categories')->insert(array (
            0 => 
            array (
                'id' => 19,
                'title' => '新闻中心',
                'image' => NULL,
                'parent_id' => 0,
                'description' => NULL,
                'order' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            1 => 
            array (
                'id' => 20,
                'title' => '集团要闻',
                'image' => NULL,
                'parent_id' => 19,
                'description' => NULL,
                'order' => 1,
                'created_at' => NULL,
                'updated_at' => '2017-11-07 14:28:56',
                'deleted_at' => NULL,
            ),
            2 => 
            array (
                'id' => 21,
                'title' => '行业动态',
                'image' => NULL,
                'parent_id' => 19,
                'description' => NULL,
                'order' => 1,
                'created_at' => NULL,
                'updated_at' => '2017-11-07 14:31:27',
                'deleted_at' => NULL,
            ),
            3 => 
            array (
                'id' => 22,
                'title' => '媒体报道',
                'image' => NULL,
                'parent_id' => 19,
                'description' => NULL,
                'order' => 1,
                'created_at' => NULL,
                'updated_at' => '2017-11-07 14:31:44',
                'deleted_at' => NULL,
            ),
        ));
        
        
    }
}