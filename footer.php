<footer>
    <!-- トップページに戻るボタン -->
    <p id="page-top"><a href="<?php echo home_url('/'); ?>"></a><img src="<?php echo get_template_directory_uri(); ?>/assets/images/topbutton.png" alt="topに戻る">
        </a></p>

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
            Copyright © :******* All Rights Reserved.
        </small>
    </p>
</footer>

<?php wp_footer(); ?>
</body>

</html>
