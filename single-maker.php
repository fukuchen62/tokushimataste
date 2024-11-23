<?php get_header(); ?>
<main>
    <?php if (have_posts()): ?>
        <?php while (have_posts()): the_post(); ?>
            <section class="section">
                <div class="section_inner">

                    <div class="food">
                        <div class="food_body">
                            <div class="food_text">
                                <h2 class="heading heading-primary"><?php the_title() ?></h2>
                                <div class="food_content">
                                    <?php the_content() ?>
                                </div>
                            </div>
                            <div class="food_pic">
                                <?php
                                $pic = get_field('pic1');
                                $pic_url = $pic['sizes']['large'];
                                ?>
                                <img src="<?php echo $pic_url; ?>" alt="">
                            </div>
                            <div class="food_pic">
                                <?php
                                $pic = get_field('pic2');
                                $pic_url = $pic['sizes']['large'];
                                ?>
                                <img src="<?php echo $pic_url; ?>" alt="">
                            </div>
                            <div class="food_pic">
                                <?php
                                $pic = get_field('pic3');
                                // $pic_url = $pic['sizes']['large'];
                                ?>
                                <img src="<?php echo $pic_url; ?>" alt="">
                            </div>
                            <div class="food_pic">
                                <?php
                                $pic = get_field('pic4');
                                // $pic_url = $pic['sizes']['large'];
                                ?>
                                <img src="<?php echo $pic_url; ?>" alt="">
                            </div>
                        </div>

                        <ul class="food_list">
                            <li class="food_item">
                                <span class="food_itemLabel">会社名</span>
                                <span class="food_itemData"><?php the_field('company') ?></span>
                            </li>
                            <li class="food_item">
                                <span class="food_itemLabel">フリガナ</span>
                                <span class="food_itemData"><?php the_field('phonetic') ?></span>
                            </li>
                            <li class="food_item">
                                <span class="food_itemLabel">代表者名</span>
                                <span class="food_itemData"><?php the_field('name') ?></span>
                            </li>
                            <li class="food_item">
                                <span class="food_itemLabel">キャッチフレーズ</span>
                                <span class="food_itemData"><?php the_field('catchphrase') ?></span>
                            </li>
                            <li class="food_item">
                                <span class="food_itemLabel">会社概要</span>
                                <span class="food_itemData"><?php the_field('company_info') ?></span>
                            </li>
                            <li class="food_item">
                                <span class="food_itemLabel">郵便番号</span>
                                <span class="food_itemData"><?php the_field('post_code') ?></span>
                            </li>
                            <li class="food_item">
                                <span class="food_itemLabel">FAX</span>
                                <span class="food_itemData"><?php the_field('fax') ?></span>
                            </li>
                            <li class="food_item">
                                <span class="food_itemLabel">Email</span>
                                <span class="food_itemData"><?php the_field('email') ?></span>
                            </li>
                            <li class="food_item">
                                <span class="food_itemLabel">営業時間</span>
                                <span class="food_itemData"><?php the_field('business_hours') ?></span>
                            </li>
                            <li class="food_item">
                                <span class="food_itemLabel">経度</span>
                                <span class="food_itemData"><?php the_field('longitude') ?></span>
                            </li>
                            <li class="food_item">
                                <span class="food_itemLabel">緯度</span>
                                <span class="food_itemData"><?php the_field('latitude') ?></span>
                            </li>
                            <li class="food_item">
                                <span class="food_itemLabel">備考</span>
                                <span class="food_itemData"><?php the_field('memo') ?></span>
                            </li>

                        </ul>
                    </div>

                </div>
            </section>
        <?php endwhile; ?>
    <?php endif ?>


    <div>HP<a href="<?php the_field('url'); ?>"><?php the_field('url'); ?></a></div>

    <section>
        <div class="column_box">
            <h3>エリア別</h3>
            <?php
            $area_terms = get_terms(['taxonomy' => 'area']);
            // if (!empty($area_terms)):

            // echo '<pre>';
            // var_dump($area_terms);
            // echo '<pre>';
            ?>
            <?php foreach ($area_terms as $area):
                // echo '<pre>';
                // var_dump($area);
                // echo '<pre>';
            ?>

                <a href="<?php echo home_url('/maker'); ?>/#<?php echo $area->slug; ?>_btn"><?php echo $area->name; ?></a>
            <?php endforeach ?>

        </div>
    </section>

</main>
<?php get_footer(); ?>
