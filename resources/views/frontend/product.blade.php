@extends('frontend.layouts.default')
@section('css')
  <link rel="stylesheet" href="/css/product.css">
@endsection
@section('content')
  <div class="index-nav-img">
    <div>
      <img style="width: 100%" src="{{$banners[0]}}" alt="">
    </div>
  </div>
  <div class="product-content">
    <div class="product-section1">
      <div class="product-img-teams">
        <div class="product-lists">
          <div class="product-img-teams-ul-box">
            <div class="product-img-teams-left-text">
              <ul>
                @foreach ($product_categories as $product_category)
                  <li class="tab" data-id="{{$product_category->id}}"><span class="@if ($product_category->id == $parent_product_category_id) active @endif">{{ $product_category->title }}</span></li>
                  @endforeach
                </ul>
              </div>
            </div>

            <div class="product-img-teams-right-imgs">
              <div class="sub-category">
                <ul>
                  @foreach ($products->childrenCategories as $product)
                    <li data-id="{{$product->id}}" class="tab @if ($product->id == $child_product_category_id) active @endif">{{ $product->title }}</li>
                    @endforeach
                  </ul>
                </div>
                @if (count($images) >0)
                  <div class="product-img-teams-right-imgs-box product-img-teams-right-imgs-box1">
                    <div class="product-img-teams-right-imgs-box1-leftimg">
                      <a href="javascript:void(0)">
                        <img src="{{ Storage::url($images[0]) }}" >
                        @if (strip_tags($products->description))
                          <div class="product-description">
                            <div class="text">{!! strip_tags($products->description, '<p><br/><br>') !!}</div>
                            </div>
                          @endif
                        </a>
                      </div>
                    </div>
                  @endif
                  <div class="product-img-teams-right-imgs-box1-rightbox">
                    @foreach ($images as $key => $image)
                      @if (($key+1) > 4)
                        @break
                      @endif
                      <div class="img-box product-section1-img1 spec-img-box_{{$key}}">
                        <img src="{{ Storage::url($image) }} " alt="">
                        <div class="magnifying">
                          <img src="/img/magnifying.png" alt="">
                        </div>
                      </div>
                    @endforeach
                  </div>
                  <div class="imgs-list">
                    <div class="product-img-teams-right-imgs-box1-rightbox">
                      @foreach ($images as $key => $image)
                        <div class="img-box product-section1-img1 @if (($key+1) <= 4) special-img @endif">
                          <img src="{{ Storage::url($image)}} " alt="">
                          <div class="magnifying">
                            <img src="/img/magnifying.png" alt="">
                          </div>
                        </div>
                      @endforeach
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          @if (count($images) >0)
          <div class="pc-banner">
            <div class="swiper-container" id="swiper-product">
              <div class="swiper-wrapper">
                @foreach ($images as $image)
                  <div class="swiper-slide @if ($loop->first) swiper-slide-center none-effect @endif">
                    <a href="javascript:void(0)">
                      <img src="{{ Storage::url($image) }}" >
                      @if (strip_tags($products->description))
                        <div class="product-description">
                          {{-- <div class="title">{{$products->title}}</div> --}}
                          <div class="text">{!! strip_tags($products->description, '<p><br/><br>') !!}</div>
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
            @endif
          </div>
        </div>
      </div>
    </div>
    <script>
    $(function() {
      // $(".img-box").on('click', function() {
      //   var img_src = $(this).find("img").first().attr("src");
      //   $(".product-img-teams-right-imgs-box1-leftimg").find("img").attr("src", img_src);
      // })
      $('.img-box').on('mouseenter', function () {
                $(this).find('.magnifying img').animate({
                    opacity: 1
                },500)
            }).on('mouseleave', function () {
                $(this).find('.magnifying img').animate({
                    opacity: 0
                },500)
      });
      $('.magnifying').on('click', function () {
          var img_src = $(this).siblings("img").attr("src");
          $(".product-img-teams-right-imgs-box1-leftimg").find("img").attr("src", img_src);
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
      $(".tab").on("click", function() {
        var id = $(this).data("id");
        location.href="/product?id="+id;
      })
    })
  </script>
@endsection
