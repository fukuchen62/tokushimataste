<?php
$pic = get_field('pic1');
$pic_url = $pic['sizes']['large'];
?>
<img src="<?php echo $pic_url; ?>" alt="Image" class="img-fluid"><br>
<a href="<?php the_permalink(); ?>" id="goods"><?php the_title() ?></a>
<?php
// タクソノミーから情報を取得したいので、wp_get_object_termsを活用する
// 個々の投稿のIDとタクソノミーを引数、フィールドを名前に設定している。
$area_term = wp_get_object_terms(
    get_the_ID(),
    'area',
    array("fields" => "names")
);
$product_type_term = wp_get_object_terms(
    get_the_ID(),
    'product_type',
    array("fields" => "names")
);
?>
<?php
// 返値は配列で帰ってくるので、配列の最初の要素を出力する。
?>
<p><?php echo $area_term[0];  ?></p>
<p><?php echo $product_type_term[0];  ?></p>
<p><?php the_field('introduction') ?></p>
