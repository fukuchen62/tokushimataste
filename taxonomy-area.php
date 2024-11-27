<?php get_header() ?>
<main>
    <!-- パンくずリスト -->
    <?php get_template_part('template-parts/breadcrumb'); ?>

    <!-- エリア検索 -->
    <h2 style="text-align: center;">お供の一覧表示</h2>
    <section id="btn-area" class="wrap">
        <!-- エリア検索ボタン -->
        <ul class="btn-content">
            <li id="east">
                <a href="<?php echo home_url('/area/east/'); ?>" class=""><span>県東</span></a>
            </li>
            <li id="west"><a href="<?php echo home_url('/area/west/'); ?>" class=""><span>県西</span></a>
            </li>
            <li id="south"><a href="<?php echo home_url('/area/south/'); ?>" class=""><span>県南</span></a>
            </li>
        </ul>
    </section>


    <?php $area_slug = get_query_var('area'); ?>
    <?php var_dump($area_slug); ?>
    <?php $area = get_term_by('slug', $area_slug, 'area'); ?>

    <div class="card-container">
        <ul class="page_list">
            <?php
            // $args = ['post_type' => 'product'];

            ?>
            <?php
            // $the_query = new WP_Query($args)
            ?>
            <?php if (have_posts()): ?>
                <?php while (have_posts()) : the_post(); ?>
                    <li>
                        <?php get_template_part('template-parts/loop', 'product'); ?>
                    </li>
                <?php endwhile; ?>
            <?php endif; ?>
        </ul>
    </div>




    <!-- <ul class="pagination"></ul> -->


    <!-- トップページに戻るボタン -->
    <p id="page-top"><a href="#">↑<br>TOP</a></p>

</main>
<?php
get_template_part('template-parts/pagination');
?>
<?php get_footer(); ?>

</body>

</html>
