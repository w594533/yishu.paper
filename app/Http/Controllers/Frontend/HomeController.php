<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;
use App\Http\Controllers\FrontendController;
use App\Models\Post;


class HomeController extends FrontendController
{
    public function show()
    {
      $banners = \App\Models\Banner::where("id", 1)->pluck("image")->first();
      $iconlist = [
          [
            'image' => '/img/index-section1-img-1-1.png',
            'text' => trans("home.about.iconlist.first"),
            'image_hover' => '/img/index-section1-img-1-1-circle.png',
            'text_hover' => trans("home.about.iconlist.first_hover")
          ],
          [
            'image' => '/img/index-section1-img-1-2.png',
            'text' => trans("home.about.iconlist.second"),
            'image_hover' => '/img/index-section1-img-1-2-circle.png',
            'text_hover' => trans("home.about.iconlist.second_hover")
          ],
          [
            'image' => '/img/index-section1-img-1-3.png',
            'text' => trans("home.about.iconlist.third"),
            'image_hover' => '/img/index-section1-img-1-3-circle.png',
            'text_hover' => trans("home.about.iconlist.third_hover")
          ],
          [
            'image' => '/img/index-section1-img-2-1.png',
            'text' => trans("home.about.iconlist.fouth"),
            'image_hover' => '/img/index-section1-img-2-1-circle.png',
            'text_hover' => trans("home.about.iconlist.fouth_hover")
          ],
          [
            'image' => '/img/index-section1-img-2-2.png',
            'text' => trans("home.about.iconlist.fifth"),
            'image_hover' => '/img/index-section1-img-2-2-circle.png',
            'text_hover' => trans("home.about.iconlist.fifth_hover")
          ],
          [
            'image' => '/img/index-section1-img-2-3.png',
            'text' => trans("home.about.iconlist.six"),
            'image_hover' => '/img/index-section1-img-2-3-circle.png',
            'text_hover' => trans("home.about.iconlist.six_hover")
          ]
      ];
      $equipments = $this->getEquipmentList();
      // foreach ($equipments as $key => $equipment) {
      //   dd($equipment['list']);
      //   foreach ($equipment as $key => $value) {
      //     // dd($value[''])
      //   }
      // }
      //dd($equipments);
      $news = Post::orderBy('created_at', 'desc')->take(6)->get();
      return view('frontend.home', compact('banners', 'iconlist', 'equipments', 'news'));
    }


}
