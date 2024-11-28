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

                <?php
                $trimmed_excerpt = wp_trim_words(get_the_excerpt(), 50, '...');
                echo '<p>' . esc_html($trimmed_excerpt) . '</p>';
                ?>

            </div>
        </a>
    </div>
</article>
