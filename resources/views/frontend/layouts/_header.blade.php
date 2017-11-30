<div class="nav-nav-mobile hiden">
        <div class="nav-list-mobile">
            <ul>
                <li class="nav-active-mobile"><a href="index.html">{{ __('home.nav.home') }}</a></li>
                <li><a href="product.html">{{ __('home.nav.product') }}</a></li>
                <li><a href="clique.html">{{ __('home.nav.company') }}</a></li>
                <li><a href="design.html">{{ __('home.nav.isu_design') }}</a></li>
                <li><a href="news.html">{{ __('home.nav.news') }}</a></li>
                <li><a href="contact.html">{{ __('home.nav.contact') }}</a></li>

            </ul>
        </div>
        <div class="nav-ce-mobile">
            <div class="en" @click='en'>En</div>
            <div class="cn" @click='cn'>中文</div>
        </div>
        <div class="nav-mobile-bac"></div>
</div>
<div class="nav">
            <div class="nav-logo">
                <img src="/img/logo.jpg" alt="">
            </div>
            <div class="nav-nav">
                <div class="nav-list">
                    <ul>
                      <li class="nav-active"><a href="index.html">{{ __('home.nav.home') }}</a></li>
                      <li><a href="product.html">{{ __('home.nav.product') }}</a></li>
                      <li><a href="clique.html">{{ __('home.nav.company') }}</a></li>
                      <li><a href="design.html">{{ __('home.nav.isu_design') }}</a></li>
                      <li><a href="news.html">{{ __('home.nav.news') }}</a></li>
                      <li><a href="contact.html">{{ __('home.nav.contact') }}</a></li>
                    </ul>
                </div>
                <div class="nav-ce">
                    <div class="en" @click='en'>En</div>
                    <div class="cn" @click='cn'>中文</div>
                </div>
            </div>
            <div class="nav-bar">
                <img src="/img/bar.png" alt="">
            </div>
</div>
