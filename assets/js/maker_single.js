"use strict";

// $(function () {
//     // メイン画像のオプション
//     $(".slider_ms").slick({
//         autoplay: false, // 自動再生ON
//         arrows: false, // 矢印非表示
//         asNavFor: ".thumbnail_ms", // サムネイルと同期
//         infinite: true,
//         slidesToShow: 1,
//         slidesToScroll: 1,
//         arrows: false,
//         fade: true,

//     });
//     // サムネイルのオプション
//     $(".thumbnail_ms").slick({
//         slidesToShow: 3, // サムネイルの表示数
//         slidesToScroll: 1,
//         arrows: true, // 矢印表示
//         asNavFor: ".slider_ms", // メイン画像と同期
//         focusOnSelect: true, // サムネイルクリックを有効化
//         adaptiveHeight: true,//サムネ中央寄せ
//         centerMode: true,//サムネ中央寄せ
//     });
// });
// 以下はSlickを使っているページのために追加したコード
// 福島 2024/12/07
$(function () {
    var slide_main = $(".slider_ms").slick({
        asNavFor: ".thumbnail_ms",
        infinite: true,
        slidesToShow: 1,
        slidesToScroll: 1,
        arrows: false,
        fade: true,
    });
    var slide_sub = $(".thumbnail_ms").slick({
        asNavFor: ".slider_ms",
        centerMode: true,
        infinite: true,
        slidesToShow: 3,
        slidesToScroll: 1,
        autoplay: false,
        arrows: true,
        autoplaySpeed: 4000,
        speed: 400,
        focusOnSelect: true,
        variableWidth: false // 可変幅を無効化
    });
    // var open_window_Width = $(window).width();
    // $(window).resize(function () {
    //     var width = $(window).width();
    //     if (open_window_Width != width) {
    //         slide_main.slick("setPosition");
    //         slide_sub.slick("setPosition");
    //     }
    // });
});
