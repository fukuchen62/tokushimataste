<?php get_header(); ?>
<main>

    <div class="inner">
        <div class="inner_ms">
            <h2 class="tittle_ms"><span><?php the_field('company') ?></span></h2>

            <!-- スライダー -->
            <div class="flex_ms">
                <div class="container_ms">
                    <div class="slider_ms">
                        <div class="slick_img">
                            <img src="../uploads/miso.jpeg" alt="" />
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


                <table class="table_ms">
                    <tr>
                        <th>会社名</th>
                        <td><?php the_field('company') ?></td>
                    </tr>
                    <tr>
                        <th>フリガナ</th>
                        <td><?php the_field('phonetic') ?></td>
                    </tr>
                    <tr>
                        <th>代表者名</th>
                        <td><?php the_field('name') ?></td>
                    </tr>
                    <tr>
                        <th>会社概要</th>
                        <td><?php the_field('company_info') ?></td>
                    </tr>
                    <tr>
                        <th>郵便番号</th>
                        <td><?php the_field('post_code') ?></td>
                    </tr>
                    <tr>
                        <th>住所</th>
                        <td><?php the_field('address') ?></td>
                    </tr>
                    <tr>
                        <th>電話番号</th>
                        <td><?php the_field('tel') ?></td>
                    </tr>
                    <tr>
                        <th>FAX</th>
                        <td><?php the_field('fax') ?></td>
                    </tr>
                    <tr>
                        <th>EMail</th>
                        <td><?php the_field('email') ?></td>
                    </tr>
                    <tr>
                        <th>営業時間</th>
                        <td><?php the_field('business_hours') ?></td>
                    </tr>
                    <tr>
                        <th>会社のHP</th>
                        <td><?php the_field('url') ?></td>
                    </tr>
                    <tr>
                        <td colspan="2">
                            <p><small>※お問い合わせは営業時間内でお願いします。</small></p>
                        </td>
                    </tr>
                </table>

                <section class="memo">
                    <h3 class="fa-solid fa-leaf">備考</h3>
                    <p><?php the_field('memo') ?></p>
                </section>

                <div class="flex_oneword">

                    <?php
                    $pic = get_field('pic1');
                    // $picが存在する場合のみURLを取得
                    $pic_url =  $pic['sizes']['thumbnail'];
                    ?>
                    <img src="<?php echo $pic_url; ?>" alt="">
                    <section class=" oneword">
                        <h3><span>メーカーさんから一言</span></h3>
                        <p><?php the_field('catchphrase') ?></p>
                    </section>
                </div>
            </div>

            <!-- idと紐づける -->
            <section class="rcmd_box">
                <h3 class="rcmd_b3"><span>オススメベスト３商品</span></h3>
                <ul class="rcmd_good">
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
</main>
<?php get_footer(); ?>


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




<!-- ここから -->

<body>
