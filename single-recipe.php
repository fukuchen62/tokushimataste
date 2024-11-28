<?php get_header(); ?>
<main>
    <main>
        <div class="inner">
            <!--パンくずリスト-->
            <?php get_template_part('template-parts/breadcrumb'); ?>
        </div>
        <h2>副菜</h2>



        <h2 class="ttl_box">
            <h2><?php the_field('recipe_name'); ?></h2>

            <div class="recipe_info_user">
                <div class="recipe_name">
                    <?php
                    $pic = get_field('pic1');
                    // $picが存在する場合のみURLを取得
                    $pic_url =  $pic['sizes']['medium'];
                    ?>
                    <img src="<?php echo $pic_url; ?>" alt="">
                    <!-- <img src="../uploads/tsukemono.jpeg" alt="Image" class="img-fluid"> -->
                    <p>１人分　〇〇〇kcal</p>
                    <!-- <div class="recipe_info_user__comment">大根の葉、捨てるのもったいないです。<br>簡単にご飯のお供に変身します。</div> -->

                </div>
            </div>

            <li class="recipe_material__item">
                <?php the_field('ingredient'); ?>

                <!-- <div class="flex">
                        <div class="recipe"> -->


                <h2>作り方</h2>
            <li class="recipe_howto__item">
                <!-- <span class="ico_recipe_howto_order">１．</span> -->
                <span class="recipe_howto__text">
                    <?php the_field('how_to_make'); ?>
                </span>


                <!-- 商品についてのカードが入る予定 -->
                <!-- <h2>使ったお供</h2>
                <ul class="list">
                    <li>
                        <div class="recipe">
                            <img src="../uploads/tsukemono.jpeg" alt="Image" class="img-fluid">
                            <p>使ったお供</p>
                        </div>
                    </li>
                    <li>
                        <div class="recipe">
                            <img src="../uploads/tsukudani.jpeg" alt="Image" class="img-fluid">
                            <p>使ったお供</p>
                        </div>
                    </li>
                    <li>
                        <div class="recipe">
                            <img src="../uploads/tsukemono.jpeg" alt="Image" class="img-fluid">
                            <p>使ったお供</p>
                        </div>
                    </li>
                </ul>

                </div>
                </section> -->
    </main>
</main>
<?php get_footer(); ?>
