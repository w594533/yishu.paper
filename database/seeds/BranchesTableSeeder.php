<?php

use Illuminate\Database\Seeder;

class BranchesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('branches')->delete();
        
        \DB::table('branches')->insert(array (
            0 => 
            array (
                'id' => 1,
                'tel' => '0577-64829829 / 0577-64853808',
                'fax' => '0577-64829085 / 0577-64829087',
                'email' => 'csy@tthpaper.com',
                'address' => '浙江省温州市苍南县灵溪镇兴园路555号',
                'created_at' => '2017-11-07 18:23:13',
                'updated_at' => '2017-11-07 18:23:13',
                'name' => '温州一树纸业',
            ),
            1 => 
            array (
                'id' => 2,
                'tel' => '0570－7258386 / 0570－7258503',
                'fax' => NULL,
                'email' => NULL,
                'address' => '浙江龙游工业园区金星大道33号',
                'created_at' => '2017-11-07 18:24:53',
                'updated_at' => '2017-11-07 18:25:29',
                'name' => '浙江一树纸业',
            ),
            2 => 
            array (
                'id' => 3,
                'tel' => '0769-88326919 / 0769-88326929',
                'fax' => '0769-88326979',
                'email' => 'wgj@tthpaper.com',
                'address' => '广东省东莞市道滘镇马洲村骏华路路口',
                'created_at' => '2017-11-07 18:26:17',
                'updated_at' => '2017-11-07 18:26:17',
                'name' => '东莞天天虹',
            ),
        ));
        
        
    }
}