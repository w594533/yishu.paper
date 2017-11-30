@extends('frontend.layouts.default')
@section('css')
  <link rel="stylesheet" href="/css/product.css">
@endsection
@section('content')
  <div class="content">
    <div class="index-nav-img">
                <div>
                    <img style="width: 100%" src="{{$banners[0]}}" alt="">
                </div>
            </div>
            <div class="product-section1">
                <div class="product-img-teams">
                    <div class="product-img-teams-ul-box">
                        <div class="product-img-teams-left-text">
                            <ul>
                              @foreach ($products as $product)
                                <li><span class="active">{{ $product->title }}</span></li>
                              @endforeach
                            </ul>
                        </div>
                    </div>
                    <div class="product-img-teams-right-imgs">
                        <div>
                            <div class="product-img-teams-right-imgs-class ">
                                <span class="active" v-cloak>{{class1}}</span>
                                <span v-cloak>{{class2}}</span>
                                <span v-cloak>{{class3}}</span>
                                <span v-cloak>{{class4}}</span>
                                <span v-cloak>{{class5}}</span>
                                <span v-cloak>{{class6}}</span>
                            </div>
                            <div class="product-img-teams-right-imgs-box product-img-teams-right-imgs-box1">
                                <div class="product-img-teams-right-imgs-box1-leftimg">
                                    <div class="product-section1-img-big">
                                        <img class="product-section1-img-big-left" src="http://api.cn.tthpaper.com/storage/upload/products/image/b6d9fc8af149b91d7ea713a4c31df093.jpg"
                                             alt="">
                                        <img class="product-section1-img-big-now" src="http://api.cn.tthpaper.com/storage/upload/products/image/b6d9fc8af149b91d7ea713a4c31df093.jpg"
                                             alt="">
                                        <img class="product-section1-img-big-right" src="http://api.cn.tthpaper.com/storage/upload/products/image/b6d9fc8af149b91d7ea713a4c31df093.jpg"
                                             alt="">
                                    </div>
                                    <div class="product-bac-img"
                                         style="width:100%;height:100%;position: absolute;top: 0;opacity: 0">
                                        <img src="imgs/index-section2-bacimg.jpg" alt="">
                                    </div>
                                    <div style="opacity: 0" class="product-img-alt" v-html="productImgAlt">
                                    </div>
                                </div>
                                <div class="product-img-teams-right-imgs-box1-rightbox">
                                    <div class="product-img-teams-right-imgs-box1-rightbox1">
                                        <div class="img-box product-section1-img1">
                                            <img src="http://api.cn.tthpaper.com/storage/upload/products/image/b6d9fc8af149b91d7ea713a4c31df093.jpg"
                                                 alt="">
                                            <div class="magnifying">
                                                <img src="imgs/magnifying.png" alt="">
                                            </div>
                                        </div>
                                        <div class="img-box product-section1-img2">
                                            <img src="http://api.cn.tthpaper.com/storage/upload/products/image/de62e0c4e6256ebd872075028bdc8021.jpg"
                                                 alt="">
                                            <div class="magnifying">
                                                <img src="imgs/magnifying.png" alt="">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="product-img-teams-right-imgs-box1-rightbox2">
                                        <div class="img-box product-section1-img3">
                                            <img src="http://api.cn.tthpaper.com/storage/upload/products/image/e65caebc5ce9c03bd8670d4318fc8daf.jpg"
                                                 alt="">
                                            <div class="magnifying">
                                                <img src="imgs/magnifying.png" alt="">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="product-imgs-control">
                                <img class="prev" src="imgs/index-section2-left.jpg" alt="">
                                <img class="next" src="imgs/index-section2-right.jpg" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
  </div>

@endsection
