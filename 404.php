<?php get_header() ?>
<main>
    <div class="inner">
        <!-- パンくずリスト -->
        <?php get_template_part('template-parts/breadcrumb'); ?>

        <div class="error">
            <p style="text-align:center"><span class="marker">404エラー</span></p>
            <!-- 登録物がないときは下記の文章を使用します -->
            <div class="img-none">
                <img src="" alt="">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/404.png" alt="エラー">
                <!-- style=" margin-top:14px"  -->
            </div>
            <div class="txt-none">
                <p>お探しのページは見つかりませんでした。</p>
                <p>URLが間違っているか、お探しのページが存在しません。</p>
            </div>

            <ul class="flex">
                <li>

                    <a href="<?php echo home_url('/'); ?>" class="original-button2"><span>TOPへ戻る</span>
                    </a>
                </li>
        </div>
</main>

<?php get_footer(); ?>
