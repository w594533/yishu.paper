@extends('frontend.layouts.nofooterheader')
@section('css')
  <link rel="stylesheet" href="/css/default.css">
@endsection
@section('content')
  <div class="default-section1">
    <video id="default-video" class="default-video" autoplay poster="/img/poster.jpg" preload="auto">
        <source src="/video/default.m4v" type="video/mp4">
        <source src="/video/default.ogv" type="video/ogg">
        <source src="/video/default.webm" type="video/webm">
    </video>
    <img class="default-mobile-img" style="width: 100vw" src="/img/poster.jpg" alt="">
    <div class="default-bottom">
        <div class="enter"><a href="{{$result['isudesign_site']}}">{{ __("home.enter_site") }}</a></div>
        <div class="change">
            <span class="default-en">En</span> / <span class="default-cn">中文</span>
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
})
</script>
@endsection
