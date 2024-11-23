<?php
// 開いているタクソノミーページの情報を取得
$menu_slug = get_query_var('menu',);
$menu = get_term_by('slug', $menu_slug, 'menu');
?>
<?php get_header() ?>
<main>
    <section class="section section-foodList">
        <div class="section_inner">
            <div class="section_header">
                <h2 class="heading heading-primary"><span>フード紹介</span>FOOD</h2>
            </div>

            <section class="section_body">
                <h3 class="heading heading-secondary"><?php single_term_title('') ?><span><?php echo strtoupper($menu->slug); ?></span></h3>
                <ul class="foodList">
                    <?php if (have_posts()) : ?>
                        <?php while (have_posts()): the_post(); ?>
                            <li class="foodList_item">
                                <?php get_template_part('test-template-parts-test/loop', 'food') ?>
                            </li>
                        <?php endwhile ?>
                    <?php endif; ?>

                    <!-- <li class="foodList_item">
                        <div class="foodCard">
                            <a href="#">
                                <span class="foodCard_label">オススメ</span>
                                <div class="foodCard_pic">
                                    <img src="assets/img/food/food_img02@2x.png" alt="">
                                </div>
                                <div class="foodCard_body">
                                    <h4 class="foodCard_title">タコス</h4>
                                    <p class="foodCard_price">¥650</p>
                                </div>
                            </a>
                        </div>
                    </li>

                    <li class="foodList_item">
                        <div class="foodCard">
                            <a href="#">
                                <div class="foodCard_pic">
                                    <img src="assets/img/food/food_img03@2x.png" alt="">
                                </div>
                                <div class="foodCard_body">
                                    <h4 class="foodCard_title">タコス</h4>
                                    <p class="foodCard_price">¥650</p>
                                </div>
                            </a>
                        </div>
                    </li>

                    <li class="foodList_item">
                        <div class="foodCard">
                            <a href="#">
                                <div class="foodCard_pic">
                                    <img src="assets/img/food/food_img04@2x.png" alt="">
                                </div>
                                <div class="foodCard_body">
                                    <h4 class="foodCard_title">タコス</h4>
                                    <p class="foodCard_price">¥650</p>
                                </div>
                            </a>
                        </div>
                    </li>

                    <li class="foodList_item">
                        <div class="foodCard">
                            <a href="#">
                                <div class="foodCard_pic">
                                    <img src="assets/img/food/food_img05@2x.png" alt="">
                                </div>
                                <div class="foodCard_body">
                                    <h4 class="foodCard_title">タコス</h4>
                                    <p class="foodCard_price">¥650</p>
                                </div>
                            </a>
                        </div>
                    </li>

                    <li class="foodList_item">
                        <div class="foodCard">
                            <a href="#">
                                <div class="foodCard_pic">
                                    <img src="assets/img/food/food_img06@2x.png" alt="">
                                </div>
                                <div class="foodCard_body">
                                    <h4 class="foodCard_title">タコス</h4>
                                    <p class="foodCard_price">¥650</p>
                                </div>
                            </a>
                        </div>
                    </li>-->
                </ul>
            </section>
        </div>
    </section>
</main>

<?php get_footer() ?>
