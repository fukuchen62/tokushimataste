<?php get_header(); ?>


<main>
    <!-- パンくずリスト -->
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
                    <span itemprop="name">アレンジレシピ</span>
                </a>
                <meta itemprop="position" content="2" />
            </li>
        </ol>
    </ul>


    <h2 class="ttl_box">アレン ジレシピ</h2>

    <h2>副菜</h2>

    <div class="container">
        <ul class="list">

            <!-- <ul class="page_list"> -->
            <?php
            $recipe_type_terms = get_terms(['taxonomy' => 'recipe_type']);
            if (!empty($recipe_type_terms)): ?>
                <?php foreach ($recipe_type_terms as $recipe_type): ?>
                    <p><a href="<?php echo get_term_link($recipe_type); ?>"><?php echo $recipe_type->name; ?></a></p>

                    <?php
                    $args = [
                        'post_type' => 'recipe', // メニューの投稿タイプ
                        'posts_per_page' => 5,
                        'order'        => 'asc',
                        'orderby'        => 'mita_value',
                        'meta_key'        => 'phonetic',
                    ];

                    $taxquerysp = ['relation' => 'AND'];
                    $taxquerysp[] = [
                        'taxonomy' => 'recipe_type',
                        'terms' => $recipe_type->slug,
                        'field' => 'slug',
                    ];
                    $args['tax_query'] = $taxquerysp;
                    $the_query = new WP_Query($args);

                    if ($the_query->have_posts()): ?>
                        <?php while ($the_query->have_posts()): $the_query->the_post() ?>
                            <li>
                                <div class="recipe">
                                    <?php
                                    $pic = get_field('pic1');
                                    // $picが存在する場合のみURLを取得
                                    $pic_url =  $pic['sizes']['medium'];
                                    ?>
                                    <img src="<?php echo $pic_url; ?>" alt="">

                                    <p><?php the_title(); ?></p>
                                </div>
                            </li>
                    <?php endwhile;
                        wp_reset_postdata(); // リセット
                    else :
                        echo '<p>投稿が見つかりませんでした。</p>';
                    endif;
                    ?>
                <?php endforeach; ?>
            <?php endif; ?>


            <li>
                <div class="recipe">
                    <img src="../uploads/tsukudani.jpeg" alt="Image" class="img-fluid">
                    <p>海苔の佃煮パスタ</p>
                </div>
            </li>
            <li>
                <div class="recipe">
                    <img src="../uploads/tsukudani.jpeg" alt="Image" class="img-fluid">
                    <p>レシピ名</p>
                </div>
            </li>
            <li>
                <div class="recipe">
                    <img src="../uploads/tsukemono.jpeg" alt="Image" class="img-fluid">
                    <p>無限おつまみ！たたききゅうりの梅ナムル</p>
                </div>
            </li>
            <li>
                <div class="recipe">
                    <img src="../uploads/tsukudani.jpeg" alt="Image" class="img-fluid">
                    <p>レシピ名</p>
                </div>
            </li>
            <li>
                <div class="recipe">
                    <img src="../uploads/tsukudani.jpeg" alt="Image" class="img-fluid">
                    <p>レシピ名</p>
                </div>
            </li>
        </ul>

        <div class="more">
            <a class="btn btn-border-shadow btn-border-shadow--color">もっと見る</a>
        </div>
    </div>

    <h2>メインディッシュ</h2>
    <div class="container">
        <ul class="list">
            <li>
                <div class="recipe">
                    <img src="../uploads/tsukemono.jpeg" alt="Image" class="img-fluid">
                    <p>レシピ名</p>
                </div>
            </li>
            <li>
                <div class="recipe">
                    <img src="../uploads/tsukudani.jpeg" alt="Image" class="img-fluid">
                    <p>レシピ名</p>
                </div>
            </li>
            <li>
                <div class="recipe">
                    <img src="../uploads/tsukudani.jpeg" alt="Image" class="img-fluid">
                    <p>レシピ名</p>
                </div>
            </li>
            <li>
                <div class="recipe">
                    <img src="../uploads/tsukemono.jpeg" alt="Image" class="img-fluid">
                    <p>レシピ名</p>
                </div>
            </li>
            <li>
                <div class="recipe">
                    <img src="../uploads/tsukudani.jpeg" alt="Image" class="img-fluid">
                    <p>レシピ名</p>
                </div>
            </li>
            <li>
                <div class="recipe">
                    <img src="../uploads/tsukudani.jpeg" alt="Image" class="img-fluid">
                    <p>レシピ名</p>
                </div>
            </li>
        </ul>

        <div class="more">
            <a class="btn btn-border-shadow btn-border-shadow--color">もっと見る</a>
        </div>
    </div>

    <h2>軽食</h2>
    <div class="container">
        <ul class="list">
            <li>
                <div class="recipe">
                    <img src="../uploads/tsukemono.jpeg" alt="Image" class="img-fluid">
                    <p>レシピ名</p>
                </div>

            </li>
            <li>
                <div class="recipe">
                    <img src="../uploads/tsukudani.jpeg" alt="Image" class="img-fluid">
                    <p>レシピ名</p>
                </div>
            </li>
            <li>
                <div class="recipe">
                    <img src="../uploads/tsukudani.jpeg" alt="Image" class="img-fluid">
                    <p>レシピ名</p>
                </div>
            </li>
            <li>
                <div class="recipe">
                    <img src="../uploads/tsukemono.jpeg" alt="Image" class="img-fluid">
                    <p>レシピ名</p>
                </div>
            </li>
            <li>
                <div class="recipe">
                    <img src="../uploads/tsukudani.jpeg" alt="Image" class="img-fluid">
                    <p>レシピ名</p>
                </div>
            </li>
            <li>
                <div class="recipe">
                    <img src="../uploads/tsukudani.jpeg" alt="Image" class="img-fluid">
                    <p>レシピ名</p>
                </div>
            </li>
        </ul>

        <div class="more">
            <a class="btn btn-border-shadow btn-border-shadow--color">もっと見る</a>

        </div>
    </div>


    <h2>その他</h2>

    <div class="container">
        <ul class="list">
            <li>
                <div class="recipe">
                    <img src="../uploads/tsukemono.jpeg" alt="Image" class="img-fluid">
                    <p>レシピ名</p>
                </div>
            </li>
            <li>
                <div class="recipe">
                    <img src="../uploads/tsukudani.jpeg" alt="Image" class="img-fluid">
                    <p>レシピ名</p>
                </div>
            </li>
            <li>
                <div class="recipe">
                    <img src="../uploads/tsukudani.jpeg" alt="Image" class="img-fluid">
                    <p>レシピ名</p>
                </div>
            </li>
            <li>
                <div class="recipe">
                    <img src="../uploads/tsukemono.jpeg" alt="Image" class="img-fluid">
                    <p>レシピ名</p>
                </div>
            </li>
            <li>
                <div class="recipe">
                    <img src="../uploads/tsukudani.jpeg" alt="Image" class="img-fluid">
                    <p>レシピ名</p>
                </div>
            </li>
            <li>
                <div class="recipe">
                    <img src="../uploads/tsukudani.jpeg" alt="Image" class="img-fluid">
                    <p>レシピ名</p>
                </div>
            </li>
        </ul>
        <div class="more">
            <a class="btn btn-border-shadow btn-border-shadow--color">もっと見る</a>
        </div>
    </div>

