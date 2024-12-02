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


        <h2 class="ttl_box">
            <h2 class="ttl_rsp"><?php the_field('recipe_name'); ?></h2>
            <!-- ループ外 -->
            <?php
            global $wp_query;
            $post_id = $wp_query->get_queried_object_id();
            echo get_favorites_button($post_id);
            ?>
            <!-- / ループ外 -->

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
                    <<div class="slick_rs_img">
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
        <h3>一言</h3>
        <p>
            <?php the_field('recipe_description'); ?>
        </p>
    </section>

    <section class="ingredient_rs">
        <h2>材料</h2>
        <p>
            <?php the_field('ingredient'); ?>
        </p>
    </section>

    <section class="howtomake_rs">
        <h2>作り方</h2>
        <p>
            <?php the_field('how_to_make'); ?>
        </p>
    </section>

    <!-- idに紐づけた商品 -->
    <section class="goods_used">
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

        </div>
</main>
<?php get_footer(); ?>
