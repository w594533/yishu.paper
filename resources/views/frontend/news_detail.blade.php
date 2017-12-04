@extends('frontend.layouts.default')

@section('css')
  <link rel="stylesheet" href="/css/news.css">
@endsection
@section('content')
  <div class="news-detail-section1">
            <div class="news-detail">
              <div class="news-detail-section1-content" >
                  <div class="news-detail-section1-content-title">
                      <h1>{{ $post->name }}</h1>
                      <div class="time">{{ date("Y-m-d", strtotime($post->created_at)) }}</div>
                  </div>
                  <div class="news-detail-section1-content-slug">
                      {!! $post->slug !!}
                  </div>
              </div>
            </div>
            <ul class="news-detail-section1-controls">
              <div class="news-next-prev">
                @if ($prev_post)
                  <div class="prev news-next-prev-button">
                    <img src="/img/news-detail-section1-content-control-left-img.jpg" alt="">
                    <div class="text">
                      <a href="{{route('news.show', ['post' => $prev_post])}}">{{ __('home.prev_post') }}：{{$prev_post->name}}</a>
                    </div>
                  </div>
                @endif
                @if ($next_post)
                  <div class="next news-next-prev-button">
                    <div class="text"><a href="{{route('news.show', ['post' => $next_post])}}">{{ __('home.next_post') }}：{{$next_post->name}}</a></div>
                    <img src="/img/news-detail-section1-content-control-right-img.jpg" alt="">
                  </div>
                @endif

              </div>
            </ul>
        </div>
@endsection
