@section('content')
  <div class="content">
    <div class="index-nav-img">
            <div>
                <img style="width: 100%" :src="contactNavImg" alt="">
            </div>
        </div>
        <div class="contact-section1">
            <div class="contact-section1-content">
                <div class="contact-section1-content-box">
                    <div class="contact-section1-content-top-box-left contact-box">
                        <div v-cloak class="contact-section1-content-top-box-left-title">
                            {{zjispaper}}
                        </div>
                        <div v-cloak class="contact-section1-content-top-box-left-txt">
                            <span class="contact-cn">电话</span><span class="contact-en">Tel</span>：{{zjispaperTel}}
                        </div>
                        <div v-cloak class="contact-section1-content-top-box-left-txt">
                            <span class="contact-cn">地址</span><span class="contact-en">Addr</span>：{{zjispaperAddress}}
                        </div>
                    </div>
                    <div class="contact-section1-content-top-box-right contact-box">
                        <div v-cloak class="contact-section1-content-top-box-left-title">
                            {{hzpaper}}
                        </div>
                        <div v-cloak class="contact-section1-content-top-box-left-txt">
                            <span class="contact-cn">电话</span><span class="contact-en">Tel</span>：{{hzpaperTel}}
                        </div>
                        <div v-cloak class="contact-section1-content-top-box-left-txt">
                            <span class="contact-cn">邮箱</span><span class="contact-en">Email</span>：{{hzpaperEmail}}
                        </div>
                        <div v-cloak class="contact-section1-content-top-box-left-txt">
                            <span class="contact-cn">地址</span><span class="contact-en">Addr</span>：{{hzpaperAddress}}
                        </div>
                    </div>
                </div>
                <div class="contact-section1-content-box">
                    <div class="contact-section1-content-top-box-left contact-box">
                        <div v-cloak class="contact-section1-content-top-box-left-title">
                            {{wzpaper}}
                        </div>
                        <div v-cloak class="contact-section1-content-top-box-left-txt">
                            <span class="contact-cn">电话</span><span class="contact-en">Tel</span>：{{wzpaperTel}}
                        </div>
                        <div v-cloak class="contact-section1-content-top-box-left-txt">
                            <span class="contact-cn">传真</span><span class="contact-en">Fax</span>：{{wzpaperFax}}
                        </div>
                        <div v-cloak class="contact-section1-content-top-box-left-txt">
                            <span class="contact-cn">邮箱</span><span class="contact-en">Email</span>：{{wzpaperEmail}}
                        </div>
                        <div v-cloak class="contact-section1-content-top-box-left-txt">
                            <span class="contact-cn">地址</span><span class="contact-en">Addr</span>：{{wzpaperAddress}}
                        </div>
                    </div>
                    <div class="contact-section1-content-top-box-right contact-box">
                        <div v-cloak class="contact-section1-content-top-box-left-title">
                            {{dgpaper}}
                        </div>
                        <div v-cloak class="contact-section1-content-top-box-left-txt">
                            <span class="contact-cn">电话</span><span class="contact-en">Tel</span>：{{dgpaperTel}}
                        </div>
                        <div v-cloak class="contact-section1-content-top-box-left-txt">
                            <span class="contact-cn">传真</span><span class="contact-en">Fax</span>：{{dgpaperFax}}
                        </div>
                        <div v-cloak class="contact-section1-content-top-box-left-txt">
                            <span class="contact-cn">邮箱</span><span class="contact-en">Email</span>：{{dgpaperEmail}}
                        </div>
                        <div v-cloak class="contact-section1-content-top-box-left-txt">
                            <span class="contact-cn">地址</span><span class="contact-en">Addr</span>：{{dgpaperAddress}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
  </div>

@endsection
