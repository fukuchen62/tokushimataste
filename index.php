<?php get_header() ?>
<main>
    <div class="inner">
        <!-- パンくずリスト -->
        <?php get_template_part('template-parts/breadcrumb'); ?>


        <ul class="flex">
            <li>

                <a href="<?php echo home_url('/'); ?>" class="original-button2"><span>TOPへ戻る</span>
                </a>
            </li>
    </div>
</main>

<?php get_footer(); ?>
