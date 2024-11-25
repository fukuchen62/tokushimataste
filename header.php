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
