<?php get_header(); ?>
<main>
    <div class="inner">
        <?php get_template_part('template-parts/breadcrumb');
        ?>

        <div class="fav_plugins_pc">
            <!-- お気に入りボタン追記12/1山口-->
            <?php echo do_shortcode('[wp_ulike]'); ?>
            <?php
            global $wp_query;
            $post_id = $wp_query->get_queried_object_id();
            echo get_favorites_button($post_id);
            ?>
            <!-- いいねボタン追記12/5山口 -->
        </div>
        <h2 class="tittle_goods_single"><span><?php the_title() ?></span></h2>

        <div class="fav_plugins_sp">
            <!-- お気に入りボタン追記12/1山口-->
            <?php echo do_shortcode('[wp_ulike]'); ?>
            <?php
            global $wp_query;
            $post_id = $wp_query->get_queried_object_id();
            echo get_favorites_button($post_id);
            ?>
            <!-- いいねボタン追記12/5山口 -->
        </div>

        <div class="catchphrase sub-inner">
            <div class="oneword">
                <?php if (!empty(the_field('catchphrase'))): ?>
                    <?php the_field('catchphrase') ?>
                <?php endif; ?>
            </div>
        </div>

        <div class="sub-inner">
            <?php if (!empty(get_field('pic2')) || !empty(get_field('pic3')) || !empty(get_field('pic4'))): ?>
                <div class="container_ms">
                    <div class="slider_ms">

                        <!-- 画像とテーブルのフレックス -->
                        <!-- <div class="goods_si_flex"> -->

                        <?php
                        $pic = get_field('pic1');
                        $pic_url = $pic ? $pic['sizes']['large'] : '';
                        ''
                        ?>
                        <?php if ($pic_url): ?>
                            <div>
                                <img src="<?php echo esc_url($pic_url); ?>" alt="<?php the_title_attribute(); ?>" class="img-fluid">
                            </div>
                        <?php endif; ?>

                        <?php
                        $pic = get_field('pic2');
                        $pic_url = $pic ? $pic['sizes']['large'] : '';
                        ?>
                        <?php if ($pic_url): ?>
                            <div>
                                <img src="<?php echo esc_url($pic_url); ?>" alt="<?php the_title_attribute(); ?>" class="img-fluid">
                            </div>
                        <?php endif; ?>

                        <?php
                        $pic = get_field('pic3');
                        $pic_url = $pic ? $pic['sizes']['large'] : '';
                        ?>
                        <?php if ($pic_url): ?>
                            <div>
                                <img src="<?php echo esc_url($pic_url); ?>" alt="<?php the_title_attribute(); ?>" class="img-fluid">
                            </div>
                        <?php endif; ?>

                        <?php
                        $pic = get_field('pic4');
                        $pic_url = $pic ? $pic['sizes']['large'] : '';
                        ?>
                        <?php if ($pic_url): ?>
                            <div>
                                <img src="<?php echo esc_url($pic_url); ?>" alt="<?php the_title_attribute(); ?>" class="img-fluid">
                            </div>
                        <?php endif; ?>

                    </div>

                    <!--以下はサムネイル画像 -->
                    <div class="thumbnail_ms">
                        <?php
                        $pic = get_field('pic1');
                        $pic_url = $pic ? $pic['sizes']['thumbnail'] : '';
                        ?>
                        <?php if ($pic_url): ?>
                            <div class="thumbnail_img">
                                <img src="<?php echo esc_url($pic_url); ?>" alt="<?php the_title_attribute(); ?>" class="img-fluid">
                            </div>
                        <?php endif; ?>

                        <?php
                        $pic = get_field('pic2');
                        $pic_url = $pic ? $pic['sizes']['thumbnail'] : '';
                        ?>
                        <?php if ($pic_url): ?>
                            <div class="thumbnail_img">
                                <img src="<?php echo esc_url($pic_url); ?>" alt="<?php the_title_attribute(); ?>" class="img-fluid">
                            </div>
                        <?php endif; ?>

                        <?php
                        $pic = get_field('pic3');
                        $pic_url = $pic ? $pic['sizes']['thumbnail'] : '';
                        ?>
                        <?php if ($pic_url): ?>
                            <div class="thumbnail_img">
                                <img src="<?php echo esc_url($pic_url); ?>" alt="<?php the_title_attribute(); ?>" class="img-fluid">
                            </div>
                        <?php endif; ?>

                        <?php
                        $pic = get_field('pic4');
                        $pic_url = $pic ? $pic['sizes']['thumbnail'] : '';
                        ?>
                        <?php if ($pic_url): ?>
                            <div class="thumbnail_img">
                                <img src="<?php echo esc_url($pic_url); ?>" alt="<?php the_title_attribute(); ?>" class="img-fluid">
                            </div>
                        <?php endif; ?>


                        <?php /*$img = get_field('pic1');
                    $img_url = $img['sizes']['large'];*/ ?>
                        <!-- <img src="<?php /*echo $img_url;*/ ?>" alt="Image" class="goods_pic"> -->

                    </div>
                </div>

            <?php else: ?>
                <?php
                $pic = get_field('pic1');
                $pic_url = $pic ? $pic['sizes']['large'] : '';
                ''
                ?>
                <?php if ($pic_url): ?>
                    <div class="goods_pic">
                        <img src="<?php echo esc_url($pic_url); ?>" alt="<?php the_title_attribute(); ?>" class="img-fluid">
                    </div>
                <?php endif; ?>
            <?php endif; ?>
        </div>

        <div class="sub-inner">
            <div class="info-company">
                <?php the_field('introduction') ?>
            </div>
        </div>

        <!-- 商品の基本情報 -->
        <section class="info sub-inner">
            <h3>商品の基本情報</h3>
            <!-- <table class="goods_table"> -->
            <table>
                <?php if (!empty(get_field('price'))): ?>
                    <tr>
                        <th>価格</th>
                        <td><?php the_field('price') ?></td>
                    </tr>
                <?php endif; ?>
                <tr>
                    <th>アレルギー表示</th>
                    <?php
                    $allergy_term = wp_get_object_terms(
                        get_the_ID(),
                        'allergy',
                        array("fields" => "names")
                    ); ?>
                    <td><?php if (!empty($allergy_term)): ?>
                            <?php echo implode(',', $allergy_term); ?>
                        <?php else: ?>
                            <?php print 'なし'; ?>
                        <?php endif; ?>
                    </td>
                </tr>
                <tr>
                    <th>エリア</th>
                    <?php
                    $area_term = wp_get_object_terms(
                        get_the_ID(),
                        'area',
                        array("fields" => "names")
                    ); ?>
                    <td>
                        <?php echo $area_term[0]; ?>
                    </td>
                </tr>
                <tr>
                    <th>容量</th>
                    <td><?php the_field('net_weight') ?>
                    </td>
                </tr>
                <tr>
                    <th>原材料名</th>
                    <td>
                        <?php the_field('raw_ｍaterials') ?>
                    </td>
                </tr>
                <tr>
                    <th>味</th>
                    <?php
                    $taste_term = wp_get_object_terms(
                        get_the_ID(),
                        'taste',
                        array("fields" => "names")
                    ); ?>
                    <td>
                        <?php echo $taste_term[0]; ?>
                    </td>
                </tr>
                <?php if (!empty(get_field('how_to_save'))): ?>
                    <tr>
                        <th>保存方法</th>
                        <td>
                            <?php the_field('how_to_save') ?>
                        </td>
                    </tr>
                <?php endif; ?>
            </table>
        </section>
        <!-- </div> goods_si_flex-->


        <!-- <section class="memo_gs">
            <h3 class=>キャッチフレーズ</h3>
            <p><?php
                /*the_field('catchphrase')*/ ?></p>
        </section> -->

        <!-- <section class="memo_gs">
            <h3 class=>商品概要</h3>
            <p><?php /*the_field('introduction')*/ ?></p>
        </section> -->

        <?php if (!empty(get_field('memo'))): ?>
            <section class="memo_gs sub-inner">
                <h3 class=>備考</h3>
                <p><?php the_field('memo') ?></p>
            </section>
        <?php endif ?>

        <!-- 会社のHPが登録されている場合は表示される -->
        <?php //この投稿にメーカーidが登録されているかどうかを調べる
        ?>
        <?php if (!empty(get_field('maker_id'))): ?>
            <?php $m_id = get_field('maker_id'); ?>
            <?php //登録されたメーカーidにurlが登録されているかどうかを調べる
            ?>
            <?php if (!empty(get_field('url', $m_id))): ?>
                <section class="memo_gs sub-inner">
                    <h3 class=>メーカーHP</h3>
                    <?php //the_field('maker_id');
                    ?>
                    <a href="<?php the_field('url', $m_id) ?>" target="_blank"><?php the_field('url', $m_id) ?></a>
                </section>
            <?php endif; ?>
        <?php endif; ?>


        <?php if (!empty(get_field('maker_id'))): ?>
            <div class="sub-inner">
                <h2 class="tittle_goods_single"><span>製造メーカー紹介</span></h2>
            </div>
            <div class="box_maker">
                <a href="<?php echo get_permalink($m_id); ?>">
                    <div class="box_intro">
                        <?php
                        $pic = get_field('pic1', $m_id);
                        $pic_url = $pic ? $pic['sizes']['large'] : '';
                        ?>
                        <?php if ($pic_url): ?>
                            <img src="<?php echo esc_url($pic_url); ?>" alt="<?php the_title_attribute(); ?>" class="img-fluid">
                        <?php endif; ?>
                        <h3><?php the_field('company', $m_id); ?></h3>
                        <p>住所:<?php the_field('address', $m_id); ?></p>
                        <p>TEL:<?php the_field('tel', $m_id); ?></p>
                        <p>営業時間：<?php the_field('business_hours', $m_id); ?></p>
                    </div>
                </a>
            </div>

        <?php endif; ?>

    </div>




</main>
<?php get_footer(); ?>
