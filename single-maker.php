<?php get_header(); ?>
<main>

    <div class="inner">
        <!-- パンくずリスト-->
        <?php get_template_part('template-parts/breadcrumb');
        ?>

        <h2 class="tittle_ms"><span><?php the_field('company') ?></span></h2>

        <!-- キャッチフレーズ -->
        <div class="catchphrase sub-inner">
            <div class="oneword">
                <?php the_field('catchphrase') ?>
            </div>
        </div>

        <div class="sub-inner">
            <div class="container_ms">
                <div class="slider_ms">

                    <?php
                    $pic = get_field('pic1');
                    $pic_url = $pic ? $pic['sizes']['large'] : '';
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
                </div>
            </div>
        </div>

        <!-- 会社紹介 -->
        <div class="sub-inner">
            <div class="info-company">
                <?php the_field('company_info') ?>
            </div>
        </div>

        <!-- メーカーの基本情報 -->
        <section class="info sub-inner">
            <h3>メーカーの基本情報</h3>
            <table>
                <tr>
                    <th>住所</th>
                    <td><?php the_field('address') ?></td>
                </tr>
                <tr>
                    <th>電話番号</th>
                    <td><?php echo get_field('tel') ?></td>
                </tr>
                <tr>
                    <th>FAX</th>
                    <td><?php echo  get_field('fax') ?></td>
                </tr>

                <tr>
                    <th>営業時間</th>
                    <td><?php the_field('business_hours') ?></td>
                </tr>
                <tr>
                    <th>会社のHP</th>
                    <td><a href="<?php the_field('url') ?>"><?php the_field('url') ?></a></td>
                </tr>
                <tr>
                    <td colspan="2" class="note">
                        ※お問い合わせは営業時間内でお願いします。
                </tr>
            </table>
        </section>

        <section class="info sub-inner">
            <h3>その他情報</h3>
            <div class="others">
                <p><?php the_field('memo') ?></p>
            </div>
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
