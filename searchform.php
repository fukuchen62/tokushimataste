<!-- 詳細検索 -->
<section class="search">
    <div class="inner">
        <?php get_template_part('template-parts/breadcrumb');
        ?>

        <!-- 見出し -->
        <!-- <h2 class="ttl_box">
            <span class="ttl">詳細検索</span><br>
        </h2> -->

        <div class="check_box">
            <form id="search-box" method="GET" action="<?php /*echo home_url('/')*/ ?>">
                <!-- wp検索フォームに必要 -->
                <input type="hidden" name="s" value="">
                <!-- チェックしたものを検索した後も保持するための記述 ＷＥＢプログラマー養成科第13期生『〇（まる）』さんからお借りしました。ありがとうございます。-->
                <?php

                // 「地域」のチェックを保持
                $select_area = filter_input(INPUT_GET, "area", FILTER_DEFAULT, FILTER_REQUIRE_ARRAY) ?: [];
                $checked["area"] = ["west" => "", "east" => "", "south" => ""];
                foreach ($select_area as $val) {
                    $checked["area"][$val] = " checked";
                }

                // 「商品種別」のチェックを保持
                $select_event_type = filter_input(INPUT_GET, "product_type", FILTER_DEFAULT, FILTER_REQUIRE_ARRAY) ?: [];
                $checked["product_type"] = ["ferment" => "", "tsukudani" => "", "meat" => "", "furikake" => "", "spice" => "", "others" => ""];
                foreach ($select_event_type as $val) {
                    $checked["product_type"][$val] = " checked";
                }

                // 「味覚」のチェックを保持
                $select_season = filter_input(INPUT_GET, "taste", FILTER_DEFAULT, FILTER_REQUIRE_ARRAY) ?: [];
                $checked["taste"] = ["sweet" => "", "spicy" => "", "salty" => "", "bitter" => "", "umami" => ""];
                foreach ($select_season as $val) {
                    $checked["taste"][$val] = " checked";
                }

                // 「アレルギー」のチェックを保持
                $select_vege_type = filter_input(INPUT_GET, "allergy", FILTER_DEFAULT, FILTER_REQUIRE_ARRAY) ?: [];
                $checked["allergy"] = ["shrimp" => "", "crab" => "", "walnut" => "", "wheat" => "", "soba" => "", "egg" => "", "milk" => "", "peanut" => ""];
                foreach ($select_vege_type as $val) {
                    $checked["allergy"][$val] = " checked";
                }


                ?>
                <section class="inner_search">
                    <h3>エリア</h3>

                    <ul>
                        <li class="choice_item">
                            <input type="checkbox" name="area[]" id="area1" value="west" <?= $checked["area"]["west"] ?>>
                            <label for="area1">県西</label>
                        </li>
                        <li class="choice_item">
                            <input type="checkbox" name="area[]" id="area2" value="east" <?= $checked["area"]["east"] ?>>
                            <label for="area2">県東</label>
                        </li>
                        <li class="choice_item">
                            <input type="checkbox" name="area[]" id="area3" value="south" <?= $checked["area"]["south"] ?>>
                            <label for="area3">県南</label>
                        </li>
                    </ul>
                </section>

                <section class="inner_search">



                    <h3>お供のタイプ</h3>

                    <ul>
                        <li>
                            <input type="checkbox" name="product_type[]" id="product_type1" value="ferment" <?= $checked["product_type"]["ferment"] ?>>
                            <label for="product_type1">漬物・発酵食品</label>
                        </li>
                        <li>
                            <input type="checkbox" name="product_type[]" id="product_type2" value="tsukudani" <?= $checked["product_type"]["tsukudani"] ?>>
                            <label for="product_type2">佃煮・海産物</label>
                        </li>
                        <li>
                            <input type="checkbox" name="product_type[]" id="product_type3" value="meat" <?= $checked["product_type"]["meat"] ?>>
                            <label for="product_type3">肉・卵・大豆製品</label>
                        </li>
                        <li>
                            <input type="checkbox" name="product_type[]" id="product_type4" value="furikake" <?= $checked["product_type"]["furikake"] ?>>
                            <label for="product_type4">ふりかけ・混ぜご飯の素</label>
                        </li>
                        <li>
                            <input type="checkbox" name="product_type[]" id="product_type5" value="spice" <?= $checked["product_type"]["spice"] ?>>
                            <label for="product_type5">薬味・シンプル調味料</label>
                        </li>
                        <li>
                            <input type="checkbox" name="product_type[]" id="product_type6" value="others" <?= $checked["product_type"]["others"] ?>>
                            <label for="product_type6">その他</label>
                        </li>
                    </ul>
                </section>

                <section class="inner_search">


                    <h3>味覚</h3>
                    <ul>
                        <li><input type="checkbox" name="taste[]" id="taste1" value="sweet" <?= $checked["taste"]["sweet"] ?>>
                            <label for="taste1">甘い</label>
                        </li>
                        <li><input type="checkbox" name="taste[]" id="taste2" value="spicy" <?= $checked["taste"]["spicy"] ?>>
                            <label for="taste2">辛い</label>
                        </li>
                        <li><input type="checkbox" name="taste[]" id="taste3" value="salty" <?= $checked["taste"]["salty"] ?>>
                            <label for="taste3">塩辛い</label>
                        </li>
                        <li><input type="checkbox" name="taste[]" id="taste4" value="bitter" <?= $checked["taste"]["bitter"] ?>>
                            <label for="taste4">苦い</label>
                        </li>
                        <li><input type="checkbox" name="taste[]" id="taste5" value="umami" <?= $checked["taste"]["umami"] ?>>
                            <label for="taste5">うま味</label>
                        </li>
                    </ul>
                </section>

                <section class="inner_search">


                    <h3>アレルギー（選択されたものは除去されます）</h3>

                    <ul>
                        <li><input type="checkbox" name="allergy[]" id="allergy1" value="shrimp" <?= $checked["allergy"]["shrimp"] ?>>
                            <label for="allergy1">えび</label>
                        </li>
                        <li><input type="checkbox" name="allergy[]" id="allergy2" value="crab" <?= $checked["allergy"]["crab"] ?>>
                            <label for="allergy2">かに</label>
                        </li>
                        <li><input type="checkbox" name="allergy[]" id="allergy3" value="walnut" <?= $checked["allergy"]["walnut"] ?>>
                            <label for="allergy3">くるみ</label>
                        </li>
                        <li><input type="checkbox" name="allergy[]" id="allergy4" value="wheat" <?= $checked["allergy"]["wheat"] ?>>
                            <label for="allergy4">小麦</label>
                        </li>
                        <li><input type="checkbox" name="allergy[]" id="allergy5" value="soba" <?= $checked["allergy"]["soba"] ?>>
                            <label for="allergy5">そば</label>
                        </li>
                        <li><input type="checkbox" name="allergy[]" id="allergy6" value="egg" <?= $checked["allergy"]["egg"] ?>>
                            <label for="allergy6">卵</label>
                        </li>
                        <li><input type="checkbox" name="allergy[]" id="allergy7" value="milk" <?= $checked["allergy"]["milk"] ?>>
                            <label for="allergy7">乳</label>
                        </li>
                        <li><input type="checkbox" name="allergy[]" id="allergy8" value="peanut" <?= $checked["allergy"]["peanut"] ?>>
                            <label for="allergy8">落花生</label>
                        </li>
                    </ul>
                </section>

                <div class="clear_or_search">
                    <?php $url = home_url('/') . '?s='; ?>
                    <input class="clear_btn" type="reset" value="クリア" onclick="resetForm('<?php echo $url; ?>')">
                    <input class="search_btn" type="submit" value="検索">
                </div>
            </form>
        </div>
    </div>

</section>

<h2 class="ttl_box">
    <span class="ttl">検索結果</span><br>
</h2>
