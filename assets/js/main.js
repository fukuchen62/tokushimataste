// 自定義のJSの変数や関数などを記載してください。

"use strict";
//  ハンバーガーボタンがクリックされたら発動

$(function () {
    $('.hamburger').click(function () {
        $('.hamburger, .nav-sp-drawr').toggleClass('active');

    });
});//scroll_effect

function fixNav() {
    var windowSize = $(window).width();
    var nav = $('.nav-pc');
    var off = nav.offset();
    var navTop = off.top;

    var logo = $('.title-logo ');

    var navsp = $('.spnav');
    off = navsp.offset();
    var navspTop = off.top;
    // var navspTop = navsp.offset().top;

    //スクロールするたびに実行
    $(window).scroll(function () {

        var winTop = $(this).scrollTop();

        console.log("windowSize:" + windowSize);
        console.log("winTop:" + winTop);
        console.log("navTop:" + navTop);
        console.log("navspTop:" + navspTop);

        if (windowSize >= 1024) {
            //スクロール位置がnavの位置より下だったらクラスfixedを追加
            if (winTop >= navTop) {
                nav.addClass('fixed');
                logo.addClass('fixed-logo');
            } else {
                nav.removeClass('fixed');
                logo.removeClass('fixed-logo');
            }

        } else {
            // SP
            // //スクロール位置がnavの位置より下だったらクラスfixedを追加
            if (winTop >= navspTop) {
                navsp.addClass('fix-nav-sp');
            } else {
                navsp.removeClass('fix-nav-sp');
            }
        }
    });

}

// -----------------------
// ナビゲーション固定
// -----------------------

$(window).on('load', function () {
    var windowSize = $(window).width();
    var nav = $('.nav-pc');
    var logo = $('.title-logo ');
    var navsp = $('.spnav');
    var navTop = nav.offset().top;
    var navspTop = navsp.offset().top;

    //スクロールするたびに実行
    $(window).scroll(function () {

        let winTop = $(this).scrollTop();

        // console.log("windowSize:" + windowSize);
        // console.log("winTop:" + winTop);
        // console.log("navTop:" + navTop);
        // console.log("navspTop:" + navspTop);

        if (windowSize >= 1024) {
            //スクロール位置がnavの位置より下だったらクラスfixedを追加
            if (winTop >= navTop) {
                nav.addClass('fixed');
                logo.addClass('fixed-logo');
            } else {
                nav.removeClass('fixed');
                logo.removeClass('fixed-logo');
            }

        } else {
            // SP
            // //スクロール位置がnavの位置より下だったらクラスfixedを追加
            if (winTop >= navspTop) {
                navsp.addClass('fix-nav-sp');
            } else {
                navsp.removeClass('fix-nav-sp');
            }
        }
    });

    $(function () {
        $(".nav-sp-drawr").on("click", function () {

            $(".nav-sp-drawr").toggleClass("is-active");
            $(".nav-sp").toggleClass("is-active");
            if ($(".nav-sp-drawr").hasClass("is-active")) {
                $(".nav-sp-drawr").addClass('fix-hamburger');
            } else {
                $(".nav-sp-drawr").removeClass('fix-hamburger');
            }
        });
    });

});

$(window).resize(function () {
    // windowSize = $(window).width();
    // navTop = nav.offset().top;
    // navspTop = navsp.offset().top;
});

// topにいくボタン

$(function () {
    var pagetop = $('#page-top');
    pagetop.hide();
    $(window).scroll(function () {
        if ($(this).scrollTop() > 100) {
            pagetop.fadeIn();
        } else {
            pagetop.fadeOut();
        }
    });
    pagetop.click(function () {
        $('body, html').animate({ scrollTop: 0 }, 500);
        return false;
    });
});

// もっと見る
var show = 3; //最初に表示する件数
var num = 3;  //clickごとに表示したい件数
var contents = '.list li'; // 対象のlist
$(contents + ':nth-child(n + ' + (show + 1) + ')').addClass('is-hidden');
$('.more').on('click', function () {
    $(contents + '.is-hidden').slice(0, num).removeClass('is-hidden');
    if ($(contents + '.is-hidden').length == 0) {
        $('.more').fadeOut();
    }
});
