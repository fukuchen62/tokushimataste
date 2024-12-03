<footer>
    <!-- すだちくん -->
    <!-- js -->
    <script>
    // すだちくん配列
    var mames = [];
    </script>


    <div class="sudachi_trivia foot_scroll">
        <div class="sudachi_commentset fukidashi_animation">
            <img class="sudachi_commentbox" src="<?php echo get_template_directory_uri(); ?>/assets/images/fukidashi_kai5.png" alt="すだちくん吹き出し">

            <?php
            $args = [
                'post_type' => 'sudachikun', // メニューの投稿タイプ
                'posts_per_page' => -1,
                'orderby'        => 'rand',   // ランダム表示
            ];

            $the_query = new WP_Query($args);
            ?>
            <?php if ($the_query->have_posts()): ?>
            <script>
            <?php while ($the_query->have_posts()): ?>
            <?php $the_query->the_post() ?>

            mames.push("<?php echo get_field('com'); ?>");

            <?php endwhile; ?>
            </script>
            <?php wp_reset_postdata(); ?>
            <?php endif; ?>
        </div>
        <p id="sudachi_comment" class="sudachi_comment"></p>
    </div>

    <!-- すだちくん -->
    <div>
        <img id="sudachi" class="sudachi" src="<?php echo get_template_directory_uri(); ?>/assets/images/sudachi-kun1.png" alt="すだちくん">
    </div>

    <!-- トップページに戻るボタン -->
    <p id="page-top">
        <a href="<?php echo home_url('/'); ?>"></a><img src="<?php echo get_template_directory_uri(); ?>/assets/images/topbutton.png" alt="topに戻る">
        </a>
    </p>

    <!-- フッター画像 -->
    <!-- <div class="footer-wrapper">
        <img class="footer_mb_ill" src="<?php echo get_template_directory_uri() . '/assets/images/footer.jpg'; ?>" alt="">
    </div> -->

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
    <!-- コピーライト -->
    <p class="f-copy">
        <small>
            Copyright © 株式会社QLIPプログラミングスクール All Rights Reserved.
        </small>
    </p>
</footer>

<?php wp_footer(); ?>
</body>

</html>
