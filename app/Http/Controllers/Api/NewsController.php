<?php

namespace App\Http\Controllers\Api;

use App\Models\Post;
use App\Models\Category;
use App\Models\Banner;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class NewsController extends Controller
{
    public function toShowList(Request $request)
    {
      $result['bannertitle'] = [
        'title' => trans("home.contact.title"),
        "subtitle" => trans("home.contact.subtitle")
      ];
      $categories = Category::where('parent_id', 19)->select("id", "title")->get();
      $result['categories'] = $categories;

      if ($request->category_id) {
        $category_id = $request->category_id;
      } else {
        $category_id = Category::where('parent_id', 19)->first()->id;
      }

      $news_posts = Post::where('category_id', $category_id)->orderBy('id', 'desc')->get();
      $result['list'] = $news_posts;
      return response()->json($result, 200);
    }

    public function index(Request $request)
    {
      $result['banners'] = Banner::where("id", 2)->select("image")->get();;
      $result['first_banner_image'] = config('app.url').'/img/news.jpg';
      $result['bannertitle'] = [
        'title' => trans("home.contact.title"),
        "subtitle" => trans("home.contact.subtitle"),
        'news_company' => trans('home.contact.news_company'),
        'news_media' => trans('home.contact.news_media'),
        'news_industry' => trans('home.contact.news_industry')
      ];
      $posts_companys = Post::where('category_id', 20)->orderBy('created_at', 'desc')->take(4)->get();
      $posts_media = Post::where('category_id', 22)->orderBy('created_at', 'desc')->take(9)->get();
      $posts_industry = Post::where('category_id', 21)->orderBy('created_at', 'desc')->take(3)->get();
      $result['news_company_list'] = $posts_companys;
      $result['news_media_list'] = $posts_media;
      $result['news_industry_list'] = $posts_industry;
      return response()->json($result, 200);

    }

    public function show(Post $post)
    {
      $result['text'] = [
        trans('prev_post'),
        trans('next_post'),
      ];
      return response()->json($post, 200);
    }
}
