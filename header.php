<!-- 福島　2024/11/22　追加　消さないでください。開始 -->
<?php
// 開発モードで公開の時は、管理画面へのログインが必要です。
if (!is_user_logged_in() && IS_DEV == true) {
    header('Location:' . home_url('/') . 'wp-admin');
    exit;
}
?>
<!-- 福島　2024/11/22　追加　消さないでください。 終了-->


<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="徳島を旅するように味わう">
    <meta name="keywords" content="徳島,おとも,ご飯のおとも,徳島の味">

    <?php wp_head(); ?>
</head>

<body <?php echo body_class(); ?>>
    <?php wp_body_open(); ?>
    <header>
        <?php if (is_home()): ?>
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
        <?php endif; ?>

        <!-- spnav -->
        <div id="spnav-box" class="header-inner spnav">
            <div class="title">
                <h1>
                    <a href="#" class="logo">
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
                        <a href="">
                            <div class="nav-sp-logo">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/logo.png" alt="logo.png">
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href="goods.html">
                            <div class="nav-sp-icon">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/gohan_sample.png" alt="icon01">
                            </div>
                            商品一覧
                        </a>
                    </li>
                    <li>
                        <a href="area.html">
                            <div class="nav-sp-icon">
                                <img src="<img src=" <?php echo get_template_directory_uri(); ?>/assets/images/gohan_sample.png" alt=" icon02">
                            </div>
                            エリア検索
                        </a>
                    </li>
                    <li>
                        <a href="research.html">
                            <div class="nav-sp-icon">
                                <img src="<img src=" <?php echo get_template_directory_uri(); ?>/assets/images/gohan_sample.png" alt=" icon03">
                            </div>
                            詳細検索
                        </a>
                    </li>
                    <li>
                        <a href="column.html.html">
                            <div class="nav-sp-icon">
                                <img src="<img src=" <?php echo get_template_directory_uri(); ?>/assets/images/gohan_sample.png" alt="icon04">
                            </div>
                            コラム
                        </a>
                    </li>
                    <li>
                        <a href="maker.html">
                            <div class="nav-sp-icon">
                                <img src="<img src=" <?php echo get_template_directory_uri(); ?>/assets/images/gohan_sample.png" alt="icon05">
                            </div>
                            メーカー紹介
                        </a>
                    </li>
                    <li>
                        <a href="recipe.html">
                            <div class="nav-sp-icon">
                                <img src="<img src=" <?php echo get_template_directory_uri(); ?>/assets/images/gohan_sample.png" alt="icon06">
                            </div>
                            アレンジレシピ
                        </a>
                    </li>
                    <li>
                        <a href="favorite.html">
                            <div class="nav-sp-icon">
                                <img src="<img src=" <?php echo get_template_directory_uri(); ?>/assets/images/gohan_sample.png" alt="icon07">
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
                        <a href="/tokuaji-otomo/product/">
                            <img src="<?php echo get_template_directory_uri(); ?>/uploads/gohan_sample.png" alt="">
                            <span>商品一覧</span>
                        </a>
                    </li>
                    <li>
                        <a href="/tokuaji-otomo/area/east/">
                            <img src="<?php echo get_template_directory_uri(); ?>/uploads/gohan_sample.png" alt="">
                            <span>エリア検索</span>
                        </a>
                    </li>
                    <li>
                        <a href="/tokuaji-otomo/?s= ">
                            <img src="<?php echo get_template_directory_uri(); ?>/uploads/gohan_sample.png" alt="">
                            <span>詳細検索</span>
                        </a>
                    </li>
                    <li>
                        <a href="/tokuaji-otomo/column/">
                            <img src="<?php echo get_template_directory_uri(); ?>/uploads/gohan_sample.png" alt="">
                            <span>コラム</span>
                        </a>
                    </li>
                    <li>
                        <a href="/tokuaji-otomo/maker/">
                            <img src="<?php echo get_template_directory_uri(); ?>/uploads/gohan_sample.png" alt="icon01">
                            <span>メーカー紹介</span>
                        </a>
                    </li>
                    <li>
                        <a href="/tokuaji-otomo/recipe/">
                            <img src="<?php echo get_template_directory_uri(); ?>/uploads/gohan_sample.png" alt="">
                            <span>アレンジレシピ</span>
                        </a>
                    </li>
                    <li>
                        <a href="/tokuaji-otomo/mypage/">
                            <img src="<?php echo get_template_directory_uri(); ?>/uploads/gohan_sample.png" alt="">
                            <span>お気に入り</span>
                        </a>
                    </li>
                </ul>
            </nav>

        </div>
    </header>