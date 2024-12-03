<?php get_header(); ?>
<main>
    <div class="inner">
        <div class="inner_gs">
            <?php get_template_part('template-parts/breadcrumb');
            ?>

            <h2 class="tittle_goods_single"><span><?php the_title() ?></span></h2>

            <!-- お気に入りボタン追記12/1山口-->
            <?php
            global $wp_query;
            $post_id = $wp_query->get_queried_object_id();
            echo get_favorites_button($post_id);
            ?>
            <!-- お気に入りボタン追記 -->

            <div class="goods_si_flex">
                <?php $img = get_field('pic1');
                $img_url = $img['sizes']['large']; ?>

                <img src="<?php echo $img_url; ?>" alt="Image" class="goods_pic">
                <br>
                <table class="goods_table">
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
            </div>
            <section class="memo_gs">
                <h3 class=>キャッチフレーズ</h3>
                <p><?php
                    the_field('catchphrase') ?></p>
            </section>

            <section class="memo_gs">
                <h3 class=>商品概要</h3>
                <p><?php the_field('introduction') ?></p>
            </section>

            <!-- 会社のHPが登録されている場合は表示される -->
            <?php //この投稿にメーカーidが登録されているかどうかを調べる
            ?>
            <?php if (!empty(get_field('maker_id'))): ?>
                <?php $m_id = get_field('maker_id'); ?>
                <?php //登録されたメーカーidにurlが登録されているかどうかを調べる
                ?>
                <?php if (!empty(get_field('url', $m_id))): ?>
                    <section class="memo_gs">
                        <h3 class=>メーカーHP</h3>
                        <?php //the_field('maker_id');
                        ?>
                        <a href="<?php the_field('url', $m_id) ?>"><?php the_field('url', $m_id) ?></a>
                    </section>
                <?php endif; ?>
            <?php endif; ?>

            <?php if (!empty(get_field('memo'))): ?>
                <section class="memo_gs">
                    <h3 class=>備考</h3>
                    <p><?php the_field('memo') ?></p>
                </section>
            <?php endif ?>

            <?php if (!empty(get_field('maker_id'))): ?>
                <!-- 仮でタイトルを入れています。デザインを確認しておいてください。 -->
                <h2 class="tittle_goods_single"><span>製造メーカー様紹介（仮）</span></h2>

                <div class="box_maker">
                    <a href="<?php echo get_permalink($m_id); ?>">
                        <div class="box_intro">
                            <?php
                            $pic = get_field('pic1', $m_id);
                            $pic_url = $pic ? $pic['sizes']['medium_large'] : '';
                            ?>
                            <?php if ($pic_url): ?>
                                <img src="<?php echo esc_url($pic_url); ?>" alt="<?php the_title_attribute(); ?>" class="img-fluid">
                            <?php endif; ?>
                            <h3><?php the_title(); ?></h3>
                            <p>住所:<?php the_field('address', $m_id); ?></p>
                            <p>TEL:<?php the_field('tel', $m_id); ?></p>
                            <p>営業時間：<?php the_field('business_hours', $m_id); ?></p>
                        </div>
                    </a>
                </div>
            <?php endif; ?>
        </div>
    </div>

    <!-- <div> -->
    <!-- ここから山口実験追記 -->
    <?php /*
        // カスタムフィールド 'maker_id' に保存された投稿IDを取得
        $maker_id = get_field('maker_id');

        // maker_id から投稿データを取得
        $maker_post = get_post($maker_id);

        print_r($maker_post);

        if ($maker_post) {
            // 投稿タイトル (maker_title) を取得
            $maker_title = $maker_post->post_title;

            // 表示
            echo '<p>メーカー名: ' . esc_html($maker_title) . '</p>';

            echo '<p>url: ' . esc_html(the_permalink($maker_id)) . '</p>';
            echo get_post_meta($maker_id, 'address', true);
        }*/
    ?>
    <!-- </div> -->


</main>
<?php get_footer(); ?>
