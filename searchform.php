<?php get_header(); ?>
<main>
    <form id="search-box" method="GET" action="<?php echo home_url('/') ?>">
        <!-- wp検索フォームに必要 -->
        <input type="hidden" name="s" value="">

        <h2 class="detailed-search">
            <span class="detailed-search__text h2">
                <i class="fas fa-search" aria-hidden="true"></i> 条件を組み合わせて検索
            </span>
        </h2>
        <!-- 0601田邊修正 文字のスペース削除・クラス名変更など -->
        <div class="table__wrap">
            <table class="search-item select-box">
                <tbody>
                    <tr>
                        <th class="nav-title">エリアの指定</th>

                    </tr>
                    <tr class="search-nav">

                        <!-- <td class="search-nav__box">
                            <div class="search-nav__place">
                                <label class="label-box"><input type="radio" class="place" name="area" value="tokushima" checked="">徳島市</label>
                            </div>
                        </td> -->
                        <td class="search-nav__box">
                            <div class="search-nav__place">
                                <label class="label-box"><input type="radio" class="place" name="area" value="east">東部</label>
                            </div>
                        </td>
                        <td class="search-nav__box">
                            <div class="search-nav__place">
                                <label class="label-box"><input type="radio" class="place" name="area" value="south">南部</label>
                            </div>
                        </td>
                        <td class="search-nav__box">
                            <div class="search-nav__place">
                                <label class="label-box"><input type="radio" class="place" name="area" value="west">西部</label>
                            </div>
                        </td>


                    </tr>
                </tbody>
            </table>

            <table class="search-item purpose-box">
                <tbody>
                    <tr>
                        <th class="nav-title">お供</th>

                    </tr>
                    <tr class="nav-item__box">

                        <td class="nav-item">
                            <label class="label-box"><input type="checkbox" name="product_type[]" value="ferment">漬物・発酵食品</label>
                        </td>
                        <td class="nav-item">
                            <label class="label-box"><input type="checkbox" name="product_type[]" value="tsukudani">佃煮・海産物</label>
                        </td>

                        <td class="nav-item">
                            <label class="label-box"><input type="checkbox" name="product_type[]" value="meat">肉・卵・大豆製品</label>
                        </td>
                        <td class="nav-item">
                            <label class="label-box"><input type="checkbox" name="product_type[]" value="furikake">ふりかけ・混ぜご飯の素</label>
                        </td>

                        <td class="nav-item">
                            <label class="label-box"><input type="checkbox" name="product_type[]" value="spice">薬味・シンプル調味料</label>
                        </td>

                        <td class="nav-item">
                            <label class="label-box"><input type="checkbox" name="product_type[]" value="others">その他</label>
                        </td>

                    </tr>
                </tbody>
            </table>

            <table class="search-item time-box">
                <tbody>
                    <tr>
                        <th class="nav-title">味覚</th>

                    </tr>
                    <tr class="nav-item__box nav-item-time">

                        <td class="nav-item">
                            <label class="label-box"><input type="checkbox" name="taste[]" value="sweet">甘い</label>
                        </td>
                        <td class="nav-item">
                            <label class="label-box"><input type="checkbox" name="taste[]" value="spicy">辛い</label>
                        </td>

                        <td class="nav-item">
                            <label class="label-box"><input type="checkbox" name="taste[]" value="salty">塩辛い</label>
                        </td>
                        <td class="nav-item">
                            <label class="label-box"><input type="checkbox" name="taste[]" value="bitter">苦い</label>
                        </td>
                        <td class="nav-item">
                            <label class="label-box"><input type="checkbox" name="taste[]" value="umami">うま味</label>
                        </td>

                    </tr>
                </tbody>
            </table>

            <table class="search-item facility-box">
                <tbody>
                    <tr>
                        <th class="nav-title">アレルギー</th>

                    </tr>
                    <tr class="nav-item__box">

                        <td class="nav-item">
                            <label class="label-box"><input type="checkbox" name="allergy[]" value="shrimp">えび</label>
                        </td>
                        <td class="nav-item">
                            <label class="label-box"><input type="checkbox" name="allergy[]" value="crab">かに</label>
                        </td>

                        <td class="nav-item">
                            <label class="label-box"><input type="checkbox" name="allergy[]" value="walnut">くるみ</label>
                        </td>
                        <td class="nav-item">
                            <label class="label-box"><input type="checkbox" name="allergy[]" value="wheat">小麦</label>
                        </td>

                        <td class="nav-item">
                            <label class="label-box"><input type="checkbox" name="allergy[]" value="soba">そば</label>
                        </td>

                        <td class="nav-item">
                            <label class="label-box"><input type="checkbox" name="allergy[]" value="egg">卵</label>
                        </td>

                        <td class="nav-item">
                            <label class="label-box"><input type="checkbox" name="allergy[]" value="milk">乳</label>
                        </td>

                        <td class="nav-item">
                            <label class="label-box"><input type="checkbox" name="allergy[]" value="peanut">落花生</label>
                        </td>

                    </tr>

                </tbody>
            </table>
        </div>

        <!-- 0523田邊変更 -->
        <!-- 0527佐藤変更 他のページより差し替え -->
        <!-- input[type="submit"] -->
        <!-- <input type="submit" value="検索" class="btn-b ta-c"> -->
        <!-- 0523田邊変更end -->

        <!--
        <div class="btn_box">
            <div class="js_btndown btn-link orange">
                <button type="submit" class="btn-more__text">検索<i class="fas fa-angle-right"></i></button>
            </div>
        </div> -->
        <input type="submit" value="検索" class="btn-b ta-c">
        <!-- 0601田邊修正 文字のスペース削除・クラス名変更などend -->
    </form>
</main>



<?php get_footer(); ?>
