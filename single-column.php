<?php get_header(); ?>
<main>
    <div class="inner">
        <!--パンくずリスト-->
        <?php get_template_part('template-parts/breadcrumb');
        ?>


        <!-- コラム -->
        <section class="column">

            <!-- 見出し -->
            <h2 class="ttl_box ttl_cd"><span><?php the_title(); ?></span></h2>

            <!-- コラム一覧 -->
            <div class="single_col_flex">
                <div class="article_col">

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
                </div>





                <!-- サイドメニュー -->
                <?php get_sidebar(); ?>
            </div>
        </section>
    </div>

</main>



<?php get_footer(); ?>
