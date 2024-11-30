<?php get_header(); ?>
<main>
    <main>
        <div class="inner">
            <!--パンくずリスト-->
            <?php get_template_part('template-parts/breadcrumb'); ?>

            <!-- カスタム投稿のターム名を出力 -->
            <h2>
                <?php
                $terms = get_the_terms($post->ID, 'recipe_type');
                if ($terms):
                    foreach ($terms as $term):
                        echo $term->name; //ターム名
                    endforeach;
                endif;
                ?>
            </h2>


            <h2 class="ttl_box">
                <h2 class="ttl_rsp"><?php the_field('recipe_name'); ?></h2>

                <!-- スライダー -->
                <div class="container_rs">
                    <div class="slider_rs">
                        <div class="slick_rs_img">
                            <img src="../uploads/miso.jpeg" alt="" />
                        </div>
                        <div class="slick_rs_img">
                            <img src="../uploads/narazuke.jpeg" alt="" />
                        </div>
                        <div class="slick_rs_img">
                            <img src="../uploads/nikumisoitame.jpg" alt="" />
                        </div>
                        <div class="slick_rs_img">
                            <img src="../uploads/nori.jpeg" alt="" />
                        </div>
                    </div>
                    <div class="thumbnail_rs">
                        <div class="thumbnail_rs_img">
                            <img src="../uploads/miso.jpeg" alt="" />
                        </div>
                        <div class="thumbnail_rs_img">
                            <img src="../uploads/narazuke.jpeg" alt="" />
                        </div>
                        <div class="thumbnail_rs_img">
                            <img src="../uploads/nikumisoitame.jpg" alt="" />
                        </div>
                        <div class="thumbnail_rs_img">
                            <img src="../uploads/nori.jpeg" alt="" />
                        </div>

                    </div>
                </div>

                <section class="memo_rs">
                    <h3>一言</h3>
                    <p>
                        <?php the_field('description'); ?>
                    </p>
                </section>

                <section class="ingredient_rs">
                    <h2>材料</h2>
                    <p>
                        <?php the_field('ingredient'); ?>
                    </p>
                </section>
                <section class="howtomake_rs">
                    <h2>作り方</h2>
                    <p>
                        <?php the_field('how_to_make'); ?>
                    </p>
                </section>

                <!-- idに紐づけた商品 -->
                <section class="goods_used">
                    <h2>使ったお供</h2>
                    <ul class="flex_use_goods">
                        <li>
                            <a href="../html/column_detail.html">
                                <div class="box_syohin">
                                    <img src="../uploads/nikumisoitame.jpg" alt="コラムの写真">
                                    <h3>サブタイトルサブタイトル</h3>
                                    <p>テキストが入ります。。。テキストは入ります。。。テキストが入ります。。。テキストは入ります。。。テキストが入ります。。。</p>
                                </div>
                            </a>
                        </li>
                    </ul>

        </div>
    </main>
    <?php get_footer(); ?>
