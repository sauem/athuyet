<section class="all-category-news ptb-40">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-md-12">
                <div class="section-title"><h2>TIN TỨC</h2></div>
                <?php
                query_posts([
                    'posts_per_page' => 6
                ]);
                if (have_posts()) :
                    while (have_posts()):the_post();
                        ?>
                        <div class="single-category-news">
                            <div class="row m-0 align-items-center">
                                <div class="col-lg-5 col-md-6 p-0">
                                    <div class="category-news-image">
                                        <a href="#"><img src="<?= ASSET ?>/img/1.jpg" alt="image"/></a>
                                        <div class="tags"><a href="#">Sports</a></div>
                                    </div>
                                </div>
                                <div class="col-lg-7 col-md-6">
                                    <div class="category-news-content">
                                        <span><i class="icofont-clock-time"></i> 10 minutes ago</span>
                                        <h3><a href="#">Erik Jones Has Day He Won’t Soon Forget As Denny Backup At
                                                Bristol</a></h3>
                                        <p>Lorem Ipsum dummy text of the printing and typesetting industry. Lorem Ipsum
                                            has been the industry’s andard dummy text ever since 1921.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php
                    endwhile;endif;
                wp_reset_query();
                ?>

                <div class="pagination-area">
                    <a href="#" class="prev page-numbers"><i class="icofont-double-left"></i></a> <a href="#"
                                                                                                     class="page-numbers">1</a>
                    <span class="page-numbers current" aria-current="page">2</span>
                    <a href="#" class="page-numbers">3</a> <a href="#" class="page-numbers">4</a> <a href="#"
                                                                                                     class="next page-numbers"><i
                                class="icofont-double-right"></i></a>
                </div>
            </div>
            <div class="col-lg-4 col-md-12">
                <div class="section-title"><h2>KẾT NỐI</h2></div>
                <ul class="stay-connected">
                    <li>
                        <a href="#"><i class="icofont-facebook"></i><b>10.2K</b> <span>Fans</span></a>
                    </li>
                    <li>
                        <a href="#"><i class="icofont-twitter"></i><b>14.2K</b> <span>Followers</span></a>
                    </li>
                    <li>
                        <a href="#"><i class="icofont-linkedin"></i><b>11.2K</b> <span>Fans</span></a>
                    </li>
                    <li>
                        <a href="#"><i class="icofont-rss"></i><b>15.2K</b> <span>Subscriber</span></a>
                    </li>
                </ul>
                <div class="stay-connected-ads">
                    <a href="#"><img src="<?= ASSET ?>/img/3-ads.png" alt="image"/></a>
                </div>
                <div class="featured-news">
                    <div class="section-title"><h2>Featured News</h2></div>
                    <div class="single-featured-news">
                        <img src="<?= ASSET ?>/img/1.jpg" alt="image"/>
                        <div class="news-content">
                            <ul>
                                <li><i class="icofont-user-suited"></i> by <a href="#">John Smith</a></li>
                                <li><i class="icofont-calendar"></i> March 22, 2021</li>
                            </ul>
                            <h3><a href="#">As well as stopping goals, Cristiane Endler is opening doors</a></h3>
                        </div>
                        <div class="tags"><a href="#">Sports</a></div>
                    </div>
                    <div class="single-featured-news">
                        <img src="<?= ASSET ?>/img/2.jpg" alt="image"/>
                        <div class="news-content">
                            <ul>
                                <li><i class="icofont-user-suited"></i> by <a href="#">John Smith</a></li>
                                <li><i class="icofont-calendar"></i> March 22, 2021</li>
                            </ul>
                            <h3><a href="#">You’ve got mail! All about the tagDiv Newsletter plugin</a></h3>
                        </div>
                        <div class="tags bg-2"><a href="#">Sports</a></div>
                    </div>
                    <div class="single-featured-news">
                        <img src="<?= ASSET ?>/img/3.jpg" alt="image"/>
                        <div class="news-content">
                            <ul>
                                <li><i class="icofont-user-suited"></i> by <a href="#">John Smith</a></li>
                                <li><i class="icofont-calendar"></i> March 22, 2021</li>
                            </ul>
                            <h3><a href="#">Newspaper Theme: Enhance Your Pages with the Row Divider</a></h3>
                        </div>
                        <div class="tags bg-3"><a href="#">Sports</a></div>
                    </div>
                </div>
                <div class="newsletter-box">
                    <div class="section-title"><h2>Newsletter</h2></div>
                    <div class="newsletter-box-inner">
                        <h3>Subscribe To Our Mailing List To Get The New Updates!</h3>
                        <i class="icofont-email"></i>
                        <form class="newsletter-form" data-toggle="validator">
                            <input type="email" class="newsletter-input" placeholder="Enter your email" name="EMAIL"
                                   required autocomplete="off"/>
                            <button type="submit"><i class="icofont-paper-plane"></i></button>
                            <div id="validator-newsletter" class="form-result"></div>
                        </form>
                    </div>
                </div>

                <aside class="widget-area" id="secondary">
                    <section class="widget widget_recent_entries">
                        <h3 class="widget-title">TIN MỚI</h3>
                        <ul>
                            <?php
                            query_posts([
                                'posts_per_page' => 6,
                                'sort' => 'desc',
                                'sortby' => 'date'
                            ]);
                            if (have_posts()) :
                                while (have_posts()):the_post();
                                    ?>
                                    <li><a href="<?= get_the_permalink() ?>"><?= get_the_title() ?></a></li>
                                <?php
                                endwhile;endif;
                            wp_reset_query();
                            ?>
                        </ul>
                    </section>

                    <section class="widget widget_categories">
                        <h3 class="widget-title">CHUYÊN MỤC</h3>
                        <ul>
                            <?php
                            $categories = get_categories([
                                'type' => 'post',
                                'number' => 10,
                                'parent' => 0
                            ]);
                            if (!empty($categories)) {
                                foreach ($categories as $term) {
                                    ?>
                                    <li>
                                        <a href="<?= get_term_link($term->slug, 'category') ?>">
                                            <?= $term->name ?>
                                        </a>
                                    </li>
                                    <?php
                                }
                            }
                            ?>
                        </ul>

                    </section>
                    <?php
                    $posttags = get_tags(['count' => true]);
                    if (!empty($posttags)):
                        ?>
                        <section class="widget widget_tag_cloud">
                            <h3 class="widget-title">THẺ</h3>
                            <div class="tagcloud">
                                <?php
                                foreach ($posttags as $tag) {
                                    ?>
                                    <a href="<?= get_term_link($tag->slug, 'post_tag') ?>">
                                        <?= $tag->name ?> <span class="tag-link-count"> (<?= $tag->count ?>)</span>
                                    </a>
                                    <?php
                                }
                                ?>
                            </div>
                        </section>
                    <?php endif; ?>
                    <!--                    <section class="widget newsletter_box">-->
                    <!--                        <div class="newsletter-box">-->
                    <!--                            <div class="newsletter-box-inner">-->
                    <!--                                <h3>ĐĂNG KÝ NHẬN THÔNG TIN!</h3>-->
                    <!--                                <i class="icofont-email"></i>-->
                    <!--                                <form class="newsletter-form" data-toggle="validator">-->
                    <!--                                    <input type="email" class="newsletter-input" placeholder="Enter your email"-->
                    <!--                                           name="EMAIL" required autocomplete="off"/>-->
                    <!--                                    <button type="submit"><i class="icofont-paper-plane"></i></button>-->
                    <!--                                    <div id="validator-newsletter" class="form-result"></div>-->
                    <!--                                </form>-->
                    <!--                            </div>-->
                    <!--                        </div>-->
                    <!--                    </section>-->
                </aside>
            </div>
        </div>
    </div>
</section>
