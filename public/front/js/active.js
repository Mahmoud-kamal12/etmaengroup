!(function (e) {
    "use strict";
    jQuery(document).on("ready", function () {
        e(".owl-carousel").owlCarousel({
            items: 1,
            thumbs: !0,
            rtl: true,
            touchDrag: !1,
            mouseDrag: !1,
            smartSpeed: 300,
            thumbsPrerendered: !0,
        }),
            e(".homepage-slides").on("translate.owl.carousel", function () {
                e(
                    ".single-slider-item h1, .single-slider-item .hero-text, .single-slider-item p"
                )
                    .removeClass("animated fadeInUp")
                    .css("opacity", "0"),
                    e(".single-slider-item .center-wrap")
                        .removeClass("animated fadeInDown")
                        .css("opacity", "0");
            }),
            e(".homepage-slides").on("translated.owl.carousel", function () {
                e(
                    ".single-slider-item h1, .single-slider-item .hero-text, .single-slider-item p"
                )
                    .addClass("animated fadeInUp")
                    .css("opacity", "1"),
                    e(".single-slider-item .center-wrap")
                        .addClass("animated fadeInDown")
                        .css("opacity", "1");
            }),
            e(window).on("scroll", function () {
                e(this).scrollTop() > 100  ? e(".navbar-light").addClass("menu-shrink fixed-top")  : e(".navbar-light") ? e(".navbar-light").removeClass("menu-shrink fixed-top") : null;
            }),
            e(".navbar-nav .nav-item a").on("click", function (t) {
                var a = e(this);
                e("html, body")
                    .stop()
                    .animate(
                        { scrollTop: e(a.attr("href")).offset().top - 50 },
                        300
                    ),
                    t.preventDefault();
            }),
            e(document).on("click", ".navbar-collapse.show", function (t) {
                e(t.target).is("a") &&
                    "dropdown-toggle" != e(t.target).attr("class") &&
                    e(this).collapse("hide");
            }),
            e(window).on("scroll", function () {
                e(this).scrollTop() > 100
                    ? e(".scrolltop").fadeIn()
                    : e(".scrolltop").fadeOut();
            }),
            e(".scrolltop").on("click", function () {
                return e("html, body").animate({ scrollTop: 0 }, 300), !1;
            }),
            e(".team-slides").owlCarousel({
                dots: !1,
                autoplay: !0,
                loop: !0,
                margin: 30,
                rtl: true,
                nav: !0,
                smartSpeed: 300,
                autoplayHoverPause: !0,
                navText: [
                    "<i class='fa fa-arrow-left'></i>",
                    "<i class='fa fa-arrow-right'></i>",
                ],
                responsive: {
                    0: { items: 1 },
                    600: { items: 3 },
                    1000: { items: 3 },
                },
            }),
            e(".testimonial-slides").owlCarousel({
                items: 1,
                nav: !0,
                rtl: true,
                dots: !1,
                autoplay: !1,
                loop: !0,
                autoplayHoverPause: !0,
                smartSpeed: 300,
                navText: [
                    "<i class='fa fa-arrow-left'></i>",
                    "<i class='fa fa-arrow-right'></i>",
                ],
            }),
            e(".partners-slides").owlCarousel({
                dots: !1,
                autoplay: !0,
                loop: !0,
                margin: 100,
                rtl: true,
                smartSpeed: 300,
                nav: !0,
                navText: [
                    "<i class='fa fa-arrow-left'></i>",
                    "<i class='fa fa-arrow-right'></i>",
                ],
                responsive: {
                    0: { items: 1 },
                    600: { items: 3 },
                    1000: { items: 5 },
                },
            }),
            e(".popup-youtube, .popup-vimeo, .popup-gmaps").magnificPopup({
                type: "iframe",
                mainClass: "mfp-fade",
                removalDelay: 160,
                preloader: !1,
                fixedContentPos: !1,
            }),
            new WOW().init(),
            e(".simplefilter li").on("click", function () {
                e(".simplefilter li").removeClass("active"),
                    e(this).addClass("active");
            }),
            e(".counter").counterUp({ delay: 10, time: 2e3 }),
            (window.sr = ScrollReveal({ reset: !0 }));
        sr.reveal(".section-title", {
            origin: "top",
            distance: "24px",
            duration: 300,
            scale: 1.05,
        }),
            sr.reveal(".cta-info", {
                origin: "left",
                distance: "24px",
                duration: 300,
                scale: 1.05,
            }),
            sr.reveal(".cta-img", {
                origin: "right",
                distance: "24px",
                duration: 300,
                scale: 1.05,
            }),
            jQuery(function () {
                jQuery("body").on(
                    "keydown",
                    "#contact_name, #contact_email, #contact_subject, #contact_phone, #contact_message",
                    function (e) {
                        if (
                            (console.log(this.value),
                            32 === e.which && 0 === e.target.selectionStart)
                        )
                            return !1;
                    }
                );
            }),
            e("#contatc_form").on("submit", function (t) {
                t.preventDefault();
                var a = e("#contact_name").val(),
                    s = e("#contact_email").val(),
                    o = e("#contact_subject").val(),
                    n =
                        ((o = e("#contact_phone").val()),
                        e("#contact_message").val());
                if (
                    "" == a ||
                    "" == s ||
                    "" == n ||
                    "" == a ||
                    "" == n ||
                    "" == o
                )
                    jQuery("#contact_send_status").removeClass("message_send"),
                        jQuery("#contact_send_status").addClass(
                            "message_notsend"
                        ),
                        jQuery("#contact_send_status").text(
                            "Please fill all fields with correct data."
                        );
                else {
                    var i = e("#contatc_form").serialize();
                    e.ajax({
                        type: "POST",
                        url: e("#contatc_form").attr("action"),
                        data: i,
                        success: function (e) {
                            jQuery('form[name="myform"]')[0].reset();
                        },
                    })
                        .done(function (t) {
                            e("#contact_send_status").removeClass(
                                "message_notsend"
                            ),
                                e("#contact_send_status").addClass(
                                    "message_send"
                                ),
                                e("#contact_send_status").html(
                                    "<div class='alert alert-success' role='alert'>Your email successfully Sent! Thank you.</div>"
                                ),
                                e("#contact_send_status").fadeOut(3e3);
                        })
                        .fail(function (e) {
                            jQuery("#contact_send_status").removeClass(
                                "message_send"
                            ),
                                jQuery("#contact_send_status").addClass(
                                    "message_notsend"
                                ),
                                jQuery("#contact_send_status").html(
                                    "<div class='alert alert-danger' role='alert'>Something wrong please try again!</div>"
                                );
                        });
                }
            }),
            e(".roxy-projects-active li").click(function () {
                e(".roxy-projects-active li").removeClass("active"),
                    e(this).addClass("active");
                var t = e(this).attr("data-filter");
                e("#Portfolio").isotope({ filter: t });
            }),
            e(function () {
                e(".tabs .tabs-button .tabs-filter-button").click(function () {
                    e(
                        ".tabs .tabs-button .tabs-filter-button, .tabs .tab-content .content "
                    ).removeClass("active"),
                        e(this).addClass("active");
                    var t = e(this).index() + 1;
                    e(
                        ".tabs .tab-content .content:nth-child(" + t + ")"
                    ).addClass("active");
                });
            });
    }),
        jQuery(window).on("load", function () {
            jQuery(".site-preloader-wrap").fadeOut(500),
                jQuery("#Portfolio").isotope();
        });

    // $(".nav-item").click(function () {
    //     $(".nav-item").children().removeClass("active");
    //     $(this).addClass("active").siblings().removeClass("active");
    // });
})(jQuery);
