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
                    <h2 style="padding:15px ;  margin-top:0px; background:#e7d0ae">概要</h2>
                    <p><?php the_field('introduction') ?></p>
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
                        <h2>原材料名</h2>
                        <p>
                            <?php the_field('raw_ｍaterials') ?>
                        </p>
                    </tr>
                    <tr>
                        <h2>味</h2>
                        <?php
                        $taste_term = wp_get_object_terms(
                            get_the_ID(),
                            'taste',
                            array("fields" => "names")
                        ); ?>
                        <p>
                            <?php echo $taste_term[0]; ?>
                        </p>
                    </tr>
                </table>
            </div>
            <section class="memo_gs">
                <h3 class=>キャッチフレーズ</h3>
                <p>・駐車場：あり ・トイレ：あり ・宿泊施設：なし ・道具の貸出：あり</p>
            </section>

            <section class="memo_gs">
                <h3 class=>商品概要</h3>
                <p>上質の海苔を産することで知られる有明海その中でも優良な浜の上級品だけを厳選いたしました。香り良く焼きあげたその海苔に、甘・辛・ピリの三拍子そろった味付。良い海苔だけが持つ、歯切れの良さ、心地良い香味がお楽しみいただけます。 食べ応えのある大判８切サイズにカットして使い勝手の良い卓上容器に入っております。 おいしさと使いやすさで人気の、この卓上のりを化粧箱に詰めました。軽快なギフトですので、記念品や御中元・御歳暮
                    慶事・仏事、その他各種御贈答に最適です。</p>
            </section>

            <section class="memo_gs">
                <h3 class=>メーカーHP</h3>
                <a href="">https://www.qlip.school/asp/newscat.asp?nc_id=239</a>
            </section>
        </div>
    </div>
</main>
<?php get_footer(); ?>
