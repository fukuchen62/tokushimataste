<?php get_header() ?>
<main class="inner">
    <?php get_template_part('template-parts/breadcrumb');
    ?>

    <!-- <h2 style="text-align: center;">お供の一覧表示</h2> -->
    <!-- ジャンル検索 -->
    <section id="btn-area" class="wrap">
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

            <?php
                // タクソノミーのタームを取得
                $term = get_term_by('slug', $value, 'product_type');
                ?>
            <li id="<?php print $value ?>">
                <a href="<?php echo get_term_link(
                                    // タクソノミーのリンクを取得
                                    get_term_by('slug', $value, 'product_type'),
                                    // タクソノミーの中から、スラッグを検索している
                                    'product_type'
                                ) ?>" class="">

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
                        <!-- ターム毎の投稿件数 -->
                        (<?php echo $term->count; ?>)
                    </span>
                </a>

            </li>
            <?php endforeach; ?>
        </ul>
    </section>

    <div class="card-container">
        <?php //インナー入れておきました。
        ?>
        <ul class="page_list">
            <?php if (have_posts()): ?>
            <?php while (have_posts()): the_post(); ?>
            <?php get_template_part('template-parts/loop', 'product'); ?>
            <?php endwhile; ?>
            <?php endif ?>
        </ul>
    </div>

    <!-- ページネーション -->
    <?php get_template_part('template-parts/pagination'); ?>
</main>

<?php get_footer(); ?>
