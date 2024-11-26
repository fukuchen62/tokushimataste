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
    // if ($(contents + '.is-hidden').length == 0) {
    //     $('.more').fadeOut();
    // }
});

$(document).ready(function () {

    // 現在のページ
    // 現在のページ数を格納する変数。初期値は１ページ目に設定しています。
    let current_page = 1;

    // 最大表示項目数。
    // ここの数字を弄ると、１ページに表示される項目数が変わります。
    let max_item = 6;

    // 最大ページ数
    // 何ページ分ページネーションを作成するか
    let max_page = 20;

    // 合計の項目数
    // ページネーションで
    let item_num = $(".page_list > li").length;

    // 現在の項目数を表示項目数で割り、何ページになるかを計算
    let all_page = Math.ceil(item_num / max_item);

    // 初期処理呼び出し
    initial(all_page);

    // 初期処理
    function initial(all_page) {
        // ページ数が２以上の時にページネーション作成
        if (all_page > 1) {
            // ナビゲーションを挿入する
            let pagination_html = ''
            pagination_html = '<li  class="prev"><a>前へ</a></li>';
            pagination_html += '<li class="number">';

            // 最大ページ数までページ番号を作成
            for (let i = 1; i <= max_page && i <= all_page; i++) {
                pagination_html += '<a class="js_page_switch" data-index="' + i + '">' + i + '</a>';
            }

            pagination_html += '</li>';
            pagination_html += '<li class="next"><a>次へ</a>';

            // ページネーションをDOMに挿入
            $(".pagination").html(pagination_html);

            // ページを切り替える関数
            switch_page(current_page);
        } else {
            $(".page_list > li").addClass("on");
        }
    }

    // 各ボタンのクリックイベントを定義する
    // クリックしたページネーションのページ番号を取得し、
    // ページを切り替える関数を呼び出す。
    $(document).on('click', '.js_page_switch', function () {
        current_page = $(this).data("index");
        switch_page(current_page);
    });

    // 前へボタンの処理　１ページより大きい場合ページを切り替える
    // 現在のページ数から１を引いて、ページを切り替える関数を呼び出す。
    $(document).on('click', '.prev', function () {
        if (current_page > 1) {
            current_page--;
            switch_page(current_page);
        }
    });

    // 次へボタンの処理　最大ページ数より小さい場合ページを切り替える
    // 現在のページ数から１を足して、ページを切り替える関数を呼び出す。
    $(document).on('click', '.next', function () {
        if (current_page < all_page) {
            current_page++;
            $(".js_page_switch[data-index=" + current_page + "]").trigger("click");
        }
    });

    // ぺージ切り替え処理
    function switch_page(current_page) {

        // 一旦表示を全て削除
        $(".js_page_switch").removeClass("on active");
        $(".page_list > li").removeClass("on");

        // 現在のページのボタンをアクティブにする
        $(".js_page_switch[data-index=" + current_page + "]").addClass("on active");

        // ぺージに表示する項目にクラスを付与
        const start = max_item * (current_page - 1);
        for (var i = start; i < start + max_item; i++) {
            $(".page_list > li").eq(i).addClass("on");
        }
    }
});
