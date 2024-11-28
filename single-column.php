<?php get_header(); ?>
<main>
    <div class="inner">
        <!--パンくずリスト-->
        <?php get_template_part('template-parts/breadcrumb');
        ?>


        <!-- コラム -->
        <section class="column">
            <div class="inner">
                <!-- 見出し -->
                <h2 class="ttl_box ttl_cd"><span><?php the_title(); ?></span></h2>

                <!-- コラム一覧 -->
                <ul class="single_col_flex">

                    <li class="article_col">

                        <div>
                            <?php //if (has_post_thumbnail()):
                            ?>
                            <?php the_post_thumbnail('medium'); ?>
                            <?php //else:
                            ?>
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/common/noimage.png" alt="">
                            <?php //endif;
                            ?>
                            <?php //the_content();
                            ?>
                        </div>
                        <section class="section_col">
                            <h3 class="section_ttl">「収穫できるものは作物だけじゃない」半農らいふ</h3>
                            <p>
                                大阪府阪南市出身 「ムーさん」こと田中宗豊さん<br>

                                プロサーファーからサーフボード生産販売、Patagoniaサーフィンアンバサダー、木こりもこなすクロスファーマー。<br>
                                幼少期から色々なスポーツをやってみて唯一続いたサーフィン。そしてプロサーファーになるために、17才で海陽町に移住。<br>
                                プロサーファーとして国内外へのプロツアー参戦後、海から学んだ「大地との自然の摂理」を考えるきっかけを経て、現在のスタイルに至る。

                                大阪市高槻市出身 「ミコちゃん」こと田中美子さん<br>

                                25才の時に、海のそばでサーフィンしながら暮らせる場所を探して海陽町に移住。 ホーリーバジルの栽培・加工・販売から、徳島県認定森林づくりリーダーをこなす三児のスーパーママファーマー<br>

                                2人がサーフィンを通じて出会い結婚し家族となり、2人が描く理想のナチュラルな流れある暮らしを求め、農収穫のある暮らしからゲストハウス、サーフィン、農業体験、作物生産加工、サーフボード製造など、季節感のある仕事で年中活動。<br>
                                「流れる波のように、今も昔も変わらないクラシックの旋律のように」と流浪クラシック ールロクラシックーと名付け、「先人の知恵と文化を、未来の子供たちに伝えたい」との想いで、2013年にプロジェクトを立ち上げて現在に至る。<br>
                            </p>
                        </section>
                </ul>


                </li>


                <!-- サイドバーメニュー -->
                <li class="side_bar side_bar_col">
                    <div class="category-list-outer">
                        <div class="category-list">
                            <h3>コラム一覧</h3>
                        </div>
                    </div>
                    <aside class="side-menu">
                        <ul class="side-menu-li">
                            <?php get_sidebar(); ?>

                        </ul>
                    </aside>

                </li>





            </div>
</main>



<?php get_footer(); ?>
