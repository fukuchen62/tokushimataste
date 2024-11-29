<?php get_header(); ?>

<main>
    <!-- パンくずリスト -->
    <?php get_template_part('template-parts/breadcrumb'); ?>

    <!-- コラム -->
    <section class="column">
        <div class="inner">
            <!-- 見出し -->
            <h2 class="ttl_box">
                <span class="ttl">コラム</span><br>

            </h2>

            <!-- コラム一覧 -->
            <?php if (have_posts()) : ?>
                <ul class="column_list">
                    <?php while (have_posts()) : the_post(); ?>
                        <li>
                            <?php get_template_part('template-parts/loop', 'column'); ?>
                        </li>
                    <?php endwhile; ?>
                </ul>
            <?php endif; ?>
        </div>
    </section>

</main>

<!-- サイドバーメニュー -->
<li class="side_bar side_bar_col">
    <div class="category-list-outer">
        <div class="category-list">
            <h3>コラム一覧</h3>
        </div>
    </div>
    <aside class="side-menu">
        <ul class="side-menu-li">
            <?php get_sidebar(); ?>
        </ul>
</li>
<?php get_template_part('template-parts/pagination'); ?>


<?php get_footer(); ?>
