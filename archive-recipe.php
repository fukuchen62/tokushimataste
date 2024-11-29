<?php get_header(); ?>

<main>
    <div class="inner">
        <!-- パンくずリスト -->
        <?php get_template_part('template-parts/breadcrumb'); ?>

        <?php
        $recipe_type_terms = get_terms(['taxonomy' => 'recipe_type']);
        if (!empty($recipe_type_terms)): ?>

            <?php foreach ($recipe_type_terms as $recipe_type): ?>
                <section class="">
                    <h2 class="ttl_box"><a href="<?php echo get_term_link($recipe_type); ?>"><?php echo $recipe_type->name; ?>
                        </a></h2>
                    <?php single_term_title(''); ?>

                    <div class="recipe_container">
                        <ul class="list">
                            <?php
                            $args = [
                                'post_type' => 'recipe', // メニューの投稿タイプ
                                'posts_per_page' => -1,
                                'order'        => 'asc',
                                'orderby'        => 'meta_value',
                                'meta_key'        => 'phonetic',
                            ];

                            $taxquerysp = ['relation' => 'AND'];
                            $taxquerysp[] = [
                                'taxonomy' => 'recipe_type',
                                'terms' => $recipe_type->slug,
                                'field' => 'slug',
                            ];
                            $args['tax_query'] = $taxquerysp;
                            $the_query = new WP_Query($args);
                            ?>

                            <?php if ($the_query->have_posts()): ?>
                                <?php while ($the_query->have_posts()): ?>
                                    <?php $the_query->the_post() ?>
                                    <a href="<?php the_permalink(); ?>">
                                        <li>
                                            <div class="recipe_box">
                                                <?php
                                                $pic = get_field('pic1');
                                                // $picが存在する場合のみURLを取得
                                                $pic_url =  $pic['sizes']['medium'];
                                                ?>
                                                <img src="<?php echo $pic_url; ?>" alt="">

                                                <p><?php the_title(); ?></p>
                                            </div>
                                        </li>
                                    </a>
                                <?php endwhile; ?>
                            <?php endif; ?>
                        </ul>
                    </div>
                    <div class="more">
                        <a class="btn btn-border-shadow btn-border-shadow--color">もっと見る</a>
                    </div>
                </section>
            <?php endforeach; ?>
        <?php endif; ?>
    </div>
</main>

<?php get_footer(); ?>
