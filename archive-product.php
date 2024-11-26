<?php get_header() ?>
<main>
    <ul class="breadcrumb">
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
    </ul>
    </ol>

    <h1 style="font-size: 20px; font-weight: 600; text-align: center; margin-bottom: 20px;">お供の一覧表示</h1>
    <!-- ジャンル検索 -->
    <section id="btn-area" class="wrap">
        <!-- ジャンル検索ボタン -->
        <?php
        $args_names = [
            'taxonomy' => 'product_type',
            'fields' => 'names',
        ];
        $args_slugs = [
            'taxonomy' => 'product_type',
            'fields' => 'slugs',
        ];
        $term_names = get_terms($args_names);
        $term_slugs = get_terms($args_slugs);
        $args = [];
        for ($i = 0; $i < count($term_names); $i++) {
            $args = array_merge($args, array($term_names[$i] => $term_slugs[$i]));
        }  ?>
        <?php $args = array_merge($args, array('その他' => 'others')) ?>

        <ul class="btn-content">
            <?php foreach ($args as $name => $slug): ?>
                <li id="<?php print $slug ?>">
                    <a href="<?php home_url('/product_type/') ?><?php print $slug ?>" class=""><span><?php print $name ?></span></a>
                </li>
            <?php endforeach ?>
        </ul>
    </section>
    <div class="card-container">
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
    <ul class="pagination"></ul>
    <!-- トップページに戻るボタン -->
    <p id="page-top"><a href="#">↑<br>TOP</a></p>
</main>
<style>
    * {
        box-sizing: border-box;
    }


    ul {
        list-style: none;
    }

    .page_list {
        border-top: 1px solid #000;
        margin-bottom: 20px;
    }

    .page_list li {
        display: none;
        padding: 20px 0;
        border-bottom: 1px solid #000;
    }

    .page_list li.on {
        display: block;
    }

    .pagination {
        width: 70%;
        margin: 0 auto 50px;
        font-size: 14px;
        display: flex;
        align-items: center;
        justify-content: center;
        gap: 5px;
    }

    .pagination .number {
        display: flex;
        align-items: center;
        justify-content: flex-start;
        flex-wrap: wrap;
        gap: 5px;
    }

    .pagination a {
        display: flex;
        align-items: center;
        justify-content: center;
        width: 40px;
        height: 40px;
        text-align: center;
        text-decoration: none;
        cursor: pointer;
        background-color: #ffffff;
        border: solid 1px #1597CC;
        border-radius: 5px;
        padding: 10px 0;
    }

    .pagination .number>a.active {
        background-color: #1597CC;
        color: #fff;
    }
</style>

<script src="https://code.jquery.com/jquery-3.6.0.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/assets/js/goods.js"></script>
</body>

</html>
