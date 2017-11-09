<?php

use Illuminate\Database\Seeder;

class CompanyHistoriesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('company_histories')->delete();
        
        \DB::table('company_histories')->insert(array (
            0 => 
            array (
                'id' => 1,
                'title' => '集团创建',
                'year' => '2001',
                'body' => '集团成立于2001年，主要从事特种纸领域的开发与销售。经历了十几年的发展历程，至今一树纸业累计投资了大约4700万美元，在温州苍南，衢州龙游和广东东莞建立了三个工厂，在全国各大城市建立了销售分公司17个，包括北京，上海，温州，龙港，武汉，平阳，义乌，杭州，宁波，台州，广州，深圳，东莞，厦门，福州，泉州，无锡，在杭州成立一树设计公司，为客户量身订造专属方案。',
                'created_at' => '2017-11-08 11:36:32',
                'updated_at' => '2017-11-08 11:38:41',
            ),
            1 => 
            array (
                'id' => 2,
                'title' => '温州一树纸业',
                'year' => '2001',
                'body' => '温州一树纸业公司（温州天天虹纸业）成立于2001年，专业从事特种纸开发加工，公司位于温州苍南工业园区，占地2.7万平方米，固定资产投资500万美元，公司巨资引进国内外目前最为先进的压纹、涂布、凹印生产线15条，年生产加工能力20000吨。',
                'created_at' => '2017-11-08 11:36:50',
                'updated_at' => '2017-11-08 11:36:50',
            ),
            2 => 
            array (
                'id' => 3,
                'title' => '浙江一树纸业',
                'year' => '2006',
                'body' => '浙江一树纸业公司（浙江天天虹特种纸业）成立于2006年，公司座落中国特种纸生产基地——浙江龙游工业园区，占地5万多平方米，固定资产投资8000万元，是专业从事特种纸研发、生产、销售的造纸企业。主要品种：黑卡系列，彩卡系列、彩色书写纸等。产品克重在80-400克之间，备有不同克重的常规平张、卷筒等各种纸张。并可根据客户要求订做各类规格、颜色的彩卡等特种纸，年生产能力20000吨。',
                'created_at' => '2017-11-08 11:37:04',
                'updated_at' => '2017-11-08 11:37:04',
            ),
            3 => 
            array (
                'id' => 4,
                'title' => '东莞天天虹纸业',
                'year' => '2011',
                'body' => '东莞天天虹纸业公司已于2011年顺利投产，专业从事高档充皮、触感纸、金属纸等特种纸开发、生产，以便更快和更全面的满足中外高档包装客户的需求。',
                'created_at' => '2017-11-08 11:37:21',
                'updated_at' => '2017-11-08 11:37:21',
            ),
            4 => 
            array (
                'id' => 5,
                'title' => '杭州一树设计',
                'year' => '2017',
                'body' => '杭州一树设计公司成立于2017年，主营专业设计服务，包装设计，企业品牌形象设计以及文创产品开发。我们的团队由业内知名设计总监带领，所有设计师均经过层层选拔。',
                'created_at' => '2017-11-08 11:37:51',
                'updated_at' => '2017-11-08 11:37:51',
            ),
        ));
        
        
    }
}