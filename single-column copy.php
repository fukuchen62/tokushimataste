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

        <!-- 関連商品 -->
        <p>商品（これはあとでけす）</p>
        <section>
            <ul class="good_used_flex">
                <?php
                $column_id = get_the_ID(); // 現在のコラム投稿のID

                // column投稿のカスタムフィールド 'maker_id' を取得
                $prod_id = get_field('prod_id', $column_id);

                if ($maker_id) { // maker_id が存在する場合
                    $args = [
                        'post_type' => 'product',
                        'meta_query' => [
                            [
                                'key' => 'maker_id', // 商品投稿のカスタムフィールド 'maker_id'
                                'value' => $maker_id,
                                'compare' => '=',
                            ],
                        ],
                        'posts_per_page' => -1,
                    ];

                    $the_query = new WP_Query($args);

                    if ($the_query->have_posts()):
                        while ($the_query->have_posts()): $the_query->the_post(); ?>
                            <li>
                                <a href="<?php the_permalink(); ?>">
                                    <div class="box_intro box_intro_col">
                                        <img src="<?php echo esc_url(get_the_post_thumbnail_url(null, 'thumbnail')); ?>" alt="<?php the_title(); ?>">

                                        <h3 class="intro_sbtitle intro_sbtitle_cs">
                                            <?php the_title(); ?>
                                        </h3>
                                    </div>
                                </a>
                            </li>
                        <?php endwhile;
                        wp_reset_postdata();
                    else: ?>
                        <p>関連する商品が見つかりませんでした。</p>
                    <?php endif;
                } else { ?>
                    <p>関連するメーカーが登録されていません。</p>
                <?php } ?>
            </ul>
        </section>

        <section>
            <ul class="good_used_flex">
                <?php
                $recipe_id = get_field('recipe_id'); // コラム投稿のカスタムフィールド 'recipe_id'

                if ($recipe_id) { // recipe_id が存在する場合
                    $args = [
                        'post_type' => 'column',
                        'meta_query' => [
                            [
                                'key' => 'recipe_id', // 商品投稿のカスタムフィールド 'recipe_id'
                                'value' => $recipe_id,
                                'compare' => '=',
                            ],
                        ],
                        'posts_per_page' => -1,
                    ];

                    $the_query = new WP_Query($args);

                    if ($the_query->have_posts()):
                        while ($the_query->have_posts()): $the_query->the_post(); ?>
                            <li>
                                <a href="<?php the_permalink(); ?>">
                                    <div class="box_intro box_intro_col">
                                        <img src="<?php echo esc_url(get_the_post_thumbnail_url(null, 'thumbnail')); ?>" alt="<?php the_title(); ?>">

                                        <h3 class="intro_sbtitle intro_sbtitle_cs">
                                            <?php the_title(); ?>
                                        </h3>
                                    </div>
                                </a>
                            </li>
                        <?php endwhile;
                        wp_reset_postdata();
                    else: ?>
                        <p>関連する商品が見つかりませんでした。</p>
                    <?php endif;
                } else { ?>
                    <p>関連するレシピが登録されていません。</p>
                <?php } ?>
            </ul>
        </section>
        <p>ここから</p>
        <section>
            <ul class="good_used_flex">
                <?php
                $column_id = get_the_ID(); // 現在のコラム投稿のID

                // column投稿のカスタムフィールド 'recipe_id' を取得
                $recipe_id = get_field('recipe_id', $column_id);

                if ($recipe_id) { // recipe_id が存在する場合
                    $args = [
                        'post_type' => 'product',
                        'meta_query' => [
                            [
                                'key' => 'recipe_id', // 商品投稿のカスタムフィールド 'recipe_id'
                                'value' => $recipe_id,
                                'compare' => '=',
                            ],
                        ],
                        'posts_per_page' => -1,
                    ];

                    $the_query = new WP_Query($args);

                    if ($the_query->have_posts()):
                        while ($the_query->have_posts()): $the_query->the_post(); ?>
                            <li>
                                <a href="<?php the_permalink(); ?>">
                                    <div class="box_intro box_intro_col">
                                        <img src="<?php echo esc_url(get_the_post_thumbnail_url(null, 'thumbnail')); ?>" alt="<?php the_title(); ?>">

                                        <h3 class="intro_sbtitle intro_sbtitle_cs">
                                            <?php the_title(); ?>
                                        </h3>
                                    </div>
                                </a>
                            </li>
                        <?php endwhile;
                        wp_reset_postdata();
                    else: ?>
                        <p>関連する商品が見つかりませんでした。</p>
                    <?php endif;
                } else { ?>
                    <p>関連するレシピが登録されていません。</p>
                <?php } ?>
            </ul>
        </section>


        <p>ここまで</p>
        <li>
            <a href="../html/column_detail.html">
                <div class="box_intro box_intro_col">
                    <img src="../uploads/nikumisoitame.jpg" alt="コラムの写真">
                    <h3 class="intro_sbtitle intro_sbtitle_cs">サブタイトルサブタイトル</h3>
                </div>
            </a>
        </li>

        </ul>
        </section>

        <p>実験</p>










    </div>
</main>



<?php get_footer(); ?>
