<?php

use Illuminate\Database\Seeder;

class AdminMenuTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('admin_menu')->delete();
        
        \DB::table('admin_menu')->insert(array (
            0 => 
            array (
                'id' => 1,
                'parent_id' => 0,
                'order' => 1,
                'title' => '首页',
                'icon' => 'fa-bar-chart',
                'uri' => '/',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            1 => 
            array (
                'id' => 2,
                'parent_id' => 0,
                'order' => 2,
                'title' => '后台管理',
                'icon' => 'fa-tasks',
                'uri' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            2 => 
            array (
                'id' => 3,
                'parent_id' => 2,
                'order' => 3,
                'title' => '用户',
                'icon' => 'fa-users',
                'uri' => 'auth/users',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            3 => 
            array (
                'id' => 6,
                'parent_id' => 2,
                'order' => 4,
                'title' => '菜单',
                'icon' => 'fa-bars',
                'uri' => 'auth/menu',
                'created_at' => NULL,
                'updated_at' => '2017-11-09 09:01:52',
            ),
            4 => 
            array (
                'id' => 8,
                'parent_id' => 0,
                'order' => 5,
                'title' => '分类管理',
                'icon' => 'fa-th-large',
                'uri' => 'categories',
                'created_at' => NULL,
                'updated_at' => '2017-11-09 09:01:52',
            ),
            5 => 
            array (
                'id' => 13,
                'parent_id' => 0,
                'order' => 6,
                'title' => '产品中心',
                'icon' => 'fa-ils',
                'uri' => 'product_categories',
                'created_at' => NULL,
                'updated_at' => '2017-11-09 09:01:53',
            ),
            6 => 
            array (
                'id' => 20,
                'parent_id' => 0,
                'order' => 7,
                'title' => '新闻中心',
                'icon' => 'fa-newspaper-o',
                'uri' => '',
                'created_at' => NULL,
                'updated_at' => '2017-11-09 09:01:53',
            ),
            7 => 
            array (
                'id' => 21,
                'parent_id' => 20,
                'order' => 8,
                'title' => '集团要闻',
                'icon' => 'fa-newspaper-o',
                'uri' => 'company_dynamics',
                'created_at' => NULL,
                'updated_at' => '2017-11-09 09:01:53',
            ),
            8 => 
            array (
                'id' => 22,
                'parent_id' => 20,
                'order' => 9,
                'title' => '行业动态',
                'icon' => 'fa-newspaper-o',
                'uri' => 'industry_information',
                'created_at' => NULL,
                'updated_at' => '2017-11-09 09:01:53',
            ),
            9 => 
            array (
                'id' => 23,
                'parent_id' => 20,
                'order' => 10,
                'title' => '媒体报道',
                'icon' => 'fa-newspaper-o',
                'uri' => 'focus_media',
                'created_at' => NULL,
                'updated_at' => '2017-11-07 14:30:50',
            ),
            10 => 
            array (
                'id' => 25,
                'parent_id' => 0,
                'order' => 11,
                'title' => 'Banner图',
                'icon' => 'fa-file-image-o',
                'uri' => 'banners',
                'created_at' => NULL,
                'updated_at' => '2017-11-09 09:07:56',
            ),
            11 => 
            array (
                'id' => 26,
                'parent_id' => 0,
                'order' => 14,
                'title' => '系统设置',
                'icon' => 'fa-cog',
                'uri' => 'system_info',
                'created_at' => NULL,
                'updated_at' => '2017-11-09 09:01:53',
            ),
            12 => 
            array (
                'id' => 27,
                'parent_id' => 0,
                'order' => 13,
                'title' => '分点联系方式',
                'icon' => 'fa-phone',
                'uri' => 'branches',
                'created_at' => '2017-11-09 09:01:01',
                'updated_at' => '2017-11-09 09:09:13',
            ),
            13 => 
            array (
                'id' => 28,
                'parent_id' => 0,
                'order' => 12,
                'title' => '集团简介',
                'icon' => 'fa-newspaper-o',
                'uri' => 'company_histories',
                'created_at' => '2017-11-09 09:01:30',
                'updated_at' => '2017-11-09 09:08:25',
            ),
        ));
        
        
    }
}