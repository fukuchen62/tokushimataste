<?php get_header(); ?>
<div class="inner">
    <?php //インナー入れておきました。
    ?>
    <?php get_template_part('template-parts/breadcrumb');
    ?>
</div>
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
</ul> -->


<main>
    <h1 style="text-align: center; margin-bottom: 20px;"><?php the_title() ?></h1>
    <div class="inner">
        <?php //innerを入れておきました。
        ?>
        <?php $img = get_field('pic1');
        $img_url = $img['sizes']['large']; ?>
        <li>
            <img src="<?php echo $img_url; ?>" alt="Image" class="img-L" style=" margin-top:14px;">
            <br>
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
            <p><?php if (!empty($allergy_term)): ?>
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
            <?php
            $taste_term = wp_get_object_terms(
                get_the_ID(),
                'taste',
                array("fields" => "names")
            ); ?>
            <p>
                <?php echo $taste_term[0]; ?>
            </p>
        </li>
    </div>

</main>
<?php get_footer(); ?>
