<!-- ページのヘッダーを読み込む Start-->
<?php get_header(); ?>
<!-- ページのヘッダーを読み込む End-->
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


    <?php
    $area_slug = get_query_var('area');                // エリアを取得
    $product_type_slug = get_query_var('product_type');    // 商品種別取得
    $taste_slug = get_query_var('taste');              // 味覚取得
    $allergy_type_slug = get_query_var('allergy');      // アレルギー取得

    ?>
    <?php
    // if (!empty($allergy_type_slug)) {
    //     var_dump($allergy_type_slug);
    // }
    ?><?php
        $args = [
            'post_type' => 'product',
            'posts_per_page' => -1,
        ];
        //選択されたアレルギーを除外するための配列を用意する
        // $omission_allergy = [];
        // $testtesttest;
        // $aaaa;
        // // アレルギーにデータがあるなら、繰り返す
        // if (!empty($allergy_type_slug)) :
        //     foreach ($allergy_type_slug as $allergy):
        //         //
        //         // if (!empty($omission_allergy)) {
        //         //     echo ('<pre>');
        //         //     var_dump($omission_allergy);
        //         //     echo ('</pre>');
        //         // }

        //         $testtesttest = get_terms(
        //             [
        //                 'taxonomy' => 'allergy',
        //                 'fields' => 'ids',
        //                 'slug' => $allergy,
        //                 // タグIDを取得している
        //             ]
        //         );

        //         $omission_allergy = array_merge($omission_allergy, $testtesttest);
        //     endforeach;
        //     // $aaaa = get_terms(
        //     //     [
        //     //         'taxonomy' => 'product_type',
        //     //         'fields' => 'all',
        //     //         // 'include' => $omission_allergy,
        //     //     ]
        //     // );
        //     // $args_allergy = ['post__not_in' =>
        //     // /*array_unique($omission_allergy)*/
        //     // $aaaa];
        //     // $args = array_merge($args, $args_allergy);
        //     $args += array('tag__not_in' => $omission_allergy);
        // endif;

        // if (!empty($args)) {
        //     echo ('<pre>');
        //     var_dump($args);
        //     echo ('</pre>');
        // }
        $taxquerysp = ['relation' => 'AND'];

        if (!empty($area_slug)) {
            $taxquerysp[] =
                [
                    'taxonomy' => 'area', //タクソノミー：『地域』
                    'terms' => $area_slug, //スラッグ名
                    'field' => 'slug', //スラッグ指定
                ];
        }

        if (!empty($product_type_slug)) {
            $taxquerysp[] =
                [
                    'taxonomy' => 'product_type', //タクソノミー：『商品種別』
                    'terms' => $product_type_slug, //スラッグ名
                    'field' => 'slug', //スラッグ指定
                ];
        }

        if (!empty($taste_slug)) {
            $taxquerysp[] =
                [
                    'taxonomy' => 'taste', //タクソノミー：『味覚』
                    'terms' => $taste_slug, //スラッグ名
                    'field' => 'slug', //スラッグ指定
                ];
        }

        //
        if (!empty($allergy_type_slug)) {
            $taxquerysp[] =
                [
                    'taxonomy' => 'allergy', //タクソノミー：『アレルギー』
                    'terms' => $allergy_type_slug, //スラッグ名
                    'field' => 'slug', //スラッグ指定
                    /* operatorをデフォルトのINからNOT INに変更することでスラッグで指定したものを除外したい*/
                    'operator' => 'NOT IN'
                ];
        }
        $args['tax_query'] = $taxquerysp;
        $the_query = new WP_Query($args);
        // if (!empty($args)) {
        //     echo ('<pre>');
        //     var_dump($args);
        //     echo ('</pre>');
        // }
        // if (!empty($the_query)) {
        //     echo ('<pre>');
        //     var_dump($the_query);
        //     echo ('</pre>');
        // }
        ?>
    <div class="card-container">
        <div class="inner">
            <?php //インナー入れておきました。
            ?>
            <ul class="page_list">
                <?php if ($the_query->have_posts()): ?>
                    <?php while ($the_query->have_posts()): $the_query->the_post(); ?>
                        <li>
                            <?php get_template_part('template-parts/loop', 'product'); ?>
                        </li>
                    <?php endwhile; ?>
                    <?php wp_reset_postdata(); ?>
                <?php else: ?>
                    <div class="section_desc">
                        <p>検索結果はありませんでした</p>
                    </div>
                <?php endif ?>
            </ul>
        </div>
        <!-- サブクエリを定義した時には、wp-pagenaviに反映させる -->
        <?php if (function_exists('wp_pagenavi')) {
            wp_pagenavi(['query' => $the_query]);
        } ?>
        <?php get_template_part('template-parts/pagination'); ?>
    </div>
</main>
<?php /*the_post_thumbnail('medium'); */ ?>
<?php get_footer(); ?>
