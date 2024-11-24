<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/reset.css" media="all">
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/common.css" media="all">

<?php get_header(); ?>
<main>
    <?php echo get_search_form(); ?>

    <section>
        <div class="column_box">
            <h3>エリア別</h3>
            <?php
            $area_terms = get_terms(['taxonomy' => 'area']);
            // if (!empty($area_terms)):

            // echo '<pre>';
            // var_dump($area_terms);
            // echo '<pre>';
            ?>
            <?php foreach ($area_terms as $area):
                // echo '<pre>';
                // var_dump($area);
                // echo '<pre>';
            ?>

                <a href="#<?php echo $area->slug; ?>_btn"><?php echo $area->name; ?></a>
            <?php endforeach ?>

        </div>
    </section>

    <section class="section section-foodList">
        <div class="section_inner">
            <div class="section_header">

                <h2 class="heading heading-primary">メーカーさん紹介</h2>
            </div>

            <?php

            $area_terms = get_terms(['taxonomy' => 'area']);
            if (!empty($area_terms)):
                // echo '<pre>';
                // var_dump($area_terms);
                // echo '<pre>';

            ?>
                <?php foreach ($area_terms as $area):  ?>
                    <section class="section_body">
                        <h3 class="heading heading-secondary" id="<?php echo $area->slug; ?>_btn">

                            <?php echo $area->name; ?>

                        </h3>
                        <ul class="foodList">
                            <?php
                            // メニューの投稿タイプ

                            $args = [
                                'post_type' => 'maker',
                                'post_per_page' => -1,
                            ];
                            $taxquerysp = ['relation' => 'AND'];
                            $taxquerysp[] = [
                                'taxonomy' => 'area',
                                'terms' => $area->slug,
                                'field' => 'slug',
                            ];
                            $args['tax_query'] = $taxquerysp;
                            $the_query = new WP_Query($args);

                            if ($the_query->have_posts()): ?>
                                <?php while ($the_query->have_posts()): $the_query->the_post() ?>
                                    <li class="foodList_item">
                                        <?php get_template_part('test-template-parts-test/loop', 'test'); ?>
                                    </li>
                                <?php endwhile; ?>
                                <?php wp_reset_postdata(); ?>
                            <?php endif ?>
                        </ul>
                    </section>
                <?php endforeach; ?>
            <?php endif; ?>
        </div>
    </section>
</main>


<?php get_footer(); ?>
