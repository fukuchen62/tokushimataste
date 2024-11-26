<?php
$pic = get_field('pic1');
$pic_url = $pic['sizes']['large'];
?>
<img src="<?php echo $pic_url; ?>" alt="Image" class="img-fluid"><br>
<a href="<?php the_permalink(); ?>" id="goods"><?php the_title() ?></a>
<?php
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
<p><?php echo $area_term[0];  ?></p>
<p><?php echo $product_type_term[0];  ?></p>
<p><?php the_field('introduction') ?></p>
