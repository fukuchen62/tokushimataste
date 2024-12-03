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

        <!-- 商品 -->
        <section>
            <ul class="good_used_flex">
                <?php
                $id_list = get_field('product_id'); // コラム投稿のカスタムフィールド 'maker_id'
                if (!empty($id_list)) :
                    $id_list = explode(',', $id_list); // カンマ区切りを配列に変換
                    foreach ($id_list as $key => $id) :
                        $ob_post = get_post($id); // 投稿データを取得
                        if ($ob_post) :
                            $ob_title = $ob_post->post_title; // タイトルを取得
                            $thumbnail = get_the_post_thumbnail($id, 'medium'); // サムネイルを取得
                            $permalink = get_permalink($id); // 投稿のURLを取得
                ?>
                            <li>
                                <a href="<?php echo esc_url($permalink); ?>">
                                    <div class="box_intro box_intro_col">
                                        <?php if ($thumbnail) : ?>
                                            <img src="<?php echo esc_url(get_the_post_thumbnail_url($id, 'medium')); ?>" alt="<?php echo esc_attr($ob_title); ?>">
                                        <?php else : ?>
                                            <img src="../uploads/default-image.jpg" alt="デフォルト画像">
                                        <?php endif; ?>
                                        <h3 class="intro_sbtitle intro_sbtitle_cs"><?php echo esc_html($ob_title); ?></h3>
                                    </div>
                                </a>
                            </li>
                <?php
                        endif;
                    endforeach;
                endif;
                ?>
            </ul>
        </section>

        <!-- レシピ -->
        <section>
            <ul class="good_used_flex">
                <?php
                $id_list = get_field('recipe_id'); // コラム投稿のカスタムフィールド 'recipe_id'
                if (!empty($id_list)) :
                    $id_list = explode(',', $id_list); // カンマ区切りを配列に変換
                    foreach ($id_list as $key => $id) :
                        $ob_post = get_post($id); // 投稿データを取得
                        if ($ob_post) :
                            $ob_title = $ob_post->post_title; // タイトルを取得
                            $thumbnail = get_the_post_thumbnail($id, 'medium'); // サムネイルを取得
                            $permalink = get_permalink($id); // 投稿のURLを取得
                ?>
                            <li>
                                <a href="<?php echo esc_url($permalink); ?>">
                                    <div class="box_intro box_intro_col">
                                        <?php if ($thumbnail) : ?>
                                            <img src="<?php echo esc_url(get_the_post_thumbnail_url($id, 'medium')); ?>" alt="<?php echo esc_attr($ob_title); ?>">
                                        <?php else : ?>
                                            <img src="../uploads/default-image.jpg" alt="デフォルト画像">
                                        <?php endif; ?>
                                        <h3 class="intro_sbtitle intro_sbtitle_cs"><?php echo esc_html($ob_title); ?></h3>
                                    </div>
                                </a>
                            </li>
                <?php
                        endif;
                    endforeach;
                endif;
                ?>
            </ul>
        </section>

        <!-- メーカー -->
        <section>
            <ul class="good_used_flex">
                <?php
                $id_list = get_field('maker_id'); // コラム投稿のカスタムフィールド 'maker_id'
                if (!empty($id_list)) :
                    $id_list = explode(',', $id_list); // カンマ区切りを配列に変換
                    foreach ($id_list as $key => $id) :
                        $ob_post = get_post($id); // 投稿データを取得
                        if ($ob_post) :
                            $ob_title = $ob_post->post_title; // タイトルを取得
                            $thumbnail = get_the_post_thumbnail($id, 'medium'); // サムネイルを取得
                            $permalink = get_permalink($id); // 投稿のURLを取得
                ?>
                            <li>
                                <a href="<?php echo esc_url($permalink); ?>">
                                    <div class="box_intro box_intro_col">
                                        <?php if ($thumbnail) : ?>
                                            <img src="<?php echo esc_url(get_the_post_thumbnail_url($id, 'medium')); ?>" alt="<?php echo esc_attr($ob_title); ?>">
                                        <?php else : ?>
                                            <img src="../uploads/default-image.jpg" alt="デフォルト画像">
                                        <?php endif; ?>
                                        <h3 class="intro_sbtitle intro_sbtitle_cs"><?php echo esc_html($ob_title); ?></h3>
                                    </div>
                                </a>
                            </li>
                <?php
                        endif;
                    endforeach;
                endif;
                ?>
            </ul>
        </section>



    </div>
</main>



<?php get_footer(); ?>
