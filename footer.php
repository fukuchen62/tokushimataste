<footer>
    <div class="sudachi_trivia foot_scroll">
        <div class="sudachi_commentset fukidashi_animation">
            <img class="sudachi_commentbox" src="<?php echo get_template_directory_uri(); ?>/assets/images/fukidashi_kai5.png" alt="すだちくん吹き出し">

            <?php
            $msgs;
            $args = [
                'post_type' => 'sudachikun', // メニューの投稿タイプ
                'posts_per_page' => -1,
                'orderby'        => 'rand',   // ランダム表示
            ];
            $the_query = new WP_Query($args);
            if ($the_query->have_posts()) {
                while ($the_query->have_posts()) {
                    $the_query->the_post();
                    $msgs[] = get_field('com');
                }
            }
            wp_reset_postdata();

            ?>

            <!-- コメント出力 -->
            <p id="sudachi_comment" class="sudachi_comment"></p>
        </div>

    </div>

    <script>
        mames = <?php echo json_encode($msgs); ?>;
        console.log(mames[0]);
    </script>

    <!-- すだちくん -->
    <div>
        <img id="sudachi" class="sudachi" src="<?php echo get_template_directory_uri(); ?>/assets/images/sudachi_shonin.png" alt="すだちくん">
    </div>

    <!-- トップページに戻るボタン -->
    <p id="page-top">
        <a href="<?php echo home_url('/'); ?>"></a><img src="<?php echo get_template_directory_uri(); ?>/assets/images/topbutton.png" alt="topに戻る">
        </a>
    </p>

    <!-- 走るキャレクタ -->
    <div class="demo_stage">
        <div class="demo_wrap" data-order="left">
            <span class="demo_item anime"></span>
        </div>
    </div>

    <div class="footer_container">
        <ul class="footer_nav">
            <li>
                <a href="<?php echo home_url('/contact/'); ?>">お問い合わせ</a>
            </li>
            <li>
                <a href="<?php echo home_url('/about/'); ?>">このサイトについて</a>
            </li>
        </ul>
        <ul class="footer_nav">
            <li>
                <a href="<?php echo home_url('/qa/'); ?>">Q&A</a>
            </li>
            <li>
                <a href="<?php echo home_url('/privacy/'); ?>">プライバシーポリシー・免責事項</a>
            </li>
            <li>
                <a href="<?php echo home_url('/aboutsite/'); ?>">サイト制作にあたって</a>
            </li>
        </ul>
    </div>
</footer>
<!-- コピーライト -->
<div class="f-copy">
    <small>
        Copyright © 株式会社QLIPプログラミングスクール All Rights Reserved.
    </small>
</div>

<?php wp_footer(); ?>
</body>

</html>
