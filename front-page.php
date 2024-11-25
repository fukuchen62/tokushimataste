<?php get_header(); ?>


<!-- <div class="contentupper">
                <form id="form1" action="ご飯のお供サイトURL">
                    <input id="sbox1" name="s" type="text" placeholder="キーワードを入力" />
                    <input id="sbtn1" type="submit" value="検索" />
                </form>
            </div> -->


<main>
    <!-- このサイトについて -->
    <section>
        <div class="inner">
            <div class="aboutsite">
                <h2>このサイトについて</h2>
                <p>
                    「徳島を旅するように味わう」<br>
                    徳島とユーザーが「つながる」ことを目指す。徳島の名産品を使った「ご飯のおとも」を、あたかも徳島を旅するように味わえる体験として提供。各商品を作った人のインタビューを掲載することで、ご飯のおともを通じて、地元の生産者と消費者をつなぐ架け橋となり、食べるだけでなく、応援や共感を生むようなサイトに。
                </p>
            </div>
        </div>
    </section>

    <!-- 商品一覧 -->
    <section>
        <div class="inner">
            <div class="container">
                <div class="ttl_box">
                    <h2>ご飯のお供etc</h2>
                    <p>5種類の項目に分けてご案内します。</p>
                </div>
                <div class="slider-wrap">
                    <div class="slider">
                        <div></div>
                        <div></div>
                        <div></div>
                        <div></div>
                        <div></div>
                    </div>
                    <div class="slider">
                        <div></div>
                        <div></div>
                        <div></div>
                        <div></div>
                        <div></div>
                    </div>
                </div>
            </div>
            <a href="goods.html" class="btn btn-border-shadow btn-border-shadow--color">もっと見る</a>
        </div>
    </section>

    <!-- 検索 -->
    <section>
        <div class="inner">
            <div class="container">
                <div class="ttl_box">
                    <h2>徳島のご飯 お友達いろいろ！</h2>
                    <p>エリア別検索ができます。</p>
                </div>
                <div>
                    <img src="<?php echo get_template_directory_uri(); ?>/uploads/tokusima-map01.png" alt="エリア検索map">
                </div>
            </div>
            <a href="" class="btn btn-border-shadow btn-border-shadow--color">詳細検索は<br>こちらから！</a>
        </div>
    </section>

    <!-- メーカー -->
    <section>
        <div class="inner">
            <div class="container">
                <div class="ttl_box">
                    <h2>メーカー様ご紹介</h2>
                    <p>取材させていただきましたメーカー様をご紹介します。</p>
                </div>
                <div class="slider2-wrap">
                    <div class="slider2">
                        <div></div>
                        <div></div>
                        <div></div>
                        <div></div>
                        <div></div>
                    </div>
                    <div class="slider2">
                        <div></div>
                        <div></div>
                        <div></div>
                        <div></div>
                        <div></div>
                    </div>
                </div>
            </div>
            <a href="maker.html" class="btn btn-border-shadow btn-border-shadow--color">もっと見る</a>
        </div>
    </section>

    <!-- コラム -->
    <section>
        <div class="inner">
            <div class="container">
                <div class="ttl_box">
                    <h2>コラム特集</h2>
                    <p>インタビューや取材日記など紹介します。</p>
                </div>
                <ul class="column_list">
                    <?php
                    $args = [
                        'post_type' => 'column', // メニューの投稿タイプ
                        'post_per_page' => 2,
                        'orderby'       => 'rand',   // ランダム表示
                    ];
                    /*
                            $taxquerysp = ['relation' => 'AND'];
                            $taxquerysp[] = [
                                'taxonomy' => 'menu',
                                'terms' => $menu->slug,
                                'field' => 'slug',
                            ];
                            */
                    $the_query = new WP_Query($args);

                    if ($the_query->have_posts()): ?>
                        <?php while ($the_query->have_posts()): $the_query->the_post() ?>
                            <li>
                                <a href="../html/column_detail.html">
                                    <div class="box_column">
                                        <img src="../uploads/tennin (1).png" alt="コラムの写真">
                                        <h3>サブタイトルサブタイトル</h3>
                                        <p>徳島とユーザーが「つながる」ことを目指す。徳島の名産品を使った「ご飯のおとも」を、あたかも徳島を旅するように味わえる体験として提供。各商品を作った人のインタビューを掲載することで、ご飯のおともを通じて</p>
                                    </div>
                                </a>
                            </li>
                    <?php endwhile;
                        wp_reset_postdata(); // リセット
                    else :
                        echo '<p>投稿が見つかりませんでした。</p>';
                    endif;
                    ?>



                    <!-- <li>
                        <a href="../html/column_detail.html">
                            <div class="box_column">
                                <img src="../uploads/nikumisoitame.jpg" alt="コラムの写真">
                                <h3>サブタイトルサブタイトル</h3>
                                <p>徳島とユーザーが「つながる」ことを目指す。徳島の名産品を使った「ご飯のおとも」を、あたかも徳島を旅するように味わえる体験として提供。各商品を作った人の</p>
                            </div>
                        </a>
                    </li> -->
                </ul>
            </div>
            <a href="column.html" class="btn btn-border-shadow btn-border-shadow--color">もっと見る</a>
        </div>
    </section>

    <!-- アレンジレシピ -->
    <section>
        <div class="inner">
            <div class="container">
                <div class="ttl_box">
                    <div class="ttl_box">
                        <h2>アレンジレシピ</h2>
                        <p>ご飯のお供を利用したレシピです！</p>
                    </div>
                </div>
                <ul class="page_list">
                    <li>
                        <div class="recipe">
                            <img src="../uploads/furikake.jpeg" alt="Image" class="img-fluid">
                            <p>無限おつまみ！たたききゅうりの梅ナムル</p>
                        </div>
                    </li>
                    <li>
                        <div class="recipe">
                            <img src="../uploads/miso.jpeg" alt="Image" class="img-fluid">
                            <p>トロたく丼2行目のイメージ</p>
                        </div>
                    </li>
                    <li>
                        <div class="recipe">
                            <img src="../uploads/saba-misoni.jpg" alt="Image" class="img-fluid">
                            <p>海苔の佃煮パスタ</p>
                        </div>
                    </li>
            </div>
            <a href="recipe.html" class="btn btn-border-shadow btn-border-shadow--color">もっと見る</a>
    </section>

    <!-- インスタ -->
    <section>
        <div class="inner">
            <div class="inst_container">
                <div class="inst_ttl">
                    <h3>instagram</h3>
                </div>
                <ul class="inst_photo">
                    <!-- <li>
                        <a href=""><img src="../uploads/footer-designkanpu.png" alt="instagram">
                        </a>
                    </li>
                    <li>
                        <a href=""><img src="../uploads/tukemono.jpg" alt="instagram"></a>
                    </li>
                    <li>
                        <a href="">x<img src="../uploads/footer-designkanpu.png" alt="instagram"></a>
                    </li>
                    <li>
                        <a href=""><img src="../uploads/misemae.png" alt="instagram"></a>
                    </li>
                    <li>
                        <a href=""><img src="../uploads/furikake.jpeg" alt="instagram"></a>
                    </li>
                    <li>
                        <a href=""><img src="../uploads/narazuke.jpeg" alt="instagram"></a>
                    </li>
                    <li>
                        <a href=""><img src="../uploads/tennin (1).png" alt="instagram"></a>
                    </li>
                    <li>
                        <a href=""><img src="../uploads/otomo.png" alt="Iinstagram"></a>
                    </li>
                </ul>
                <div class="inst_ttl">
                    <h3>インスタグラムでフォロー</h3>
                </div>
            </div>
    </section> -->
                    <?php echo do_shortcode("[instagram-feed feed=2]"); ?>
