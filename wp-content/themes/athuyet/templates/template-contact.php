<?php
/**
 * Template Name: Contact template
 * Template Post Type: post, page
 *
 * @package WordPress
 * @subpackage Twenty_Twenty
 * @since Twenty Twenty 1.0
 */
get_header();
?>
    <style>
        .contact-info ul li{
            display: flex;
        }
        .contact-info ul li i{
            width: 20px;
        }
    </style>
    <section class="contact-area pb-40">
        <div class="container">
            <ul class="breadcrumb">
                <li><a href="#"><i class="icofont-home"></i> Trang chủ</a></li>
                <li><i class="icofont-rounded-right"></i></li>
                <li>Liên hệ</li>
            </ul>

            <div class="row">
                <div class="col-lg-7 col-md-12">
                    <div class="contact-form">
                        <h3>Liên hệ</h3>
                        <?php echo do_shortcode('[contact-form-7 id="50" title="Contact"]') ?>
                    </div>
                </div>

                <div class="col-lg-4 col-md-12">
                    <div class="contact-info">
                        <h3>Thông tin liên hệ</h3>
                        <p><?php bloginfo('description') ?></p>
                        <ul>
                            <li>
                                <i class="icofont-google-map"></i>
                                <?= get_post_meta(get_the_ID(), 'address1', true) ?>
                            </li>
                            <li>
                                <i class="icofont-google-map"></i>
                                <?= get_post_meta(get_the_ID(), 'address2', true) ?>
                            </li>
                            <li>
                                <i class="icofont-phone"></i>
                                <a href="tel:<?= get_post_meta(get_the_ID(), 'hotline1', true) ?>">
                                    <?= get_post_meta(get_the_ID(), 'hotline1', true) ?>
                                </a>
                            </li>
                            <li>
                                <i class="icofont-phone"></i>
                                <a href="tel:<?= get_post_meta(get_the_ID(), 'hotline2', true) ?>">
                                    <?= get_post_meta(get_the_ID(), 'hotline2', true) ?>
                                </a>
                            </li>
                            <li>
                                <i class="icofont-envelope"></i>
                                <a href="#">
                                    <span class="__cf_email__">
                                         <?= get_post_meta(get_the_ID(), 'email', true) ?>
                                    </span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
<?php
get_footer();
