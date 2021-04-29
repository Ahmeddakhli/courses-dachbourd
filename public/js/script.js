/*global $,owl,Placeholdem,WOW,smoothScroll,wrap_pop,niceScroll,alert*/
$(document).ready(function () {
    "use strict";

    // For active wow.js
    new WOW().init();

    // Trigger placeholdem.js
/*
    Placeholdem(document.querySelectorAll('[placeholder]'));
*/

    // Scroll Top
    $(window).scroll(function () {
        if ($(this).scrollTop() > 500) {
            $(".toTop").css("right", "20px");
        } else {
            $(".toTop").css("right", "-60px");
        }
    });

    $(".toTop").click(function () {
        $("html,body").animate({
            scrollTop: 0
        }, 500);
        return false;
    });

    //customize the header
    $(window).scroll(function () {
        if ($(this).scrollTop() > 387) {
            $('.navigation-menu').addClass('sticky');
        } else {
            $('.navigation-menu').removeClass('sticky');
        }
    });

    // for loading screen
    $(window).load(function () {
        $("body").css('overflow-y', 'auto');
        $('.wrap').slideUp(1000);
    });

    //for show advanced search
    $('.show-advanced').on("click", function () {
        $('.form-advanced').stop();
        $('.form-advanced').slideToggle(200);
    });


    //for Login area
    $('.show-login').on("click", function () {
        $('.login-area,.signup-area').stop();
        $('.login-area,.signup-area').slideToggle(400);

    });

    $('#ko').click(function () {
        if ($('.price-free').prop("checked") === true) {
            $('.price-from,.price-to').prop('disabled', true).css("background", "#c4c4c4");
        } else if ($('.price-free').prop("checked") === false) {
            $('.price-from,.price-to').removeAttr('disabled');
        }
    });


    //for categories area
    $('.show-cat').on("click", function () {
        $('.hidden-cat').stop();
        $('.hidden-cat').slideToggle(400);
    });

    //for user-search
    $('.show-user_search').on("click", function () {
        $('.user-search').stop();
        $('.user-search').slideToggle(400);
    });

    //for show-cv
    $('.show-cv').on("click", function () {
        $('.cv-container').stop();
        $('.cv-container').slideToggle(400);
    });

    //for Add certificate
    $('.add-cert').on("click", function () {
        $('.course-cert').stop();
        $('.course-cert').slideToggle(400);
    });

    //for Add Lecture
    $('.add-course').on("click", function () {
        $('.add_lecture').stop();
        $('.add_lecture').slideToggle(400);
    });

    //for Add Lecture
    $('.add-interest a').on("click", function () {
        $('.interest-cont').stop();
        $('.interest-cont').slideToggle(400);
    });

    //for user-edit
    $('#show-edit').on("click", function () {
        $('.Edit').stop();
        $('.Edit').slideToggle(400);
        if ($('#show-edit h5').hasClass('fa-spin')) {
            $('#show-edit h5').removeClass('fa-spin');
        } else {
            $('#show-edit h5').addClass('fa-spin');
        }
    });

    // show edit user
    var panel = $('.left_tap-box'),
        panel1 = $('.right_tap-box');
    $('.toggle-slidenav').click(function (event) {
        if (panel.hasClass('col-md-12')) {
            panel1.animate({
                right: "0px"
            }, 100, function () {
                panel.removeClass('col-md-12').addClass('col-md-9');
                $('.toggle-slidenav i').removeClass('fa-bars').addClass('fa-close');
                $('.card').removeClass('col-md-4').addClass('col-md-6');

            });
        } else {
            panel1.animate({
                right: "-329px"
            }, 100, function () {
                panel.addClass('col-md-12').removeClass('col-md-9');
                $('.toggle-slidenav i').removeClass('fa-close').addClass('fa-bars');
                $('.card').removeClass('col-md-6').addClass('col-md-4');
            });
        }
        event.stopPropagation();

    });

    // customer-slider
    $(".cust-slider").owlCarousel({
        navigation: false,
        slideSpeed: 500,
        singleItem: true,
        responsive: true,
        autoPlay: true,
        mouseDrag: true,
        pagination: true
    });

    // testominal-slider
    $(".testo-slider").owlCarousel({
        navigation: false,
        slideSpeed: 500,
        singleItem: true,
        responsive: true,
        autoPlay: false,
        mouseDrag: true,
        pagination: true
    });

    //for tooltip
    $('[data-toggle="tooltip"]').tooltip();


    // Message for all
    $(".sent-all").click(function () {
        $(".panel-pop").animate({
            "top": "-100%"
        }, 10).hide();
        $("#msg-all").show().animate({
            "top": "10%"
        }, 500);
        $("body").prepend("<div class='big-overlay'></div>");
        wrap_pop();
        return false;
    });


    //Add alert to all students
    $(".add-alert-form").click(function () {
        $(".panel-pop").animate({
            "top": "-100%"
        }, 10).hide();
        $("#alert-all").show().animate({
            "top": "10%"
        }, 500);
        $("body").prepend("<div class='big-overlay'></div>");
        wrap_pop();
        return false;
    });

    $(".know-teacher").click(function () {
        $(".panel-pop").animate({
            "top": "-100%"
        }, 10).hide();
        $("#instructor").show().animate({
            "top": "10%"
        }, 500);
        $("body").prepend("<div class='big-overlay'></div>");
        wrap_pop();
        return false;
    });

    $(".show-privacy").click(function () {
        $(".panel-pop").animate({
            "top": "-100%"
        }, 10).hide();
        $("#teacher-modal").show().animate({
            "top": "10%"
        }, 500);
        $("body").prepend("<div class='big-overlay'></div>");
        wrap_pop();
        return false;
    });

    $(".show-credit").click(function () {
        $(".panel-pop").animate({
            "top": "-100%"
        }, 10).hide();
        $("#payment").show().animate({
            "top": "10%"
        }, 500);
        $("body").prepend("<div class='big-overlay'></div>");
        wrap_pop();
        return false;
    });

    $(".forget").click(function () {
        $(".panel-pop").animate({
            "top": "-100%"
        }, 10).hide();
        $("#forget").show().animate({
            "top": "10%"
        }, 500);
        $("body").prepend("<div class='big-overlay'></div>");
        wrap_pop();
        return false;
    });

    function wrap_pop() {
        $(".big-overlay").click(function () {
            $(".panel-pop").animate({
                "top": "-100%"
            }, 500).hide(function () {
                $(this).animate({
                    "top": "-100%"
                }, 500);
            });
            $(this).remove();
        });
    }

    // Hide Allert
    //$('.error-detect').delay(5000).slideUp(500);


    // show Textinput to edit user setting
    // $('.edit-personal').on("click", function () {
    //     var span_data = $('.home_data-item span');
    //     span_data.fadeOut();
    //     $('.all-set input,.home_data-item select').fadeIn();
    //     // $('.all-pass input').fadeOut();
    //     $('.left-caption').css("opacity", "1");
    //     $('.imgcontent').css("display", "block");
    //     $('.confirm-set').fadeIn();
    //     $('.cancel-personal').css("display", "block");
    //     $(this).css("display", "none");
    // });
    $('.edit-password').on("click", function () {
        var span_data = $('.home_data-item span');
        span_data.fadeOut();
        // $('.all-set input,.home_data-item select').fadeIn();
        $('.all-pass input').fadeIn();
        //$('.left-caption').css("opacity", "1");
        //$('.imgcontent').css("display", "block");
        $('.confirm-set-password').fadeIn();
        $('.cancel-password').css("display", "block");
        $(this).css("display", "none");
    });
    //
    // // show Textinput to edit user setting
    // $('.cancel-personal').on("click", function () {
    //     var span_data = $('.home-content .home_data-item span');
    //     span_data.fadeIn();
    //     $('.all-set input,.all-pass input,.home_data-item select').fadeOut();
    //     $('.left-caption').css("opacity", "0");
    //     $('.imgcontent').css("display", "none");
    //     $('.confirm-set').fadeOut();
    //     $(this).css("display", "none");
    //     $('.edit-personal').css("display", "block");
    // });

    // For Nicescrool library
    $(".st-menu ul").niceScroll({
        cursorcolor: '#6a6a6a',
        cursorborderradius: '0px',
        autohidemode: false,
        cursorborder: '0bx',
        scrollspeed: 80
    });

    $('#up-video').click(function () {
        if ($(this).prop("checked") === true) {
            $('.videoUploaded').stop();
            $('.videoUploaded').slideDown();
            $('.linked').fadeOut();
        } else if ($(this).prop("checked") === false) {
            $('.videoUploaded').stop();
            $('.videoUploaded').slideUp();
            $('.linked').fadeIn();
        }
    });
    
    $('#up-video2').click(function () {
        if ($(this).prop("checked") === true) {
            $('.videoUploaded2').stop();
            $('.videoUploaded2').slideDown();
            $('.linked2').fadeOut();
        } else if ($(this).prop("checked") === false) {
            $('.videoUploaded2').stop();
            $('.videoUploaded2').slideUp();
            $('.linked2').fadeIn();
        }
    });

    //activate tooltip on tabs item
    $('[data-toggle="tab"]').tooltip({
        trigger: 'hover',
        placement: 'top',
        animate: true,
        delay: 50,
        container: 'body'
    });


    //hide left slide nav
    $('.close-nav').on('click', function () {
        $('.st-container').removeClass('st-menu-open');
    });


    // For transforming via url to tabs items
    var hash = window.location.hash.split('#')[1];
    $('.nav-tabs li a[href="#' + hash + '"]').tab('show');

    $('.add-fav').on('click', function () {
        $(this).css('background', '#fff');
        $('.add-fav i').css({
            color: '#EA210C',
            transform: 'scale(1.4)',
            opacity: '1'
        });
    });

    $('.add-fav-dis').on('click', function () {
        $(this).css('background', '#EA210C');
        $('.add-fav-dis i').css({
            color: '#fff',
            transform: 'scale(1)',
            opacity: '1'
        });
    });

});
