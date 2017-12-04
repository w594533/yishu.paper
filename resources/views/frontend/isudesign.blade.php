@extends('frontend.layouts.nofooter')
@section('css')
  <link rel="stylesheet" href="/css/design.css">
@endsection
@section('firstdiv_class') design @endsection
@section('firstdiv_id') design @endsection
@section('content')
<div class="design-img">
    <img src="/img/design-img2.jpg" alt="">
</div>
<div class="design-three-content">
    <div class="design-logo">
        <img src="/img/design-logo.png" alt="">
    </div>
    <div class="design-btn">
        <img src="/img/design-btn.png" alt="">
        <div class="design-btn-txt"><a href="{{$isu_design['site']}}">{{ __('home.enter_isudesign') }}</a></div>
    </div>
    <div class="design-txt-box">
        <div class="design-txt1"></div>
        <div class="design-txt2">
            {{$isu_design['body']}}
        </div>
    </div>
</div>
@endsection
