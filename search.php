<?php get_header(); ?>
<main>


    <section class="section">

        <!-- searchform.phpを読み込む -->
        <?php get_search_form(); ?>


        <div class="section_inner">
            <div class="section_header">
                <h1 class="heading heading-primary"><span>サイト内検索</span>SEARCH</h1>
            </div>

            <div class="section_body">
                <ul class="foodList">
                    <?php /*
                    // メニューの投稿タイプ
                    $args = [
                        'post_type' => 'food',
                        'post_per_page' => -1,
                    ];
                    $taxquerysp = ['relation' => 'AND'];
                    $taxquerysp[] = [
                        'taxonomy' => 'menu',
                        'terms' => $menu->slug,
                        'field' => 'slug',
                    ];
                    $args['tax_query'] = $taxqerysp;
                    $the_query = new WP_Query($args);
                    if ($the_query->have_posts()): ?>
                        <div class="section_desc">
                            <p><i class="fas fa-search"></i> 検索ワード「<?php the_search_query(); ?>」</p>
                        </div>

                        <div class="cardList">
                            <?php while ($the_Query->have_posts()): $the_Query->the_post(); ?>
                                <?php get_template_part('template-parts/loop', 'test'); ?>
                            <?php endwhile; ?>
                            <?php wp_reset_postdata() ?>
                        </div>
                    <?php else: ?>
                        <div class="section_desc">
                            <p>検索結果はありませんでした</p>
                        </div>
                    <?php endif; ?>

                    <?php if (function_exists('wp_pagenavi')): ?>
                        <div class="pagination">
                            <?php wp_pagenavi(); ?>
                        </div>
                    <?php endif; */ ?>
                </ul>
            </div>

        </div>
    </section>

</main>
<?php /*implode('||', $_POST['area']);
implode('||', $_POST['product_type']);
implode('||', $_POST['taste']);
implode('||', $_POST['allergy']); */
?>
<?php
print_r($_GET['allergy']);
$args = [
    'post_type' => 'product',
    'post_per_page' => -1,
];
$omission_allergy = [];
if ($_GET['allergy']) :
    foreach ($_GET['allergy'] as $allergy):
        $omission_allergy = array_merge(get_terms([
            'taxonomy' => 'allergy',
            'fields' => 'ids',
            'slug' => $allergy,
        ]));
    endforeach;
    $args = [
        'post__not_in' => array_unique($omission_allergy)
    ];
endif;
$taxquerysp = [
    'relation' => 'AND',
    [
        'taxonomy' => 'area',
        'terms' => $_GET['area'],
        'field' => 'slug'
    ],
    [
        'taxonomy' => 'product_type',
        'terms' => $_GET['product_type'],
        'field' => 'slug',
    ],
    [
        'taxonomy' => 'taste',
        'terms' => $_GET['taste'],
        'field' => 'slug'
    ],
];
// $taxquerysp[] = [
//     'taxonomy' => 'area',
//     'terms' => $_GET['area'],
//     'field' => 'slug'],

//     ['taxonomy' => 'area',
//     'terms' => $_GET['area'],
//     'field' => 'slug',];
$args['tax_query'] = $taxqerysp;;
// $the_query = new WP_Query($args);
// if ($the_query->have_posts()):
//     while ($the_Query->have_posts()): $the_Query->the_post();
?>
<?php /*the_post_thumbnail('medium'); */ ?>
<?php /* endwhile;*/
wp_reset_postdata();
/*endif;*/ ?>
<?php get_footer(); ?>
