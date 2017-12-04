@extends('frontend.layouts.nofooterheader')
@section('css')
  <link rel="stylesheet" href="/css/default.css">
@endsection
@section('content')
  <div class="default-section1">
    <div class="default-pc">
      <video id="default-video" class="default-video" autoplay poster="/img/poster.jpg" preload="auto">
          <source src="http://site-share.oss-cn-beijing.aliyuncs.com/video/default.m4v" type="video/mp4">
          <source src="http://site-share.oss-cn-beijing.aliyuncs.com/video/default.ogv" type="video/ogg">
          <source src="http://site-share.oss-cn-beijing.aliyuncs.com/video/default.webm" type="video/webm">
      </video>
      <div class="default-bottom">
          <div class="enter"><a href="{{route('home')}}">{{ __("home.enter_site") }}</a></div>
          <div class="change">
              <span class="default-en"><a href="{{$system_infos->en_site}}">En</a></span> / <span class="default-cn"><a href="{{$system_infos->cn_site}}">中文</a></span>
          </div>
      </div>
    </div>
    <div class="default-mobile">
      <div class="default-mobile-innner">
        <img src="/img/default.jpg"/>
        <div class="default-bottom">
            <div class="enter"><a href="{{route('home')}}">{{ __("home.enter_site") }}</a></div>
            <div class="change">
                <span class="default-en"><a href="{{$system_infos->en_site}}">En</a></span> / <span class="default-cn"><a href="{{$system_infos->cn_site}}">中文</a></span>
            </div>
        </div>
      </div>
    </div>
</div>
<script>
$(function() {
  var video = document.getElementById("default-video");
  video.addEventListener('ended', function () {
        console.log("结束");
        $(".default-bottom").fadeIn().css("display","flex");
  }, false);

  $(".default-mobile").height($(window).height());
  $(window).resize(function() {
    $(".default-mobile").height($(window).height());
  })
})
</script>
@endsection
