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
            <?php wp_reset_postdata(); ?>
        <?php else: ?>
            <div class="section_desc">
                <p>検索結果はありませんでした</p>
            </div>
        <?php endif ?>
        </div>
    </div>
    <!-- サブクエリを定義した時には、wp-pagenaviに反映させる -->
    <?php if (function_exists('wp_pagenavi')) {
        wp_pagenavi(['query' => $the_query]);
    } ?>
    <?php get_template_part('template-parts/pagination'); ?>
</main>
<?php /*the_post_thumbnail('medium'); */ ?>
<?php get_footer(); ?>
<style>
    /* 商品名のボタン */

    #goods {
        display: flex;
        align-items: center;
        justify-content: center;
        line-height: 1;
        text-decoration: none;
        color: #000000;
        font-size: 18px;
        border-radius: 5px;
        /* width: 250px; */
        height: 40px;
        font-weight: bold;
        border: 2px dashed #000000;
        transition: 0.3s;
        background-color: #fbb126;

    }

    #goods:hover {
        opacity: .5;
    }

    .box_otomo {
        border: solid #fbb126;
        border-radius: 10px;
        cursor: pointer;

    }

    .card_goods {
        padding: 0 10px;
    }

    .pagination {
        width: 70%;
        margin: 0 auto 50px;
        font-size: 14px;
        display: flex;
        align-items: center;
        justify-content: center;
        gap: 5px;
    }

    .pagination .number {
        display: flex;
        align-items: center;
        justify-content: flex-start;
        flex-wrap: wrap;
        gap: 5px;
    }

    .pagination a {
        display: flex;
        align-items: center;
        justify-content: center;
        width: 40px;
        height: 40px;
        text-align: center;
        text-decoration: none;
        cursor: pointer;
        background-color: #ffffff;
        border: solid 1px #1597CC;
        border-radius: 5px;
        padding: 10px 0;
    }

    .pagination .number>a.active {
        background-color: #1597CC;
        color: #fff;
    }

    /* ページングで表示するコンテンツのスタイル
 初期表示は非表示 */
    .page_list li {
        display: none;
        padding: 20px 0;
        /* border-bottom: 1px solid #000; */
        max-width: 320px;
    }

    /* onクラス添付で画面に表示 */
    .page_list li.on {
        display: block;
    }

    /* ページネーションの現在のページに「.active」クラスを付与して色を変える */

    .pagination .number>a.active {
        background-color: #1597CC;
        color: #fff;
    }

    /* ココから先は見た目のスタイルなのであまり重要ではありません。
　　自由にデザインなど変更して貰えればと思います。 */

    .page_list {
        /* border-top: 1px solid #000; */
        margin-bottom: 20px;
    }

    .page_list p {
        margin: 0.3em 0;
    }

    .pagination {
        width: 70%;
        margin: 0 auto 50px;
        font-size: 16px;
        display: flex;
        align-items: center;
        justify-content: center;
        gap: 5px;
    }

    .pagination .number {
        display: flex;
        align-items: center;
        justify-content: flex-start;
        flex-wrap: wrap;
        gap: 5px;
    }

    .pagination a {
        display: flex;
        align-items: center;
        justify-content: center;
        width: 40px;
        height: 40px;
        text-align: center;
        text-decoration: none;
        cursor: pointer;
        background-color: #ffffff;
        border: solid 1px #1597CC;
        border-radius: 5px;
        padding: 10px 0;
    }

    .img-fluid {
        width: 320px;
        height: 240px;
        border-radius: 8px 8px 0 0;
    }

    .img-fluid li {
        letter-spacing: -1em;
    }

    .img-fluid li {
        display: inline-block;
        width: 35px;
        height: 35px;
        text-align: center;
        line-height: 35px;
        border: 1px solid #FF9900;
    }

    /*以下変更 byぎみ
 ページングで表示するコンテンツのスタイル
 初期表示は非表示 */

    .page_list {
        display: flex;
        list-style: none;
        flex-wrap: wrap;
        flex-direction: row;
        justify-content: space-around;
        gap: 5px 5px;
        padding-left: 0;
        /* ulのユーザーエージェントスタイル打消し */
    }

    .page_list {
        /* border-top: 1px solid #000; */
        margin-bottom: 20px;
    }

    .page_list li {
        display: none;
        padding: 20px 0;
        /* border-bottom: 1px solid #000; */
    }

    .page_list li.on {
        display: block;
    }
</style>
