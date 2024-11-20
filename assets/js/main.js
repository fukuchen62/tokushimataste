// 自定義のJSの変数や関数などを記載してください。

"use strict";
//  ハンバーガーボタンがクリックされたら発動

$(function () {
    $('.hamburger').click(function () {
        $('.hamburger, .slide-menu').toggleClass('active');
    });
});//scroll_effect


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
