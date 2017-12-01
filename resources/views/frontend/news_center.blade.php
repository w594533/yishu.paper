@extends('frontend.layouts.default')
@section('firstdiv_id') news @endsection
  @section('css')
      <link rel="stylesheet" href="/css/news.css">
  @endsection
@section('content')

  <div class="index-nav-img">
            <div>
                <img style="width: 100%" src="{{$banners[0]}}" alt="">
            </div>
            <div class="index-nav-img-bac"></div>
            <div class="index-nav-img-alt">
                <div>
                    <div class="index-nav-img-alt-cn">
                        {{ __("home.contact.title") }}
                    </div>
                    <div class="index-nav-img-alt-en">
                        {{ __("home.contact.subtitle") }}
                    </div>
                </div>
            </div>
        </div>
        <div class="news-section1">
            <div class="index-section1-title">
                <div class="index-section1-title-text">
                    <div class="index-section1-title-text-bar">{{ __("home.contact.news_company") }}</div>
                </div>
            </div>
            <div style="background-color: #db1839" class="section-hr">
                <div style="background-color: #db1839" class="section-hr-big"></div>
            </div>
            <div class="news-section1-content">
                <div class="news-section1-left-box">
                  @foreach ($posts_companys as $posts_company)
                    @if (!$loop->first)
                      @break
                    @endif
                    <div  data-url="{{route('news.show', ['post' => $posts_company])}}" class="news-btn">
                        <div class="news-section1-img">
                            <img src="{{$first_banner_image}}" alt="">
                            <div class="news-section1-img-alt">
                                <div class="news-section1-img-alt-day">{{ date("d", strtotime($posts_company->created_at)) }}</div>
                                <div class="news-section1-img-alt-year">{{ date("Y-m", strtotime($posts_company->created_at)) }}</div>
                            </div>
                        </div>
                        <div class="news-section1-left-text">
                            <span class="news-section1-left-text-title">{{ str_limit($posts_company->name, 50) }}</span>
                            <p class="news-section1-left-text-txt">{{ str_limit(strip_tags($posts_company->slug), 100) }}</p>
                        </div>
                    </div>
                    <div class="news-section1-content-more">
                        <span><a style="color: #fff" href="{{route('news.list')}}">更多资讯</a></span>
                    </div>
                  @endforeach


                </div>
                <div class="news-section1-right-box">
                   @foreach ($posts_companys as $posts_company)
                     @if ($loop->first)
                       @continue
                     @endif
                     <div data-url="{{route('news.show', ['post' => $posts_company])}}" class=" news-btn news-section1-right-box-content">
                         <div class="news-section1-right-box-content-time">
                             <div class="news-section1-right-box-content-time-day">{{ date("d", strtotime($posts_company->created_at)) }}</div>
                             <div class="news-section1-right-box-content-time-year">{{ date("Y-m", strtotime($posts_company->created_at)) }}</div>
                         </div>
                         <div class="news-section1-right-box-content-txt">
                             <span class="news-section1-right-box-content-txt-title">{{ str_limit($posts_company->name, 50) }}</span>
                             <p class="news-section1-right-box-content-txt-txt">{{ str_limit(strip_tags($posts_company->slug), 100) }}</p>
                         </div>
                     </div>
                   @endforeach
                </div>
            </div>
        </div>
        <div class="news-section2">
            <div class="index-section1-title">
                <div class="index-section1-title-text">
                    <div class="index-section1-title-text-bar">{{ __("home.contact.news_media") }}</div>
                </div>
            </div>
            <div style="background-color: #db1839" class="section-hr">
                <div style="background-color: #db1839" class="section-hr-big"></div>
            </div>
            <div class="swiper-container" id="swiper1">
                <div class="swiper-wrapper">
                    @foreach ($posts_medias as $posts_media)
                      <div class="swiper-slide">
                        <div class="news-section2-img-teams">
                        @foreach ($posts_media as $media)

                            <div data-url="{{route('news.show', ['post' => $media])}}" class=" news-btn news-section2-img">
                                <img src="{{ $media->cover }}" alt="">
                                <div class="news-section2-img-alt">
                                    <span class="news-section1-left-text-title">{{ str_limit($media->name, 50) }}</span>
                                    <p class="news-section1-left-text-txt">{{ str_limit(strip_tags($media->slug), 100) }}</p>
                                </div>
                            </div>

                        @endforeach
                        </div>
                        </div>
                    @endforeach
                </div>
            </div>
            <div class="swiper-pagination news-pagination"></div>
        </div>
        <div class="news-section3">
            <div class="index-section1-title">
                <div class="index-section1-title-text">
                    <div class="index-section1-title-text-bar">{{ __("home.contact.news_industry") }}</div>
                </div>
            </div>
            <div style="background-color: #db1839" class="section-hr">
                <div style="background-color: #db1839" class="section-hr-big"></div>
            </div>
            <div class="news-section3-content">
              @foreach ($posts_industrys as $key => $posts_industry)
                <div data-url="{{route('news.show', ['post' => $posts_industry])}}"class=" news-btn news-section3-content-box">
                    <div class="news-section3-content-box-num">
                        0{{$key+1}}
                    </div>
                    <div class="news-section3-content-box-txt">
                        <span class="news-section1-left-text-title">{{ str_limit($posts_industry->name, 50) }} </span>
                        <p class="news-section1-left-text-txt news-section3-content-box-txt-txt">
                            {{ str_limit(strip_tags($posts_industry->slug), 100) }}</p>
                    </div>
                </div>
              @endforeach
            </div>
        </div>
<script>
$(function () {
    var swiper1 = new Swiper('#swiper1', {
        pagination: '.swiper-pagination',
        paginationClickable: true,
        uniqueNavElements: false
    });
    $('.news-btn').on('click', function () {
      var url = $(this).data('url');
      location.href=url;
    })
});
</script>
@endsection
