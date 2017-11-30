/**
 * Created by Administrator on 2017/11/13.
 */
function navHover() {
    var index = $('.nav-active').index();
    $('.nav-list > ul >li').on('mouseenter',function () {
        $('.nav-list > ul >li').removeClass('nav-active');
        $(this).addClass('nav-active');
    }).on('mouseleave',function () {
        $('.nav-list > ul >li').removeClass('nav-active');
        $($('.nav-list > ul >li')[index]).addClass('nav-active');
    });
    $('.nav-list-mobile > ul >li').on('mouseenter',function () {
        $('.nav-list-mobile > ul >li').removeClass('nav-active-mobile');
        $(this).addClass('nav-active-mobile');
    }).on('mouseleave',function () {
        $('.nav-list-mobile > ul >li').removeClass('nav-active-mobile');
        $($('.nav-list-mobile > ul >li')[index]).addClass('nav-active-mobile');
    })
};
function navBar() {
    $('.nav-bar').on('click',function () {
        $('.nav-nav-mobile').removeClass('hiden');
        $(document.body).css('overflow','hidden');
    });
    $('.nav-nav-mobile').on('click',function () {
        $('.nav-nav-mobile').addClass('hiden');
        $(document.body).css('overflow','auto')
    });
};
function footerNav() {
    var footerindex = $('.footer-active').index();

    $('.footer-list > ul > li').on('mouseenter',function () {
        $('.footer-list > ul > li').removeClass('footer-active');
        $(this).addClass('footer-active');
    });
    $('.footer-list > ul').on('mouseleave',function () {
        $('.footer-list > ul > li').removeClass('footer-active');
        $($('.footer-list > ul > li')[footerindex]).addClass('footer-active');
    })
};
function system(self, data) {
    self.navIndex = data.nav[0];
    self.navProduct = data.nav[1];
    self.navClique = data.nav[2];
    self.navDesign = data.nav[3];
    self.navNews = data.nav[4];
    self.navContact = data.nav[5];
    self.footerTel = data.keys.tel;
    self.footerEmail = data.keys.email;
};
$(function () {
    if (localStorage.getItem("key") === 'cn') {
        $('.index-section4').css('font-size', '16px');
        $('.nav-list > ul').css('font-size', '16px');
    } else if (localStorage.getItem("key") === 'en') {
        $('.index-section4').css('font-size', '12px');
        $('.nav-list > ul').css('font-size', '12px');
        $(document.body).css('font-family','arial');
    } else {
        $('.index-section4').css('font-size', '16px');
        $('.nav-list > ul').css('font-size', '16px');
    }
});