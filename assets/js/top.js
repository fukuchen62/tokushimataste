"use strict";

// -----------------------
// キービジュアルのスライド
// -----------------------

$(function () {
    $(".single-item").slick({
        autoplay: true,
        autoplaySpeed: 5000,
        // dots: true,
        fade: true,
        cssEase: "linear", //スライドの流れを等速
        speed: 1000,
        arrows: true,
        pauseOnFocus: false,//フォーカスで一時停止
        pauseOnHover: false,//マウスホバーで一時停止
    });

});


// -----------------------
// ループスライド
// -----------------------
$(function () {
    $('.scroll-slide').slick({
        autoplay: true, //自動再生ON
        autoplaySpeed: 0, //自動再生のスライド切り替えまでの時間
        speed: 9000, //スライドの速度
        cssEase: "linear", //スライドの流れを等速
        swipe: false, // 操作による切り替えOFF
        arrows: true, //矢印非表示
        pauseOnFocus: false, //スライダーをフォーカスした時にスライドを停止させるか
        pauseOnHover: false, //スライダーにマウスホバーした時にスライドを停止させるか
        // variableWidth: true,//スライドの要素の幅をcssで設定できる
    });
});
