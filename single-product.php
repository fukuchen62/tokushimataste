<?php get_header(); ?>
<!-- goods_detail.htmlを追加　11/25　香西 -->
<ul class="breadcrumb">
    <ol itemscope itemtype="https://schema.org/BreadcrumbList">
        <li itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem">
            <a itemprop="item" href="../html/index.html">
                <span itemprop="name">ホーム</span>
            </a>
            <meta itemprop="position" content="1" />
        </li>

        <li itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem">
            <a itemprop="item" href="../html/goods.html">
                <span itemprop="name">商品一覧</span>
            </a>
            <meta itemprop="position" content="2" />
        </li>
        <li itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem">
            <a itemprop="item" href="#">
                <span itemprop="name">Oh No 海苔</span>
            </a>
            <meta itemprop="position" content="3" />
        </li>
    </ol>
</ul>


<main>
    <h1 style="text-align: center; margin-bottom: 20px;"><?php the_title() ?></h1>
    <li>
        <img src="../uploads/nori.jpeg" alt="Image" class="img-L" style=" margin-top:14px;"><br>
        <h2 style="padding:15px ;  margin-top:0px; background:#e7d0ae">概要</h2>
        <p><?php the_field('introduction') ?></p>
        <h2>価格</h2>
        <p><?php the_field('price') ?></p>
        <h2>アレルギー表示</h2>
        <?php
        $allergy_term = wp_get_object_terms(
            get_the_ID(),
            'allergy',
            array("fields" => "names")
        ); ?>
        <p><?php if (is_null($allergy_term)): ?>
                <?php echo implode(',', $allergy_term); ?>
            <?php else: ?>
                <?php print 'なし'; ?>
            <?php endif; ?></p>
        <h2>エリア</h2>
        <?php
        $area_term = wp_get_object_terms(
            get_the_ID(),
            'area',
            array("fields" => "names")
        ); ?>
        <p>
            <?php echo $area_term[0]; ?>
        </p>
        <h2>容量</h2>
        <p><?php the_field('net_weight') ?>
        </p>
        <h2>原材料名</h2>
        <p>
            <?php the_field('raw_ｍaterials') ?>
        </p>
        <h2>味</h2>
        <p><?php
            $taste_term = wp_get_object_terms(
                get_the_ID(),
                'taste',
                array("fields" => "names")
            ); ?>
        <p>
            <?php echo $taste_term[0]; ?>
        </p>
        </p>
    </li>

    <!-- トップページに戻るボタン -->
    <div id="page_top"><a href="#"></a></div>
</main>
<?php get_footer(); ?>
