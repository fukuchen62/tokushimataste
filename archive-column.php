<?php get_header(); ?>

<main>
    <div class="inner">
        <!-- パンくずリスト -->
        <?php get_template_part('template-parts/breadcrumb'); ?>


        <!-- 見出し -->
        <!-- <h2 class="ttl_box">
            <span class="ttl">コラム</span><br>
        </h2> -->
        <!-- コラム無くても良いですか？ -->

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
            <li class="side_bar side_bar_col side-menu">
                <!-- <div class="category-list-outer">
                <div class="category-list">
                    <h3>コラム一覧</h3>
                </div>
            </div> -->
                <aside>
                    <ul class="side-menu-li">
                        <?php get_sidebar(); ?>
                    </ul>
                </aside>
            </li>

            </ul>
        </div>

    </div>
    <?php get_template_part('template-parts/pagination'); ?>


</main>
<?php get_footer(); ?>
