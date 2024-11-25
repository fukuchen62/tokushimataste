<?php get_header(); ?>
<!-- <main>
    <?php if (have_posts()): ?>
        <?php while (have_posts()): the_post(); ?>
            <section class="section">
                <div class="section_inner">

                    <div class="food">
                        <div class="food_body">
                            <div class="food_text">
                                <h2 class="heading heading-primary"><?php the_title() ?></h2>
                                <div class="food_content">
                                    <?php the_content() ?>
                                </div>
                            </div>
                            <div class="food_pic">
                                <?php if (get_field('recommend')): ?>
                                    <span class="food_label">オススメ</span>
                                <?php endif; ?>
                                <?php
                                $pic = get_field('pic');
                                $pic_url = $pic['sizes']['large'];
                                ?>
                                <img src="<?php echo $pic_url; ?>" alt="">
                            </div>
                        </div>

                        <ul class="food_list">
                            <li class="food_item">
                                <span class="food_itemLabel">価格</span>
                                <span class="food_itemData"><?php the_field('price') ?></span>
                            </li>
                            <li class="food_item">
                                <span class="food_itemLabel">カロリー</span>
                                <span class="food_itemData"><?php echo number_format(get_field('calorie')) ?>kcal</span>
                            </li>
                            <li class="food_item">
                                <span class="food_itemLabel">アレルギー</span>
                                <span class="food_itemData">
                                    <?php
                                    $allergies = get_field('allergies');
                                    foreach ($allergies as $key => $allergy) {
                                        echo $allergy;
                                        if ($allergy !== end($allergies)) {
                                            echo '、';
                                        }
                                    }
                                    ?>
                                </span>
                            </li>
                        </ul>
                    </div>

                </div>
            </section>
        <?php endwhile; ?>
    <?php endif ?>
</main> -->
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/reset.css" media="all">
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/common.css" media="all">
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/column.css" media="all">
<main>

    <!-- <div class="contentupper">
                <form id="form1" action="ご飯のお供サイトURL">
                    <input id="sbox1" name="s" type="text" placeholder="キーワードを入力" />
                    <input id="sbtn1" type="submit" value="検索" />
                </form>

<!--パンくずリスト-->
    <ul class="breadcrumb">
        <ol itemscope itemtype="https://schema.org/BreadcrumbList">
            <li itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem">
                <a itemprop="item" href="../html/index.html">
                    <span itemprop="name">ホーム</span>
                </a>
                <meta itemprop="position" content="1" />
            </li>

            <li itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem">
                <a itemprop="item" href="../html/column.html">
                    <span itemprop=" name">コラム</span>
                </a>
                <meta itemprop="position" content="2" />
            </li>

            <li itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem">
                <a itemprop="item" href="../html/column_more.html">
                    <span itemprop=" name">インタビュー</span>
                </a>
                <meta itemprop="position" content="3" />
            </li>

            <li itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem">
                <a itemprop="item" href="../html/column_detail.html">
                    <span itemprop=" name">インタビュー詳細</span>
                </a>
                <meta itemprop="position" content="4" />
            </li>
        </ol>
    </ul>


    <!-- コラム -->
    <section class="column">
        <div class="inner">
            <!-- 見出し -->
            <h2 class="ttl_box">
                <span class="ttl"><?php single_term_title('') ?></span><br>

            </h2>

            <!-- コラム一覧 -->
            <?php if (have_posts()) : ?>
                <ul class="column_detail_list">
                    <?php while (have_posts()) : the_post(); ?>
                        <li>
                            <article>
                                <div class="box_column">
                                    <a href="../html/column_detail.html">
                                        <div class=" box__item">
                                            <img src="../uploads/nikumisoitame.jpg" alt="コラムの写真">
                                            <h3><?php the_title(); ?></h3>
                                            <p><?php the_content();
                                                ?>
                                            </p>
                                        </div>
                                    </a>
                                </div>
                            </article>
                        </li>
                    <?php endwhile; ?>
                </ul>
            <?php endif; ?>

    </section>
    <?php //get_template_part('template-parts/columnList');
    ?>

    <?php get_sidebar();
    ?>

    <div><?php the_field('product_id'); ?></div>
    <div><?php the_field('maker_id'); ?></div>
    <div><?php the_field('recipe_id'); ?></div>
    <a href="<?php the_field('url'); ?>"><?php the_field('url'); ?></a>

</main>




<?php get_footer(); ?>
