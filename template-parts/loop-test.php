<div class="foodCard">
    <a href="<?php the_permalink() ?>">
        <div class="foodCard_body">
            <h4 class="foodCard_title"><?php the_title() ?></h4>
            <div>
                <?php if (has_post_thumbnail()): ?>
                    <?php the_post_thumbnail('medium'); ?>
                <?php else: ?>
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/common/noimage.png" alt="">
                <?php endif; ?>

            </div>
    </a>
</div>
