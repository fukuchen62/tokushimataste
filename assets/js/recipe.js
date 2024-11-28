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

// もっと見る

var show = 3; //最初に表示する件数
var num = 3;  //clickごとに表示したい件数
var contents = '.list li'; // 対象のlist
$(contents + ':nth-child(n + ' + (show + 1) + ')').addClass('is-hidden');
$('.more1').on('click', function () {
    $(contents + '.is-hidden').slice(0, num).removeClass('is-hidden');
    if ($(contents + '.is-hidden').length == 0) {
        $('.more1').fadeOut();
    }















});
