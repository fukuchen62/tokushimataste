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



        <h2 class="ttl_rcp"><?php the_field('recipe_name'); ?></h2>

        <!-- いいねボタン -->
        <?php echo do_shortcode('[wp_ulike]'); ?>

        <!-- スライダー -->
        <div class="container_rs">
            <div class="slider_rs">
                <div>
                    <?php
                    $pic = get_field('pic1');
                    $pic_url = $pic ? $pic['sizes']['medium'] : '';
                    ?>
                    <?php if ($pic_url): ?>
                        <img src="<?php echo esc_url($pic_url); ?>" alt="<?php the_title_attribute(); ?>" class="img-fluid">
                    <?php endif; ?>
                </div>
                <div>
                    <?php
                    $pic = get_field('pic2');
                    $pic_url = $pic ? $pic['sizes']['medium'] : '';
                    ?>
                    <?php if ($pic_url): ?>
                        <img src="<?php echo esc_url($pic_url); ?>" alt="<?php the_title_attribute(); ?>" class="img-fluid">
                    <?php endif; ?>
                </div>
                <div>
                    <?php
                    $pic = get_field('pic3');
                    $pic_url = $pic ? $pic['sizes']['medium'] : '';
                    ?>
                    <?php if ($pic_url): ?>
                        <img src="<?php echo esc_url($pic_url); ?>" alt="<?php the_title_attribute(); ?>" class="img-fluid">
                    <?php endif; ?>
                </div>
                <div>
                    <?php
                    $pic = get_field('pic4');
                    $pic_url = $pic ? $pic['sizes']['medium'] : '';
                    ?>
                    <?php if ($pic_url): ?>
                        <img src="<?php echo esc_url($pic_url); ?>" alt="<?php the_title_attribute(); ?>" class="img-fluid">
                    <?php endif; ?>
                </div>
            </div>
            <div class="thumbnail_rs">
                <div class="thumbnail_rs_img">
                    <?php
                    $pic = get_field('pic1');
                    $pic_url = $pic ? $pic['sizes']['medium'] : '';
                    ?>
                    <?php if ($pic_url): ?>
                        <img src="<?php echo esc_url($pic_url); ?>" alt="<?php the_title_attribute(); ?>" class="img-fluid">
                    <?php endif; ?>
                </div>
                <div class="thumbnail_rs_img">
                    <?php
                    $pic = get_field('pic2');
                    $pic_url = $pic ? $pic['sizes']['medium'] : '';
                    ?>
                    <?php if ($pic_url): ?>
                        <img src="<?php echo esc_url($pic_url); ?>" alt="<?php the_title_attribute(); ?>" class="img-fluid">
                    <?php endif; ?>
                </div>
                <div class="thumbnail_rs_img">
                    <?php
                    $pic = get_field('pic3');
                    $pic_url = $pic ? $pic['sizes']['medium'] : '';
                    ?>
                    <?php if ($pic_url): ?>
                        <img src="<?php echo esc_url($pic_url); ?>" alt="<?php the_title_attribute(); ?>" class="img-fluid">
                    <?php endif; ?>
                </div>
                <div class="thumbnail_rs_img">
                    <?php
                    $pic = get_field('pic4');
                    $pic_url = $pic ? $pic['sizes']['medium'] : '';
                    ?>
                    <?php if ($pic_url): ?>
                        <img src="<?php echo esc_url($pic_url); ?>" alt="<?php the_title_attribute(); ?>" class="img-fluid">
                    <?php endif; ?>
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

        <section class="rcmd_box"> <!-- クラスなし -->
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
                                        $pic_url = $pic ? $pic['sizes']['medium'] : 'path/to/default/image.jpg';
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
