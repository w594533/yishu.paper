<?php

namespace App\Http\Controllers\Api;

use App\Models\Product;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\ProductCategory;
use App\Models\SystemInfo;
use App\Models\Banner;

class ProductController extends Controller
{
    public function index()
    {
      $result = [];
      $result['banners'] = Banner::where("id", 3)->select("image")->get();;
      $result['list'] = ProductCategory::with("childrenCategories")->select("id", "title", "image", "description")->get();
      return response()->json($result, 200);
    }
}
