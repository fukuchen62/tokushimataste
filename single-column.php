<?php get_header(); ?>
<main>
    <div class="inner">
        <!--パンくずリスト-->
        <?php get_template_part('template-parts/breadcrumb');
        ?>


        <!-- コラム -->
        <section class="column">
            <!-- ループ外 -->
            <?php
            global $wp_query;
            $post_id = $wp_query->get_queried_object_id();
            echo get_favorites_button($post_id);
            ?>
            <!-- / ループ外 -->
            <!-- 見出し -->
            <h2 class="ttl_box ttl_cd"><span><?php the_title(); ?></span></h2>

            <!-- コラム一覧 -->
            <div class="single_col_flex">
                <div class="article_col">

                    <div>
                        <?php the_content();
                        ?>
                    </div>
                </div>

                <!-- サイドメニュー -->
                <?php get_sidebar(); ?>
            </div>
        </section>



        <!-- idと紐づいた情報 -->
        <section>
            <h3 class="related_all">関連する商品、<br>レシピ、メーカー様</h3>

            <ul class="good_used_flex">

                <li>
                    <a href="../html/column_detail.html">
                        <div class="box_intro box_intro_col">
                            <img src="../uploads/nikumisoitame.jpg" alt="コラムの写真">
                            <h3 class="intro_sbtitle intro_sbtitle_cs">サブタイトルサブタイトル</h3>
                            <!-- <p>このサイトは、徳島県の食文化や特産品、地元で長く親しまれてきた味わいを紹介し、徳島県民や徳島県外の人</p> -->
                        </div>
                    </a>

                </li>

                <li>
                    <a href="../html/column_detail.html">
                        <div class="box_intro box_intro_col">
                            <img src="../uploads/nikumisoitame.jpg" alt="コラムの写真">
                            <h3 class="intro_sbtitle intro_sbtitle_cs">サブタイトルサブタイトル</h3>
                        </div>
                    </a>
                </li>

                <li>
                    <a href="../html/column_detail.html">
                        <div class="box_intro box_intro_col">
                            <img src="../uploads/nikumisoitame.jpg" alt="コラムの写真">
                            <h3 class="intro_sbtitle intro_sbtitle_cs">サブタイトルサブタイトル</h3>
                        </div>
                    </a>
                </li>

            </ul>
        </section>





    </div>
</main>



<?php get_footer(); ?>
