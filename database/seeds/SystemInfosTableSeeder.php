<?php

use Illuminate\Database\Seeder;

class SystemInfosTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {


        \DB::table('system_infos')->delete();

        \DB::table('system_infos')->insert(array (
            0 =>
            array (
                'id' => 1,
                'phone' => '0571-87550583',
                'email' => 'wyf@tthpaper.com',
                'cn_site' => 'http://www.tthpaper.com',
                'en_site' => 'http://en.tthpaper.com',
                'about_body' => '一树设计是一树纸业集团旗下的专业设计公司，主营专业设计服务，包装设计，企业品牌形象设计以及文创产品开发。我们的团队由业内知名设计总监带领，所有设计师均经过层层选拔。公司在前期工作是阶段完成商业项目百余项，并且囊括世界3大设计奖：德国if、红点、美国IDEA设计奖以及一系列国内外权威奖项',
                'created_at' => '2017-11-08 14:02:09',
                'updated_at' => '2017-11-08 14:02:09',
                'meta_title' => '一树纸业',
                'meta_keywords' => '一树纸业',
                'meta_description' => '一树纸业',
                'isudesign_site' => 'www.isudesign.com',
            ),
        ));


    }
}
