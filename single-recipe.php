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


<!-- ここから -->
<main>
    <div class="inner">
        <section>
            <div>
                <!--パンくずリスト-->
                <ul class="breadcrumb">
                    <ol itemscope itemtype="https://schema.org/BreadcrumbList">
                        <li itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem">
                            <a itemprop="item" href="../html/index.html">
                                <span itemprop="name">ホーム</span>
                            </a>
                            <meta itemprop="position" content="1" />
                        </li>

                        <li itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem">
                            <a itemprop="item" href="#">
                                <span itemprop="name">アレンジレシピ</span>
                            </a>
                            <meta itemprop="position" content="2" />
                        </li>
                        <li itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem">
                            <a itemprop="item" href="#">
                                <span itemprop="name">アレンジレシピ詳細</span>
                            </a>
                            <meta itemprop="position" content="3" />
                        </li>
                    </ol>
                </ul>
            </div>
        </section>

        <!-- <h2>副菜</h2> -->

    <div class="recipe_info_user">
        <div class="recipe_name">
            <img src="../uploads/tsukemono.jpeg" alt="Image" class="img-fluid">
        <h2 class="ttl_rsp">レシピ名</h2>
        <!-- <div class="recipe_info_user">
                <div class="recipe_name">
                    <img src="../uploads/tsukemono.jpeg" alt="Image" class="img-fluid">
                    <p>１人分　〇〇〇kcal</p>
                <div class="recipe_info_user__comment">大根の葉、捨てるのもったいないです。<br>簡単にご飯のお供に変身します。</div>
                </div>
            </div> -->

        <p>jikkenn</p>

        <div class="container_ms">
            <div class="slider_ms">
                <div class="slick_img">
                    <?php
                    $pic = get_field('pic1');
                    // $picが存在する場合のみURLを取得
                    $pic_url =  $pic['sizes']['medium'];
                    ?>
                    <img src="<?php echo $pic_url; ?>" alt="">
                </div>
                <div class="slick_img">
                    <img src="../uploads/narazuke.jpeg" alt="" />
                </div>
                <div class="slick_img">
                    <img src="../uploads/nikumisoitame.jpg" alt="" />
                </div>
                <div class="slick_img">
                    <img src="../uploads/nori.jpeg" alt="" />
                </div>
            </div>
            <div class="thumbnail_ms">
                <div class="thumbnail_img">
                    <img src="../uploads/miso.jpeg" alt="" />
                </div>
                <div class="thumbnail_img">
                    <img src="../uploads/narazuke.jpeg" alt="" />
                </div>
                <div class="thumbnail_img">
                    <img src="../uploads/nikumisoitame.jpg" alt="" />
                </div>
                <div class="thumbnail_img">
                    <img src="../uploads/nori.jpeg" alt="" />
                </div>

            </div>
        </div>

        <section>
            <h2>材料　〇人分</h2>
            <div>
                テキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入ります
                テキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入ります
            </div>

        </section>

        <section>
            <h2>作り方</h2>
            <div>
                テキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入ります
                テキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入ります
            </div>
            <!-- <ol>
            <li class="recipe_howto__item">
                <span class="ico_recipe_howto_order">１．</span>
                <span class="recipe_howto__text">大根の葉はみじん切りにする。</span>
            </li>
            <li class="recipe_howto__item">
                <span class="ico_recipe_howto_order">２．</span>
                <span class="recipe_howto__text">フライパンにごま油をひき火にかけ、大根の葉を炒める。</span>
            </li>
            <li class="recipe_howto__item">
                <span class="ico_recipe_howto_order">３．</span>
                <span class="recipe_howto__text">２に鶏ガラスープの素としょうゆを加え、大根の葉がしんなりするまで炒める。</span>
            </li>
            <li class="recipe_howto__item">
                <span class="ico_recipe_howto_order">４．</span>
                <span class="recipe_howto__text">３に白ごまを加え、全体を軽く炒める。</span>
            </li>
        </ol> -->
        </section>

        <section class="memo">
            <h3 class="fa-solid fa-leaf">備考</h3>
            <div>
                テキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入ります
                テキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入ります
            </div>
            <!-- <p>・駐車場：あり ・トイレ：あり ・宿泊施設：なし ・道具の貸出：あり</p> -->
        </section>

        <section>
            <h2>使ったお供</h2>

            <!-- カード型商品 -->
            <ul class="flex_use_goods">

                <li>
                    <a href="../html/column_detail.html">
                        <div class="box_syohin">
                            <img src="../uploads/nikumisoitame.jpg" alt="コラムの写真">
                            <h3>サブタイトルサブタイトル</h3>
                            <p>テキストが入ります。。。テキストは入ります。。。テキストが入ります。。。テキストは入ります。。。テキストが入ります。。。</p>
                        </div>
                    </a>
                </li>

                <li>
                    <a href="../html/column_detail.html">
                        <div class="box_syohin">
                            <img src="../uploads/nikumisoitame.jpg" alt="コラムの写真">
                            <h3>サブタイトルサブタイトル</h3>
                            <p>テキストが入ります。。。テキストは入ります。。。テキストが入ります。。。テキストは入ります。。。テキストが入ります。。。</p>
                        </div>
                    </a>

                </li>

                <li>

                    <a href="../html/column_detail.html">
                        <div class="box_syohin">
                            <img src="../uploads/nikumisoitame.jpg" alt="コラムの写真">
                            <h3>サブタイトルサブタイトル</h3>
                            <p>テキストが入ります。。。テキストは入ります。。。テキストが入ります。。。テキストは入ります。。。テキストが入ります。。。</p>
                        </div>
                    </a>

                </li>

            </ul>
        </section>
    </div>
