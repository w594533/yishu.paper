<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;
use App\Http\Controllers\FrontendController;
use App\Models\ProductCategory;

class ProductController extends FrontendController
{
    public function show(Request $request)
    {
      $this->activeModule('product');
      $banners = \App\Models\Banner::where("id", 3)->pluck("image")->first();
      $product_categories = ProductCategory::where('parent_id',0)->get();
      if ($request->id) {
        $product_category_id = $request->id;
        $product_category = ProductCategory::find($product_category_id);
        if ($product_category->parent_id) {
          //不是父级
          $products = ProductCategory::find($product_category->parent_id);
          $child_product_category_id = $product_category_id;

          $images = $product_category->image;
        } else {
          //一级，父级
          $products = ProductCategory::where([['parent_id',0],['id',$product_category_id]])->with('childrenCategories')->select("id", "title", "image", "description")->first();

          if (count($products->childrenCategories) > 0) {
            $child_product_category_id = $products->childrenCategories[0]->id;
            $images = $products->childrenCategories[0]->image;
          } else {
            $images = $products->image;
          }
        }
      } else {
        $products = ProductCategory::where('parent_id',0)->first();

        if (count($products->childrenCategories) > 0) {
          $child_product_category_id = $products->childrenCategories[0]->id;
          $images = $products->childrenCategories[0]->image;
        } else {
          $images = $products->image;
        }
      }

      $parent_product_category_id = $products->id;
      return view('frontend.product', compact('banners', 'products', 'product_categories', 'images', 'parent_product_category_id', 'child_product_category_id'));
    }
}
