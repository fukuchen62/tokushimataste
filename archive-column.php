<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/reset.css" media="all">
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/common.css" media="all">
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/column.css" media="all">

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
                            <?php get_template_part('template-parts/loop', 'column'); ?>
                        </li>
                    <?php endwhile; ?>
                </ul>
            <?php endif; ?>

        </div>

    </section>
    <div>
        <section>
            <div class="column_box">
                <h3>コラム　一覧</h3>
                <?php
                $column_type_terms = get_terms(['taxonomy' => 'column_type']);
                // if (!empty($column_type_terms)):

                // echo '<pre>';
                // var_dump($column_type_terms);
                // echo '<pre>';
                ?>
                <?php foreach ($column_type_terms as $column_type):
                    // echo '<pre>';
                    // var_dump($column_type);
                    // echo '<pre>';
                ?>

                    <a href="<?php echo get_term_link($column_type); ?>"><?php echo $column_type->name; ?></a>
                <?php endforeach ?>
                <!-- <a href="#">インタビュー</a>
                <a href="#">体験談</a>
                <a href="#">取材日記</a> -->
            </div>
        </section>
    </div>
</main>

<?php get_footer(); ?>
