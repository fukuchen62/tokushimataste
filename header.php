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
    <title>徳島の味！あなたのご飯のお友達</title>

    <!--リセットCSS-->
    <link rel="stylesheet" href="../assets/css/reset.css">
    <!-- 共通CSSの読み込み -->
    <link rel="stylesheet" href="../assets/css/common.css">

    <!-- headerCSSの読み込み -->
    <link rel="stylesheet" href="../assets/css/header.css">

    <!-- TOPページCSSの読み込み -->
    <link rel="stylesheet" href="../assets/css/top.css">

    <!-- footer CSSの読み込み -->
    <link rel="stylesheet" href="../assets/css/footer.css">

    <!-- カード型の読み込み -->
    <link rel="stylesheet" href="../assets/css/box.css">



    <!--Googleフォントの読み込み-->
    <!--Googleフォントの読み込み-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=DotGothic16&family=Kiwi+Maru&family=Zen+Maru+Gothic&display=swap" rel="stylesheet">

    <?php wp_head(); ?>
</head>

<body>
    <header>

        <div class="kv">
            <p class="kv-copy">
                <!-- ブログインフォを改行するコード -->
                <?php
                // bloginfo('name') の内容を取得
                $site_name = get_bloginfo('name');

                // 改行を動的に挿入（任意のキーワードで分割する）
                $site_name = str_replace('の味！', 'の味！<br class="tb-none">', $site_name);
                $site_name = str_replace('ご飯の', 'ご飯の<br class="tb-none">', $site_name);
                $site_name = str_replace('お友達', 'お友達<br class="tb-none">', $site_name);
                ?>
                <?php echo wp_kses_post($site_name);
                ?>
            </p>
        </div>

        <div id="spnav-box" class="header-inner spnav">
            <div class="title pc-none">
                <h1>
                    <a href="#" class="logo">
                        <img src="../uploads/cat.jpg" alt="ご飯のお供">
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
                        <a href="#">
                            <div class="nav-sp-logo">
                                <img src="../uploads/cat.jpg" alt="ご飯のお供">
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href="goods.html">
                            <div class="nav-sp-icon">
                                <img src="../uploads/gohan_sample.png" alt="icon01">
                            </div>
                            商品一覧
                        </a>
                    </li>
                    <li>
                        <a href="area.html.html">
                            <div class="nav-sp-icon">
                                <img src="../uploads/gohan_sample.png" alt="icon02">
                            </div>
                            エリア検索
                        </a>
                    </li>
                    <li>
                        <a href="research.html">
                            <div class="nav-sp-icon">
                                <img src="../uploads/gohan_sample.png" alt="icon03">
                            </div>
                            詳細検索
                        </a>
                    </li>
                    <li>
                        <a href="column.html.html">
                            <div class="nav-sp-icon">
                                <img src="../uploads/gohan_sample.png" alt="icon04">
                            </div>
                            コラム
                        </a>
                    </li>
                    <li>
                        <a href="maker.html">
                            <div class="nav-sp-icon">
                                <img src="../uploads/gohan_sample.png" alt="icon05">
                            </div>
                            メーカー紹介
                        </a>
                    </li>
                    <li>
                        <a href="recipe.html">
                            <div class="nav-sp-icon">
                                <img src="../uploads/gohan_sample.png" alt="icon06">
                            </div>
                            アレンジレシピ
                        </a>
                    </li>
                    <li>
                        <a href="favorite.html">
                            <div class="nav-sp-icon">
                                <img src="../uploads/gohan_sample.png" alt="icon07">
                            </div>
                            お気に入り
                        </a>
                    </li>
                </ul>
            </nav>
        </div>
        <div id="pcnav-box" class="header-inner pcnav">
            <nav class="nav-pc sp-none">
                <ul class="header-container sp-none">
                    <li>
                        <div class="nav-pc_logo">
                            <h1>
                                <a href="#" class="pc-title-logo">
                                    <img src="../uploads/cat.jpg" alt="トップに飛ぶ">
                                </a>
                            </h1>
                        </div>
                    </li>

                    <li>
                        <a href="/tokuaji-otomo/product/">
                            <img src="../uploads/gohan_sample.png" alt="">
                            <span>商品一覧</span>
                        </a>
                    </li>
                    <li>
                        <a href="/tokuaji-otomo/area/east/">
                            <img src="../uploads/gohan_sample.png" alt="">
                            <span>エリア検索</span>
                        </a>
                    </li>
                    <li>
                        <a href="/tokuaji-otomo/?s= ">
                            <img src="../uploads/gohan_sample.png" alt="">
                            <span>詳細検索</span>
                        </a>
                    </li>
                    <li>
                        <a href="/tokuaji-otomo/column/">
                            <img src="../uploads/gohan_sample.png" alt="">
                            <span>コラム</span>
                        </a>
                    </li>
                    <li>
                        <a href="/tokuaji-otomo/maker/">
                            <img src="../uploads/gohan_sample.png" alt="icon01">
                            <span>メーカー紹介</span>
                        </a>
                    </li>
                    <li>
                        <a href="/tokuaji-otomo/recipe/">
                            <img src="echo get_template_directory_uri();/uploads/gohan_sample.png" alt="">
                            <span>アレンジレシピ</span>
                        </a>
                    </li>
                    <li>
                        <a href="/tokuaji-otomo/mypage/">
                            <img src="echo get_template_directory_uri();/uploads/gohan_sample.png" alt="">
                            <span>お気に入り</span>
                        </a>
                    </li>
                </ul>
            </nav>

        </div>
    </header>
