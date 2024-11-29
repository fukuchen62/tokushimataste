<?php get_header(); ?>

<main>
    <div class="inner">
        <!-- パンくずリスト -->
        <?php get_template_part('template-parts/breadcrumb'); ?>

        <h2 class="ttl_box"><span class="ttl">メーカーさん紹介</span></h2>

        <!-- エリア検索ボタン -->
        <div id="btn-area" class="wrap">
            <ul class="btn-content">
                <li id="east">
                    <a href="<?php echo home_url('/maker_type/m_east/'); ?>" class=""><span>県東</span></a>
                </li>
                <li id="west"><a href="<?php echo home_url('/maker_type/m_west/'); ?>" class=""><span>県西</span></a>
                </li>
                <li id="south"><a href="<?php echo home_url('/maker_type/m_south/'); ?>" class=""><span>県南</span></a>
                </li>
            </ul>
        </div>
        <h2 class="area_box"><span class="ttl"><?php single_term_title(); ?></span> <?php echo $post->count ?></h2>


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
        </div>
</main>

<!-- ページナビ -->
<div class="page_example">
    <?php get_template_part('template-parts/pagination'); ?>
</div>
<?php get_footer(); ?>
