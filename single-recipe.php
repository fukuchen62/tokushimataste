<?php get_header(); ?>

<main>
    <div class="inner">
        <!--パンくずリスト-->
        <?php get_template_part('template-parts/breadcrumb'); ?>

        <!-- カスタム投稿のターム名を出力 -->
        <h2>
            <?php
            $terms = get_the_terms($post->ID, 'recipe_type');
            if ($terms):
                foreach ($terms as $term):
                    echo $term->name; //ターム名
                endforeach;
            endif;
            ?>
        </h2>

        <!-- ループ外 -->
        <?php
        global $wp_query;
        $post_id = $wp_query->get_queried_object_id();
        echo get_favorites_button($post_id);
        ?>
        <!-- / ループ外 -->
        <h2 class="ttl_box">
            <h2 class="ttl_rsp"><?php the_field('recipe_name'); ?></h2>


            <!-- スライダー -->
            <div class="container_rs">
                <div class="slider_rs">
                    <div class="slick_rs_img">
                        <?php
                        $post_id = get_the_ID(); // 現在の投稿IDを取得
                        $pic1 = get_post_meta($post_id, 'pic1', true);
                        ?>
                    </div>
                    <div class="slick_rs_img">
                        <?php
                        $post_id = get_the_ID(); // 現在の投稿IDを取得
                        $pic2 = get_post_meta($post_id, 'pic2', true);
                        ?>
                    </div>
                    <div class="slick_rs_img">
                        <?php
                        $post_id = get_the_ID(); // 現在の投稿IDを取得
                        $pic3 = get_post_meta($post_id, 'pic3', true);
                        ?>
                    </div>
                    <div class="slick_rs_img">
                        <?php
                        $post_id = get_the_ID(); // 現在の投稿IDを取得
                        $pic4 = get_post_meta($post_id, 'pic4', true);
                        ?>
                    </div>
                </div>
                <div class="thumbnail_rs">
                    <div class="thumbnail_rs_img">
                        <?php
                        $post_id = get_the_ID(); // 現在の投稿IDを取得
                        $pic1 = get_post_meta($post_id, 'pic1', true);
                        ?>
                    </div>
                    <div class="thumbnail_rs_img">
                        <?php
                        $post_id = get_the_ID(); // 現在の投稿IDを取得
                        $pic2 = get_post_meta($post_id, 'pic2', true);
                        ?>
                    </div>
                    <div class="thumbnail_rs_img">
                        <?php
                        $post_id = get_the_ID(); // 現在の投稿IDを取得
                        $pic3 = get_post_meta($post_id, 'pic3', true);
                        ?>
                    </div>
                    <div class="thumbnail_rs_img">
                        <?php
                        $post_id = get_the_ID(); // 現在の投稿IDを取得
                        $pic4 = get_post_meta($post_id, 'pic4', true);
                        ?>
                    </div>
                </div>
            </div>

            <section class="memo_rs">
                <h2>一言</h2>
                <div>
                    <?php the_field('recipe_description'); ?>
                </div>
            </section>

            <section class="ingredient_rs">
                <h2>材料</h2>
                <div>
                    <?php the_field('ingredient'); ?>
                </div>
            </section>

            <section class="howtomake_rs">
                <h2>作り方</h2>
                <div>
                    <?php the_field('how_to_make'); ?>
                </div>
            </section>

            <!-- idに紐づけた商品 -->
            <!-- <section class="goods_used">
                <h2>使ったお供</h2>
                <ul class="flex_use_goods">
                    <li>
                        <a href="../html/column_detail.html">
                            <div class="box_syohin">
                                <img src="../uploads/nikumisoitame.jpg" alt="コラムの写真">
                                <h3>サブタイトルサブタイトル</h3>
                                <p>テキストが入ります。。。テキストは入ります。。。テキストが入ります。。。テキストは入ります。。。テキストが入ります。。。</p>
                            </div>
                        </a>
                    </li>
                </ul>
            </section> -->
            <section class="rcmd_box">
                <h3 class="rcmd_b3">関連商品</h3>
                <ul class="rcmd_good">
                    <?php
                    // 現在のレシピ投稿のカスタムフィールド 'product_id' を取得
                    $product_ids = get_field('product_id');

                    // $product_ids が配列か単一IDかをチェック
                    if ($product_ids) {
                        // 配列でない場合に配列化
                        $product_ids = is_array($product_ids) ? $product_ids : [$product_ids];

                        // WP_Queryの設定
                        $args = [
                            'post_type' => 'product',        // 商品のカスタム投稿タイプ
                            'post__in' => $product_ids,     // 指定したIDに基づいて投稿を取得
                            'posts_per_page' => -1,         // 全件取得
                        ];

                        $the_query = new WP_Query($args);

                        if ($the_query->have_posts()):
                            while ($the_query->have_posts()): $the_query->the_post(); ?>
                                <li>
                                    <div class="box_syohin">
                                        <a href="<?php the_permalink(); ?>">
                                            <!-- アイキャッチ画像 -->
                                            <?php
                                            $pic = get_field('pic1');
                                            $pic_url = $pic ? $pic['sizes']['thumbnail'] : 'path/to/default/image.jpg';
                                            ?>
                                            <img src="<?php echo esc_url($pic_url); ?>" alt="関連商品">
                                            <!-- 商品名 -->
                                            <h3 class="name_syokuhin"><?php the_title(); ?></h3>
                                        </a>
                                    </div>
                                </li>
                            <?php endwhile;
                            wp_reset_postdata();
                        else: ?>
                            <p>関連する商品が見つかりませんでした。</p>
                        <?php endif;
                    } else { ?>
                        <p>関連する商品が登録されていません。</p>
                    <?php } ?>
                </ul>
            </section>


    </div>
</main>
<?php get_footer(); ?>
