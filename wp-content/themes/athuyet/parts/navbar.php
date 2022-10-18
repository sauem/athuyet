<?php

?>
<header class="header-area">
    <div class="top-header">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 col-md-8">
                    <div class="city-temperature">
                        <i class="icofont-ui-weather"></i> <span>28.5<sup>c</sup></span> <b>Dubai</b>
                    </div>
                    <ul class="top-nav">
                        <li><a href="#">Blog</a></li>
                        <li><a href="#">Forums</a></li>
                        <li><a href="#">Contact</a></li>
                        <li><a href="#">Advertisement</a></li>
                    </ul>
                </div>
                <div class="col-lg-6 col-md-4 text-end">
                    <ul class="top-social">
                        <li>
                            <a href="#" target="_blank"><i class="icofont-facebook"></i></a>
                        </li>
                        <li>
                            <a href="#" target="_blank"><i class="icofont-twitter"></i></a>
                        </li>
                        <li>
                            <a href="#" target="_blank"><i class="icofont-instagram"></i></a>
                        </li>
                        <li>
                            <a href="#" target="_blank"><i class="icofont-pinterest"></i></a>
                        </li>
                        <li>
                            <a href="#" target="_blank"><i class="icofont-vimeo"></i></a>
                        </li>
                    </ul>
                    <div class="header-date"><i class="icofont-clock-time"></i>
                        <?php echo getToDay() ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="navbar-area">
        <div class="sinmun-mobile-nav">
            <div class="logo">
                <a href="/">
                    <?= get_custom_logo() ?>
                </a>
            </div>
        </div>
        <div class="sinmun-nav">
            <div class="container">
                <nav class="navbar navbar-expand-md navbar-light">
                    <a class="navbar-brand" href="/">
                        <?= get_custom_logo() ?>
                    </a>
                    <div class="collapse navbar-collapse mean-menu" id="navbarSupportedContent">
                        <?php
                        wp_nav_menu([
                            'container' => '',
                            'menu_class' => '',
                            'menu' => 'main',
                            'items_wrap' => '<ul id="%1$s" class="navbar-nav">%3$s</ul>',
                            'link_class' => 'nav-link',
                            'list_item_class' => 'nav-item'
                        ])
                        ?>
                        <div class="others-options">
                            <div class="header-search d-inline-block">
                                <div class="nav-search">
                                    <div class="nav-search-button"><i class="icofont-ui-search"></i></div>
                                    <form>
                                        <span class="nav-search-close-button" tabindex="0">✕</span>
                                        <div class="nav-search-inner"><input name="search"
                                                                             placeholder="Search here...."/></div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </nav>
            </div>
        </div>
    </div>
    <div class="breaking-news">
        <div class="container">
            <div class="breaking-news-content clearfix">
                <h6 class="breaking-title"><i class="icofont-flash"></i> Nổi bật:</h6>
                <div class="breaking-news-slides owl-carousel owl-theme">
                    <?php
                    query_posts([
                        'posts_per_page' => 6
                    ]);
                    if (have_posts()) : while (have_posts()): the_post();
                        ?>
                        <div class="single-breaking-news">
                            <p><a href="<?= get_the_permalink() ?>"><?= get_the_title() ?></a>
                            </p>
                        </div>
                    <?php
                    endwhile;
                    endif;
                    wp_reset_query();
                    ?>
                </div>
            </div>
        </div>
    </div>
</header>
