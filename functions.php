<?php
// 福島　追加　消さないでください
// 開発モードで公開するときは、trueにしてください。
define('IS_DEV', false);

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
        'jquery',
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

        wp_enqueue_style(
            'my_slide',
            get_template_directory_uri() .
                PATH . 'css/slide.css'
        );
        // JSファイルを読み込む
        wp_enqueue_script(
            'my_top',
            get_template_directory_uri() .
                PATH . 'js/top.js',
            ['jquery'],
            '',
            true
        );
    } elseif (is_404()) {
        wp_enqueue_style(
            'my_error404',
            get_template_directory_uri() .
                PATH . 'css/error.css'
        );
    } elseif (is_search()
        /*|| is_post_type_archive('classroom')*/) {
        //条件検索CSS
        wp_enqueue_style('my_search', get_template_directory_uri() . PATH . 'css/search.css');
        wp_enqueue_style('my_goods_css', get_template_directory_uri() . PATH . 'css/goods.css');

        // wp_enqueue_script(
        //     'my_searchpopup-js',
        //     get_template_directory_uri() .
        //         PATH . 'js/searchpopup.js',
        //     ['jquery'],
        //     '',
        //     true
        // );
    } elseif (is_post_type_archive('column') || is_tax('column_type')) {
        //コラムリスト
        wp_enqueue_style(
            'my_column_list_style',
            get_template_directory_uri() .
                PATH . 'css/column.css',
        );
    } elseif (is_singular('column')) {
        //コラム記事CSS
        wp_enqueue_style(
            'my_column_style',
            get_template_directory_uri() .
                PATH . 'css/column.css',
        );
    } elseif (is_post_type_archive('maker') || is_tax('maker_type') || is_singular('maker')) {
        //コラムリスト
        wp_enqueue_style(
            'my_maker_list_style',
            get_template_directory_uri() .
                PATH . 'css/maker.css',
        );
        //slider.css
        wp_enqueue_style(
            'my_slider_style',
            get_template_directory_uri() .
                PATH . 'css/slider-sub.css',
        );
        wp_enqueue_script(
            'my_slider',
            get_template_directory_uri() .
                PATH . 'js/slider.js',
            ['jquery'],
            '',
            true
        );
    } elseif (is_post_type_archive('recipe') || is_tax('recipe_type') || is_singular('recipe')) {
        wp_enqueue_style(
            'my_recipe_list_style',
            get_template_directory_uri() .
                PATH . 'css/recipe.css',
        );
        wp_enqueue_style(
            'my_recipe_slider_style',
            get_template_directory_uri() .
                PATH . 'css/slider-sub.css',
        );
        wp_enqueue_script(
            'my_maker_single',
            get_template_directory_uri() .
                PATH . 'js/recipe.js',
            ['jquery'],
            '',
            true
        );
        wp_enqueue_script(
            'my_recipe_slider_single',
            get_template_directory_uri() .
                PATH . 'js/slider.js',
            ['jquery'],
            '',
            true
        );
    } elseif (is_post_type_archive('product') || is_tax('product_type') || is_tax('area')) {
        wp_enqueue_style(
            'my_product_list_style',
            get_template_directory_uri() .
                PATH . 'css/goods.css',
        );
    } elseif (is_singular('product')) {
        wp_enqueue_style(
            'my_product_style',
            get_template_directory_uri() .
                PATH . 'css/goods.css',
        );
        //slider.css
        wp_enqueue_style(
            'my_product_slider_style',
            get_template_directory_uri() .
                PATH . 'css/slider-sub.css',
        );
        wp_enqueue_script(
            'my_product_slider',
            get_template_directory_uri() .
                PATH . 'js/slider.js',
            ['jquery'],
            '',
            true
        );
    } elseif (is_page('contact') || is_page('confirm') || is_page('thanks')) {
        wp_enqueue_style(
            'my_input',
            get_template_directory_uri() .
                PATH . 'css/contact.css',
        );
        // wp_enqueue_script(
        //     'my_mail_js',
        //     get_template_directory_uri() .
        //         PATH . 'js/mail_form.js',
        //     ['jquery'], // jQuery に依存
        //     '', // バージョン指定なし
        //     true // フッターに出力
        // );
    } elseif (is_page('mypage')) {
        // お気に入りリスト
        wp_enqueue_style(
            'my_mypage',
            get_template_directory_uri() .
                PATH . 'css/favorite.css'
        );
    } elseif (is_page('about')) {
        // page-about.php
        wp_enqueue_style('my_about', get_template_directory_uri() . PATH . 'css/about.css');
        // } elseif (is_category(['news', 'update', 'events', 'others']) || is_page('infos')) {
        //     // 新着ニュース一覧
        //     wp_enqueue_style(
        //         'my_news_list',
        //         get_template_directory_uri() .
        //             PATH . 'css/news_list.css'
        //     );
        // } elseif (is_single()) {
        //     // 新着ニュース詳細
        //     wp_enqueue_style(
        //         'my_news',
        //         get_template_directory_uri() .
        //             PATH . 'css/news.css'
        // );
    } elseif (is_page('about')) {
        // 利用規約
        wp_enqueue_style(
            'my_about',
            get_template_directory_uri() .
                PATH . 'css/about.css'
        );
    } elseif (is_page('aboutsite')) {
        // 利用規約
        wp_enqueue_style(
            'my_aboutsite',
            get_template_directory_uri() .
                PATH . 'css/aboutsite.css'
        );
    } elseif (is_page('qa')) {
        // 利用規約
        wp_enqueue_style(
            'my_qa',
            get_template_directory_uri() .
                PATH . 'css/qa.css'
        );
    } elseif (is_page('privacy')) {
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
 * 画面の<title>タグをカスタマイズする
 */
function my_custom_title($title)
{
    if (is_search()) {
        // 条件検索ページ
        $title = '詳細検索' . '-' . get_bloginfo('name');
    } elseif (is_post_type_archive('column') || is_tax('column_type') || is_singular('column')) {
        // コラム一覧、コラム詳細ページ
        // $title = 'コラム記事' . '-' . get_bloginfo('name');
    }
    // 変更したタイトルを返す
    return $title;
}
// フィルターにフックを追加
add_filter('pre_get_document_title', 'my_custom_title');


/**
 * メインクエリをカスタマイズする
 */
function my_pre_get_posts($query)
{
    //管理画面、メインクエリの場合は対象外とし、関数から抜ける
    if (is_admin() || !$query->is_main_query()) {
        return;
    }

    // トップページの場合
    if ($query->is_home()) {
        $query->set('posts_per_page', 3);
        return;
    }

    // 投稿一覧画面
    // if ($query->is_category()) {
    //     $query->set('posts_per_page', 5);
    //     return;
    // }

    // search画面で、指定投稿タイプ
    if ($query->is_search()) {
        $query->set('post_type', 'product');
        $query->set('posts_per_page', 6);
        $query->set('post_status', 'publish');
    }

    // コラム記事または、コラムのタクソノミーの一覧画面
    // if ($query->is_post_type_archive('column') || $query->is_tax('column_type')) {
    //     $query->set('post_type', 'column');
    //     $query->set('posts_per_page', 6);
    // }

    // 自作ページネーション用に全件を表示する
    // if ($query->is_post_type_archive('product') || $query->is_tax('product_type')) {
    //     $query->set('post_type', 'product');
    //     $query->set('posts_per_page', -1);
    // }
    // 自作ページネーション用に全件を表示する
    if ($query->is_tax('maker_type')) {
        $query->set('post_type', 'maker');
        $query->set('posts_per_page', 6);
        $query->set('post_status', 'publish');
    }
    // 自作ページネーション用に全件を表示する
    if ($query->is_tax('area')) {
        $query->set('post_type', 'product');
        $query->set('posts_per_page', 6);
        $query->set('post_status', 'publish');
    }

    // 自作ページネーション用に全件を表示する
    if ($query->is_tax('product_type')) {
        $query->set('post_type', 'product');
        $query->set('posts_per_page', 6);
        $query->set('post_status', 'publish');
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

// // サイドバー追加山口
// add_action('widgets_init', function () {
//     register_sidebar();
// });



// パンくずリストの再構成をする
add_action('bcn_after_fill', 'change_breadcrumbs');
function change_breadcrumbs($bcnObj)
{
    $postBread = $bcnObj->trail[0];
    $topBread = $bcnObj->trail[count($bcnObj->trail) - 1];
    // 投稿詳細ページかどうか
    if (is_singular('product')) {
        // パンくずリストに「カテゴリーB」が含まれる場合、パンくずリストを作り直す
        // $isHit = false;
        // foreach ($bcnObj->trail as $bread) {
        //     if ($bread->get_title() == "カテゴリーB") {
        //         $isHit = true;
        //         break;
        //     }
        // }

        // if ($isHit) {
        // 最初の要素(投稿タイトル)と最後の要素(TOPページ)を取得する


        // パンくずリストをいったんすべて削除
        array_splice($bcnObj->trail, 0);

        // 投稿のカテゴリーのデータを取得
        // $categories = get_the_category();
        // $cat = null;
        // foreach ($categories as $category) {
        //     // カテゴリーB以外を取得
        //     if ($category->taxonomy === "area") {
        //         $cat = $category;
        //         break;
        //     }
        // }

        // パンくずリストに投稿タイトルを追加
        array_push($bcnObj->trail, $postBread);


        $p_single_slug = wp_get_post_terms(get_the_ID(), 'area');

        // カテゴリーをパンくずリストに追加
        // if ($cat) {
        $breadcrumb = new bcn_breadcrumb(
            $p_single_slug[0]->name,
            null,
            /*投稿タイプを指定する */
            array('taxonomy'),
            get_term_link($p_single_slug[0]->slug, 'area'),
            null,
            /*リンクをつける */
            true
        );
        $bcnObj->add($breadcrumb);
        // }

        // パンくずリストにTOPページを追加
        array_push($bcnObj->trail, $topBread);
    } elseif (is_singular('maker')) {

        // パンくずリストをいったんすべて削除
        array_splice($bcnObj->trail, 0);
        // パンくずリストに投稿タイトルを追加
        array_push($bcnObj->trail, $postBread);


        $m_single_slug = wp_get_post_terms(get_the_ID(), 'maker_type');

        $breadcrumb = new bcn_breadcrumb(
            $m_single_slug[0]->name,
            null,
            /*投稿タイプを指定する */
            array('taxonomy'),
            get_term_link($m_single_slug[0]->slug, 'maker_type'),
            null,
            /*リンクをつける */
            true
        );
        $bcnObj->add($breadcrumb);

        // パンくずリストにTOPページを追加
        array_push($bcnObj->trail, $topBread);
    }
    // }
    elseif (is_tax('maker_type') || is_tax('product_type') || is_tax('area')) {
        // パンくずリストをいったんすべて削除
        array_splice($bcnObj->trail, 0);
        // パンくずリストに投稿タイトルを追加
        array_push($bcnObj->trail, $postBread);
        // パンくずリストにTOPページを追加
        array_push($bcnObj->trail, $topBread);
    }
}