<div class="footer">
  <div class="index-section4 displayflex">
      <div class="index-section4-left-box displayflex">
          <div class="logo-footer-box">
              <img src="/img/logo-footer.jpg" alt="">
          </div>
          <div class="footer-list">
              <ul class="displayflex">
                <li class="{{isset($active['home'])?$active['home']:''}}"><a href="{{action('Frontend\HomeController@show')}}">{{ __('home.nav.home') }}</a></li>
                <li class="{{isset($active['product'])?$active['product']:''}}"><a href="{{action('Frontend\ProductController@show')}}">{{ __('home.nav.product') }}</a></li>
                <li class="{{isset($active['about'])?$active['about']:''}}"><a href="{{action('Frontend\AboutController@show')}}">{{ __('home.nav.company') }}</a></li>
                <li class="{{isset($active['design'])?$active['design']:''}}"><a href="{{action('Frontend\IsuDesignController@show')}}">{{ __('home.nav.isu_design') }}</a></li>
                <li class="{{isset($active['news'])?$active['news']:''}}"><a href="{{action('Frontend\NewsController@center')}}">{{ __('home.nav.news') }}</a></li>
                <li class="{{isset($active['contact'])?$active['contact']:''}}"><a href="{{action('Frontend\ContactController@show')}}">{{ __('home.nav.contact') }}</a></li>
              </ul>
          </div>
      </div>
      <div class="index-section4-right-box displayflex">
          <div class="footer-code-box">
              <img src="/img/code.jpg" alt="">
          </div>
          <div class="footer-contact displayflex">
              <p><span>{{ __('home.tel') }}</span> {{$system_infos->phone}}</p>
              <p><span>{{ __('home.email') }}</span> {{$system_infos->email}}</p>
          </div>
      </div>
  </div>
  <div class="bottom-info displayflex">
      <div class="bottom-info-list displayflex">
          <div>&copy;{{date("Y")}} tthpaper.com&nbsp;</div>
          <div>浙ICP备17047746号-2</div>
      </div>
  </div>
</div>
