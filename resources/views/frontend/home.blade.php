@extends('frontend.layouts.default')
@section('css')
  <link rel="stylesheet" href="/css/home.css">
@endsection
@section('content')
  <div style="position: relative" class="swiper-container" id="swiper1">
              <div class="swiper-wrapper">
                @foreach ($banners as $banner)
                  <img class="swiper-slide" style="width: 100%" src="{{ $banner }}" alt="">
                @endforeach
              </div>
              <div class="swiper-pagination index-nav-img-pagination"></div>
          </div>
          <div class="index-section1">
              <div class="index-section1-title">
                  <div class="index-section1-title-text">
                      <div class="index-section1-title-text-bar">{{ __('home.about.title') }}</div>
                      <div class="index-section1-title-text-foo">{{ __('home.about.subtitle') }}</div>
                  </div>
              </div>
              <div class="index-section1-hr">
                  <div class="index-section1-hr-big"></div>
              </div>
              <div class="index-section1-top-img-teams">
                @foreach ($iconlist as $icon)
                  <div class="business-item">
                    <div class="business-item-img">
                      <img src="{{ $icon['image'] }}" class="ori-img"/>
                      <img src="{{ $icon['image_hover'] }}" class="hover-img hidden"/>
                    </div>
                    <div class="title">{{ $icon['text'] }}</div>
                    <div class="title_hover hidden">{{ $icon['text_hover'] }}</div>
                  </div>
                @endforeach
              </div>
              <div class="index-section1-video">
                  <div class="displayflex">
                      <div class="index-section1-video-left-text">
                          <div class="index-section1-video-text-title">MAKE</div>
                          <div class="index-section1-video-text-content">
                              colored paper
                              <br>
                              for your
                              <br>
                              colorful life
                          </div>
                          <div class="index-section1-video-text-title">
                              <span>精彩生活</span><br><span>色彩由我</span>
                          </div>
                      </div>
                  </div>
                  <div class="video-box">
                      <video
                              preload="auto"
                              controls="controls"
                              poster="/img/poster.jpg"
                              class="index-section1-video-video">
                          <source src="/video/paper.m4v" type="video/mp4">
                          <source src="/video/paper.ogv" type="video/ogg">
                          <source src="/video/paper.webm" type="video/webm">
                      </video>
                  </div>
                  <div class="displayflex">
                      <div class="index-section1-video-right-text">
                          <div class="index-section1-video-text-title">PROVIDE</div>
                          <div class="index-section1-video-text-content">
                              customized
                              <br>
                              service solutions
                              <br>
                              for you
                          </div>
                          <div class="index-section1-video-text-title">
                              <span>我们为您</span><br><span>提供定制化服务</span>
                          </div>
                      </div>
                  </div>
              </div>
              <div class="index-section1-map">
                  <img src="/img/index-section1-map.jpg" alt="">
              </div>
              <div class="swiper-container" id="swiper2">
                  <div class="swiper-wrapper">
                    @foreach ($equipments as $key => $equipment)

                        @if ($key == 1)
                          <div class=" swiper-slide">
                              <div class="index-section1-bottom-img-teams">
                                  <div class="index-section1-bottom-imgbox-left">
                                      <div class="index-section1-bottom-imgbox-left-top">
                                          <div class="index-section1-bottom-imgbox-left-top-img-box">
                                              <img src="{{ $equipment['list'][0] }}" alt="">
                                          </div>
                                      </div>
                                      <div class="index-section1-bottom-imgbox-left-bottom">
                                          <div class="index-section1-bottom-imgbox-left-bottom-img-box1">
                                              <img src="{{ $equipment['list'][1] }}" alt="">
                                          </div>
                                      </div>
                                  </div>
                                  <div class="index-section1-bottom-imgbox-right">
                                    <div class="index-section1-bottom-imgbox-right-top">
                                        <div class="index-section1-bottom-imgbox-right-top-img-box1">
                                            <img src="{{ $equipment['list'][1] }}" alt="">
                                        </div>

                                    </div>
                                  </div>
                              </div>
                          </div>
                        @else
                          <div class=" swiper-slide">
                              <div class="index-section1-bottom-img-teams">
                                  <div class="index-section1-bottom-imgbox-left">
                                      <div class="index-section1-bottom-imgbox-left-top">
                                          <div class="index-section1-bottom-imgbox-left-top-img-box">
                                              <img src="{{ $equipment['list'][0] }}" alt="">
                                          </div>
                                      </div>
                                      <div class="index-section1-bottom-imgbox-left-bottom">
                                          <div class="index-section1-bottom-imgbox-left-bottom-img-box1">
                                              <img src="{{ $equipment['list'][4] }}" alt="">
                                          </div>
                                          <div class="index-section1-bottom-imgbox-left-bottom-img-box2">
                                              <img src="{{ $equipment['list'][5] }}" alt="">
                                          </div>
                                      </div>
                                  </div>
                                  <div class="index-section1-bottom-imgbox-right">
                                      <div class="index-section1-bottom-imgbox-right-top">
                                          <div class="index-section1-bottom-imgbox-right-top-img-box1">
                                              <img src="{{ $equipment['list'][1] }}" alt="">
                                          </div>
                                          <div class="index-section1-bottom-imgbox-right-top-img-box2">
                                              <img src="{{ $equipment['list'][2] }}" alt="">
                                          </div>
                                      </div>
                                      <div class="index-section1-bottom-imgbox-right-center">
                                          <img src="{{ $equipment['list'][3] }}" alt="">
                                      </div>
                                      <div class="index-section1-bottom-imgbox-right-bottom">
                                          <div class="index-section1-bottom-imgbox-right-bottom-img-box1">
                                              <img src="{{ $equipment['list'][6] }}" alt="">
                                          </div>
                                          <div class="index-section1-bottom-imgbox-right-bottom-img-box2">
                                              <img src="{{ $equipment['list'][7] }}" alt="">
                                          </div>
                                      </div>
                                  </div>
                              </div>
                          </div>
                        @endif


                    @endforeach
                  </div>
              </div>
              <div class="swiper-pagination2 index-section1-pagination2"></div>
          </div>
          <div class="index-section2">
              <div class="index-section2-title">
                  <div class="index-section1-title-text">
                      <div class="index-section1-title-text-bar">{{ __('home.product_title') }}</div>
                      <div class="index-section1-title-text-foo">{{ __('home.product_subtitle') }}</div>
                  </div>
              </div>
              <div class="index-section2-hr">
                  <div class="index-section2-hr-big"></div>
              </div>
          </div>
          <div class="pc-banner">
            <div class="swiper-container" id="swiper-product">
              <div class="swiper-wrapper">
                @foreach ($products as $product)
                  <div class="swiper-slide @if ($loop->first) swiper-slide-center none-effect @endif">
                    <a href="javascript:void(0)">
                      <img src="{{ Storage::url($product->image[0]) }}" >
                      @if (strip_tags($product->description))
                        <div class="product-description">
                          <div class="title">{{$product->title}}</div>
                          <div class="text">{!! strip_tags($product->description, '<p><br/><br>') !!}</div>
                        </div>
                      @endif
                    </a>
                  </div>
                @endforeach
              </div>
            </div>
              <div class="swiper-button-prev"></div>
              <div class="swiper-button-next"></div>
            </div>
          <div class="index-section3">
              <div class="index-section3-title-top">
                  <div class="index-section1-title-text">
                      <div class="index-section1-title-text-bar">{{ __('home.news_title') }}</div>
                      <div class="index-section1-title-text-foo">{{ __('home.news_subtitle') }}</div>
                  </div>
              </div>
              <div class="index-section3-hr">
                  <div class="index-section3-hr-big"></div>
              </div>
              <div id="index_section3_slider">
                  <ul class="index-section3-imgs">
                      <li>
                        @foreach ($news as $new)
                          <div class="index-section3-news-box">
                            <div class="index-section3-news-all">
                                <div class="index-section3-left-news-bar">
                                  @if ($loop->first)
                                    <div class="index-section3-left-news-bar-new">{{ __('home.newest') }}</div>
                                  @endif
                                    <div class="index-section3-left-news-bar-time">
                                        <span>{{ date('m/d', strtotime($new->created_at)) }}</span>
                                    </div>
                                </div>
                                <div data-url="{{route('news.show', ['post' => $new])}}" class="index-section3-left-news-foo">
                                    <span class="index-section3-title">{{ $new->name }}</span>
                                    <br>
                                    <p class="f12 index-section3-text">
                                        {{ str_limit(strip_tags($new->slug), 100) }}
                                    </p>
                                </div>
                            </div>
                          </div>
                        @endforeach
                      </li>
                  </ul>
              </div>
          </div>
  <script>
  "use strict";
      $(function () {
          $(".business-item-img").on('mouseenter', function() {
            $(this).find(".ori-img").addClass("hidden");
            $(this).find(".hover-img").removeClass("hidden");
            $(this).siblings(".title").addClass("hidden");
            $(this).siblings(".title_hover").removeClass("hidden");
          }).on("mouseleave", function() {
            $(this).find(".ori-img").removeClass("hidden");
            $(this).find(".hover-img").addClass("hidden");
            $(this).siblings(".title").removeClass("hidden");
            $(this).siblings(".title_hover").addClass("hidden");
          });
          $('.index-section2-img-now').on('mouseenter', function () {
              $('.index-section2-img-bac').stop(true);
              $('.index-section2-img-now-txt').stop(true);
              $('.index-section2-img-bac').animate({
                  opacity: 0.8
              }, 1000);
              $('.index-section2-img-now-txt').animate({
                  opacity: 1
              }, 1000)
          }).on('mouseleave', function () {
              $('.index-section2-img-bac').animate({
                  opacity: 0
              }, 1000);
              $('.index-section2-img-now-txt').animate({
                  opacity: 0
              }, 1000)
          })
      });
      //轮播
      $(function () {
          var swiper1 = new Swiper('#swiper1', {
              pagination: '.swiper-pagination',
              paginationClickable: true,
              autoplay: 5000,
              loop:true,
          });
          var swiper2 = new Swiper('#swiper2', {
              pagination: '.index-section1-pagination2',
              paginationClickable: true,
              uniqueNavElements: false,
          });
          var swiper_product = new Swiper('#swiper-product', {
            // autoplay:5000,
            speed:2000,
            autoplayDisableOnInteraction : false,
            loop:true,
            centeredSlides : true,
            slidesPerView:4,
            // pagination : '.swiper-pagination',
            paginationClickable:true,
            prevButton:'.swiper-button-prev',
            nextButton:'.swiper-button-next',
            onInit:function(swiper){
              swiper.slides[4].className="swiper-slide swiper-slide-active";//第一次打开不要动画
            },
            breakpoints: {
              960: {
                slidesPerView: 1,
              }
            }
          });

      });
      $(function () {
          $('.index-section3-left-news-foo').on('click', function () {
            var url = $(this).data('url');
            location.href=url;
              // localStorage.setItem("newsDetailUrl", $(this).data('data-url'));
              // location.href = 'news-detail.html';
          })
      });
      $(function () {
          $('.control').on('click', function () {
              if ($('video')[0].paused) {
                  $('video')[0].play();
                  $('.control')[0].style.display = 'none';
                  $('.play').attr('src', 'imgs/pause.png');
              } else {
                  $('video')[0].pause();
                  $('.play').attr('src', 'imgs/play.png');
              }

          });
          $('video').on('click', function () {
              if ($('.play').attr('src') === 'imgs/play.png') {
                  return;
              } else {
                  if ($('.control')[0].style.display === 'none') {
                      $('.control')[0].style.display = 'block';
                  } else {
                      $('.control')[0].style.display = 'none';
                  }
              }
          })
      });
      $(function () {
          $('.index-section3-left-news-foo').on('mouseenter', function () {
              $('.index-section3-left-news-foo').removeClass('index-section3-bacc');
              $(this).addClass('index-section3-bacc');
          }).on('mouseleave', function () {
              $('.index-section3-left-news-foo').removeClass('index-section3-bacc');
          })
      });
  </script>
@endsection
