"use strict";

$(function () {
    // メイン画像のオプション
    $(".slider_ms").slick({
        autoplay: false, // 自動再生ON
        arrows: false, // 矢印非表示
        asNavFor: ".thumbnail_ms", // サムネイルと同期

    });
    // サムネイルのオプション
    $(".thumbnail_ms").slick({
        slidesToShow: 3.5, // サムネイルの表示数
        arrows: true, // 矢印表示
        asNavFor: ".slider_ms", // メイン画像と同期
        focusOnSelect: true, // サムネイルクリックを有効化
    });
});
