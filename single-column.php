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
        </section>



        <!-- idと紐づいた情報 -->

        <h3 class="related_all">関連する商品、<br>レシピ、メーカー様</h3>



        <section>
            <ul class="good_used_flex">
                <?php
                $id_list = get_field('recipe_id'); // コラム投稿のカスタムフィールド 'recipe_id'
                ?>
                <?php if (!empty($id_list)) : ?>
                    <?php $id_list = explode(',', $id_list); ?>
                    <?php foreach ($id_list as $key => $id) : ?>

                        <?php

                        //id から投稿データを取得
                        $ob_post = get_post($id);

                        //print_r($ob_post);

                        if ($ob_post) {
                            //投稿タイトル (title) を取得
                            $ob_title = $ob_post->post_title;

                            //表示
                            echo '<p>レシピ: ' . esc_html($ob_title) . '</p>';

                            echo '<p>url: ' . esc_html(the_permalink($id)) . '</p>';
                            // echo get_post_meta($id, 'address', true);
                        }
                        ?>

                    <?php endforeach; ?>
                <?php endif; ?>
            </ul>
        </section>





    </div>
</main>



<?php get_footer(); ?>
