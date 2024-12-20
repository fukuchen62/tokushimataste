"use strict";

// もっと見る
var show = 3; //最初に表示する件数

let flag_show_g1 = true;              //true:隠す項目ある状態、false：全表示状態
let flag_show_g2 = true;              //true:隠す項目ある状態、false：全表示状態
let flag_show_g3 = true;             //true:隠す項目ある状態、false：全表示状態
let flag_show_g4 = true;             //true:隠す項目ある状態、false：全表示状態


$(document).ready(function () {
    // 副菜の処理
    var contents = '.g1 li'; // 対象のlist

    // 4つ目からのカード型を非表示させる
    jQuery(contents + ':nth-child(n + ' + (show + 1) + ')').addClass('is-hidden');

    // 表示・隠すボタンのクリック処理
    jQuery('#btn1').on('click', function () {

        if (flag_show_g1) {
            // 隠すカードを表示させる
            jQuery(contents + ':nth-child(n + ' + (show + 1) + ')').removeClass('is-hidden');

            // ボタン名はもっと見るから閉じるに変更
            $('#btn1').text('とじる').addClass('close');
            // 表示フラグを切り替える
            flag_show_g1 = false;
        } else {
            //４件目からを隠せる処理
            jQuery(contents + ':nth-child(n + ' + (show + 1) + ')').addClass('is-hidden');

            // ボタン名はもっと見るから閉じるに変更
            jQuery('#btn1').text('もっと見る').removeClass('close');
            // 表示フラグを切り替える
            flag_show_g1 = true;
        }
    });
});

$(document).ready(function () {
    // メインディッシュの処理
    var contents = '.g2 li'; // 対象のlist

    // 4つ目からのカード型を非表示させる
    jQuery(contents + ':nth-child(n + ' + (show + 1) + ')').addClass('is-hidden');

    // 表示・隠すボタンのクリック処理
    jQuery('#btn2').on('click', function () {

        if (flag_show_g2) {
            // 隠すカードを表示させる
            jQuery(contents + ':nth-child(n + ' + (show + 1) + ')').removeClass('is-hidden');

            // ボタン名はもっと見るから閉じるに変更
            $('#btn2').text('とじる').addClass('close');
            // 表示フラグを切り替える
            flag_show_g2 = false;
        } else {
            //４件目からを隠せる処理
            jQuery(contents + ':nth-child(n + ' + (show + 1) + ')').addClass('is-hidden');

            // ボタン名はもっと見るから閉じるに変更
            jQuery('#btn2').text('もっと見る').removeClass('close');
            // 表示フラグを切り替える
            flag_show_g2 = true;
        }
    });
});

$(document).ready(function () {
    // 軽食の処理
    var contents = '.g3 li'; // 対象のlist

    // 4つ目からのカード型を非表示させる
    jQuery(contents + ':nth-child(n + ' + (show + 1) + ')').addClass('is-hidden');

    // 表示・隠すボタンのクリック処理
    jQuery('#btn3').on('click', function () {

        if (flag_show_g3) {
            // 隠すカードを表示させる
            jQuery(contents + ':nth-child(n + ' + (show + 1) + ')').removeClass('is-hidden');

            // ボタン名はもっと見るから閉じるに変更
            $('#btn3').text('とじる').addClass('close');
            // 表示フラグを切り替える
            flag_show_g3 = false;
        } else {
            //４件目からを隠せる処理
            jQuery(contents + ':nth-child(n + ' + (show + 1) + ')').addClass('is-hidden');

            // ボタン名はもっと見るから閉じるに変更
            jQuery('#btn3').text('もっと見る').removeClass('close');
            // 表示フラグを切り替える
            flag_show_g3 = true;
        }
    });
});

$(document).ready(function () {
    // その他の処理
    var contents = '.g4 li'; // 対象のlist

    // 4つ目からのカード型を非表示させる
    jQuery(contents + ':nth-child(n + ' + (show + 1) + ')').addClass('is-hidden');

    // 表示・隠すボタンのクリック処理
    jQuery('#btn4').on('click', function () {

        if (flag_show_g4) {
            // 隠すカードを表示させる
            jQuery(contents + ':nth-child(n + ' + (show + 1) + ')').removeClass('is-hidden');

            // ボタン名はもっと見るから閉じるに変更
            $('#btn4').text('とじる').addClass('close');
            // 表示フラグを切り替える
            flag_show_g4 = false;
        } else {
            //４件目からを隠せる処理
            jQuery(contents + ':nth-child(n + ' + (show + 1) + ')').addClass('is-hidden');

            // ボタン名はもっと見るから閉じるに変更
            jQuery('#btn4').text('もっと見る').removeClass('close');
            // 表示フラグを切り替える
            flag_show_g4 = true;
        }
    });
});

// レシピ詳細slick

$(function () {
    // メイン画像のオプション
    $(".slider_rs").slick({
        autoplay: false, // 自動再生ON
        arrows: false, // 矢印非表示
        asNavFor: ".thumbnail_rs", // サムネイルと同期

    });
    // サムネイルのオプション
    $(".thumbnail_rs").slick({
        slidesToShow: 3, // サムネイルの表示数
        arrows: true, // 矢印表示
        asNavFor: ".slider_rs", // メイン画像と同期
        focusOnSelect: true, // サムネイルクリックを有効化
        adaptiveHeight: true,//サムネ中央寄せ
        centerMode: true,//サムネ中央寄せ
    });
});
