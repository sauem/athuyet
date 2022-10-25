<?php
/**
 * The default template for displaying content
 *
 * Used for both singular and index.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 * @subpackage Twenty_Twenty
 * @since Twenty Twenty 1.0
 */

?>

<section class="news-details-area pb-40">
    <div class="container">

        <ul class="breadcrumb">
            <li><a href="/"><i class="icofont-home"></i> Trang chủ</a></li>
            <li><i class="icofont-rounded-right"></i></li>
            <li><?= get_the_title() ?></li>
        </ul>

        <div class="row">
            <div class="col-lg-8 col-md-12">
                <div class="news-details">
                    <div class="article-content">
                        <ul class="entry-meta">
                            <li><i class="icofont-user"></i> <a href="#">Sinmun</a></li>
                            <li><i class="icofont-eye-alt"></i> 1040</li>
                            <li><i class="icofont-calendar"></i> <?= get_the_date() ?></li>
                        </ul>

                        <h3 class="mb-0">
                            <?= get_the_title() ?>
                        </h3>
                    </div>

                    <div class="article-img">
                        <?php the_post_thumbnail() ?>
                    </div>

                    <div class="article-content">
                        <?php the_content(); ?>
                    </div>
                </div>

                <div class="post-controls-buttons">
                    <div>
                        <?= get_previous_post_link('%link', 'Trước đó', true) ?>
                    </div>

                    <div>
                        <?= get_next_post_link('%link', 'Tiếp theo', true) ?>
                    </div>
                </div>
                <?php
                if ((is_single() || is_page()) && (comments_open() || get_comments_number()) && !post_password_required()) {
                    ?>
                    <?php comments_template(); ?> <?php
                }
                ?>
            </div>

            <div class="col-lg-4 col-md-12">
                <aside class="widget-area" id="secondary">
                    <section class="widget widget_search mb-4">
                        <form class="search-form">
                            <label>
                                <span class="screen-reader-text">Tìm kiếm cho:</span>
                                <input type="search" class="search-field" placeholder="Nhập từ khóa...">
                            </label>
                            <input type="submit" class="search-submit" value="Tìm kiếm">
                        </form>
                    </section>

                    <?php get_template_part('block/sidebar', 'right') ?>
                </aside>
            </div>
        </div>
    </div>
</section>
