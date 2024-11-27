<!-- <link rel="stylesheet" href="<?php //echo get_template_directory_uri();
                                    ?>/assets/css/reset.css" media="all"> -->
<!-- <link rel="stylesheet" href="<?php //echo get_template_directory_uri();
                                    ?>/assets/css/common.css" media="all"> -->

<?php get_header() ?>

<main>
    <div class="inner">
        <!-- パンくずリスト -->
        <?php get_template_part('template-parts/breadcrumb'); ?>


        <h2 class="ttl_box"><span class="ttl">メーカーさん紹介</span></h2>

        <!-- エリア検索ボタン -->
        <div id="btn-area" class="wrap">
            <ul class="btn-content">
                <li id="east">
                    <a href="<?php echo home_url('/area/east/'); ?>" class=""><span>県東</span></a>
                </li>
                <li id="west"><a href="<?php echo home_url('/area/west/'); ?>" class=""><span>県西</span></a>
                </li>
                <li id="south"><a href="<?php echo home_url('/area/south/'); ?>" class=""><span>県南</span></a>
                </li>
            </ul>
        </div>

        <h2 class="area_box"><span class="ttl">県東部</span></h2>

        <?php //$area_slug = get_query_var('area');
        ?>
        <?php //var_dump($area_slug);
        ?>
        <?php //$area = get_term_by('slug', $area_slug, 'area');
        ?>

        <div class="container">
            <ul class="maker_list">
                <?php if (have_posts()): ?>
                    <?php while (have_posts()) : the_post(); ?>

                        <?php get_template_part('template-parts/loop', 'maker'); ?>

                    <?php endwhile; ?>
                <?php endif; ?>
            </ul>


            <li>
                <a href="">
                    <div class="box_maker">
                        <img src="../uploads/tennin (1).png" alt="メーカー写真">
                        <h3>サブタイトルサブタイトル</h3>
                        <p>テキストが入ります。。。テキストは入ります。。。テキストが入ります。。。テキストは入ります。。。テキストが入ります。。。</p>

                    </div>
                </a>
            </li>
            <li>
                <a href="">
                    <div class="box_maker">
                        <img src="../uploads/tennin (1).png" alt="メーカー写真">
                        <h3>サブタイトルサブタイトル</h3>
                        <p>テキストが入ります。。。テキストは入ります。。。テキストが入ります。。。テキストは入ります。。。
                </a>
            </li>
            </ul>
        </div>
        <!-- ページネーション代用 -->
        <!-- <ul class="page_example">
            <li class="pre">前へ</li>
            <li class="this">1</li>
            <li><a href="">2</a></li>
            <li><a href="">3</a></li>
            <li><a href="">4</a></li>
            <li><a href="">次へ</a></li>
        </ul> -->

        <!-- <script src="https://code.jquery.com/jquery-3.6.0.js"></script>
        <script src="../assets/js/main.js"></script> -->


    </div>
</main>

<!-- ページナビ -->
<?php get_template_part('template-parts/pagination'); ?>

<?php get_footer(); ?>
