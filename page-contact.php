<?php get_header(); ?>
<div class=inner>
    <?php if (have_posts()): ?>
        <?php while (have_posts()): the_post(); ?>
            <main>
                <section class="section">
                    <div class="section_inner">
                        <div class="section_header">
                            <h2 class="heading heading-primary"><span><?php the_title(); ?></span><?php echo strtoupper($post->post_name) ?></h2>
                        </div>

                        <div class="section_body">


                            <?php the_content(); ?>


                        </div>
                    </div>
                </section>
            </main>
        <?php endwhile; ?>
    <?php endif; ?>
</div>
<?php get_footer() ?>
