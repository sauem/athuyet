<?php
/**
 * The template for displaying single posts and pages.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 * @subpackage Twenty_Twenty
 * @since Twenty Twenty 1.0
 */

get_header();
?>
<div class="page-title-area">
    <div class="container">
        <div class="page-title-content">
            <h2><?= single_cat_title() ?></h2>

            <ul>
                <li><a href="/"><i class="icofont-home"></i> Trang chủ</a></li>
                <li><i class="icofont-rounded-right"></i></li>
                <li><?= single_cat_title() ?></li>
            </ul>
        </div>
    </div>
</div>
<section class="default-news-area bg-color-none">
    <div class="container">
        <div class="row">
            <div class="default-news-slides owl-carousel owl-theme">


                <?php
                query_posts([
                    'posts_per_page' => 6,
                    'sort' => 'desc',
                    'sortby' => 'date',
                    'cat' => $cat
                ]);
                if (have_posts()) :
                    while (have_posts()):the_post();
                        ?>
                        <div class="col-lg-12 col-md-12">
                            <div class="single-default-news">
                                <img src="<?= get_the_post_thumbnail_url() ?>" alt="<?= get_the_title() ?>">
                                <div class="news-content">
                                    <ul>
                                        <li><i class="icofont-calendar"></i> <?= postedTime() ?></li>
                                    </ul>
                                    <h3>
                                        <a href="<?= get_the_permalink() ?>">
                                            <?= get_the_title() ?>
                                        </a>
                                    </h3>
                                </div>
                            </div>
                        </div>
                    <?php
                    endwhile;endif;
                wp_reset_query();
                ?>

            </div>
        </div>
    </div>
</section>
<section class="all-category-news ptb-40">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-md-12">
                <div class="section-title">
                    <h2><?= single_cat_title() ?></h2>
                </div>
                <?php
                query_posts([
                    'posts_per_page' => 12,
                    'sort' => 'desc',
                    'sortby' => 'date',
                    'cat' => $cat,
                    'offset' => 6
                ]);
                if (have_posts()) :
                    while (have_posts()):the_post();
                        ?>
                        <div class="single-category-news">
                            <div class="row m-0 align-items-center">
                                <div class="col-lg-5 col-md-6 p-0">
                                    <div class="category-news-image">
                                        <a href="<?= get_the_permalink() ?>">
                                            <img src="<?= get_the_post_thumbnail_url() ?>"
                                                 alt="<?= get_the_title() ?>">
                                        </a>
                                    </div>
                                </div>

                                <div class="col-lg-7 col-md-6">
                                    <div class="category-news-content">
                                        <span>
                                            <i class="icofont-clock-time"></i> <?= postedTime() ?>
                                        </span>
                                        <h3>
                                            <a href="<?= get_the_permalink() ?>">
                                                <?= get_the_title() ?>
                                            </a>
                                        </h3>
                                        <p>
                                            <?= get_the_excerpt() ?>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php
                    endwhile;endif;
                wp_reset_query();
                ?>

                <div class="pagination-area">
                    <a href="#" class="prev page-numbers"><i class="icofont-double-left"></i></a>
                    <a href="#" class="page-numbers">1</a>
                    <span class="page-numbers current" aria-current="page">2</span>
                    <a href="#" class="page-numbers">3</a>
                    <a href="#" class="page-numbers">4</a>
                    <a href="#" class="next page-numbers"><i class="icofont-double-right"></i></a>
                </div>
            </div>

            <div class="col-lg-4 col-md-12">
                <?php get_template_part('block/sidebar', 'right') ?>
            </div>
        </div>
    </div>
</section>

<?php get_footer(); ?>
