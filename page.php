<?php get_header(); ?>
<main>
    <div class=inner>
        <?php if (have_posts()): ?>
            <?php while (have_posts()): the_post(); ?>

                <section class="section">
                    <div class="section_inner">
                        <div class="section_header">
                            <h2 class="heading heading-primary"><span><?php the_title(); ?></span></h2>
                        </div>

                        <div class="section_body">


                            <?php the_content(); ?>


                        </div>
                    </div>
                </section>

            <?php endwhile; ?>
        <?php endif; ?>
    </div>
</main>
<?php get_footer() ?>
