<!DOCTYPE html>
<html lang="en">
<head>
      <meta charset="UTF-8"/>
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
      <meta http-equiv="X-UA-Compatible" content="ie=edge"/>
      <meta name="keywords" content="@yield('meta_keywords', $meta_keywords)">
      <meta name="description" content="@yield('meta_description', $meta_description)">
      <link rel="icon" href="favicon.ico" type="image/x-icon">
      <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
      <link rel="stylesheet" href="/css/normalize.css">
      <link rel="stylesheet" href="/css/swiper.min.css">
      <link rel="stylesheet" href="/css/main.css">
      <script src="/js/vue.js"></script>
      <script src="/js/axios.min.js"></script>
      <script src="/js/jquery-3.2.1.min.js"></script>
      <script src="/js/swiper.jquery.min.js"></script>
      <script src="/js/moment.min.js"></script>
      <script src="/js/main.js"></script>
      @yield('css')
      @yield('js')
      <title>@yield('title', $meta_title)|一树纸业</title>
</head>
<body class="{{$lang_class}} @yield('body_class')">
  <div class="maxvw @yield('firstdiv_class')" id="@yield('firstdiv_id')">
    @include('frontend.layouts._header')
    <div class="content">
      @yield('content')
    </div>
  </div>
<script>
$(function(){
  $('.nav-list > ul > li > a').on('mouseenter', function () {
                $('.nav-list > ul > li > a').css('color', '#000');
                $(this).css('color', '#1a9edc');
            }).on('mouseleave', function () {
                $('.nav-list > ul > li > a').css('color', '#000');
                $($('.nav-list > ul > li > a')[3]).css('color', '#1a9edc');
            });
            var index = $('.nav-active-mobile').index();
            $('.nav-list-mobile > ul >li').on('mouseenter', function () {
                $('.nav-list-mobile > ul >li').removeClass('nav-active-mobile');
                $(this).addClass('nav-active-mobile');
            }).on('mouseleave', function () {
                $('.nav-list-mobile > ul >li').removeClass('nav-active-mobile');
                $($('.nav-list-mobile > ul >li')[index]).addClass('nav-active-mobile');
            });
            navBar();
})
</script>
</body>
</html>