</main>

<?php get_footer(); ?>



<!-- フードサイエンス -->

<h2>商品</h2>
<?php
// メニューの投稿タイプ

$args = [
    'post_type' => 'product',
    'post_per_page' => 3,
    'orderby'       => 'rand',   // ランダム表示
];
/*
                            $taxquerysp = ['relation' => 'AND'];
                            $taxquerysp[] = [
                                'taxonomy' => 'menu',
                                'terms' => $menu->slug,
                                'field' => 'slug',
                            ];
                            */
$the_query = new WP_Query($args);

if ($the_query->have_posts()): ?>
    <?php while ($the_query->have_posts()): $the_query->the_post() ?>
        <?php
        $pic = get_field('pic1');
        // $picが存在する場合のみURLを取得
        $pic_url =  $pic['sizes']['thumbnail'];
        ?>
        <img src="<?php echo $pic_url; ?>" alt="">
        <p><?php the_field('product_name'); ?></p>
        </li>
<?php endwhile;
    wp_reset_postdata(); // リセット
else :
    echo '<p>投稿が見つかりませんでした。</p>';
endif;
?>

<h2>メーカー</h2>
<?php
$args = [
    'post_type' => 'maker', // メニューの投稿タイプ
    'post_per_page' => 3,
    'orderby'       => 'rand',   // ランダム表示
];
/*
                            $taxquerysp = ['relation' => 'AND'];
                            $taxquerysp[] = [
                                'taxonomy' => 'menu',
                                'terms' => $menu->slug,
                                'field' => 'slug',
                            ];
                            */
