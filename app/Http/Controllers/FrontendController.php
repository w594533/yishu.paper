<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Support\Facades\View;
use App\Models\Category;
use App\Models\SystemInfo;
use App;

class FrontendController extends Controller
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function __construct()
    {
      $meta_description = SystemInfo::pluck('meta_description')->first();
      $meta_keywords = SystemInfo::pluck('meta_keywords')->first();
      $meta_title = SystemInfo::pluck('meta_title')->first();

      $system_infos = SystemInfo::find(1);
      $locale = App::getLocale();

      view::share('website_cn', $system_infos->cn_site.$_SERVER['REQUEST_URI']);
      view::share('website_en', $system_infos->en_site.$_SERVER['REQUEST_URI']);
      View::share("locale", $locale);
      View::share('lang_class', $locale=='zh-CN'?"body_cn":"body_en");
      View::share('meta_description', $meta_description);
      View::share('meta_keywords', $meta_keywords);
      View::share('meta_title', $meta_title);
      View::share('system_infos', $system_infos);
    }

    public function activeModule($module)
    {
        View::share('active', [$module => 'nav-active']);
    }

    public function getEquipmentList()
    {
      return [
        [
          "title" => trans('home.company_hisgory.equipment.first'),
          "list" => [
            "/img/equipment/production/1.jpg",
            "/img/equipment/production/2.jpg",
            "/img/equipment/production/3.jpg",
            "/img/equipment/production/4.jpg",
            "/img/equipment/production/5.jpg",
            "/img/equipment/production/6.jpg",
            "/img/equipment/production/7.jpg",
            "/img/equipment/production/8.jpg",
          ]
        ],
        [
          "title" => trans('home.company_hisgory.equipment.second'),
          "list" => [
            "/img/equipment/quality/1.jpg",
            "/img/equipment/quality/2.jpg",
            "/img/equipment/quality/3.jpg",
            "/img/equipment/quality/4.jpg",
            "/img/equipment/quality/5.jpg",
            "/img/equipment/quality/6.jpg",
            "/img/equipment/quality/7.jpg",
            "/img/equipment/quality/8.jpg",
          ]
        ],
        [
          "title" => trans('home.company_hisgory.equipment.third'),
          "list" => [
            "/img/equipment/inspection/1.jpg",
            "/img/equipment/inspection/2.jpg",
            "/img/equipment/inspection/3.jpg",
            "/img/equipment/inspection/4.jpg",
            "/img/equipment/inspection/5.jpg",
            "/img/equipment/inspection/6.jpg",
            "/img/equipment/inspection/7.jpg",
            "/img/equipment/inspection/8.jpg",
          ]
        ],
        [
          "title" => trans('home.company_hisgory.equipment.fouth'),
          "list" => [
            "/img/equipment/warehousing/1.jpg",
            "/img/equipment/warehousing/2.jpg",
            "/img/equipment/warehousing/3.jpg",
            "/img/equipment/warehousing/4.jpg",
            "/img/equipment/warehousing/5.jpg",
            "/img/equipment/warehousing/6.jpg",
            "/img/equipment/warehousing/7.jpg",
            "/img/equipment/warehousing/8.jpg",
          ]
        ]
      ];
    }
}
