<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;
use App\Http\Controllers\FrontendController;
use App\Models\Post;

class NewsController extends FrontendController
{
  public function show(Post $post)
  {
    return view('frontend.news_detail', compact('post'));
  }
}
