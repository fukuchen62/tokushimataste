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




    <div class="card-container">
        <ul class="page_list">
            <?php
            $args = ['post_type' => 'product'];
            ?>
            <?php
            $the_query = new WP_Query($args)
            ?>
            <?php if ($the_query->have_posts()): ?>
                <?php while ($the_query->have_posts()) : $the_query->the_post(); ?>
                    <li>
                        <!-- <img src="../uploads/tsukemono.jpeg" alt="Image" class="img-fluid"><br>
                                             <!-- <a href="#" id="goods">ふりかけ・混ぜご飯の素</a> -->
                        <!-- <p>グルメ</p> -->
                        <!-- <p>市内</p> -->
                        <!-- <p>ご飯にかけても何にかけてもおいしいよ さあ、おなかいっぱいになるまでお食べ</p> -->
                        <?php get_template_part('template-parts/loop', 'product'); ?>
                    </li>
                <?php endwhile; ?>
            <?php endif; ?>
        </ul>
    </div>




    <!-- <ul class="pagination"></ul> -->


    <!-- トップページに戻るボタン -->
    <p id="page-top"><a href="#">↑<br>TOP</a></p>
    <!-- <style>
            * {
                box-sizing: border-box;
            }


            ul {
                list-style: none;
            }

            .page_list {
                border-top: 1px solid #000;
                margin-bottom: 20px;
            }

            .page_list li {
                display: none;
                padding: 20px 0;
                border-bottom: 1px solid #000;
            }

            .page_list li.on {
                display: block;
            }

            .pagination {
                width: 70%;
                margin: 0 auto 50px;
                font-size: 14px;
                display: flex;
                align-items: center;
                justify-content: center;
                gap: 5px;
            }

            .pagination .number {
                display: flex;
                align-items: center;
                justify-content: flex-start;
                flex-wrap: wrap;
                gap: 5px;
            }

            .pagination a {
                display: flex;
                align-items: center;
                justify-content: center;
                width: 40px;
                height: 40px;
                text-align: center;
                text-decoration: none;
                cursor: pointer;
                background-color: #ffffff;
                border: solid 1px #1597CC;
                border-radius: 5px;
                padding: 10px 0;
            }

            .pagination .number>a.active {
                background-color: #1597CC;
                color: #fff;
            }
        </style> -->

</main>
<?php
get_template_part('template-parts/pagination');
?>
<?php get_footer(); ?>
<!-- <script src="https://code.jquery.com/jquery-3.6.0.js"></script>
            <script src="../assets/js/goods.js"></script> -->
</body>

</html>
