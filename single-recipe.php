<?php get_header(); ?>

<main>
    <div class="inner">
        <!--パンくずリスト-->
        <?php get_template_part('template-parts/breadcrumb'); ?>

        <div class="fav_plugins_pc">
            <!-- いいねボタン -->
            <?php echo do_shortcode('[wp_ulike]'); ?>

            <!-- お気に入りループ外 -->
            <?php
            global $wp_query;
            $post_id = $wp_query->get_queried_object_id();
            echo get_favorites_button($post_id);
            ?>
            <!-- / お気に入りループ外 -->
        </div>
        <h2 class="ttl_rcp"><?php the_field('recipe_name'); ?></h2>
        <div class="fav_plugins_sp">
            <!-- いいねボタン -->
            <?php echo do_shortcode('[wp_ulike]'); ?>

            <!-- お気に入りループ外 -->
            <?php
            global $wp_query;
            $post_id = $wp_query->get_queried_object_id();
            echo get_favorites_button($post_id);
            ?>
            <!-- / お気に入りループ外 -->
        </div>



        <div class="sub-inner">
            <div class="container_ms">
                <div class="slider_ms">
                    <?php
                    $pic = get_field('pic1');
                    $pic_url = $pic ? $pic['sizes']['large'] : '';
                    ?>
                    <?php if ($pic_url): ?>
                        <div>
                            <img src="<?php echo esc_url($pic_url); ?>" alt="<?php the_title_attribute(); ?>" class="img-fluid">
                        </div>
                    <?php endif; ?>

                    <?php
                    $pic = get_field('pic2');
                    $pic_url = $pic ? $pic['sizes']['large'] : '';
                    ?>
                    <?php if ($pic_url): ?>
                        <div>
                            <img src="<?php echo esc_url($pic_url); ?>" alt="<?php the_title_attribute(); ?>" class="img-fluid">
                        </div>
                    <?php endif; ?>

                    <?php
                    $pic = get_field('pic3');
                    $pic_url = $pic ? $pic['sizes']['large'] : '';
                    ?>
                    <?php if ($pic_url): ?>
                        <div>
                            <img src="<?php echo esc_url($pic_url); ?>" alt="<?php the_title_attribute(); ?>" class="img-fluid">
                        </div>
                    <?php endif; ?>

                    <?php
                    $pic = get_field('pic4');
                    $pic_url = $pic ? $pic['sizes']['large'] : '';
                    ?>
                    <?php if ($pic_url): ?>
                        <div>
                            <img src="<?php echo esc_url($pic_url); ?>" alt="<?php the_title_attribute(); ?>" class="img-fluid">
                        </div>
                    <?php endif; ?>
                </div>

                <!--以下はサムネイル画像 -->
                <div class="thumbnail_ms">
                    <?php
                    $pic = get_field('pic1');
                    $pic_url = $pic ? $pic['sizes']['thumbnail'] : '';
                    ?>
                    <?php if ($pic_url): ?>
                        <div class="thumbnail_img">
                            <img src="<?php echo esc_url($pic_url); ?>" alt="<?php the_title_attribute(); ?>" class="img-fluid">
                        </div>
                    <?php endif; ?>

                    <?php
                    $pic = get_field('pic2');
                    $pic_url = $pic ? $pic['sizes']['thumbnail'] : '';
                    ?>
                    <?php if ($pic_url): ?>
                        <div class="thumbnail_img">
                            <img src="<?php echo esc_url($pic_url); ?>" alt="<?php the_title_attribute(); ?>" class="img-fluid">
                        </div>
                    <?php endif; ?>

                    <?php
                    $pic = get_field('pic3');
                    $pic_url = $pic ? $pic['sizes']['thumbnail'] : '';
                    ?>
                    <?php if ($pic_url): ?>
                        <div class="thumbnail_img">
                            <img src="<?php echo esc_url($pic_url); ?>" alt="<?php the_title_attribute(); ?>" class="img-fluid">
                        </div>
                    <?php endif; ?>

                    <?php
                    $pic = get_field('pic4');
                    $pic_url = $pic ? $pic['sizes']['thumbnail'] : '';
                    ?>
                    <?php if ($pic_url): ?>
                        <div class="thumbnail_img">
                            <img src="<?php echo esc_url($pic_url); ?>" alt="<?php the_title_attribute(); ?>" class="img-fluid">
                        </div>
                    <?php endif; ?>
                </div>
            </div>
        </div>

        <!-- レシピ詳細説明 -->
        <div class="sub-inner">
            <div class="info-company">
                <?php the_field('recipe_description') ?>
            </div>
        </div>
        <!-- レシピ内容 -->
        <section class="info sub-inner">

            <table>
                <tr>
                    <th>材料</th>
                    <td><?php the_field('ingredient') ?></td>
                </tr>
                <tr>
                    <th>作り方</th>
                    <td><?php echo get_field('how_to_make') ?></td>
                </tr>
                <!-- <tr>
                    <th>FAX</th>
                    <td><?php echo  get_field('fax') ?></td>
                </tr>

                <tr>
                    <th>営業時間</th>
                    <td><?php the_field('business_hours') ?></td>
                </tr>
                <tr>
                    <th>会社のHP</th>
                    <td><a href="<?php the_field('url') ?>"><?php the_field('url') ?></a></td>
                </tr> -->
                <!-- <tr>
                    <td colspan="2" class="note">
                        ※お問い合わせは営業時間内でお願いします。
                </tr> -->
            </table>
        </section>

        <?php if (get_field('memo')) : ?>
            <section class="info sub-inner">
                <h3>その他情報</h3>
                <div class="others">
                    <p><?php the_field('memo'); ?></p>
                </div>
            </section>
        <?php endif; ?>

        <!-- カスタム投稿のターム名を出力 -->
        <!-- <h2> -->
        <?php
        // $terms = get_the_terms($post->ID, 'recipe_type');
        // if ($terms):
        //     foreach ($terms as $term):
        //         echo $term->name; //ターム名
        //     endforeach;
        // endif;
        ?>
        <!-- </h2> -->


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
