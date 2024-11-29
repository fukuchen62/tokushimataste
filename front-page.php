<?php get_header(); ?>


<!-- <div class="contentupper">
                <form id="form1" action="ご飯のお供サイトURL">
                    <input id="sbox1" name="s" type="text" placeholder="キーワードを入力" />
                    <input id="sbtn1" type="submit" value="検索" />
                </form>
            </div> -->


<main>
    <!-- このサイトについて -->
    <div class="inner">
        <div class="container aboutsite">
            <h2>このサイトについて</h2>
            <p>
                「徳島を旅するように味わう」<br>
                徳島とユーザーが「つながる」ことを目指す。徳島の名産品を使った「ご飯のおとも」を、あたかも徳島を旅するように味わえる体験として提供。各商品を作った人のインタビューを掲載することで、ご飯のおともを通じて、地元の生産者と消費者をつなぐ架け橋となり、食べるだけでなく、応援や共感を生むようなサイトに。
            </p>
        </div>
    </div>


    <!-- 商品一覧 -->
    <div class="inner">
        <div class="container">
            <div class="ttl_box">
                <h2>ご飯のお供etc</h2>
                <p>5種類の項目に分けてご案内します。</p>
            </div>

            <div class="scroll-infinity1">
                <div class="scroll-infinity__wrap1">
                    <ul class="scroll-infinity__list scroll-infinity__list--left1">
                        <?php
                        $args = [
                            'post_type'      => 'product', // カスタム投稿タイプ
                            'posts_per_page' => 3,            // 表示する投稿数
                            'orderby'        => 'rand',       // ランダム順
                        ];
                        // WP_Queryのインスタンスを作成
                        $the_query = new WP_Query($args);
                        if ($the_query->have_posts()): ?>
                        <?php while ($the_query->have_posts()): $the_query->the_post() ?>

                        <li class="scroll-infinity__item1">
                            <?php
                                    $pic = get_field('pic1');
                                    // $picが存在する場合のみURLを取得
                                    $pic_url =  $pic['sizes']['thumbnail'];
                                    ?>
                            <img src="<?php echo $pic_url; ?>" alt="">
                        </li>
                        <?php
                            endwhile;
                            wp_reset_postdata(); // クエリをリセット
                        endif;
                        ?>
                    </ul>
                </div>
            </div>
        </div>
        <a href="<?php echo home_url('/product_type/ferment') ?>" class="btn btn-border-shadow btn-border-shadow--color">もっと見る</a>
    </div>


    <!-- マップ検索 -->
    <div class="inner area">
        <div class="container">
            <div class="ttl_box">
                <h2>徳島のご飯 お友達いろいろ！</h2>
                <p>エリア別検索ができます。</p>
            </div>
            <div class="area_map">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/tokusima-map02.png" alt="エリア検索map">

                <div class="kumo nishi">
                    <a href="area.html">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/kumo_nishi.png" alt="県西部">
                    </a>
                </div>
                <div class="kumo higashi">
                    <a href="area.html">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/kumo_higashi.png" alt="県東部">
                    </a>
                </div>
                <div class="kumo minami">
                    <a href="area.html">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/kumo_minami.png" alt="県南部">
                    </a>
                </div>
            </div>
            <div class="area_btn">
                <a href="<?php echo home_url('/area/east/') ?>" class="btn btn-border-shadow btn-border-shadow--color">詳細検索は<br>こちらから！</a>
            </div>
        </div>
    </div>


    <!-- メーカー -->
    <div class="inner">
        <div class="container">
            <div class="ttl_box">
                <h2>メーカーさんご紹介</h2>
                <p>徳島県内のメーカーさんです。</p>
            </div>
            <div class="scroll-infinity1">
                <div class="scroll-infinity__wrap1">
                    <ul class="scroll-infinity__list scroll-infinity__list--left1">

                        <?php
                        $args = [
                            'post_type'      => 'maker', // カスタム投稿タイプ
                            'posts_per_page' => 6,            // 表示する投稿数
                            'orderby'        => 'rand',       // ランダム順
                        ];

                        // WP_Queryのインスタンスを作成
                        $the_query = new WP_Query($args);

                        if ($the_query->have_posts()): ?>
                        <?php while ($the_query->have_posts()): $the_query->the_post() ?>
                        <li class="scroll-infinity__item">
                            <?php
                                    $pic = get_field('pic1');
                                    // $picが存在する場合のみURLを取得
                                    $pic_url =  $pic['sizes']['thumbnail'];
                                    ?>
                            <img src="<?php echo $pic_url; ?>" alt="">
                            <!-- <p><?php //the_field('company');
                                            ?></p> -->
                        </li>
                        <?php
                            endwhile;
                            wp_reset_postdata(); // クエリをリセット
                        endif;
                        ?>
                    </ul>
                </div>
            </div>
        </div>
        <div>
            <a href="<?php echo home_url('/maker/') ?>" class="btn btn-border-shadow btn-border-shadow--color">もっと見る</a>
        </div>
    </div>


    <!-- コラム -->
    <div class="inner">
        <div class="container">
            <div class="ttl_box">
                <h2>コラム特集</h2>
                <p>インタビューや取材日記など紹介します。</p>
            </div>
            <ul class="column_list">
                <?php
                $args = [
                    'post_type' => 'column', // メニューの投稿タイプ
                    'posts_per_page' => 2,
                    'orderby'       => 'rand',   // ランダム表示
                ];
                /*
                            $taxquerysp = ['relation' => 'AND'];
                            $taxquerysp[] = [
                                'taxonomy' => 'menu',
                                'terms' => $menu->slug,
                                'field' => 'slug',
                            ];
                            */
                $the_query = new WP_Query($args);

                if ($the_query->have_posts()): ?>
                <?php while ($the_query->have_posts()): $the_query->the_post() ?>
                <li>
                    <a href="../html/column_detail.html">
                        <div class="box_column">
                            <div>
                                <?php if (has_post_thumbnail()): ?>
                                <?php the_post_thumbnail('medium'); ?>
                                <?php else: ?>
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/noimage.png" alt="">
                                <?php endif; ?>

                            </div>
                            <h3><?php the_title(); ?></h3>
                            <!-- 長すぎて改行される問題 -->
                            <?php
                                    $trimmed_excerpt = wp_trim_words(get_the_excerpt(), 50, '...');
                                    echo '<p>' . esc_html($trimmed_excerpt) . '</p>';
                                    ?>

                        </div>
                    </a>
                </li>
                <?php endwhile;
                    wp_reset_postdata(); // リセット
                else :
                    echo '<p>投稿が見つかりませんでした。</p>';
                endif;
                ?>
            </ul>
        </div>
        <div>
            <a href="<?php echo home_url('/column/') ?>" class="btn btn-border-shadow btn-border-shadow--color">もっと見る</a>
        </div>
    </div>


    <!-- アレンジレシピ -->

    <div class="inner">
        <div class="container">
            <div class="ttl_box">
                <div class="ttl_box">
                    <h2>アレンジレシピ</h2>
                    <p>ご飯のお供を利用したレシピです！</p>
                </div>
            </div>
            <ul class="list">
                <?php
                $args = [
                    'post_type' => 'recipe', // メニューの投稿タイプ
                    'post_per_page' => 3,
                    'orderby'        => 'rand',   // ランダム表示
                ];
                /*
                            $taxquerysp = ['relation' => 'AND'];
                            $taxquerysp[] = [
                                'taxonomy' => 'menu',
                                'terms' => $menu->slug,
                                'field' => 'slug',
                            ];
                            */
                $the_query = new WP_Query($args);

                if ($the_query->have_posts()): ?>
                <?php while ($the_query->have_posts()): $the_query->the_post() ?>
                <li>
                    <div class="recipe_box">
                        <?php
                                $pic = get_field('pic1');
                                // $picが存在する場合のみURLを取得
                                $pic_url =  $pic['sizes']['medium'];
                                ?>
                        <img src="<?php echo $pic_url; ?>" alt="">
                        <!-- <img src="../uploads/furikake.jpeg" alt="Image" class="img-fluid"> -->

                        <p><?php the_title(); ?></p>

                    </div>
                </li>
                <?php endwhile;
                    wp_reset_postdata(); // リセット
                else :
                    echo '<p>投稿が見つかりませんでした。</p>';
                endif;
                ?>

        </div>
        <a href="<?php echo home_url('/recipe/') ?>" class="btn btn-border-shadow btn-border-shadow--color">もっと見る</a>


        <!-- インスタ -->
        <div class="inner">
            <div class="inst_container">
                <div class="inst_ttl">
                    <h3>instagram</h3>
                </div>
                <ul class="inst_photo">

                    <?php echo do_shortcode("[instagram-feed feed=2]"); ?>
                </ul>
            </div>
        </div>
    </div>
</main>

<?php get_footer(); ?>
