@extends('frontend.layouts.default')
@section('firstdiv_id') contact @endsection
@section('css')
    <link rel="stylesheet" href="/css/contact.css">
@endsection
@section('content')
  <div class="content">
    <div class="index-nav-img">
            <div>
                <img style="width: 100%" src="{{$banners[0]}}" alt="">
            </div>
        </div>
        <div class="contact-section1">
            <div class="contact-section1-content">
              @foreach ($branches as $branch)
                <div class="contact-section1-content-top-box-left contact-box">
                    <div class="contact-box-inner">
                      <div class="contact-section1-content-top-box-left-title">
                          {{ $branch->name }}
                      </div>
                      @if ($branch->tel)
                        <div class="contact-section1-content-top-box-left-txt">
                            <span class="contact-cn">{{ __("home.tel") }}</span>：{{$branch->tel}}
                        </div>
                      @endif
                      @if ($branch->fax)
                        <div class="contact-section1-content-top-box-left-txt">
                            <span class="contact-cn">{{ __("home.fax") }}</span>：{{$branch->fax}}
                        </div>
                      @endif
                      @if ($branch->email)
                        <div class="contact-section1-content-top-box-left-txt">
                            <span class="contact-cn">{{ __("home.email") }}</span>：{{$branch->email}}
                        </div>
                      @endif
                      @if ($branch->address)
                        <div class="contact-section1-content-top-box-left-txt">
                            <span class="contact-cn">{{ __("home.address") }}</span>：{{$branch->address}}
                        </div>
                      @endif
                    </div>
                </div>
              @endforeach
            </div>
        </div>
  </div>
  <script>
  $(function() {
    $('.contact-box').on('mouseenter',function () {
                $('.contact-box').removeClass('contact-box-shadow');
                $(this).addClass('contact-box-shadow');
            }).on('mouseleave',function () {
                $('.contact-box').removeClass('contact-box-shadow');
            })
  })
  </script>
@endsection
