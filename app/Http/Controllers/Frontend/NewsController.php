<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;
use App\Http\Controllers\FrontendController;
use App\Models\Post;
use App\Models\Category;

class NewsController extends FrontendController
{
  public function __construct()
  {
      parent::__construct();
      $this->activeModule('news');
  }

  public function show(Post $post)
  {
    return view('frontend.news_detail', compact('post'));
  }

  public function toShowList(Request $request)
  {
    $banners = \App\Models\Banner::where("id", 2)->pluck("image")->first();

    $categories = Category::where('parent_id', 19)->select("id", "title")->get();

    if ($request->category_id) {
      $category_id = $request->category_id;
    } else {
      $category_id = Category::where('parent_id', 19)->first()->id;
    }

    $news_posts = Post::where('category_id', $category_id)->orderBy('id', 'desc')->paginate(10);

    return view('frontend.news', compact('banners', 'category_id', 'news_posts', 'categories'));
  }

  public function center()
  {
    $banners = \App\Models\Banner::where("id", 2)->pluck("image")->first();
    $first_banner_image = config('app.url').'/img/news.jpg';
    $posts_companys = Post::where('category_id', 20)->orderBy('created_at', 'desc')->take(4)->get();
    $posts_medias = [];
    $posts_media = Post::where('category_id', 22)->orderBy('created_at', 'desc')->take(9)->get();
    $i = 0;
    foreach ($posts_media as $key => $media) {
      $posts_medias[$i][] = $media;
      if ((($key+1)%3) == 0 ) {
        $i = $i+1;
      }
    }
    $posts_industrys = Post::where('category_id', 21)->orderBy('created_at', 'desc')->take(3)->get();
    return view('frontend.news_center', compact('banners', 'first_banner_image', 'posts_companys', 'posts_medias', 'posts_industrys'));
  }
}
