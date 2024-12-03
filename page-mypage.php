<!-- header.phpを読み込む -->
<?php get_header(); ?>

<main>
    <div class="inner">
        <!-- パンくずリスト -->
        <?php get_template_part("template-parts/breadcrumb"); ?>
        <div class="explanation_fv">
            <p>本マイページはこのサイトにてご紹介した『商品』『アレンジレシピ』『コラム』を ブックマークし参照することができます。</p>
            <p>ブックマークにはCookieを使用しています。</p>
            <p>Cookieの削除に伴いブックマークした情報も削除されます。</p>
        </div>

        <p>元HTML</p>
        <section>
            <div class="ttl_box_fv">
                <h3>お気に入りにしたご飯のお供商品</h3>
            </div>
            <a href="">
                <div class="favorite_box">
                    <img src="<?php get_template_directory_uri(); ?>/uploads/tsukudani.jpeg" alt="Image" class="img-fluid">
                    <p>海苔の佃煮パスタ</p>
                </div>
            </a>
        </section>
        <p>元HTMLここまで</p>

        <!-- １つ目のカテゴリのカード群 -->
        <section>
            <div class="ttl_box_fv">
                <h3>お気に入りにしたご飯のお供</h3>
            </div>

            <div class="favorite_box">
                <a href="<?php the_permalink(); ?>">
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
                                    <!-- カード内情報 -->
                                    <?php
                                    $pic = get_field('pic1');
                                    $pic_url = $pic ? $pic['sizes']['medium'] : '';
                                    ?>
                                    <?php if ($pic_url): ?>
                                        <img src="<?php echo esc_url($pic_url); ?>" alt="<?php the_title_attribute(); ?>" class="img-fluid">
                                    <?php endif; ?>
                                    <p><?php the_field("product_name"); ?>
                                    </p>
                                    <p><?php //the_field("");
                                        ?></p>

                                <?php
                                // end ループ while
                                endwhile;
                                wp_reset_postdata();
                                // else :
                                ?>
                    <?php
                            endif;
                        endif;
                    // end favorites
                    endif;
                    ?>
                </a>
            </div>
        </section>

        <!-- 区切り線のhr -->
        <hr>

        <!-- ２つ目のカテゴリのカード群 -->
        <section>
            <div class="ttl_box_fv">
                <h3>お気に入りにしたコラム</h3>
            </div>
            <div class="favorite_box">
                <a href="<?php the_permalink(); ?>">
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
                                    <?php if (has_post_thumbnail()) : ?>
                                        <?php the_post_thumbnail("thumbnail"); ?>
                                    <?php else : ?>
                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/noimage.png" alt="">
                                    <?php endif; ?>
                                    <p><?php the_title(); ?></p>
                                    <p><?php //the_field("");
                                        ?></p>
                                <?php
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
                </a>
            </div>
        </section>

        <!-- 区切り線のhr -->
        <hr>

        <!-- ３つ目のカテゴリのカード群 -->
        <section>
            <div class="ttl_box_fv">
                <h3>お気に入りにしたレシピ</h3>
            </div>
            <div class="favorite_box">
                <a href="<?php the_permalink(); ?>">
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
                                    <?php if (has_post_thumbnail()) : ?>
                                        <?php the_post_thumbnail("medium"); ?>
                                    <?php else : ?>
                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/noimage.png" alt="">
                                    <?php endif; ?>
                                    <p class="intro_sbtitle"><?php the_field("recipe_name");
                                                                ?></p>
                                <?php
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
                </a>
            </div>
        </section>
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
