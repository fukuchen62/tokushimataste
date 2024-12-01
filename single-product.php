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
                    <tr>
                        <th>価格</th>
                        <td><?php the_field('price') ?></td>
                    </tr>
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
                    <tr>
                        <th>保存方法</th>
                        <td><?php the_field('how_to_save') ?>
                        </td>
                    </tr>
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
                        <?php the_field('maker_id'); ?>
                        <a href="<?php the_field('url', $m_id) ?>"><?php the_field('url', $m_id) ?></a>
                    </section>
                <?php endif; ?>
            <?php endif; ?>
        </div>
    </div>
</main>
<?php get_footer(); ?>
