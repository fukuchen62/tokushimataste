<?php get_header(); ?>

<main>
    <div class="inner">
        <!-- パンくずリスト -->
        <?php get_template_part('template-parts/breadcrumb'); ?>

        <div class="layer">
            <div class="layer-in">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/bg_column_okome02chara.png" alt="お米キャラクター">
            </div>
        </div>

        <div class="column_flex">
            <!-- コラム -->
            <section class="column col_wid">
                <!-- コラム一覧 -->
                <ul class="column_list">

                    <?php if (have_posts()) : ?>

                    <?php while (have_posts()) : the_post(); ?>

                    <li>
                        <a href="<?php the_permalink(); ?>">
                            <div class="box_intro">
                                <?php get_template_part('template-parts/loop', 'column'); ?>
                            </div>
                        </a>
                    </li>
                    <?php endwhile; ?>
                    <?php endif; ?>
                </ul>
            </section>

            <!-- サイドバーメニュー -->
            <div class="side_bar side_bar_col side-menu">
                <aside>
                    <div class="side-menu-li">
                        <?php get_sidebar(); ?>
                    </div>
                </aside>
            </div>
        </div>
    </div>
    <?php get_template_part('template-parts/pagination'); ?>


</main>
<?php get_footer(); ?>