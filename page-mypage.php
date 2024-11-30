<!-- header.phpを読み込む -->
<?php get_header(); ?>

<main>
    <div class="inner">
        <!-- パンくずリスト -->
        <?php get_template_part("template-parts/breadcrumb"); ?>

        <?php


        $spots = [];
        // ブックマーク数カウント
        $spot_count = 0;

        ?>

        <h2 style="text-align:center">お気に入りリスト</h2>

        <!-- 伊丹さんのページについていたボタン必要なければ消す -->
        <ul class="btn-content">
            <li>
                <a href="../html/goods.html" class=""><span>商品一覧ページへ</span></a>
            </li>
        </ul>



        <div class="explanation explanation2">
            <p>本マイページはこのサイトにてご紹介した『商品』『アレンジレシピ』『コラム』を ブックマークし参照することができます。</p>
            <p>ブックマークにはCookieを使用しています。</p>
            <p>Cookieの削除に伴いブックマークした情報も削除されます。</p>
        </div>

        <!-- 一つ目のカテゴリのカード群 -->
        <!-- コンテンツのサブタイトル -->
        <h2 class="sub__title2 mb20 bgGL">
            <i class="fa-solid fa-paw"></i> お気に入りした<br>
            商品一覧
        </h2>
        <div>
            <?php
            if (function_exists('get_user_favorites')) :
                // code...
                $favorites = get_user_favorites();
                krsort($favorites);

                // print_r($favorites);

                if ($favorites) :
                    $the_query = new WP_Query([
                        'post_type' => 'product',
                        'posts_per_page' => -1,
                        'ignore_sticky_posts' => true,
                        'post__in' => $favorites,
                        'orderby' => 'post__in',
                    ]); ?>
                    <?php if ($the_query->have_posts()) : ?>
                        <?php while ($the_query->have_posts()) :  $the_query->the_post(); ?>
                            <div class="container">
                                <ul class="maker_list">
                                    <li>
                                        <!-- カード内情報 -->
                                        <!-- サムネイルの取得 -->
                                        <a href="<?php the_permalink(); ?>">

                                        </a>
                                        <div class="box_intro">
                                            <?php if (has_post_thumbnail()) : ?>
                                                <?php the_post_thumbnail("medium"); ?>
                                            <?php else : ?>
                                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/noimage.png" alt="">
                                            <?php endif; ?>
                                            <h3 class="intro_sbtitle"><?php the_field("product_name"); ?></h3>
                                            <p><?php //the_field("");
                                                ?></p>
                                        </div>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        <?php
                            $spot_count++;
                        // end ループ while
                        endwhile;
                        wp_reset_postdata();
                        // else :
                        ?>


            <?php
                    else :

                    endif;
                endif;
            // end favorites
            endif;

            ?>
        </div>



        <!-- コンテンツのサブタイトル -->
        <h2 class="sub__title2 mb20 bgBL">
            <i class="fa-solid fa-paw"></i> お気に入りした<br>
            コラム一覧
        </h2>

        <!-- <div class="next__info tr2"><a href="">>>〇〇件</a></div> -->

        <!-- 2つめのカテゴリ -->
        <div>
            <?php
            if (function_exists('get_user_favorites')) :
                // code...
                $favorites = get_user_favorites();
                krsort($favorites);

                // print_r($favorites);

                if ($favorites) :
                    $the_query = new WP_Query([
                        'post_type' => 'column',
                        'posts_per_page' => -1,
                        'ignore_sticky_posts' => true,
                        'post__in' => $favorites,
                        'orderby' => 'post__in',
                    ]); ?>
                    <?php if ($the_query->have_posts()) : ?>
                        <?php while ($the_query->have_posts()) :  $the_query->the_post(); ?>
                            <div class="container">
                                <ul class="maker_list">
                                    <li>
                                        <!-- カード内情報 -->
                                        <!-- サムネイルの取得 -->
                                        <a href="<?php the_permalink(); ?>">

                                        </a>
                                        <div class="box_intro">
                                            <?php if (has_post_thumbnail()) : ?>
                                                <?php the_post_thumbnail("medium"); ?>
                                            <?php else : ?>
                                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/noimage.png" alt="">
                                            <?php endif; ?>
                                            <h3 class="intro_sbtitle"><?php the_title(); ?></h3>
                                            <p><?php //the_field("");
                                                ?></p>
                                        </div>
                                        </a>
                                    </li>
                                </ul>
                            </div>

                        <?php
                            $spot_count++;
                        // end ループ while
                        endwhile;
                        wp_reset_postdata();
                        // else :
                        ?>


            <?php
                    else :

                    endif;
                endif;
            // end favorites
            endif;

            ?>
        </div>


        <!-- <button id="btn__east" class="more-button">
        MORE
    </button> -->

        <!-- コンテンツのサブタイトル -->
        <h2 class="sub__title2 mb20 bgPK"><i class="fa-solid fa-paw"></i> お気に入りした<br>アレンジレシピ</h2>

        <!-- <div class="next__info tr2"><a href="">>>〇〇件</a></div> -->

        <!-- ３つめのカテゴリ -->

        <!-- 2つめのカテゴリ -->
        <div>
            <?php
            if (function_exists('get_user_favorites')) :
                // code...
                $favorites = get_user_favorites();
                krsort($favorites);

                // print_r($favorites);

                if ($favorites) :
                    $the_query = new WP_Query([
                        'post_type' => 'recipe',
                        'posts_per_page' => -1,
                        'ignore_sticky_posts' => true,
                        'post__in' => $favorites,
                        'orderby' => 'post__in',
                    ]); ?>
                    <?php if ($the_query->have_posts()) : ?>
                        <?php while ($the_query->have_posts()) :  $the_query->the_post(); ?>
                            <div class="container">
                                <ul class="maker_list">
                                    <li>
                                        <!-- カード内情報 -->
                                        <!-- サムネイルの取得 -->
                                        <a href="<?php the_permalink(); ?>">

                                        </a>
                                        <div class="box_intro">
                                            <?php if (has_post_thumbnail()) : ?>
                                                <?php the_post_thumbnail("medium"); ?>
                                            <?php else : ?>
                                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/noimage.png" alt="">
                                            <?php endif; ?>
                                            <h3 class="intro_sbtitle"><?php the_field("recipe_name");
                                                                        ?></h3>
                                        </div>
                                        </a>
                                    </li>
                                </ul>
                            </div>

                        <?php
                            $spot_count++;
                        // end ループ while
                        endwhile;
                        wp_reset_postdata();
                        // else :
                        ?>


            <?php
                    else :

                    endif;
                endif;
            // end favorites
            endif;

            ?>
        </div>


        <!-- <button id="btn__west" class="more-button">
        MORE
    </button> -->


    </div>
</main>

<!-- footer.phpを読み込む -->
<?php get_footer(); ?>

<?php //ブックマークしたいところに記述
?>
<!-- ループ内 -->
<?php //echo get_favorites_button(get_the_ID());
?>
<!-- / ループ内 -->

<!-- ループ外 -->
<?php
//global $wp_query;
//$post_id = $wp_query->get_queried_object_id();
//echo get_favorites_button($post_id);
?>
<!-- / ループ外 -->
