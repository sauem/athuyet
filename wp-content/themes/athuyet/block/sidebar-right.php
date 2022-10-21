<aside class="widget-area" id="secondary">

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


    <section class="widget wiget_posts_thumbs">
        <h3 class="widget-title">MỤC CHÚ Ý</h3>
        <?php
        query_posts([
            'posts_per_page' => 5
        ]);
        if (have_posts()) :
            while (have_posts()):the_post();
                ?>
                <article>
                    <a href="<?= get_the_permalink() ?>" class="thumb">
                                        <span class="fullimage thumb-bg1"
                                              style="background-image: url(<?= get_the_post_thumbnail_url() ?>
                                                      )">

                                        </span>
                    </a>
                    <div class="info">
                        <time datetime="<?= get_the_date() ?>"><?= get_the_date() ?></time>
                        <h4 class="title">
                            <a href="<?= get_the_permalink() ?>">
                                <?= get_the_title() ?>
                            </a>
                        </h4>
                    </div>
                </article>

            <?php
            endwhile;endif;
        wp_reset_query();
        ?>
    </section>
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

</aside>
