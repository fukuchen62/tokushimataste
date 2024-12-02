<?php get_header(); ?>
<main>

    <div class="inner">
        <!-- パンくずリスト-->
        <?php get_template_part('template-parts/breadcrumb');
        ?>
        <!-- <div class="inner_ms"> -->
        <h2 class="tittle_ms"><span><?php the_field('company') ?></span></h2>


        <div class="flex_ms">
            <div class="container_ms">
                <div class="slider_ms">
                    <div class="slick_img">
                        <?php
                        $post_id = get_the_ID(); // 現在の投稿IDを取得
                        $pic1 = get_post_meta($post_id, 'pic1', true);
                        ?>
                    </div>
                    <div class="slick_img">
                        <?php
                        $post_id = get_the_ID(); // 現在の投稿IDを取得
                        $pic2 = get_post_meta($post_id, 'pic2', true);
                        ?>
                    </div>
                    <div class="slick_img">
                        <?php
                        $post_id = get_the_ID(); // 現在の投稿IDを取得
                        $pic3 = get_post_meta($post_id, 'pic3', true);
                        ?>
                    </div>
                    <div class="slick_img">
                        <?php
                        $post_id = get_the_ID(); // 現在の投稿IDを取得
                        $pic4 = get_post_meta($post_id, 'pic4', true);
                        ?>
                    </div>
                </div>
                <div class="thumbnail_ms">
                    <div class="thumbnail_img">
                        <?php
                        $post_id = get_the_ID(); // 現在の投稿IDを取得
                        $pic1 = get_post_meta($post_id, 'pic1', true);
                        ?>
                    </div>
                    <div class="thumbnail_img">
                        <?php
                        $post_id = get_the_ID(); // 現在の投稿IDを取得
                        $pic2 = get_post_meta($post_id, 'pic2', true);
                        ?>
                    </div>
                    <div class="thumbnail_img">
                        <?php
                        $post_id = get_the_ID(); // 現在の投稿IDを取得
                        $pic3 = get_post_meta($post_id, 'pic3', true);
                        ?>
                    </div>
                    <div class="thumbnail_img">
                        <?php
                        $post_id = get_the_ID(); // 現在の投稿IDを取得
                        $pic4 = get_post_meta($post_id, 'pic4', true);
                        ?>
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
        </div>


        <section class="memo">
            <h3>備考</h3>
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


        <!-- idと紐づける -->
        <!-- カード型class修正待ち -->
        <section class="rcmd_box">
            <h3 class="rcmd_b3"><span>オススメベスト３商品</span></h3>
            <ul class="rcmd_good">
                <li>
                    <a href="good_detail_ba.html" class="box_syohin">

                        <!-- ここから -->
                        <?php
                        // 投稿IDを取得
                        $post_id = get_the_ID(); // 現在の投稿IDを取得
                        $maker_post = get_post($post_id);


                        // カスタムフィールド 'maker_id' に保存された投稿IDを取得
                        //$maker_id = get_post_meta($post_id, 'maker_id', true);

                        // maker_id から投稿データを取得
                        //$maker_post = get_post($maker_id);

                        if ($maker_post) {
                            // 投稿タイトル (maker_title) を取得
                            $maker_title = $maker_post->post_title;

                            // 表示
                            echo '<p>メーカー名: ' . esc_html($maker_title) . '</p>';
                        } else {
                            echo '<p>メーカー情報が見つかりません。</p>';
                        }
                        ?>

                        <!-- ここまで -->
                        <img src="../uploads/nikumisoitame.jpg" alt="ご飯のお供">
                        <h3 class="name_syokuhin">サブタイトルサブタイトル</h3>
                        <div class="card_syokuhin">
                            <p>グルメ</p>
                            <p>市内</p>
                            <p>ご飯にかけても何にかけてもおいしいよご飯にかけても何にかけてもおいしいよご飯にかけても何にかけてもおいしいよ</p>
                        </div>
                    </a>
                </li>
                <li>
                    <a href="goods_detail.html" class="box_syohin">
                        <img src="../uploads/furikake.jpeg" alt="ご飯のお供">
                        <h3 class="name_syokuhin">サブタイトルサブタイトル</h3>
                        <div class="card_syokuhin">
                            <p>グルメ</p>
                            <p>市内</p>
                            <p>ご飯にかけても何にかけてもおいしいよ</p>
                        </div>
                    </a>
                </li>
                <li>
                    <a href="good_detail_ba.html" class="box_syohin">
                        <img src="../uploads/narazuke.jpeg" alt="ご飯のお供">
                        <h3 class="name_syokuhin">サブタイトルサブタイトル</h3>
                        <div class="card_syokuhin">
                            <p>グルメ</p>
                            <p>市内</p>
                            <p>ご飯にかけても何にかけてもおいしいよ</p>
                        </div>
                    </a>
                </li>
            </ul>
        </section>
    </div>
</main>
<?php get_footer(); ?>
