<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Models\ProductCategory;
use App\Models\SystemInfo;
use App\Models\Banner;
use App\Models\CompanyHistory;
use App\Models\Branch;
use App\Models\Post;

class HomeController extends Controller
{

    //首页
    public function index()
    {
      $banners = Banner::where("id", 1)->select("image")->get();
      $result['banners'] = $banners;
      $news = Post::orderBy('created_at', 'desc')->take(6)->get();
      $products = ProductCategory::where('parent_id','<>',0)->whereNotNull("image")->select("id", "title", "image", "description")->take(5)->get();
      $result['newslist'] = $news;
      $result['products'] = $products;
      $result['about'] = [
        "title" => trans("home.about.title"),
        "subtitle" => trans("home.about.subtitle"),
        "iconlist" => [
          [
            'image' => config('app.url').'/img/home_icon1.png',
            'text' => trans("home.about.iconlist.first"),
          ],
          [
            'image' => config('app.url').'/img/home_icon2.png',
            'text' => trans("home.about.iconlist.second"),
          ],
          [
            'image' => config('app.url').'/img/home_icon3.png',
            'text' => trans("home.about.iconlist.third"),
          ],
          [
            'image' => config('app.url').'/img/home_icon4.png',
            'text' => trans("home.about.iconlist.fouth"),
          ],
          [
            'image' => config('app.url').'/img/home_icon5.png',
            'text' => trans("home.about.iconlist.fifth"),
          ],
          [
            'image' => config('app.url').'/img/home_icon6.png',
            'text' => trans("home.about.iconlist.six"),
          ],
        ],
        "factory" => trans('home.factory'),
        "branch" => trans("home.branch"),
        "branch_place" => trans("home.branch_place"),
        "family_cn" => trans("home.family_cn"),
        "family_en" => trans("home.family_en"),
        "product_title" => trans("home.product_title"),
        "product_subtitle" => trans("home.product_subtitle"),
        "news_title" => trans("home.news_title"),
        "news_subtitle" => trans("home.news_subtitle"),
        "newest" => trans("home.newest"),
      ];
      $result['equipments'] = $this->getEquipmentList();
      return response()->json($result, 200);
    }

    //集团简介
    public function company_history()
    {
      $result = [
        "factory" => trans('home.factory'),
        "branch" => trans("home.branch"),
        "branch_place" => trans("home.branch_place"),
        "family_cn" => trans("home.family_cn"),
        "family_en" => trans("home.family_en"),
      ];
      $result['companyhistory'] = \DB::table('company_histories')->orderBy('id', 'asc')->select('title', 'year', 'body')->get();

      $result['company_title'] = trans('home.company_hisgory.company_title');
      $result['equipment_title'] = trans('home.company_hisgory.equipment.title');
      $result['equipmentlist'] = $this->getEquipmentList();
      return response()->json($result, 200);
    }

    // 联系我们
    public function contact()
    {
      $result['banners'] = Banner::where("id", 5)->select("image")->get();
      $result['list'] = Branch::all();
      return response()->json($result, 200);
    }

    // 一树设计
    public function isudesign()
    {
      $system_infos = SystemInfo::find(1);
      $result['enter_isudesign'] = trans('home.enter_isudesign');
      $result['isudesign_site'] = $system_infos->isudesign_site;
      $result['isudesign_body'] = $system_infos->about_body;
      return response()->json($result, 200);
    }


    public function systems_info()
    {
      $system_infos = SystemInfo::find(1);
      $result['nav'] = trans("home.nav");
      $result['keys'] = [
        'tel' => trans('home.tel'),
        'email' => trans('home.email')
      ];
      $result['meta'] = [
        'meta_title' => $system_infos->meta_title,
        'meta_keywords' => $system_infos->meta_keywords,
        'meta_description' => $system_infos->meta_description
      ];
      return response()->json($result, 200);
    }

    public function getEquipmentList()
    {
      return [
        [
          "title" => trans('home.company_hisgory.equipment.first'),
          "list" => [
            config('app.url')."/img/equipment/production/1.jpg",
            config('app.url')."/img/equipment/production/2.jpg",
            config('app.url')."/img/equipment/production/3.jpg",
            config('app.url')."/img/equipment/production/4.jpg",
            config('app.url')."/img/equipment/production/5.jpg",
            config('app.url')."/img/equipment/production/6.jpg",
            config('app.url')."/img/equipment/production/7.jpg",
            config('app.url')."/img/equipment/production/8.jpg",
          ]
        ],
        [
          "title" => trans('home.company_hisgory.equipment.second'),
          "list" => [
            config('app.url')."/img/equipment/quality/1.jpg",
            config('app.url')."/img/equipment/quality/2.jpg",
            config('app.url')."/img/equipment/quality/3.jpg",
            config('app.url')."/img/equipment/quality/4.jpg",
            config('app.url')."/img/equipment/quality/5.jpg",
            config('app.url')."/img/equipment/quality/6.jpg",
            config('app.url')."/img/equipment/quality/7.jpg",
            config('app.url')."/img/equipment/quality/8.jpg",
          ]
        ],
        [
          "title" => trans('home.company_hisgory.equipment.third'),
          "list" => [
            config('app.url')."/img/equipment/inspection/1.jpg",
            config('app.url')."/img/equipment/inspection/2.jpg",
            config('app.url')."/img/equipment/inspection/3.jpg",
            config('app.url')."/img/equipment/inspection/4.jpg",
            config('app.url')."/img/equipment/inspection/5.jpg",
            config('app.url')."/img/equipment/inspection/6.jpg",
            config('app.url')."/img/equipment/inspection/7.jpg",
            config('app.url')."/img/equipment/inspection/8.jpg",
          ]
        ],
        [
          "title" => trans('home.company_hisgory.equipment.fouth'),
          "list" => [
            config('app.url')."/img/equipment/warehousing/1.jpg",
            config('app.url')."/img/equipment/warehousing/2.jpg",
            config('app.url')."/img/equipment/warehousing/3.jpg",
            config('app.url')."/img/equipment/warehousing/4.jpg",
            config('app.url')."/img/equipment/warehousing/5.jpg",
            config('app.url')."/img/equipment/warehousing/6.jpg",
            config('app.url')."/img/equipment/warehousing/7.jpg",
            config('app.url')."/img/equipment/warehousing/8.jpg",
          ]
        ]
      ];
    }
}
