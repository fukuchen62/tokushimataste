<?php get_header(); ?>
<main>
    <div class="inner">
        <!--パンくずリスト-->
        <?php get_template_part('template-parts/breadcrumb');
        ?>


        <!-- コラム -->
        <section class="column">
            <!-- ループ外 -->
            <?php
            global $wp_query;
            $post_id = $wp_query->get_queried_object_id();
            echo get_favorites_button($post_id);
            ?>
            <!-- / ループ外 -->
            <!-- 見出し -->
            <h2 class="ttl_box ttl_cd"><span><?php the_title(); ?></span></h2>

            <!-- コラム一覧 -->
            <div class="single_col_flex">
                <div class="article_col">

                    <div>
                        <?php the_content();
                        ?>
                    </div>
                </div>

                <!-- サイドメニュー -->
                <?php get_sidebar(); ?>
            </div>

            <!-- ここから山口実験追記 -->
            <div>
                <p>↓メーカー名</p>
                <?php
                //カスタムフィールド 'maker_id' に保存された投稿IDを取得
                $maker_id = get_field('maker_id');

                //maker_id から投稿データを取得
                $maker_post = get_post($maker_id);
                //print_r($maker_post);
                if ($maker_post) {
                    //投稿タイトル (maker_title) を取得
                    $maker_title = $maker_post->post_title;
                    //表示
                    echo '<p>メーカー名: ' . esc_html($maker_title) . '</p>';
                    echo '<p>url: ' . esc_html(the_permalink($maker_id)) . '</p>';
                    echo get_post_meta($maker_id, 'address', true);
                }
                ?>
            </div>
            <div>


                <div><!-- 商品詳細の下のコピペをレシピにしたけど無理 -->
                    <p>↓レシピ名</p>
                    <?php
                    // カスタムフィールド 'recipe_id' に保存された投稿IDを取得
                    $recipe_id = get_field('recipe_id');

                    // recipe_id から投稿データを取得
                    $recipe_post = get_post($recipe_id);

                    if ($recipe_post) {
                        // 投稿タイトル (recipe_title) を取得
                        $recipe_title = $recipe_post->post_title;

                        // 表示
                        echo '<p>レシピ名: ' . esc_html($recipe_title) . '</p>';
                        echo '<p>URL: <a href="' . esc_url(get_permalink($recipe_id)) . '">' . esc_html($recipe_title) . '</a></p>';
                        echo '<p>アドレス: ' . esc_html(get_post_meta($recipe_id, 'address', true)) . '</p>';
                    }
                    ?>
                </div>
        </section>
    </div>
</main>



<?php get_footer(); ?>
