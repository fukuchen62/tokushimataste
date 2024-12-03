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

            <p>↓メーカー名だけどこのページのidが来ている↓</p>
            <!-- 商品詳細の下のコピペだけど出ない -->

            <!-- ここから山口実験追記 -->
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

            <p>↓出ない↓</p>
            <!-- メーカー詳細の下のコピペだけど出ない -->
            <section class="rcmd_box">
                <h3 class="rcmd_b3"><span>使用した商品</span></h3>
                <ul class="rcmd_good">

                    <?php
                    $args = [
                        'post_type' => 'product',
                        'posts_per_page' => -1,
                        'meta_query' => [
                            [
                                'key' => 'column_id',           // 'maker_id'
                                'value' => get_the_ID(),       // 現在の投稿ID
                                'compare' => '=',
                                'type' => 'CHAR',
                            ],
                        ],
                    ];

                    $the_query = new WP_Query($args);

                    if ($the_query->have_posts()):
                        while ($the_query->have_posts()): $the_query->the_post(); ?>
                            <li>
                                <a href="good_detail_ba.html" class="box_syohin">



                                    <a href="<?php the_permalink(); ?>">
                                        <div class="box_intro">
                                            <!-- アイキャッチ画像 -->
                                            <?php
                                            $pic = get_field('pic1');
                                            // $picが存在する場合のみURLを取得
                                            $pic_url =  $pic['sizes']['thumbnail'];
                                            ?>
                                            <img src="<?php echo $pic_url; ?>" alt=" ご飯のお供">

                                            <!-- 商品名 -->
                                            <h3 class="intro_sbtitle"><?php the_title(); ?></h3>


                                        </div>
                                    </a>
                            </li>
                        <?php endwhile;
                        wp_reset_postdata();
                    else: ?>
                        <p>関連する商品が見つかりませんでした。</p>
                    <?php endif; ?>
                </ul>
            </section>

        </section>
    </div>
</main>



<?php get_footer(); ?>
