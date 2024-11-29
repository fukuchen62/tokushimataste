<?php get_header() ?>
<main>
    <div class="inner">
        <?php //インナー入れておきました。
        ?>
        <?php get_template_part('template-parts/breadcrumb');
        ?>
    </div>

    <h2 style="text-align: center;">お供の一覧表示</h2>
    <!-- ジャンル検索 -->
    <section id="btn-area" class="wrap">
        <div class="inner">
            <?php //インナー入れておきました。
            ?>
            <!-- ジャンル検索ボタン -->
            <ul class="btn-content">
                <?php //商品種別のスラッグを全部配列に入れました。
                ?>
                <?php $args = get_terms([
                    'taxonomy' => 'product_type',
                    'fields' => 'slugs',
                    // 投稿がないタクソノミーも表示させる
                    'hide_empty' => false,
                    // その他を最後に回す（wordpressの設定を使うことができました。）
                    "orderby" => "id"
                ]); ?>

                <?php foreach ($args as $key => $value): ?>
                    <?php // スラッグをforeach文でループさせる
                    ?>
                    <li id="<?php print $value ?>">

                        <a href="<?php echo get_term_link(
                                        // タクソノミーのリンクを取得
                                        get_term_by('slug', $value, 'product_type'),
                                        // タクソノミーの中から、スラッグを検索している
                                        'product_type'
                                    ) ?>" class="">
                            <?php //とりあえず配列で取得して、要素が一つの配列を分解している
                            ?>
                            <span><?php echo implode(
                                        (get_terms(
                                            [
                                                'taxonomy' => 'product_type',
                                                'fields' => 'names',
                                                'slug' => $value,
                                                // 投稿がないタクソノミーも表示させる
                                                'hide_empty' => false
                                            ]
                                        )
                                        )
                                    ) ?>
                            </span>
                        </a>
                    </li>
                <?php endforeach; ?>
                </li>
                <!-- <li id="other">
                    <a href="<?php /*echo get_term_link(get_term_by('slug', 'others', 'product_type'), 'product_type') */ ?>" class=""><span>その他</span></a>
                </li> -->
            </ul>
        </div>
    </section>
    <div class="card-container">
        <div class="inner">
            <?php //インナー入れておきました。
            ?>
            <ul class="page_list">
                <?php if (have_posts()): ?>
                    <?php while (have_posts()): the_post(); ?>
                        <li>
                            <?php get_template_part('template-parts/loop', 'product'); ?>
                        </li>
                    <?php endwhile; ?>
                <?php endif ?>
            </ul>
        </div>
    </div>
    <?php get_template_part('template-parts/pagination'); ?>
</main>

<?php get_footer(); ?>
