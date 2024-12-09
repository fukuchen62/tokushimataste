<?php get_header(); ?>

<!-- <div class="contentupper">
    <form id="form1" action="ご飯のお供サイトURL">
        <input id="sbox1" name="s" type="text" placeholder="キーワードを入力" />
        <input id="sbtn1" type="submit" value="検索" />
    </form>
</div> -->

<main class="top">
    <!-- このサイトについて -->
    <div class="inner">
        <section class="aboutsite">
            <h2>このサイトについて</h2>
            <p id="aboutsite-text">
                「徳島を旅するように味わう」<br>
                徳島の名産品を使った「ご飯のお供」を、あたかも徳島を旅するように味わえる体験として提供。各商品を作った人やメーカー様の想いをこのサイトを通じて知っていただけたらと思います。<br>
                「ご飯のお供」を通じて、地元の生産者と消費者をつなぐ架け橋となり、食べるだけでなく、応援や共感を生むようなサイトになれば幸いです。
            </p>
        </section>

        <!-- 商品一覧 -->
        <section class="container">
            <div class="ttl_box">
                <h2>ご飯のお供商品</h2>
                <p>5種類の項目に分けてご案内します。</p>
            </div>

            <div class="scroll-infinity">
                <div class="scroll-infinity__wrap">
                    <ul class="scroll-infinity__list scroll-infinity__list--left">

                        <?php
                        $args = [
                            'post_type'      => 'product', // カスタム投稿タイプ
                            'posts_per_page' => 10,            // 表示する投稿数
                            'orderby'        => 'rand',       // ランダム順
                        ];
                        // WP_Queryのインスタンスを作成
                        $the_query = new WP_Query($args);
                        if ($the_query->have_posts()): ?>
                            <?php while ($the_query->have_posts()): $the_query->the_post() ?>

                                <li class="scroll-infinity__item">
                                    <a href="<?php the_permalink(); ?>">
                                        <?php
                                        $pic = get_field('pic1');
                                        // $picが存在する場合のみURLを取得
                                        $pic_url =  $pic['sizes']['large'];
                                        ?>
                                        <img src="<?php echo $pic_url; ?>" alt="">
                                    </a>
                                </li>
                            <?php endwhile; ?>
                            <?php while ($the_query->have_posts()): $the_query->the_post() ?>
                                <li class="scroll-infinity__item">
                                    <a href="<?php the_permalink(); ?>">
                                        <?php
                                        $pic = get_field('pic1');
                                        // $picが存在する場合のみURLを取得
                                        $pic_url =  $pic['sizes']['large'];
                                        ?>
                                        <img src="<?php echo $pic_url; ?>" alt="">
                                    </a>
                                </li>
                            <?php endwhile; ?>
                        <?php
                            wp_reset_postdata(); // クエリをリセット
                        endif;
                        ?>
                    </ul>

                </div>
            </div>
            <a href="<?php echo home_url('/product_type/ferment') ?>" class="btn btn-border-shadow btn-border-shadow--color">もっと見る</a>
        </section>

        <!-- マップ検索 -->
        <section class="container">
            <div class="ttl_box">
                <h2>徳島のご飯 お友達いろいろ！</h2>
                <p>エリア別検索ができます。</p>
            </div>
            <div class="area_map">
                <div>
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/tokusima-map02.png" alt="エリア検索map">
                </div>
                <div class="kumo nishi">
                    <a href="<?php echo home_url('/area/west/'); ?>">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/kumo_nishi.png" alt="県西部">
                    </a>
                </div>
                <div class="kumo higashi">
                    <a href="<?php echo home_url('/area/east/'); ?>">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/kumo_higashi.png" alt="県東部">
                    </a>
                </div>
                <div class="kumo minami">
                    <a href="<?php echo home_url('/area/south/'); ?>">
                        <img src=" alt=" 県南部">
                    </a>
                </div>
            </div><?php echo get_template_directory_uri(); ?>/assets/images/kumo_minami.png"
        </section>
        <section class="container">
            <div class="ttl_box">
                <h2>条件指定でご飯のお供を探す！</h2>
                <p>細かく条件を設定して調べられます。</p>
            </div>
            <div class="area_btn1">
                <a href="<?php echo home_url('/?s= /') ?>" class="btn btn-border-shadow btn-border-shadow--color">詳細検索</a>
            </div>
        </section>


        <!-- メーカー -->
        <section class="container">
            <div class="ttl_box">
                <h2>メーカー紹介</h2>
                <p>情報提供していただいた徳島県内のメーカーです。</p>
            </div>
            <div class="scroll-infinity">
                <div class="scroll-infinity__wrap">
                    <ul class="scroll-infinity__list scroll-infinity__list--left">

                        <?php
                        $args = [
                            'post_type'      => 'maker', // カスタム投稿タイプ
                            'posts_per_page' => 10,            // 表示する投稿数
                            'orderby'        => 'rand',       // ランダム順
                        ];

                        // WP_Queryのインスタンスを作成
                        $the_query = new WP_Query($args);

                        if ($the_query->have_posts()): ?>
                            <?php while ($the_query->have_posts()): $the_query->the_post() ?>
                                <li class="scroll-infinity__item">
                                    <a href="<?php the_permalink(); ?>">
                                        <?php
                                        $pic = get_field('pic1');
                                        // $picが存在する場合のみURLを取得
                                        $pic_url =  $pic['sizes']['large'];
                                        ?>
                                        <img src="<?php echo $pic_url; ?>" alt="">
                                        <!-- <p><?php //the_field('company');
                                                ?></p> -->
                                    </a>
                                </li>
                            <?php endwhile; ?>

                            <?php while ($the_query->have_posts()): $the_query->the_post() ?>
                                <li class="scroll-infinity__item">
                                    <a href="<?php the_permalink(); ?>">
                                        <?php
                                        $pic = get_field('pic1');
                                        // $picが存在する場合のみURLを取得
                                        $pic_url =  $pic['sizes']['large'];
                                        ?>
                                        <img src="<?php echo $pic_url; ?>" alt="">
                                        <!-- <p><?php //the_field('company');
                                                ?></p> -->
                                    </a>
                                </li>
                            <?php endwhile; ?>
                        <?php
                            wp_reset_postdata(); // クエリをリセット
                        endif;
                        ?>
                    </ul>
                </div>
            </div>
            <div>
                <a href="<?php echo home_url('/maker_type/m_east/') ?>" class="btn btn-border-shadow btn-border-shadow--color">もっと見る</a>
            </div>
        </section>

        <!-- コラム -->
        <section class="container">
            <div class="ttl_box">
                <h2>コラム</h2>
                <p>インタビューや取材日記などを紹介します。</p>
            </div>
            <ul class="column_list">
                <?php
                $args = [
                    'post_type' => 'column', // メニューの投稿タイプ
                    'posts_per_page' => 2,
                    'orderby'       => 'rand',   // ランダム表示
                ];
                $the_query = new WP_Query($args);

                if ($the_query->have_posts()): ?>
                    <?php while ($the_query->have_posts()): $the_query->the_post() ?>
                        <li>
                            <a href="<?php the_permalink(); ?>">
                                <div class="box_intro">
                                    <div>
                                        <?php if (has_post_thumbnail()): ?>
                                            <?php the_post_thumbnail('medium'); ?>
                                        <?php else: ?>
                                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/noimage.png" alt="">
                                        <?php endif; ?>
                                    </div>
                                    <h3 class="intro_sbtitle"><?php the_title(); ?></h3>
                                    <!-- 50文字で切る -->
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

            <div>
                <a href="<?php echo home_url('/column/') ?>" class="btn btn-border-shadow btn-border-shadow--color">もっと見る</a>
            </div>
        </section>

        <!-- アレンジレシピ -->
        <section class="container">
            <div class="ttl_box">
                <h2>アレンジレシピ</h2>
                <p>🎵ごはんのお供を使ったアレンジレシピです🎶</p>
            </div>

            <ul class="list">
                <?php
                $args = [
                    'post_type' => 'recipe', // メニューの投稿タイプ
                    'posts_per_page' => 3,
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
                            <a href="<?php the_permalink(); ?>">
                                <div class="recipe_box">
                                    <?php
                                    $pic = get_field('pic1');
                                    // $picが存在する場合のみURLを取得
                                    $pic_url =  $pic['sizes']['medium'];
                                    ?>
                                    <img src="<?php echo $pic_url; ?>" alt="Image" class="img-fluid">
                                    <!-- <img src="../uploads/furikake.jpeg" alt="Image" class="img-fluid"> -->

                                    <p><?php the_title(); ?></p>

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
            <div>
                <a href="<?php echo home_url('/recipe/') ?>" class="btn btn-border-shadow btn-border-shadow--color">もっと見る</a>
            </div>
        </section>

        <!-- インスタ -->
        <section>
            <div class="inst_container">
                <div class="inst_ttl">
                    <h3>instagram</h3>
                </div>
                <ul class="inst_photo">

                    <!-- レンタルサーバー用インスタ     -->
                    <?php echo do_shortcode("[instagram-feed feed=1]"); ?>
                    <!-- ローカル用インスタ     -->
                    <?php //echo do_shortcode("[instagram-feed feed=2]");
                    ?>
                </ul>
            </div>
        </section>
        <!-- ダミーバナー広告あとで消す -->
        <!-- <p style="text-align: center;">バナー広告</p> -->

        <div class="banner">
            <div class="banner-wrap fade is-fadein">
                <div class="banner-item">
                    <a href="https://kisyanotabi.com/" target="_blank">
                        <img src="https://awa-nolife.com/wp-content/themes/awa_nolife/assets/img/top/kisyatabi_ico.png" alt="とくしま汽車の旅">
                    </a>
                </div>
                <div class="banner-item">
                    <a href="https://awa-nolife.com/" target="_blank">

                        <img src="https://awa-nolife.com/wp-content/themes/awa_nolife/assets/img/logo/logo.png" alt="あわ農">
                    </a>
                </div>
                <div class="banner-item">
                    <a href="https://tks-navi.com/" target="_blank">
                        <img src="https://tks-navi.com/wp-content/themes/tks-navi/assets/images/logo.png.webp" alt="こども食堂">
                    </a>
                </div>
                <div class="banner-item">
                    <a href="https://awawannavi.com/" target="_blank">
                        <img src="https://awawannavi.com/wp-content/themes/awa_wannavi/assets/img/common/AwAwanlogo.svg" alt="アワワンナビ">
                    </a>
                </div>
            </div>
        </div>

        <div class="banner">
            <div class="banner-wrap fade is-fadein">
                <div class="banner-item">
                    <a href="https://awa-onsen.com/" target="_blank">
                        <img src="https://awa-onsen.com/wp-content/themes/awa_onsen/assets/images/logo.svg" alt="阿波温泉ナビ">
                    </a>
                </div>
                <div class="banner-item">
                    <a href="https://tokunarainavi.com/" target="_blank">
                        <img src="https://tokunarainavi.com/wp-content/themes/tokunarainavi/assets/images/rogo.png" alt="徳島習い事ナビ">
                    </a>
                </div>
                <div class="banner-item">
                    <a href="https://awa-roadstation.jp/" target="_blank">
                        <img src="https://awa-roadstation.jp/assets/images/site_logo/logo.png" alt="まるっと道の駅">
                    </a>
                </div>
                <div class="banner-item">
                    <a href="https://www.naruto-cycle.com/" target="_blank">
                        <img src="https://www.naruto-cycle.com/wp-content/themes/naruto_cycle/assets/img/header_log_svg.svg" alt="鳴門サイクル">
                    </a>
                </div>
            </div>
        </div>
    </div>

</main>

<?php get_footer(); ?>
