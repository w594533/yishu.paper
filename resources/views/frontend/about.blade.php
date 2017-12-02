@extends('frontend.layouts.default')
@section('css')
  <link rel="stylesheet" href="/css/about.css">
@endsection
@section('content')
  <div class="index-nav-img">
              <div>
                  <img style="width: 100%" src="{{ $banners[0] }}" alt="">
              </div>
          </div>
          <div class="clique-section1">
              <div class="index-section1-title">
                  <div class="index-section1-title-text">
                      <div class="index-section1-title-text-bar">{{ __('home.company_hisgory.company_title') }}</div>
                  </div>
              </div>
              <div style="background-color: #fcc80f" class="section-hr">
                  <div style="background-color: #fcc80f" class="section-hr-big"></div>
              </div>
              <div class="clique-section1-img">
                  <div class="clique-section1-img-img">
                      <img src="/img/clique-section1-img.jpg" alt="">
                  </div>
                  <div class="clique-section1-img-control"></div>
                  <div class="clique-section1-img-txt">
                      <div class="clique-section1-img-txt-left">
                          <div class="clique-section1-img-txt-left-top">
                              <div class="clique-section1-img-txt-left-top-content">
                                  <div class="clique-section1-img-txt-left-top-content-bac"></div>
                                  <div class="clique-section1-img-txt-left-top-content-txt">
                                      {{ $companyhistory[1]->body }}
                                  </div>
                                  <div class="clique-section1-img-txt-left-top-content-time">
                                      {{ $companyhistory[1]->year }}
                                  </div>
                              </div>
                              <div class="clique-section1-img-txt-left-top-img">
                                  <img src="/img/clique-section1-img-control-writeimg.jpg" alt="">
                              </div>
                          </div>
                          <div class="clique-section1-img-txt-left-top">
                              <div class="clique-section1-img-txt-left-top-content">
                                  <div class="clique-section1-img-txt-left-top-content-bac"></div>
                                  <div class="clique-section1-img-txt-left-top-content-txt">
                                      {{ $companyhistory[3]->body }}
                                  </div>
                                  <div class="clique-section1-img-txt-left-top-content-time">
                                      {{ $companyhistory[3]->year }}
                                  </div>
                              </div>
                              <div class="clique-section1-img-txt-left-top-img">
                                  <img src="/img/clique-section1-img-control-writeimg.jpg" alt="">
                              </div>
                          </div>
                      </div>
                      <div class="clique-section1-img-txt-right">
                          <div class="clique-section1-img-txt-left-top">
                              <div class="clique-section1-img-txt-left-top-img clique-section1-img-txt-right-img">
                                  <img src="/img/clique-section1-img-control-redimg.jpg" alt="">
                              </div>
                              <div class="clique-section1-img-txt-left-top-content">
                                  <div class="clique-section1-img-txt-left-top-content-bac"></div>
                                  <div class="clique-section1-img-txt-left-top-content-time clique-section1-img-txt-left-top-content-time-now">
                                      <span class="jtcreat">{{ $companyhistory[0]->title }}</span>
                                      <div style="height: 1px;border-top: 1px solid #cef0f4;width: 83.3333%;margin: auto"></div>
                                      <span>{{ $companyhistory[0]->year }}</span>
                                  </div>
                                  <div class="clique-section1-img-txt-left-top-content-txt clique-section1-active-color">
                                      {{ $companyhistory[0]->body }}
                                  </div>
                              </div>
                          </div>
                          <div class="clique-section1-img-txt-left-top">
                              <div class="clique-section1-img-txt-left-top-img clique-section1-img-txt-right-img">
                                  <img src="/img/clique-section1-img-control-writeimg.jpg" alt="">
                              </div>
                              <div class="clique-section1-img-txt-left-top-content">
                                  <div class="clique-section1-img-txt-left-top-content-bac"></div>
                                  <div class="clique-section1-img-txt-left-top-content-time">
                                      {{ $companyhistory[2]->year }}
                                  </div>
                                  <div class="clique-section1-img-txt-left-top-content-txt">
                                      {{ $companyhistory[2]->body }}
                                  </div>
                              </div>
                          </div>
                          <div class="clique-section1-img-txt-left-top">
                              <div class="clique-section1-img-txt-left-top-img clique-section1-img-txt-right-img">
                                  <img src="/img/clique-section1-img-control-writeimg.jpg" alt="">
                              </div>
                              <div class="clique-section1-img-txt-left-top-content">
                                  <div class="clique-section1-img-txt-left-top-content-bac"></div>
                                  <div class="clique-section1-img-txt-left-top-content-time">
                                      {{ $companyhistory[4]->year }}
                                  </div>
                                  <div class="clique-section1-img-txt-left-top-content-txt">
                                      {{ $companyhistory[4]->body }}
                                  </div>
                              </div>
                          </div>
                      </div>
                      <div class="clique-section1-img-txt-mobile">
                        @foreach ($companyhistory as $value)
                          <div class="clique-section1-img-txt-left-top">
                              <div class="clique-section1-img-txt-left-top-content">
                                  <div class="clique-section1-img-txt-left-top-content-bac"></div>
                                  <div class="clique-section1-img-txt-left-top-content-time clique-section1-img-txt-left-top-content-time-now">
                                      @if ($value->title && $loop->first)
                                        <span class="jtcreat">{{ $value->title }}</span>
                                        <div style="height: 1px;border-top: 1px solid #cef0f4;width: 83.3333%;margin: auto"></div>
                                      @endif
                                      <span>{{ $value->year }}</span>
                                  </div>
                                  <div class="clique-section1-img-txt-left-top-content-txt">
                                      {{ $value->body }}
                                  </div>
                              </div>
                              <div class="clique-section1-img-txt-left-top-img clique-section1-img-txt-right-img">
                                  <img src="/img/clique-section1-img-control-redimg.jpg" alt="">
                              </div>
                          </div>
                        @endforeach
                      </div>
                  </div>
              </div>
          </div>
          <div class="clique-section2">
              <div class="index-section1-title">
                  <div class="index-section1-title-text">
                      <div class="index-section1-title-text-bar">{{ __('home.company_hisgory.equipment.title') }}</div>
                  </div>
              </div>
              <div style="background-color: #fcc80f" class="section-hr">
                  <div style="background-color: #fcc80f" class="section-hr-big"></div>
              </div>
              <div class="clique-section2-pagination-txt">
                @foreach ($equipments as $list)
                  <div class="@if ($loop->first) active @endif">{{ $list['title'] }}</div>
                @endforeach
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
          <script>
          $(function () {
              var swiper2 = new Swiper('#swiper2', {
                  pagination: '.index-section1-pagination2',
                  paginationClickable: true,
                  uniqueNavElements: false,
                  onSlideChangeEnd: function(swiper){
                    $(".clique-section2-pagination-txt div").eq(swiper.activeIndex).addClass('active').siblings().removeClass('active');
                  }
              });

              $(".clique-section2-pagination-txt div").on("click", function() {
                var index = $(this).index();
                $(this).addClass('active').siblings().removeClass('active');
                swiper2.slideTo(index, 1000, false);//切换到第一个slide，速度为1秒
              });
          });
          </script>
@endsection
