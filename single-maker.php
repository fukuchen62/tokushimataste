<?php get_header(); ?>
<main>

    <div class="inner">
        <!-- パンくずリスト-->
        <?php get_template_part('template-parts/breadcrumb');
        ?>
        <!-- <div class="inner_ms"> -->
        <h2 class="tittle_ms"><span><?php the_field('company') ?></span></h2>


        <div class="flex_ms">
            <div class="container_ms">
                <div class="slider_ms">
                    <div>
                        <!-- <div class="slick_img">HTMLにはあるがcssに記載なし山口 -->
                        <?php
                        $pic = get_field('pic1');
                        $pic_url = $pic ? $pic['sizes']['medium'] : '';
                        ?>
                        <?php if ($pic_url): ?>
                            <img src="<?php echo esc_url($pic_url); ?>" alt="<?php the_title_attribute(); ?>" class="img-fluid">
                        <?php endif; ?>
                    </div>
                    <div>
                        <!-- <div class="slick_img">HTMLにはあるがcssに記載なし山口 -->
                        <?php
                        $pic = get_field('pic2');
                        $pic_url = $pic ? $pic['sizes']['medium'] : '';
                        ?>
                        <?php if ($pic_url): ?>
                            <img src="<?php echo esc_url($pic_url); ?>" alt="<?php the_title_attribute(); ?>" class="img-fluid">
                        <?php endif; ?>
                    </div>
                    <div>
                        <!-- <div class="slick_img">HTMLにはあるがcssに記載なし山口 -->
                        <?php
                        $pic = get_field('pic3');
                        $pic_url = $pic ? $pic['sizes']['medium'] : '';
                        ?>
                        <?php if ($pic_url): ?>
                            <img src="<?php echo esc_url($pic_url); ?>" alt="<?php the_title_attribute(); ?>" class="img-fluid">
                        <?php endif; ?>
                    </div>
                    <div class="slick_img">
                        <?php
                        $pic = get_field('pic4');
                        $pic_url = $pic ? $pic['sizes']['medium'] : '';
                        ?>
                        <?php if ($pic_url): ?>
                            <img src="<?php echo esc_url($pic_url); ?>" alt="<?php the_title_attribute(); ?>" class="img-fluid">
                        <?php endif; ?>
                    </div>
                </div>
                <div class="thumbnail_ms">
                    <div class="thumbnail_img"> <!-- こっちはある山口 -->
                        <?php
                        $pic = get_field('pic1');
                        $pic_url = $pic ? $pic['sizes']['medium'] : '';
                        ?>
                        <?php if ($pic_url): ?>
                            <img src="<?php echo esc_url($pic_url); ?>" alt="<?php the_title_attribute(); ?>" class="img-fluid">
                        <?php endif; ?>
                    </div>
                    <div class="thumbnail_img">
                        <?php
                        $pic = get_field('pic2');
                        $pic_url = $pic ? $pic['sizes']['medium'] : '';
                        ?>
                        <?php if ($pic_url): ?>
                            <img src="<?php echo esc_url($pic_url); ?>" alt="<?php the_title_attribute(); ?>" class="img-fluid">
                        <?php endif; ?>
                    </div>
                    <div class="medium_img">
                        <?php
                        $pic = get_field('pic3');
                        $pic_url = $pic ? $pic['sizes']['medium'] : '';
                        ?>
                        <?php if ($pic_url): ?>
                            <img src="<?php echo esc_url($pic_url); ?>" alt="<?php the_title_attribute(); ?>" class="img-fluid">
                        <?php endif; ?>
                    </div>
                    <div class="thumbnail_img">
                        <?php
                        $pic = get_field('pic4');
                        $pic_url = $pic ? $pic['sizes']['medium'] : '';
                        ?>
                        <?php if ($pic_url): ?>
                            <img src="<?php echo esc_url($pic_url); ?>" alt="<?php the_title_attribute(); ?>" class="img-fluid">
                        <?php endif; ?>
                    </div>
                </div>
            </div>

            <div class="table_ms">
                <ul>
                    <li class="flex_oneword">
                        <div class=" oneword">
                            <p>一言</p>
                            <?php the_field('catchphrase') ?>
                        </div>
                    </li>
                    <li>
                        <!-- <th>代表者名</th> -->
                        <?php the_field('name') ?>
                    </li>
                    <li>
                        <!-- <th>会社概要</th> -->
                        <?php the_field('company_info') ?>
                    </li>
                    <li>
                        <!-- <th>郵便番号</th> -->
                        <?php echo '〒' . get_field('post_code'); ?>
                    </li>
                    <li>
                        <!-- <th>住所</th> -->
                        <?php the_field('address') ?>
                    </li>
                    <li>
                        <!-- <th>電話番号</th> -->
                        <?php echo 'TEL:' . get_field('tel') ?>
                    </li>
                    <li>
                        <!-- <th>FAX</th> -->
                        <?php echo 'FAX:' . get_field('fax') ?>
                    </li>
                    <li>
                        <!-- <th>EMail</th> -->
                        <?php echo 'E-mail:' . get_field('email') ?>
                    </li>
                    <li>
                        <!-- <th>営業時間</th> -->
                        <?php the_field('business_hours') ?>
                    </li>
                    <?php if (!empty(get_field('url'))): ?>
                        <li>
                            <!-- <th>会社のHP</th> -->
                            <a href="<?php the_field('url') ?>"><?php the_field('url') ?></a>
                        </li>
                    <?php endif ?>
                    <li>
                        <td colspan="2">
                            <p><small>※お問い合わせは営業時間内でお願いします。</small></p>
                    </li>
                </ul>
            </div>
        </div>

        <section class="memo">
            <h3>備考</h3>
            <p><?php the_field('memo') ?></p>
        </section>



        <section class="rcmd_box">
            <!-- ↑このクラスcssに記述無 -->
            <h3 class="rcmd_b3"><span>オススメ商品</span></h3>
            <ul class="rcmd_good">

                <?php
                $args = [
                    'post_type' => 'product',
                    'posts_per_page' => -1,
                    'meta_query' => [
                        [
                            'key' => 'maker_id',           // 'maker_id'
                            'value' => get_the_ID(),       // 現在の投稿ID
                            'compare' => '=',
                            'type' => 'CHAR',
                        ],
                    ],
                ];

                $the_query = new WP_Query($args);

                if ($the_query->have_posts()):
                    while ($the_query->have_posts()): $the_query->the_post(); ?>
                        <li>
                            <div class="box_syohin">


                                <a href="<?php the_permalink(); ?>">

                                    <!-- アイキャッチ画像 -->
                                    <?php
                                    $pic = get_field('pic1');
                                    // $picが存在する場合のみURLを取得
                                    $pic_url =  $pic['sizes']['medium'];
                                    ?>
                                    <img src="<?php echo $pic_url; ?>" alt=" ご飯のお供">

                                    <!-- 商品名 -->
                                    <h3 class="name_syokuhin"><?php the_title(); ?></h3>
                                </a>
                            </div>
                        </li>
                    <?php endwhile;
                    wp_reset_postdata();
                else: ?>
                    <p>関連する商品が見つかりませんでした。</p>
                <?php endif; ?>
            </ul>
        </section>


</main>
<?php get_footer(); ?>
