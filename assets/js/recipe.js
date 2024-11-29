// // Show the first four images
// $("img:lt(4)").show();

// // When the gallery button is clicked
// $("#gallery-btn").on('click', function (event) {
//     // Prevent default behavior
//     event.preventDefault();
//     // All of the hidden images
//     var $hidden = $("img:hidden");
//     // Show the next four images
//     $($hidden).slice(0, 4).fadeIn(800);
//     // If the length of $hidden is 4 then hide the button
//     if ($hidden.length == 4) {
//         $(this).fadeOut();
//     }
// });

// もっと見る１
var show = 3; //最初に表示する件数
var num = 3;  //clickごとに表示したい件数
var contents = '.g1 li'; // 対象のlist
$(contents + ':nth-child(n + ' + (show + 1) + ')').addClass('is-hidden');
$('#btn1').on('click', function () {
    $(contents + '.is-hidden').slice(0, num).removeClass('is-hidden');
    if ($(contents + '.is-hidden').
        length == 0) {
        $('#btn1').fadeOut();
    }
});
// 表示数＋num
// show_g1 += num;
// if (show_g1 >= num_g1) {
// ボタン名はopenからcloseに変更
// $('#btn2').text('閉じる').addClass('close');
//         // 表示フラグを切り替える
//     flag_show.g1 li = false;
// }

// } else {
//４件目からを隠せる処理
// $(contents + ':nth-child(n + ' + (show + 1) + ')').addClass('is-hidden');
//     // ボタン名はもっと見るから閉じるに変更
// $('#btn1').text('もっと見る').removeClass('close');
//     // 表示フラグを切り替える
// flag_show_g1 = true;
// show_g1 = 3;
