<li>
    <div class="box_maker">
        <a href="<?php the_permalink(); ?>">
            <?php
            $pic = get_field('pic1');
            $pic_url = $pic ? $pic['sizes']['medium_large'] : '';
            ?>
            <?php if ($pic_url): ?>
                <img src="<?php echo esc_url($pic_url); ?>" alt="<?php the_title_attribute(); ?>" class="img-fluid">
            <?php endif; ?>
            <h3><?php the_title(); ?></h3>
            <p><?php echo get_field('company_info'); ?></p>
        </a>
    </div>
</li>
