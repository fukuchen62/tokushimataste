"use strict";

$(function () {
    // メイン画像のオプション
    $(".slider").slick({
        autoplay: false, // 自動再生ON
        arrows: false, // 矢印非表示
        asNavFor: ".thumbnail", // サムネイルと同期

    });
    // サムネイルのオプション
    $(".thumbnail").slick({
        slidesToShow: 3.5, // サムネイルの表示数
        arrows: true, // 矢印表示
        asNavFor: ".slider", // メイン画像と同期
        focusOnSelect: true, // サムネイルクリックを有効化
    });
});
