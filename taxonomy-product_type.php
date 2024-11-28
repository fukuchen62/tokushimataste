<?php get_header() ?>
<main>
    <?php get_template_part('template-parts/breadcrumb');
    ?>
    <?php //動くパンくずリスト
    ?>
    <!-- <ul class="breadcrumb">
        <ol itemscope itemtype="https://schema.org/BreadcrumbList">
            <li itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem">
                <a itemprop="item" href="../html/index.html">
                    <span itemprop="name">ホーム</span>
                </a>
                <meta itemprop="position" content="1" />
            </li>

            <li itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem">
                <a itemprop="item" href="#">
                    <span itemprop="name">商品一覧</span>
                </a>
                <meta itemprop="position" content="2" />
            </li>
        </ol>
    </ul> -->


    <h2 style="text-align: center;">お供の一覧表示</h2>
    <!-- ジャンル検索 -->
    <section id="btn-area" class="wrap">
        <div class="inner">
            <?php //インナー入れておきました。何卒よろしくお願いします。
            ?>
            <!-- ジャンル検索ボタン -->
            <ul class="btn-content">
                <?php $args = get_terms([
                    'taxonomy' => 'product_type',
                    'fields' => 'slugs'
                ]); ?>
                <?php foreach ($args as $key => $value): ?>
                    <li id="<?php print $value ?>">
                        <a href="<?php echo get_term_link(get_term_by('slug', $value, 'product_type'), 'product_type') ?>" class="">
                            <span><?php echo implode((get_terms([
                                        'taxonomy' => 'product_type',
                                        'fields' => 'names',
                                        'slug' => $value,
                                    ])
                                    )) ?>
                            </span>
                        </a>
                    </li>
                <?php endforeach; ?>
                </li>
                <li id="other">
                    <a href="<?php echo get_term_link(get_term_by('slug', 'others', 'product_type'), 'product_type') ?>" class=""><span>その他</span></a>
                </li>
            </ul>
        </div>
    </section>
    <div class="card-container">
        <div class="inner">
            <?php //インナー入れておきました。何卒よろしくお願いします。
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
