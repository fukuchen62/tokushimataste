// すだちくん
// すだちくんをクリックする度に「現れてしゃべる」と「隠れる」を交互に繰り返す

$.fn.clickToggle = function (a, b) {
    return this.each(function () {
        var clicked = false;
        $(this).on('click', function () {
            clicked = !clicked;
            if (clicked) {
                return b.apply(this, arguments);
            }
            return a.apply(this, arguments);
        });
    });
};

$(document).ready(function () {
    $(".sudachi").hide(); // 初期状態で非表示にします
    $("#scroll").hide();// 初期状態で非表示にします

    $(window).scroll(function () {
        var scrollTop = $(window).scrollTop(),
            docHeight = $(document).height(),
            winHeight = $(window).height(),
            scrollPercent = (scrollTop) / (docHeight - winHeight),
            scrollPercentRounded = Math.round(scrollPercent * 100);

        if (scrollPercentRounded > 90) {
            $(".sudachi").show(); // 90%以上で要素を表示
            $(".sudachi_commentbox").show(); // 90%以上で要素を表示
            $(".sudachi_comment").show(); // 90%以上で要素を表示
            $("#scroll").show(); // 90%以上で要素を表示
        } else {
            $(".sudachi").hide(); // 90%未満で要素を非表示
            $(".sudachi_commentbox").hide(); // 90%未満で要素を非表示
            $(".sudachi_comment").hide(); // 90%未満で要素を非表示
            $("#scroll").hide(); // 90%未満で要素を非表示
        }
    });
});


// すだちくんを押すと吹き出しが出て、もう一度押すと２秒かけて消える

$(function () {

    // ボタンをクリックしたら発動
    $('.sudachi').click(function () {

        // 連打で暴走しないようにstop()も設定
        $('.sudachi_commentset').stop().slideToggle(-100);
        // すだちくんにクラス追加
        $(".sudachi").toggleClass("is-active")
        $(".sudachi_commentset").toggleClass("is-active")
        // alert("クリックされました");
        $('sudachi_trivia').css({
            'display': 'block',
        });
    });
});



$('.sudachi').clickToggle(function () {
    //   // １回目のクリック
    // $(".sudachi").animate({ "marginLeft": "+=60px", }, 500);
    // $(".sudachi").animate({ "rotate": "0deg", }, 500);


    // $(".sudachi").animate({ "marginLeft": "-=60px", }, 500);
    // $(".sudachi").animate({ "rotate": "45deg", }, 500);

}, function () {
    //   // ２回目のクリック
    // $(".sudachi").animate({ "marginLeft": "-=60px", }, 500);
    // $(".sudachi").animate({ "rotate": "45deg", }, 500);

    // $(".sudachi").animate({ "marginLeft": "+=60px", }, 500);
    // $(".sudachi").animate({ "rotate": "0deg", }, 500);
});

// トップへ戻る

// $(function () {
//     var topBtn = $('#scroll');
//     topBtn.hide();
//     //スクロールが5000に達したらボタン表示
//     $(window).scroll(function () {
//         if ($(this).scrollTop() > 4500) {
//             topBtn.fadeIn();
//         } else {
//             topBtn.fadeOut();
//         }
//     });
// });

$('#scroll').click(function () {
    $('body, html').animate({ scrollTop: 0 }, 500);
});

// // ページトップボタン
// $(function () {
//     const pageTop = $("#page-top");
//     pageTop.hide();
//     $(window).scroll(function () {
//         if ($(this).scrollTop() > 5500) {
//             pageTop.fadeIn();
//         } else {
//             pageTop.fadeOut();
//         }
//     });
//     pageTop.click(function () {
//         $("body,html").animate(
//             {
//                 scrollTop: 0,
//             },
//             100
//         );
//         return false;
//     });
//     // フッター手前でストップ
//     $("#page-top").hide();
//     $(window).on("scroll", function () {
//         let scrollHeight = $(document).height();
//         let scrollPosition = $(window).height() + $(window).scrollTop();
//         let footHeight = $("footer").innerHeight();
//         if (scrollHeight - scrollPosition <= footHeight) {
//             $("#page-top").css({
//                 position: "absolute",
//                 bottom: footHeight,
//             });
//         } else {
//             $("#page-top").css({
//                 position: "fixed",
//                 bottom: "0",
//             });
//         }
//     });
// });


let mames = [
    "レンコンはおせちにもおすすめの食材じゃよ",
    "タケノコは阿南市の特産品なんじょ",
    "ちりめんは和田島町が有名なんじょ",
    "「木頭ゆず」は日本一の柚子なんでよ",
    "フィッシュかつは徳島のソウルフード！",
    "徳島の梅干しは神山ルビィが有名じゃよ",
    "フィッシュかつは小松島市が有名なんでよ",
    "すだちとかぼすは違うんじょ～",
    // "かずら橋は「祖谷のかずら橋」と「奥祖谷二重かずら橋」の２箇所あるワン",
    // "吉野川は「四国三郎」と呼ばれるすごい暴れ川だったんだワン",
    // "徳島は日本で唯一、電車が走っていないんだワン！",
    // "「電車」じゃなくて「汽車」だワン！",
    // "踊る阿呆に見る阿呆、同じ阿呆なら踊らにゃソンソン！",
    // "渦の道は、ちょっと怖いけど真上から渦潮を見られるんだワン！",
    // "お遍路さんのスタートである１番札所は、徳島県にあるんだワン！",
    // "徳島県民はお好み焼きに金時豆を入れるんだワン！",
    // "豚骨醤油スープに甘辛い豚バラと生卵！徳島ラーメンご賞味あれ！だワン！",
    // "阿波和三盆糖は、徳島で作られている国内産のお砂糖なんだワン！",
    // "徳島県民の食卓に味付け海苔はマストだワン",
    // "眉山ロープウェイから見る徳島は、昼も夜も絶景だワン！",
    // "徳島のお盆は、毎年阿波踊りで大盛り上がりだワン！",
    // "日本百名山にも名を連ねている「剣山」は西日本2位だワン",
    // "すだちくんの阿波弁講座<br>　「せこい」は「お腹いっぱい」だワン",
    // "すだちくんの阿波弁講座<br>　「ごっつい」は「すごい」だワン！ごっついワン",
    // "すだちくんの阿波弁講座<br>　「おとろしい」は「恐ろしい」だワン",
    // "すだちくんの阿波弁講座<br>　「もんてきぃ」は「帰っておいで」だワン",
    // "すだちくんの阿波弁講座<br>　「いける？」は「大丈夫？」だワン!どこにも行かないワン",
    // "すだちくんの阿波弁講座<br>　「かんまん」は「かまわない」だワン",
    // "すだちくんの阿波弁講座<br>　「あるでないで」は「あるじゃないか」だワン",
    // "すだちくんの阿波弁講座<br>　「えっとぶりで～」は「久しぶりだね～」だワン",
    // "すだちくんの阿波弁講座<br>　「おもっしょい」は「おもしろい」だワン",
    // "すだちくんの阿波弁講座<br>　「こんまいワンちゃん」は「小さいワンちゃん」だワン",
    // "すだちくんの阿波弁講座<br>　「しわしわいきよ～」は「ゆっくり行きなよ～」だワン",
    // "すだちくんの阿波弁講座　「〇〇をかいて」は「〇〇を持って」だワン",
];

function msgOutput() {
    let r = Math.floor(Math.random() * mames.length);
    document.getElementById("sudachi_comment").innerHTML = mames[r];
}

document.getElementById("sudachi").addEventListener("click", msgOutput);
