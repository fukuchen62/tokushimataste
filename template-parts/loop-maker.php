<li>
    <div class="box_maker">
        <a href="<?php the_permalink(); ?>">
            <?php
            $pic = get_field('pic1');
            $pic_url = $pic ? $pic['sizes']['medium_large'] : '';
            ?>
            <?php if ($pic_url): ?>
                <img src="<?php echo esc_url($pic_url); ?>" alt="<?php the_title_attribute(); ?>" class="img-fluid">
            <?php endif; ?>
            <h3><?php the_title(); ?></h3>
            <p><?php
                // 会社情報を取得
                $company_info = get_field('company_info');

                // 会社情報が存在する場合、50文字に切り取って出力
                if ($company_info) {
                    $trimmed_company_info = mb_substr($company_info, 0, 50, 'UTF-8'); // 50文字に切り取る
                    if (mb_strlen($company_info, 'UTF-8') > 50) {
                        $trimmed_company_info .= '...'; // 元の文字数が50を超えていた場合に "..." を追加
                    }
                    echo '<p>' . esc_html($trimmed_company_info) . '</p>';
                }
                ?>
            </p>
            <?php

            ?>
        </a>
    </div>
</li>
