<div class="go-top"><i class="icofont-swoosh-up"></i></div>
<footer class="footer-area">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-6">
                <div class="single-footer-widget">
                    <h3 class="text-uppercase"><?php bloginfo(); ?></h3>
                    <div class="contact-info">
                        <p><?php bloginfo('description'); ?></p>
                        <ul>
                            <li>
                                <i class="icofont-google-map"></i>
                                <?= get_post_meta(47, 'address1', true) ?>
                            </li>
                            <li>
                                <i class="icofont-google-map"></i>
                                <?= get_post_meta(47, 'address2', true) ?>
                            </li>
                            <li>
                                <i class="icofont-phone"></i>
                                <a href="tel:<?= get_post_meta(47, 'hotline1', true) ?>">
                                    <?= get_post_meta(47, 'hotline1', true) ?>
                                </a> |
                                <a href="tel:<?= get_post_meta(47, 'hotline2', true) ?>">
                                    <?= get_post_meta(47, 'hotline2', true) ?>
                                </a>
                            </li>

                            <li>
                                <i class="icofont-envelope"></i>
                                <a href="mailto:<?= get_post_meta(47, 'email', true) ?>">
                                    <span class="__cf_email__">
                                      <?= get_post_meta(47, 'hotline2', true) ?>
                                    </span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 offset-lg-0 offset-md-3">
                <div class="single-footer-widget">
                    <h3>DỊCH VỤ BÁN HÀNG</h3>
                    <div class="contact-info">
                        <ul class="p-0">
                            <li class="mb-1 p-0">
                                <a href="#">Chính sách bảo hành</a>
                            </li>
                            <li class="mb-1 p-0">
                                <a href="#">Chính sách bảo mật thông tin</a>
                            </li>
                            <li class="mb-1 p-0">
                                <a href="#">Chính sách giải quyết khiếu nại</a>
                            </li>
                            <li class="mb-1 p-0">
                                <a href="#">Hướng dẫn mua hàng</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="single-footer-widget">
                    <h3>VỀ CHÚNG TÔI</h3>
                    <div class="contact-info">
                        <ul class="p-0">
                            <li class="mb-1 p-0">
                                <a href="#">Giới thiệu về chúng tôi</a>
                            </li>
                            <li class="mb-1 p-0">
                                <a href="#">Liên hệ</a>
                            </li>
                            <li class="mb-1 p-0">
                                <a href="#">Tin tức</a>
                            </li>
                        </ul>
                    </div>
                    <div class="connect-social">
                        <p>Kết nối với chúng tôi:</p>
                        <ul>
                            <li>
                                <a href="<?= setting('facebook') ?>"
                                   target="_blank">
                                    <i class="icofont-facebook"></i>
                                </a>
                            </li>
                            <li>
                                <a href="<?= setting('twitter') ?>" target="_blank"><i class="icofont-twitter"></i></a>
                            </li>
                            <li>
                                <a href="<?= setting('linkedin') ?>" target="_blank"><i
                                            class="icofont-linkedin"></i></a>
                            </li>
                            <li>
                                <a href="<?= setting('instagram') ?>" target="_blank"><i class="icofont-instagram"></i></a>
                            </li>
                            <li>
                                <a href="<?= setting('youtube') ?>" target="_blank"><i class="icofont-youtube"></i></a>
                            </li>
                        </ul>
                    </div>

                </div>
            </div>

        </div>
    </div>
    <div class="copyright-area">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 col-md-12">
                    <p>© Sinmun is Proudly Owned by <a href="https://envytheme.com/" target="_blank">EnvyTheme</a></p>
                </div>
                <div class="col-lg-6 col-md-12">
                    <ul class="footer-nav">
                        <li><a href="#">Home</a></li>
                        <li><a href="#">Blog</a></li>
                        <li><a href="#">Forums</a></li>
                        <li><a href="#">Contact</a></li>
                        <li><a href="#">Advertisement</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</footer>

<script src="https://cdnjs.cloudflare.com/ajax/libs/vue/3.2.41/vue.runtime.global.prod.min.js"
        integrity="sha512-q8shMlvl/Tm4iJz2XCaKSn/mRkBeOlTfTZ4SGehABN3tEXaasAn8Ez0c4e4nxAyRPk8Jcc1U40zFjKsOmGPamg=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/vuex/4.1.0/vuex.global.prod.min.js"
        integrity="sha512-92cbSDxR33ukAk6UuekriSTT5z+rW1o7ak6nyzRm/7MBWGUFtqY4MV5buCd/p397sMLseKD8bHWFHTASWsdo3A=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<!---->
<!--<script src="https://cdnjs.cloudflare.com/ajax/libs/vue/3.2.41/vue.global.prod.min.js"-->
<!--        integrity="sha512-0bHFSq8ASKChkYlLEzEnqpH3H/RSqL7UvhhOmSPz5JxozXuMge8JtNuv/0cgZRv2ZUR0GO9rdo576xUbKcrNIg=="-->
<!--        crossorigin="anonymous" referrerpolicy="no-referrer"></script>-->
<!--<script src="https://cdnjs.cloudflare.com/ajax/libs/vuex/4.1.0/vuex.global.prod.min.js"-->
<!--        integrity="sha512-92cbSDxR33ukAk6UuekriSTT5z+rW1o7ak6nyzRm/7MBWGUFtqY4MV5buCd/p397sMLseKD8bHWFHTASWsdo3A=="-->
<!--        crossorigin="anonymous" referrerpolicy="no-referrer"></script>-->
<script src="<?= ASSET ?>/js/jquery.min.js"></script>
<script src="<?= ASSET ?>/js/bootstrap.bundle.min.js"></script>
<script src="<?= ASSET ?>/js/jquery.meanmenu.js"></script>
<script src="<?= ASSET ?>/js/mixitup.min.js"></script>
<script src="<?= ASSET ?>/js/owl.carousel.min.js"></script>
<script src="<?= ASSET ?>/js/jquery.magnific-popup.min.js"></script>
<script src="<?= ASSET ?>/js/form-validator.min.js"></script>
<script src="<?= ASSET ?>/js/contact-form-script.js"></script>
<script src="<?= ASSET ?>/js/jquery.ajaxchimp.min.js"></script>
<script src="<?= ASSET ?>/js/main.js?v=<?= time() ?>"></script>
