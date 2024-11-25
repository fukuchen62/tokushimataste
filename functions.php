<?php
// 福島　追加　消さないでください
// 開発モードで公開するときは、trueにしてください。
define('IS_DEV', true);

// 管理バーを非表示させる
// add_filter('show_admin_bar', '__return_false');

// assetsのパス
// define('PATH', '/test_assets_test/');
define('PATH', '/assets/');

/**
 * 「after_setup_theme」アクションフックを使用する関数をまとめる
 */
function my_theme_setup()
{
    /**
     * <title>タぐを出力する
     */
    add_theme_support('title-tag');

    /**
     * アイキャッチ画像を使用可能にする
     */
    add_theme_support('post-thumbnails');

    /**
     * カスタムメニュー機能を使用可能にする
     */
    add_theme_support('menus');
}
add_action('after_setup_theme', 'my_theme_setup');

/**
 * 固定ページで抜粋を使えるようにする
 */
add_post_type_support('page', 'excerpt');


/**
 * スタイルシートとJavaScriptファイルを読み込む
 */
function add_style_script()
{

    //外部のスタイルシート:FontAwesome CDN
    wp_enqueue_style('font-awesome', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css');
    //外部のスタイルシート:GoogleFonts Open Sans
    wp_enqueue_style('google-web-font1', 'https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300..800;1,300..800&display=swap');
    //外部のスタイルシート:GoogleFonts Zen Maru Gothic
    wp_enqueue_style('google-web-font2', 'https://fonts.googleapis.com/css2?family=Zen+Maru+Gothic:wght@300;400;500;700;900&display=swap');

    //リセットCSS
    wp_enqueue_style(
        'my_reset',
        get_template_directory_uri() . PATH . 'css/reset.css'
    );

    // common.css
    wp_enqueue_style(
        'my_common',
        get_template_directory_uri() .
            PATH . 'css/common.css'
    );
    // header.css
    wp_enqueue_style(
        'my_header',
        get_template_directory_uri() .
            PATH . 'css/header.css'
    );
    // footer.css
    wp_enqueue_style(
        'my_footer',
        get_template_directory_uri() .
            PATH . 'css/footer.css'
    );

    // jQueryを読み込む
    // wp_enqueue_script('jquery');

    // WordPressのjqueryを無効させる
    wp_deregister_script('jquery');

    // 指定jqueryを読み込む
    wp_enqueue_script(
        'jquery-3.7.1',
        'https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js',
        '',
        '',
        false  //true：フッターに読み込むように
    );

    //  本サイトの共通のmain.jsをフッターで読み込む
    wp_enqueue_script(
        'my_main_js',
        get_template_directory_uri() .
            PATH . 'js/main.js',
        ['jquery'],
        '',
        true
    );

    //slick.js スライダーのJSファイル
    wp_enqueue_style('class_slick_css', 'https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.css'); //slick
    wp_enqueue_style('class_slick-theme_css', 'https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick-theme.min.css'); //slick-theme
    wp_enqueue_script(
        'class_slick_js',
        'https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.js',
        ['jquery'],
        '',
        true     //footerに出力
    );

    /**
     * 個々のページ
     */
    if (is_home()) {
        wp_enqueue_style(
            'my_top',
            get_template_directory_uri() .
                PATH . 'css/top.css'
        );

        // JSファイルを読み込む
        /*wp_enqueue_script(
            'my_top',
            get_template_directory_uri() .
                PATH . 'js/top.js',
            ['jquery'],
            '',
            true
        );*/
        /* } elseif (is_404()) {
        wp_enqueue_style(
            'my_error404',
            get_template_directory_uri() .
                PATH . 'css/404.css'
        );*/
    } elseif (is_search() || is_post_type_archive('classroom')) {
        //条件検索CSS
        wp_enqueue_style('my_search', get_template_directory_uri() . PATH . 'css/results.css');
        wp_enqueue_style('my_searchpopup_css', get_template_directory_uri() . PATH . 'css/searchpopup.css');

        wp_enqueue_script(
            'my_searchpopup-js',
            get_template_directory_uri() .
                PATH . 'js/searchpopup.js',
            ['jquery'],
            '',
            true
        );
    } elseif (is_post_type_archive('column') || is_tax('column_type')) {
        //コラムリスト
        wp_enqueue_style(
            'my_column_list_style',
            get_template_directory_uri() .
                PATH . 'css/column_list.css',
        );
    } elseif (is_singular('column')) {
        //コラム記事CSS
        wp_enqueue_style(
            'my_column_style',
            get_template_directory_uri() .
                PATH . 'css/column.css',
        );
    } elseif (is_singular('classroom')) {
        wp_enqueue_style(
            'my_classroom_style',
            get_template_directory_uri() .
                PATH . 'css/details.css',
        );
    } elseif (is_page('contact') || is_page('confirm') || is_page('thanks')) {
        wp_enqueue_style(
            'my_input',
            get_template_directory_uri() .
                PATH . 'css/input.css',
        );
        wp_enqueue_script(
            'my_mail_js',
            get_template_directory_uri() .
                PATH . 'js/mail_form.js',
            ['jquery'], // jQuery に依存
            '', // バージョン指定なし
            true // フッターに出力
        );
    } elseif (is_page('favorite')) {
        // お気に入りリスト
        wp_enqueue_style(
            'my_favorite',
            get_template_directory_uri() .
                PATH . 'css/favorite.css'
        );
    } elseif (is_page('about')) {
        // page-about.php
        wp_enqueue_style('my_about', get_template_directory_uri() . PATH . 'css/about.css');
    } elseif (is_category(['news', 'update', 'events', 'others']) || is_page('infos')) {
        // 新着ニュース一覧
        wp_enqueue_style(
            'my_news_list',
            get_template_directory_uri() .
                PATH . 'css/news_list.css'
        );
    } elseif (is_single()) {
        // 新着ニュース詳細
        wp_enqueue_style(
            'my_news',
            get_template_directory_uri() .
                PATH . 'css/news.css'
        );
    } elseif (is_page('service')) {
        // 利用規約
        wp_enqueue_style(
            'my_service',
            get_template_directory_uri() .
                PATH . 'css/rule.css'
        );
    } elseif (is_page('praivacy')) {
        // プライバシーポリシー
        wp_enqueue_style(
            'my_praivacy',
            get_template_directory_uri() .
                PATH . 'css/privacy.css'
        );
    }
}
add_action('wp_enqueue_scripts', 'add_style_script');

/**
 * 検索画面のタイトルをカスタマイズする
 */
function my_custom_title($title)
{
    if (is_search()) {
        // 条件検索ページの場合はタイトルを以下のように変更
        // tagline（キャッチフレーズ）を無くす
        // unset($title['tagline']);
        // タイトルの中身を変更する
        $title['title'] = '条件検索';
    }
    // 変更したタイトルを返す
    return $title;
}
// フィルターにフックを追加
add_filter('document_title_parts', 'my_custom_title');


/**
 * メインクエリをカスタマイズする
 */
function my_pre_get_posts($query)
{
    //管理画面、メインクエリの場合は対象外とし、関数から抜ける
    if (is_admin() || !$query->is_main_query()) {
        return;
    }

    //トップページの場合
    // if ($query->is_home()) {
    //     $query->set('posts_per_page', 3);
    //     return;
    // }

    // 投稿一覧画面
    // if ($query->is_category()) {
    //     $query->set('posts_per_page', 5);
    //     return;
    // }

    //search画面で、指定投稿タイプ
    // if ($query->is_search() || is_post_type_archive('classroom')) {
    //     $query->set('post_type', 'classroom');
    //     $query->set('posts_per_page', 6);
    //     return;
    // }

    // コラム記事または、コラムのタクソノミーの一覧画面
    // if ($query->is_post_type_archive('column') || $query->is_tax('column_type')) {
    //     $query->set('post_type', 'column');
    //     $query->set('posts_per_page', 6);
    // }

    // 自作ページネーション用に全件を表示する
    if ($query->is_post_type_archive('product') || $query->is_tax('product_type')) {
        $query->set('post_type', 'product');
        $query->set('posts_per_page', -1);
    }
}
add_action('pre_get_posts', 'my_pre_get_posts');

/**
 * 検索結果から排除する対象を設定する
 */
function exclude_from_search($query)
{
    if ($query->is_search && !is_admin()) {
        // 排除する投稿タイプ
        // $query->set('post_type', 'classroom');
        // 公開する記事のみ
        $query->set('post_status', 'publish');
    }
    return $query;
}
add_filter('pre_get_posts', 'exclude_from_search');


/**
 * 「」空の検索は結果を返さない
 */
function exclude_empty_search_query($query)
{
    if ($query->is_search() && !$query->is_main_query() && !is_admin()) {
        // 検索クエリが空の場合
        if (!isset($_GET['s']) || trim($_GET['s']) === '') {
            // 空の配列を指定することで、検索させないように
            $query->set('post__in', array(0));
        }
    }
}
add_action('pre_get_posts', 'exclude_empty_search_query');


/**
 * contact Formのときには整形機能をOFFにする
 */
add_filter('wpcf7_autop_or_not', 'my_wpcf7_autop');
function my_wpcf7_autop()
{
    return false;
}

//-------ここからfood science用追加項目-------
/**
 * <title>の区切り文字を変更する
 */
add_filter('document_title_separator', 'my_document_title_separator');
function my_document_title_separator($separator)
{
    $separator = "|";
    return $separator;
}


/**
 * タイトルの「保護中」の文字を削除する
 */
// add_filter('protected_title_format', 'my_protected_title');
// function my_protected_title($title)
// {
//     return '%s';
// }
