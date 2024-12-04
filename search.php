<!-- ページのヘッダーを読み込む Start-->
<?php get_header(); ?>
<!-- ページのヘッダーを読み込む End-->
<main>

    <!-- searchform.phpを読み込む -->
    <?php get_search_form(); ?>



    <?php
    $area_slug = get_query_var('area');                // エリアを取得
    $product_type_slug = get_query_var('product_type');    // 商品種別取得
    $taste_slug = get_query_var('taste');              // 味覚取得
    $allergy_type_slug = get_query_var('allergy');      // アレルギー取得


    $paged = get_query_var('paged') ? get_query_var('paged') : 1;
    ?>
    <?php
    // if (!empty($allergy_type_slug)) {
    //     var_dump($allergy_type_slug);
    // }
    ?><?php
        $args = [
            'post_type' => 'product',
            'posts_per_page' => 6,
            'paged' => $paged,
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
        ?>
    <div class="inner">
        <div class="card-container">

            <?php
            ?><?php if ($the_query->have_posts()): ?>
            <h2><?php echo $the_query->found_posts; ?>件見つかりました。</h2>
            <ul class="page_list">
                <?php while ($the_query->have_posts()): $the_query->the_post(); ?>
                    <?php get_template_part('template-parts/loop', 'product'); ?>
                <?php endwhile; ?>
            </ul>
        <?php else: ?>
            <div class="section_desc">
                <p>検索結果はありませんでした</p>
            </div>
            <?php wp_reset_postdata(); ?>
        <?php endif ?>
        </div>
    </div>
    <!-- サブクエリを定義した時には、wp-pagenaviに反映させる -->
    <?php //if (function_exists('wp_pagenavi')) {
    // wp_pagenavi(['query' => $the_query]);
    //}
    ?>
    <?php get_template_part('template-parts/pagination'); ?>
</main>
<?php /*the_post_thumbnail('medium'); */ ?>
<?php get_footer(); ?>
