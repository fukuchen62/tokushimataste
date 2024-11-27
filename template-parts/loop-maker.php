<a href="">
    <div class="box_maker">
        <?php
        $pic = get_field('pic1');
        $pic_url = $pic['sizes']['large'];
        ?>
        <img src="<?php echo $pic_url; ?>" alt="Image" class="img-fluid"><br>
        <a href="<?php the_permalink(); ?>"><?php the_title() ?></a>
        <?php
        $area_term = wp_get_object_terms(
            get_the_ID(),
            'maker',
            array("fields" => "names")
        );
        $maker_type_term = wp_get_object_terms(
            get_the_ID(),
            'maker_type',
            array("fields" => "names")
        );
        ?>
        <p><?php echo $area_term[0];  ?></p>
        <p><?php echo $maker_type_term[0];  ?></p>
        <p><?php the_field('introduction') ?></p>
</a>
</li>


<img src="../uploads/tennin (1).png" alt="メーカー写真">
<h3>サブタイトルサブタイトル</h3>

</a>
</li>
