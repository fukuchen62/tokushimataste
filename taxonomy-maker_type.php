<?php get_header(); ?>

<main>
    <div class="inner">
        <!-- パンくずリスト -->
        <?php get_template_part('template-parts/breadcrumb'); ?>


        <!-- エリア検索ボタン -->
        <div id="btn-area" class="wrap">
            <ul class="btn-content">
                <a href="<?php echo home_url('/maker_type/m_east/'); ?>" class="">
                    <li id="east">
                        <span>県東部</span>
                    </li>
                </a>
                <a href="<?php echo home_url('/maker_type/m_west/'); ?>" class="">
                    <li id="west">
                        <span>県西部</span>
                    </li>
                </a>
                <a href="<?php echo home_url('/maker_type/m_south/'); ?>" class="">
                    <li id="south">
                        <span>県南部</span>
                    </li>
                </a>
            </ul>
        </div>
        <h2 class="area_box"><span class="ttl"><?php single_term_title(); ?>&nbsp;検索結果</span><?php echo $wp_query->found_posts; ?>件</h2>

        <div class="container">
            <ul class="maker_list">
                <?php if (have_posts()): ?>
                    <?php while (have_posts()) : the_post(); ?>
                        <li>
                            <?php get_template_part('template-parts/loop', 'maker'); ?>
                        </li>
                    <?php endwhile; ?>
                <?php endif; ?>
            </ul>
        </div>
    </div>
</main>

<!-- ページナビ -->
<div class="page_example">
    <?php get_template_part('template-parts/pagination'); ?>
</div>
<?php get_footer(); ?>
