"use strict";

$(function () {
    // メイン画像のオプション
    $(".slider_ms").slick({
        autoplay: false, // 自動再生ON
        arrows: false, // 矢印非表示
        asNavFor: ".thumbnail_ms", // サムネイルと同期
        infinite: true,
        slidesToShow: 1,
        slidesToScroll: 1,
        arrows: false,
        fade: true,

    });
    // サムネイルのオプション
    $(".thumbnail_ms").slick({
        slidesToShow: 3, // サムネイルの表示数
        slidesToScroll: 1,
        arrows: true, // 矢印表示
        asNavFor: ".slider_ms", // メイン画像と同期
        focusOnSelect: true, // サムネイルクリックを有効化
        adaptiveHeight: true,//サムネ中央寄せ
        centerMode: true,//サムネ中央寄せ
    });
});
