<article>
    <div class="box_column">
        <a href="<?php the_permalink(); ?>">
            <div class="box__item">
                <div>
                    <?php if (has_post_thumbnail()): ?>
                        <?php the_post_thumbnail('medium'); ?>
                    <?php else: ?>
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/common/noimage.png" alt="">
                    <?php endif; ?>

                </div>
                <h3><?php the_title(); ?></h3>
                <p>
                    <!-- <?php //the_content();
                            ?> -->
                    <?php the_excerpt() ?>
                </p>
            </div>
        </a>
    </div>
</article>
