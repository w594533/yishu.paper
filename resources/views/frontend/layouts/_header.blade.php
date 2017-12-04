<div class="nav-nav-mobile hiden">
        <div class="nav-list-mobile">
            <ul>
              <li class="{{isset($active['home'])?$active['home']:''}}"><a href="{{action('Frontend\HomeController@show')}}">{{ __('home.nav.home') }}</a></li>
              <li class="{{isset($active['product'])?$active['product']:''}}"><a href="{{action('Frontend\ProductController@show')}}">{{ __('home.nav.product') }}</a></li>
              <li class="{{isset($active['about'])?$active['about']:''}}"><a href="{{action('Frontend\AboutController@show')}}">{{ __('home.nav.company') }}</a></li>
              <li class="{{isset($active['design'])?$active['design']:''}}"><a href="{{action('Frontend\IsuDesignController@show')}}">{{ __('home.nav.isu_design') }}</a></li>
              <li class="{{isset($active['news'])?$active['news']:''}}"><a href="{{action('Frontend\NewsController@center')}}">{{ __('home.nav.news') }}</a></li>
              <li class="{{isset($active['contact'])?$active['contact']:''}}"><a href="{{action('Frontend\ContactController@show')}}">{{ __('home.nav.contact') }}</a></li>
            </ul>
        </div>
        <div class="nav-ce-mobile">
          <div class="en @if ($locale == 'en') active @endif"><a href="{{$website_en}}">En</a></div>
          <div class="cn @if ($locale == 'zh-CN') active @endif"><a href="{{$website_cn}}">中文</a></div>
        </div>
        <div class="nav-mobile-bac"></div>
</div>
<div class="nav">
            <div class="nav-logo">
                <img src="/img/logo.jpg" alt="">
            </div>
            <div class="nav-nav">
                <div class="nav-list">
                    <ul class="nav-top">
                      <li class="{{isset($active['home'])?$active['home']:''}}"><a href="{{action('Frontend\HomeController@show')}}">{{ __('home.nav.home') }}</a></li>
                      <li class="{{isset($active['product'])?$active['product']:''}}"><a href="{{action('Frontend\ProductController@show')}}">{{ __('home.nav.product') }}</a></li>
                      <li class="{{isset($active['about'])?$active['about']:''}}"><a href="{{action('Frontend\AboutController@show')}}">{{ __('home.nav.company') }}</a></li>
                      <li class="{{isset($active['design'])?$active['design']:''}}"><a href="{{action('Frontend\IsuDesignController@show')}}">{{ __('home.nav.isu_design') }}</a></li>
                      <li class="{{isset($active['news'])?$active['news']:''}}"><a href="{{action('Frontend\NewsController@center')}}">{{ __('home.nav.news') }}</a></li>
                      <li class="{{isset($active['contact'])?$active['contact']:''}}"><a href="{{action('Frontend\ContactController@show')}}">{{ __('home.nav.contact') }}</a></li>
                    </ul>
                </div>
                <div class="nav-ce">
                  <div class="en @if ($locale == 'en') active @endif"><a href="{{$website_en}}">En</a></div>
                  <div class="cn @if ($locale == 'zh-CN') active @endif"><a href="{{$website_cn}}">中文</a></div>
                </div>
            </div>
            <div class="nav-bar">
                <img src="/img/bar.png" alt="">
            </div>
</div>
