<?php get_header(); ?>
<main>
    <div class="inner">
        <!--パンくずリスト-->
        <?php get_template_part('template-parts/breadcrumb');
        ?>


        <!-- コラム -->
        <section class="column">
            <div class="inner">
                <!-- 見出し -->
                <h2 class="ttl_box ttl_cd"><span><?php the_title(); ?></span></h2>

                <!-- コラム一覧 -->
                <ul class="single_col_flex">

                    <li class="article_col">

                        <div>
                            <?php //if (has_post_thumbnail()):
                            ?>
                            <?php //the_post_thumbnail('medium');
                            ?>
                            <?php //else:
                            ?>
                            <!-- <img src="<?php //echo get_template_directory_uri();
                                            ?>/assets/img/common/noimage.png" alt=""> -->
                            <?php //endif;
                            ?>
                            <?php the_content();
                            ?>
                        </div>
                    </li>




                    <!-- サイドバーメニュー -->
                    <li class="side_bar side_bar_col side-menu">
                        <div class="category-list-outer">
                            <div class="category-list">
                                <h3>コラム一覧</h3>
                            </div>
                        </div>
                        <!-- <aside class="side-menu"> -->
                        <!-- <ul class="side-menu-li"> -->
                        <?php get_sidebar(); ?>

                        <!-- </ul> -->
                        <!-- </aside> -->

                    </li>
                </ul>




            </div>
</main>



<?php get_footer(); ?>