</main>








<main>
    <section class="section section-foodList">
        <div class="section_inner">
            <div class="section_header">
                <h2 class="heading heading-primary"><span>レシピ紹介</span>FOOD</h2>

            </div>
            <?php
            /*
            $menu_terms = get_terms(['taxonomy' => '']);
            if (!empty($menu_terms)):
                */
            ?>
            <?php /*foreach ($menu_terms as $menu): */ ?>
            <section class="section_body">
                <h3 class="heading heading-secondary">
                    <!-- <a href="<?php /*echo get_term_link($menu);*/ ?>"><?php /*echo $menu->name;*/ ?></a> -->
                    <span><?php /*echo strtoupper($menu->slug);*/ ?></span>
                </h3>
                <ul class="foodList">
                    <?php
                    // メニューの投稿タイプ
                    /*
                            $args = [
                                'post_type' => 'food',
                                'post_per_page' => -1,
                            ];
                            $taxquerysp = ['relation' => 'AND'];
                            $taxquerysp[] = [
                                'taxonomy' => 'menu',
                                'terms' => $menu->slug,
                                'field' => 'slug',
                            ];
                            $args['tax_query'] = $taxquerysp;
                            $the_query = new WP_Query($args);
                            */
                    if (/*$the_query->*/have_posts()): ?>
                        <?php while (/*$the_query->*/have_posts()): /*$the_query->*/ the_post() ?>
                            <li class="foodList_item">
                                <?php get_template_part('template-parts/loop', 'test'); ?>
                            </li>
                        <?php endwhile; ?>
                        <?php /*wp_reset_postdata();*/ ?>
                    <?php endif ?>
                </ul>
            </section>
            <?php /*endforeach;*/ ?>
            <?php /*endif;*/ ?>
        </div>
    </section>
</main>

<?php get_footer(); ?>
