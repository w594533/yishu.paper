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
                <div class="prev news-next-prev-button">
                  <img src="/img/news-detail-section1-content-control-left-img.jpg" alt="">
                  <div class="text">{{ __('home.prev_post') }}：xxxxxx</div>
                </div>
                <div class="next news-next-prev-button">
                  <div class="text">{{ __('home.next_post') }}：xxxxxx</div>
                  <img src="/img/news-detail-section1-content-control-right-img.jpg" alt="">
                </div>
              </div>
            </ul>
        </div>
@endsection
