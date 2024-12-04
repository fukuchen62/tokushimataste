<li>
    <a href="<?php the_permalink(); ?>" class="box_otomo">
        <?php
        $pic = get_field('pic1');
        $pic_url = $pic['sizes']['medium'];
        ?>
        <img src="<?php echo $pic_url; ?>" alt="Image" class="img-fluid"><br>
        <div id="goods"><?php the_title() ?></div>
        <div class="card_goods">
            <?php
            // タクソノミーから情報を取得したいので、wp_get_object_termsを活用する
            // 個々の投稿のIDとタクソノミーを引数、フィールドを名前に設定している。
            $area_term = wp_get_object_terms(
                get_the_ID(),
                'area',
                array("fields" => "names")
            );
            $product_type_term = wp_get_object_terms(
                get_the_ID(),
                'product_type',
                array("fields" => "names")
            );
            ?>
            <?php
            // 返値は配列で帰ってくるので、配列の最初の要素を出力する。
            ?>
            <p>
                <?php
                // タクソノミーを一つだけ指定していない場合は、表示しない
                if (count($area_term) === 1):
                    echo $area_term[0];
                endif;  ?>
            </p>
            <p>
                <?php
                if (count($product_type_term) === 1):
                    echo $product_type_term[0];
                endif;  ?>
            </p>
            <!-- 不必要になりました。
            <p><?php /*the_field('introduction')*/ ?></p>
            -->
        </div>
    </a>
</li>
