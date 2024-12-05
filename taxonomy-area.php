<?php get_header() ?>

<main class="inner">
    <!-- パンくずリスト -->
    <?php get_template_part('template-parts/breadcrumb'); ?>

    <!-- エリア検索 -->
    <!-- <h2 style="text-align: center;">お供の商品一覧表示</h2> -->
    <section id="btn-area" class="wrap">
        <!-- エリア検索ボタン -->
        <ul class="btn-content">
            <?php $args = get_terms([
                'taxonomy' => 'area',
                'fields' => 'slugs',
                // 投稿がないタクソノミーも表示させる
                'hide_empty' => false,
                // その他を最後に回す（wordpressの設定を使うことができました。）
                "orderby" => "slug"
            ]); ?>

            <?php foreach ($args as $key => $value): ?>
                <?php
                // タクソノミーのタームを取得
                $terms = get_terms(
                    [
                        'taxonomy' => 'area',
                        'fields' => 'names',
                        'slug' => $value,
                        // 投稿がないタクソノミーも表示させる
                        'hide_empty' => false
                    ]
                );
                $term = get_term_by('slug', $value, 'area');
                $url = get_term_link($term, 'area');
                ?>
                <a href="<?php echo $url; ?>" class="">
                    <li id="<?php print $value ?>">

                        <span><?php echo implode($terms); ?>
                            <!-- ターム毎の投稿件数 -->
                            (<?php echo $term->count; ?>)
                        </span>
                    </li>
                </a>
            <?php endforeach; ?>
        </ul>
    </section>

    <div class="card-container">
        <ul class="page_list">

            <?php if (have_posts()): ?>
                <?php while (have_posts()) : the_post(); ?>
                    <?php get_template_part('template-parts/loop', 'product'); ?>
                <?php endwhile; ?>
            <?php endif; ?>
        </ul>
    </div>

    <!-- ページネーション -->
    <?php get_template_part('template-parts/pagination'); ?>

</main>

<?php get_footer(); ?>
