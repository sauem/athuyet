<?php
query_posts([
    'post_type' => 'video',
    'posts_per_page' => 12
]);
if (have_posts()):
    ?>
    <section class="video-news-area ptb-40">
        <div class="container">
            <div class="section-title"><h2>Videos</h2></div>
            <div class="row">
                <div class="video-news-slides owl-carousel owl-theme">
                    <?php

                    while (have_posts()): the_post();
                        ?>
                        <div class="col-lg-12 col-md-12">
                            <div class="single-default-news">
                                <img src="<?= get_the_post_thumbnail_url() ?>" alt="<?= get_the_title() ?>"/>
                                <div class="news-content">
                                    <ul>
                                        <li>
                                            <i class="icofont-calendar"></i>
                                            <?= postedTime() ?>
                                        </li>
                                    </ul>
                                    <h3>
                                        <a href=" <?= get_the_permalink() ?>">
                                            <?= get_the_title() ?>
                                        </a>
                                    </h3>
                                </div>
                                <div class="tags"><a href="#"><?= get_tag() ?></a></div>
                                <div class="video-btn">
                                    <a href="https://www.youtube.com/watch?v=bk7McNUjWgw" class="popup-youtube"><i
                                                class="icofont-play-alt-3"></i></a>
                                </div>
                            </div>
                        </div>
                    <?php endwhile; ?>
                </div>
            </div>
        </div>
    </section>
<?php
endif;
wp_reset_query();
