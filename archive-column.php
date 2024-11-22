<?php get_header(); ?>


<main>
    <!-- コラム -->
    <section class="column">
        <div class="inner">
            <!-- 見出し -->
            <h2 class="ttl_box">
                <span class="ttl">コラム</span><br>

            </h2>

            <!-- コラム一覧 -->
            <?php if (have_posts()) : ?>
                <ul class="column_list">
                    <?php while (have_posts()) : the_post(); ?>
                        <li>
                            <article>
                                <div class="box_column">
                                    <a href="#">
                                        <div class="box__item">
                                            <div>
                                                <?php if (has_post_thumbnail()): ?>
                                                    <?php the_post_thumbnail('medium'); ?>
                                                <?php else: ?>
                                                    <img src="<?php echo get_template_directory_uri(); ?>/test-assets-test/img/common/noimage.png" alt="">
                                                <?php endif; ?>

                                            </div>
                                            <h3><?php the_title(); ?></h3>
                                            <p>
                                                <?php the_content(); ?>
                                            </p>
                                        </div>
                                    </a>
                                </div>
                            </article>
                        </li>
                    <?php endwhile; ?>
                </ul>
            <?php endif; ?>
            <div>
                <section>
                    <div class="column_box">
                        <h3>コラム　一覧</h3>
                        <a href="#">インタビュー</a>
                        <a href="#">体験談</a>
                        <a href="#">取材日記</a>
                    </div>
                </section>
            </div>
            <!-- サービスのmoreボタン -->
            <!-- <a href="#" class="more">サービス紹介</a> -->
        </div>

    </section>

</main>

<?php get_footer(); ?>
