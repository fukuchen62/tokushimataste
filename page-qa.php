<?php get_header(); ?>

<main>
    <div class="inner">
        <!-- パンくずリスト -->
        <?php get_template_part('template-parts/breadcrumb'); ?>


        <!-- ここから -->
        <div class="cp_qa01">
            <?php
            $args = [
                'post_type' => 'q_and_a', // メニューの投稿タイプ
                'posts_per_page' => -1,
                //'orderby'        => 'rand',   // ランダム表示
            ];
            /*
                            $taxquerysp = ['relation' => 'AND'];
                            $taxquerysp[] = [
                                'taxonomy' => 'menu',
                                'terms' => $menu->slug,
                                'field' => 'slug',
                            ];
                            */
            $the_query = new WP_Query($args);

            if ($the_query->have_posts()): ?>
                <?php while ($the_query->have_posts()): $the_query->the_post() ?>
                    <dt><?php the_field('question'); ?></dt>
                    <dd><?php the_field('answer'); ?>
                <?php endwhile;
                wp_reset_postdata(); // リセット
            else :
                echo '<p>投稿が見つかりませんでした。</p>';
            endif;
                ?>
        </div>

        <div class="container">
            <h2 class="heading10" data-en="Dear Manufacturer"><span>掲載されているメーカー様へ</span></h2>
            <p>電話番号やイベント内容等に変更がある場合は、お問い合わせフォームよりお問い合わせください。確認後、ご連絡させていただきます。</p>
            <br>
            <h2 class="heading10" data-en="Under Consideration"><span>本サイトに掲載をご検討中のメーカー様へ</h2>
            <p>お問い合わせフォームよりお問い合わせください。確認後、ご連絡させていただきます。</p>
        </div>

        <ul class="flex">
            <li>
                <a href="<?php echo home_url('/contact/'); ?>" class="original-button3">お問い合わせ</a>
            </li>
        </ul>

</main>
<?php get_footer(); ?>
