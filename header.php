<!-- 福島　2024/11/22　追加　消さないでください。開始 -->
<?php
// 開発モードで公開の時は、管理画面へのログインが必要です。
if (!is_user_logged_in() && IS_DEV == true) {
    header('Location:' . home_url('/') . 'wp-admin');
    exit;
}
?>
<!-- 福島　2024/11/22　追加　消さないでください。 終了-->

<?php
// 下層ページのタイトル、帯画像、デスクリプションの変更
//ページタイトル
$page_tile = '';
//ページタイトル
$img_path = get_template_directory_uri('') . '/assets/images/';
//ページデスクリプション
$page_description = '徳島を旅するように味わう';

if (is_post_type_archive('product') || is_tax('product_type')) {
    $page_tile = '商品一覧';
    $img_path .= 'heade_kv1.jpg';
} else if (is_singular('product')) {
    $page_tile = '商品詳細';
    $img_path .= 'heade_kv1.jpg';
} else if (is_tax('area')) {
    $page_tile = 'エリア検索';
    $img_path .= 'furikake.jpeg';
} else if (is_search()) {
    $page_tile = '詳細検索';
    $img_path .= 'furikake.jpeg';
} else if (is_post_type_archive('column') || is_tax('column_type')) {
    $page_tile = 'コラム一覧';
    $img_path .= 'furikake.jpeg';
} else if (is_singular('column')) {
    $page_tile = 'コラム詳細';
    $img_path .= 'furikake.jpeg';
} else if (is_post_type_archive('maker') || is_tax('maker_type')) {
    $page_tile = 'メーカー一覧';
    $img_path .= 'furikake.jpeg';
} else if (is_singular('maker')) {
    $page_tile = 'メーカー詳細';
    $img_path .= 'furikake.jpeg';
} else if (is_post_type_archive('recipe') || is_tax('recipe_type')) {
    $page_tile = 'アレンジレシピ一覧';
    $img_path .= 'furikake.jpeg';
} else if (is_singular('recipe')) {
    $page_tile = 'アレンジレシピ詳細';
    $img_path .= 'furikake.jpeg';
} else if (is_page('mypage')) {
    $page_tile = 'お気に入り';
    $img_path .= 'furikake.jpeg';
} else if (is_page('q&a')) {
    $page_tile = '商品詳細';
    $img_path .= 'furikake.jpeg';
} else if (is_page('about')) {
    $page_tile = 'このサイトについて';
    $img_path .= 'furikake.jpeg';
} else if (is_page('qa')) {
    $page_tile = 'Ｑ＆Ａ';
    $img_path .= 'furikake.jpeg';
} else if (is_page('privacy')) {
    $page_tile = 'プライバシーポリシー・免責事項';
    $img_path .= 'furikake.jpeg';
} else if (is_page('aboutsite')) {
    $page_tile = 'サイト制作にあたって';
    $img_path .= 'heade_kv1.jpg';
} elseif (is_page('contact') || is_page('confirm') || is_page('thanks')) {
    $page_tile = 'お問合せ';
    $img_path .= 'heade_kv1.jpg';
}
?>

