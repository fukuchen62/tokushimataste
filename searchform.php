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
                            <label class="label-box"><input type="checkbox" name="scene[]" value="waterside">水辺を歩きたい</label>
                        </td>
                        <td class="nav-item">
                            <label class="label-box"><input type="checkbox" name="scene[]" value="mountain">山を歩きたい</label>
                        </td>

                        <td class="nav-item">
                            <label class="label-box"><input type="checkbox" name="scene[]" value="history">歴史・文化を見る</label>
                        </td>
                        <td class="nav-item">
                            <label class="label-box"><input type="checkbox" name="scene[]" value="season">季節を感じたい</label>
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
                            <label class="label-box"><input type="checkbox" name="time[]" value="30min">30分以内</label>
                        </td>
                        <td class="nav-item">
                            <label class="label-box"><input type="checkbox" name="time[]" value="60min">60分以内</label>
                        </td>

                        <td class="nav-item">
                            <label class="label-box"><input type="checkbox" name="time[]" value="90min">90分以内</label>
                        </td>
                        <td class="nav-item">
                            <label class="label-box"><input type="checkbox" name="time[]" value="90min-plus">90分以上</label>
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
                            <label class="label-box"><input type="checkbox" name="attribute[]" value="toilet">トイレ</label>
                        </td>
                        <td class="nav-item">
                            <label class="label-box"><input type="checkbox" name="attribute[]" value="parking">駐車場</label>
                        </td>

                        <td class="nav-item">
                            <label class="label-box"><input type="checkbox" name="attribute[]" value="park">公園</label>
                        </td>
                        <td class="nav-item">
                            <label class="label-box"><input type="checkbox" name="attribute[]" value="barbecue">バーベキュー</label>
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
