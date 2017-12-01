@extends('frontend.layouts.default')
@section('firstdiv_id') madia @endsection
@section('css')
    <link rel="stylesheet" href="/css/news.css">
@endsection
@section('content')
  <div class="content">
    <div class="index-nav-img">
            <div>
                <img style="width: 100%" src="{{$banners[0]}}" alt="">
            </div>
    </div>

  <div class="media-section1">
        <div class="media-section1-content" id="media_section1_slider">
            <div class="media-section1-title-content">
                <ul class="media-section1-content-pagination">
                  @foreach ($categories as $category)
                    <li class="{{$category_id == $category->id?'active':''}}">
                      <a href="{{action('Frontend\NewsController@toShowList', ['category_id' => $category->id])}}">
                        {{$category->title}}
                      </a>
                    </li>
                  @endforeach
                </ul>
            </div>
            <div class="media-section1-hr"></div>
            <div class="media-section1-content-clique">
              @foreach ($news_posts as $post)
                <div data-url="{{route('news.show', ['post' => $post])}}" class="media-section1-content-box">
                    <div class="media-section1-content-box-left">
                        <div class="media-section1-content-box-img">
                            <img src="{{$post->cover}}" alt=""></div>
                        <div class="media-section1-content-box-time">
                            <div class="media-section1-content-box-day">{{ date("d", strtotime($post->created_at)) }}</div>
                            <div class="media-section1-content-box-year">{{ date("Y-m", strtotime($post->created_at)) }}</div>
                        </div>
                    </div>
                    <div class="media-section1-content-box-txt">
                        <span>{{ str_limit($post->name, 50) }}</span>
                        <p>{{ str_limit(strip_tags($post->slug), 100) }}</p>
                    </div>
                </div>
              @endforeach
            </div>
        </div>
        <div class="foot">
          {{$news_posts->appends(['category_id' => $category_id])->links()}}
        </div>
    </div>
</div>
<script>
$(function () {
    $('.media-section1-content-box').on('click', function () {
      var url = $(this).data('url');
      location.href=url;
    })
});
</script>
@endsection
