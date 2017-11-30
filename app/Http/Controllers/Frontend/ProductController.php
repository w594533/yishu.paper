<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;
use App\Http\Controllers\FrontendController;
use App\Models\ProductCategory;

class ProductController extends FrontendController
{
    public function show()
    {
      $banners = \App\Models\Banner::where("id", 3)->pluck("image")->first();
      $products = ProductCategory::where('parent_id',0)->with("childrenCategories")->select("id", "title", "image", "description")->get();
      //dd($products);
      return view('frontend.product', compact('banners', 'products'));
    }
}
