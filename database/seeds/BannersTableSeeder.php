<?php

use Illuminate\Database\Seeder;

class BannersTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('banners')->delete();
        
        \DB::table('banners')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => '首页',
                'image' => '["upload/banners/image/e5fa2812b334450164187a24c66f8f64.jpg", "upload/banners/image/90f0ccbf2c6e1e647133bf97329cc0a9.jpg", "upload/banners/image/e4be610884a37114f440e2e33a3a87ff.jpg"]',
                'created_at' => '2017-11-07 19:01:41',
                'updated_at' => '2017-11-08 15:22:47',
            ),
            1 => 
            array (
                'id' => 2,
                'name' => '新闻资讯',
                'image' => '["upload/banners/image/97ab04e4647fe3bd9b99c615e76abe83.jpg"]',
                'created_at' => '2017-11-07 19:01:55',
                'updated_at' => '2017-11-08 15:25:19',
            ),
            2 => 
            array (
                'id' => 3,
                'name' => '产品中心',
                'image' => '["upload/banners/image/9b7fe576647da0d041870564f41d6e2d.jpg"]',
                'created_at' => '2017-11-07 19:02:18',
                'updated_at' => '2017-11-08 15:25:30',
            ),
            3 => 
            array (
                'id' => 4,
                'name' => '集团简介',
                'image' => '["upload/banners/image/9767d5dfdb1e75c587505575e365d00a.jpg"]',
                'created_at' => '2017-11-07 19:02:32',
                'updated_at' => '2017-11-08 15:25:42',
            ),
            4 => 
            array (
                'id' => 5,
                'name' => '联系我们',
                'image' => '["upload/banners/image/a19d334775760d7d1b5ca3ca976a18db.jpg"]',
                'created_at' => '2017-11-07 19:02:43',
                'updated_at' => '2017-11-08 15:26:12',
            ),
        ));
        
        
    }
}