$the_query = new WP_Query($args);

if ($the_query->have_posts()): ?>
    <?php while ($the_query->have_posts()): $the_query->the_post() ?>
        <?php
        $pic = get_field('pic1');
        // $picが存在する場合のみURLを取得
        $pic_url =  $pic['sizes']['thumbnail'];
        ?>
        <img src="<?php echo $pic_url; ?>" alt="">
        <p><?php the_field('company'); ?></p>
        </li>
<?php endwhile;
    wp_reset_postdata(); // リセット
else :
    echo '<p>投稿が見つかりませんでした。</p>';
endif;
?>

<h2>コラム</h2>
<?php
$args = [
    'post_type' => 'column', // メニューの投稿タイプ
    'post_per_page' => 3,
    'orderby'       => 'rand',   // ランダム表示
];
/*
                            $taxquerysp = ['relation' => 'AND'];
                            $taxquerysp[] = [
                                'taxonomy' => 'menu',
                                'terms' => $menu->slug,
                                'field' => 'slug',
                            ];
                            */
$the_query = new WP_Query($args);

if ($the_query->have_posts()): ?>
    <?php while ($the_query->have_posts()): $the_query->the_post() ?>
        <?php
        $pic = get_field('pic1');
        // $picが存在する場合のみURLを取得
        $pic_url =  $pic['sizes']['thumbnail'];
        ?>
        <img src="<?php echo $pic_url; ?>" alt="">
        <p><?php the_content(); ?></p>
        </li>
<?php endwhile;
    wp_reset_postdata(); // リセット
else :
    echo '<p>投稿が見つかりませんでした。</p>';
endif;
?>

<h2>レシピ</h2>
<?php
$args = [
    'post_type' => 'recipe', // メニューの投稿タイプ
    'post_per_page' => 3,
    'orderby'        => 'rand',   // ランダム表示
];
/*
                            $taxquerysp = ['relation' => 'AND'];
                            $taxquerysp[] = [
                                'taxonomy' => 'menu',
                                'terms' => $menu->slug,
                                'field' => 'slug',
                            ];
                            */
$the_query = new WP_Query($args);

if ($the_query->have_posts()): ?>
    <?php while ($the_query->have_posts()): $the_query->the_post() ?>
        <?php
        $pic = get_field('pic1');
        // $picが存在する場合のみURLを取得
        $pic_url =  $pic['sizes']['thumbnail'];
        ?>
        <img src="<?php echo $pic_url; ?>" alt="">
        <p><?php the_field('recipe_name'); ?></p>
        </li>
<?php endwhile;
    wp_reset_postdata(); // リセット
else :
    echo '<p>投稿が見つかりませんでした。</p>';
endif;
?>