<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="<?php echo $page_description; ?>">
    <meta name="keywords" content="徳島,おとも,ご飯のおとも,徳島の味">

    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
    <?php wp_body_open(); ?>
    <header>
        <?php if (is_home()): ?>
        <!-- トップページのKV -->
        <div class="kv">
            <!-- ブログインフォを改行するコード -->
            <?php
                $site_name = get_bloginfo('name');
                // 改行を動的に挿入（任意のキーワードで分割する）
                $site_name = str_replace('の味！', 'の味！<br class="tb-none">', $site_name);
                $site_name = str_replace('ご飯の', 'ご飯の<br class="tb-none">', $site_name);
                $site_name = str_replace('お友達', 'お友達<br class="tb-none">', $site_name);
                ?>
            <p class="kv-copy">
                    <?php echo wp_kses_post($site_name); ?>
                </p>
        </div>
        <?php else: ?>
        <!-- 下層ページのKV -->
        <div class="kvsub">
            <script>
            // 下層ページの帯の画像を設定
            $('.kvsub').css('background-image', 'url("<?php echo $img_path; ?>")');
            </script>
            <h2 class="kv-copy-sub">
                    <?php echo $page_tile; ?>
                </h2>
        </div>
        <?php endif; ?>

        <!-- spnav -->
        <div id="spnav-box" class="header-inner spnav">
            <div class="title">
                <h1>
                    <a href="<?php echo home_url('/'); ?>" class="logo">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/logo.png" alt="logo.png">
                    </a>
                </h1>
            </div>
            <!-- spハンバーガー三本 -->
            <div id="js-hamburger" class="hamburger nav-sp-drawr">
                <span></span>
                <span></span>
                <span></span>
            </div>
            <!-- SP メニュー -->
            <nav class="nav-sp header-container">
                <ul class="nav-sp-menu">
                    <li>
                        <a href="<?php echo home_url('/'); ?>">
                            <div class="nav-sp-logo">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/logo.png" alt="logo.png">
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href="<?php echo home_url('/product_type/') . '/ferment/'; ?>">
                            <div class="nav-sp-icon">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/gohan_sample.png" alt="icon01">
                            </div>
                            商品一覧
                        </a>
                    </li>
                    <li>
                        <a href="<?php echo home_url('/area/east/'); ?>">
                            <div class="nav-sp-icon">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/gohan_sample.png" alt=" icon02">
                            </div>
                            エリア検索
                        </a>
                    </li>
                    <li>
                        <a href="<?php echo home_url('/') . '?s='; ?>">
                            <div class="nav-sp-icon">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/gohan_sample.png" alt=" icon03">
                            </div>
                            詳細検索
                        </a>
                    </li>
                    <li>
                        <a href="<?php echo home_url('/column/'); ?>">
                            <div class="nav-sp-icon">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/gohan_sample.png" alt="icon04">
                            </div>
                            コラム
                        </a>
                    </li>
                    <li>
                        <a href="<?php echo home_url('/maker/'); ?>">
                            <div class="nav-sp-icon">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/gohan_sample.png" alt="icon05">
                            </div>
                            メーカー紹介
                        </a>
                    </li>
                    <li>
                        <a href="<?php echo home_url('/recipe/'); ?>">
                            <div class="nav-sp-icon">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/gohan_sample.png" alt="icon06">
                            </div>
                            アレンジレシピ
                        </a>
                    </li>
                    <li>
                        <a href="<?php echo home_url('/mypage/'); ?>">
                            <div class="nav-sp-icon">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/gohan_sample.png" alt="icon07">
                            </div>
                            お気に入り
                        </a>
                    </li>
                </ul>
            </nav>
        </div>

        <!-- pc-nav -->
        <div id="pcnav-box" class="header-inner pcnav">
            <nav class="nav-pc">
                <ul class="header-container">
                    <li>
                        <div class="nav-pc_logo">
                            <h1>
                                <a href="<?php echo home_url('/'); ?>" class="pc-title-logo">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/logo.png" alt="logo.png">
                                </a>
                            </h1>
                        </div>
                    </li>

                    <li>
                        <a href="<?php echo home_url('/product_type/') . '/ferment/'; ?>">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/gohan_sample.png" alt="">
                            <span>商品一覧</span>
                        </a>
                    </li>
                    <li>
                        <a href="<?php echo home_url('/area/east/'); ?>">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/gohan_sample.png" . '/ferment/' alt="">
                            <span>エリア検索</span>
                        </a>
                    </li>
                    <li>
                        <a href="<?php echo home_url('/') . '?s='; ?>">
                            <img src=" <?php echo get_template_directory_uri(); ?>/assets/images/gohan_sample.png" alt="">
                            <span>詳細検索</span>
                        </a>
                    </li>
                    <li>
                        <a href="<?php echo home_url('/column/'); ?>">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/gohan_sample.png" alt="">
                            <span>コラム</span>
                        </a>
                    </li>
                    <li>
                        <a href="<?php echo home_url('/maker/'); ?>">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/gohan_sample.png" alt="icon01">
                            <span>メーカー紹介</span>
                        </a>
                    </li>
                    <li>
                        <a href="<?php echo home_url('/recipe/'); ?>">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/gohan_sample.png" alt="">
                            <span>アレンジレシピ</span>
                        </a>
                    </li>
                    <li>
                        <a href="<?php echo home_url('/mypage/'); ?>">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/gohan_sample.png" alt="">
                            <span>お気に入り</span>
                        </a>
                    </li>
                </ul>
            </nav>

        </div>
    </header>