<div class="box_maker">
    <a href="<?php the_permalink(); ?>">
        <div class="box_intro">
            <?php
            $pic = get_field('pic1');
            $pic_url = $pic ? $pic['sizes']['medium'] : '';
            ?>
            <?php if ($pic_url): ?>
                <img src="<?php echo esc_url($pic_url); ?>" alt="<?php the_title_attribute(); ?>" class="img-fluid">
            <?php endif; ?>
            <h3 class="intro_sbtitle"><?php the_title(); ?></h3>
            <p>住所:<?php the_field('address'); ?></p>
            <p>TEL:<?php the_field('tel'); ?></p>
            <p>営業時間：<?php the_field('business_hours'); ?></p>

            <?php

            ?>
    </a>
</div>
