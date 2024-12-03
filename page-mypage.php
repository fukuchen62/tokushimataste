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

        <p>ここまで</p>

        <!-- １つ目のカテゴリのカード群 -->
        <section>
            <div class="ttl_box_fv">
                <h3>お気に入りにしたご飯のお供</h3>
            </div>
            <ul class="card_fv">
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

                                <li>
                                    <a href="<?php the_permalink(); ?>">
                                        <div class="favorite_box">
                                            <!-- カード内情報 -->
                                            <?php
                                            $pic = get_field('pic1');
                                            $pic_url = $pic ? $pic['sizes']['thumbnail'] : '';
                                            ?>
                                            <?php if ($pic_url): ?>
                                                <img src="<?php echo esc_url($pic_url); ?>" alt="<?php the_title_attribute(); ?>" class="img-fluid">
                                            <?php endif; ?>
                                            <p><?php the_field("product_name"); ?>
                                            </p>
                                            <p><?php //the_field("");
                                                ?></p>
                                        </div>
                                    </a>
                                </li>
                            <?php
                            // end ループ while
                            endwhile;
                            wp_reset_postdata();
                            // else :
                            ?>
                        <?php endif; ?>
            </ul>
        <?php endif; ?>
    <?php endif; ?>
    <!-- end favorites -->
        </section>

        <!-- 区切り線のhr -->
        <hr>

        <!-- ２つ目のカテゴリのカード群 -->
        <section>
            <div class="ttl_box_fv">
                <h3>お気に入りにしたレシピ</h3>
            </div>
            <ul class="card_fv">
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

                                <li>
                                    <a href="<?php the_permalink(); ?>">
                                        <div class="favorite_box">
                                            <!-- カード内情報 -->
                                            <?php
                                            $pic = get_field('pic1');
                                            $pic_url = $pic ? $pic['sizes']['medium'] : '';
                                            ?>
                                            <?php if ($pic_url): ?>
                                                <img src="<?php echo esc_url($pic_url); ?>" alt="<?php the_title_attribute(); ?>" class="img-fluid">
                                            <?php endif; ?>
                                            <p><?php the_field("recipe_name"); ?>
                                            </p>
                                            <p><?php //the_field("");
                                                ?></p>
                                        </div>
                                    </a>
                                </li>
                            <?php
                            // end ループ while
                            endwhile;
                            wp_reset_postdata();
                            // else :
                            ?>
                        <?php endif; ?>
            </ul>
        <?php endif; ?>
    <?php endif; ?>
    <!-- end favorites -->
        </section>
        <!-- 区切り線のhr -->
        <hr>

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
