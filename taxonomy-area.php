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
                <a href="#" class=""><span>県東</span></a>
            </li>
            <li id="west"><a href="#" class=""><span>県西</span></a>
            </li>
            <li id="south"><a href="#" class=""><span>県南</span></a>
            </li>
        </ul>
    </section>


    <div class="card-container">
        <ul class="page_list">
            <li>
                <img src="../uploads/tsukemono.jpeg" alt="Image" class="img-fluid"><br>
                <!-- リンクJavaScriptのテスト -->
                <a href="#" id="goods">ふりかけ・混ぜご飯の素</a>
                <p>グルメ</p>
                <p>市内</p>
                <p>ご飯にかけても何にかけてもおいしいよ さあ、おなかいっぱいになるまでお食べ</p>
            </li>


            <li>
                <img src="../uploads/tsukudani.jpeg" alt="Image" class="img-fluid"><br>
                <a href="#" id="goods">Oh No 海苔</a>
                <p>海苔</p>
                <p>小松島</p>
                <p>出汁の味が染みこんだソウルフード海苔</p>
            </li>
            <li>
                <img src="../uploads/tukemono.jpg" alt="Image" class="img-fluid"><br>
                <a href="#" id="goods">お漬物</a>
                <p>漬物</p>
                <p>阿南</p>
                <p>カレーでもハヤシでもなんでもござれ</p>
            </li>
            <li>
                <img src="../uploads/furikake.jpeg" alt="Image" class="img-fluid"><br>
                <a href="#" id="goods">こどものふりかけ</a>
                <p>ふりかけ</p>
                <p>海部</p>
                <p>パッパッとかけて楽しもう</p>
            </li>
            <li>
                <img src="../uploads/miso.jpeg" alt="Image" class="img-fluid"><br>
                <a href="#" id="goods">翻訳こんにゃくお味噌味</a>
                <p>味噌</p>
                <p>池田</p>
                <p>これを食べれば君も日本人</p>
            </li>
            <li>
                <img src="../uploads/saba-misoni.jpg" alt="Image" class="img-fluid"><br>
                <a href="#">沙漠の味噌漬け</a>
                <p>薬味・シンプル調味料</p>
                <p>鳴門</p>
                <p>うずまきナルト御用達</p>
            </li>
            <li>
                <h2>７のタイトル</h2>
                <p>７の記事７の記事７の記事７の記事７の記事７の記事７の記事７の記事７の記事７の記事</p>
            </li>
            <li>
                <h2>８のタイトル</h2>
                <p>８の記事８の記事８の記事８の記事８の記事８の記事８の記事８の記事８の記事８の記事</p>
            </li>
            <li>
                <h2>９のタイトル</h2>
                <p>９の記事９の記事９の記事９の記事９の記事９の記事９の記事９の記事９の記事９の記事</p>
            </li>
            <li>
                <h2>１０のタイトル</h2>
                <p>１０の記事１０の記事１０の記事１０の記事１０の記事１０の記事１０の記事１０の記事</p>
            </li>
            <li>
                <h2>１１のタイトル</h2>
                <p>１１の記事１１の記事１１の記事１１の記事１１の記事１１の記事１１の記事１１の記事</p>
            </li>
            <li>
                <h2>１２のタイトル</h2>
                <p>１２の記事１２の記事１２の記事１２の記事１２の記事１２の記事１２の記事１２の記事</p>
            </li>
            <li>
                <h2>１３のタイトル</h2>
                <p>１３の記事１３の記事１３の記事１３の記事１３の記事１３の記事１３の記事１３の記事</p>
            </li>
            <li>
                <h2>１４のタイトル</h2>
                <p>１４の記事１４の記事１４の記事１４の記事１４の記事１４の記事１４の記事１４の記事</p>
            </li>
            <li>
                <h2>１５のタイトル</h2>
                <p>１５の記事１５の記事１５の記事１５の記事１５の記事１５の記事１５の記事１５の記事</p>
            </li>
            <li>
                <h2>１６のタイトル</h2>
                <p>１６の記事１６の記事１６の記事１６の記事１６の記事１６の記事１６の記事１６の記事</p>
            </li>
            <li>
                <h2>１７のタイトル</h2>
                <p>１７の記事１７の記事１７の記事１７の記事１７の記事１７の記事１７の記事１７の記事</p>
            </li>
            <li>
                <h2>１８のタイトル</h2>
                <p>１８の記事１８の記事１８の記事１８の記事１８の記事１８の記事１８の記事１８の記事</p>
            </li>
            <li>
                <h2>１９のタイトル</h2>
                <p>１９の記事１９の記事１９の記事１９の記事１９の記事１９の記事１９の記事１９の記事</p>
            </li>
            <li>
                <h2>２０のタイトル</h2>
                <p>２０の記事２０の記事２０の記事２０の記事２０の記事２０の記事２０の記事２０の記事</p>
            </li>
        </ul>

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
