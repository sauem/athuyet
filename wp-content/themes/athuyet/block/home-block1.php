<section class="blog-home">
    <div class="blog-home-slides owl-carousel owl-theme">
        <?php
        query_posts([
            'posts_per_page' => 12,
        ]);
        if (have_posts()):while (have_posts()) : the_post();
            ?>
            <div class="col-lg-12">
                <div class="single-blog-box">
                    <div class="blog-image">
                        <a href="<?= get_the_permalink() ?>">
                            <img src="<?= get_the_post_thumbnail_url() ?>"
                                 alt="<?= get_the_title() ?>"/>
                        </a>
                    </div>
                    <div class="blog-post-content">
                        <h3>
                            <a href="<?php echo get_the_permalink() ?>"><?= get_the_title() ?></a>
                        </h3>
                        <ul>
                            <li><i class="icofont-ui-calendar"></i> <?= get_the_date() ?></li>
                            <li><i class="icofont-clock-time"></i> <?= postedTime() ?></li>
                        </ul>
                    </div>
                </div>
            </div>
        <?php
        endwhile;endif;
        wp_reset_query();
        ?>
    </div>
</section>
