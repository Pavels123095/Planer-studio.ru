$(window).on('load', function () {
  var $preloader = $('#p_prldr'),
      $svg_anm   = $preloader.find('.svg_anm');
  $svg_anm.fadeOut();
  $preloader.delay(500).fadeOut('slow');
});
$(document).ready(function ($) {
  $(window).on("load resize", windowSize);

  function windowSize() {
    if ($(window).width() <= "768") {
      $(".planer-btn-next").click(function () {
        var planer_link_portf = $(".planer-link-portfolio.planer-show");
        var pl_link_index = $(".planer-link-portfolio.planer-show").index();
        var pl_portfolio_next = pl_link_index + 1;
        var pl_portfolio_next_block = $(".planer-link-portfolio").eq(
          pl_portfolio_next,
        );
        planer_link_portf.fadeOut();
        planer_link_portf.removeClass("planer-show");

        if (pl_portfolio_next == $(".planer-link-portfolio:last").index() + 1) {
          $(".planer-link-portfolio").eq(0).fadeIn();
          $(".planer-link-portfolio").eq(0).addClass("planer-show");
        } else {
          pl_portfolio_next_block.fadeIn();
          pl_portfolio_next_block.addClass("planer-show");
        }
        $('.planer-link-portfolio').click(function (e) {
            e.preventDefault();
        });

      });


      $(".planer-btn-prev").click(function () {
        var planer_link_portf = $(".planer-link-portfolio.planer-show");
        var pl_link_index = $(".planer-link-portfolio.planer-show").index();
        var pl_portfolio_prev = pl_link_index - 1;
        var pl_portfolio_prev_block = $(".planer-link-portfolio").eq(
          pl_portfolio_prev,
        );

        planer_link_portf.fadeOut();
        planer_link_portf.removeClass("planer-show");

        pl_portfolio_prev_block.fadeIn();
        pl_portfolio_prev_block.addClass("planer-show");
      });
    }
    if ($(window).width() <= "991") {
      $(".planer-slider-wrapper").slick({
        dots: false,
        arrows: true,
        infinite: true,
        speed: 300,
        slidesToShow: 1,
        adaptiveHeight: true,
      });
    }
    if ($(window).width() <= "768") {
      archive_catalog = $('.planer-archive-catalog-content').offset().top;
      if (($(window).scrollTop() <= archive_catalog) || ($(window).scrollTop($(document).height()) >= archive_catalog)) {
          $.scrollify.disable();
          $('.planer-archive-catalog-content').css({'height':'500px'});
      } else if ($(window).scrollTop() > archive_catalog || $(window).scrollTop($(document).height()) <= archive_catalog) {
        $.scrollify.enable();
        $('.planer-archive-catalog-content').css({'height':'auto'});
      } else if ($('.planer-archive-catalog-content').scrollHeight() > $('.planer-archive-catalog-content').height()) {
        $.scrollify.enable();
      }
    }
  }

  // visited_content_top = $('.planer-description-visited-site').offset().top;
  // visited_content_height = $('.planer-description-visited-site').offset().height;
  // if ($('.planer-description-visited-site').scrollTop() <= visited_content_top || $('.planer-description-visited-site').scrollTop() < visited_content_height) {
  //     $.scrollify.disable();
  // } else if ($('.planer-description-visited-site').scrollTop() > visited_content_top || $('.planer-description-visited-site').scrollTop() > visited_content_height) {
  //     $.scrollify.enable();
  // } else if ($('.planer-description-visited-site').scrollHeight() > $('.planer-description-visited-site').height()) {
  //   $.scrollify.enable();
  // }

  function parallaxScroll () {
    var i = 1;
    var scrolled = $('.planer-description-visited-site').scrollTop();
    $('.planer-city').css('bottom', (i+scrolled*.075+'px'));
    $('.planer-city').css({'transform': 'scale('+(i+scrolled*.00025)+')'});
    $('.planer-sky').css({'transform': 'scale('+(i-(scrolled*.00025))+')'});
    $('.planer-grass').css({'transform': 'scale('+(i+scrolled*.00025)+')'});
    $('.planer-airplane').css({'transform': 'scale('+(i+scrolled*.00025)+')'});
    $('.planer-airplane').css('bottom', (i+scrolled*.25+'px'));
    $('.planer-boy').css('right', (i-scrolled*.25));
    $('.planer-boy').css('opacity', (i-scrolled*.0025));
    $('.planer-airplane').css('opacity', (scrolled*.0025));
    $('.planer-airplane').css('right', (i+scrolled*.25+'px'));
  }

  $('.planer-description-visited-site').scroll(function (){
    parallaxScroll();
  });

  $(window).scroll(function () {

    if ($(this).scrollTop() > 0) {
      $("header").addClass("planer-header-fixed-top");
      footer = $('#planer-footer').offset().top;
      if ($(window).width() > "768") {
        if ($(this).scrollTop() >= footer) {
                $('header').removeClass("planer-header-fixed-top");
                $('header').fadeOut();
        } else {
            $('header').fadeIn();
        }
      }
    } else {
      $("header").removeClass("planer-header-fixed-top");
    }
  });

  $.scrollify({
    section: ".planer-layout-section",
    sectionName: false,
    updateHash: false,
    overflowScroll: true,
    standardScrollElements: ".planer-description-visited-site",
  });

//   $('.planer-news-content').mouseover(function () {
//     $.scrollify.disable();
//   });
//   $('.planer-news-content').mouseout(function () {
//     $.scrollify.enable();
//   });


  // $('.planer-case-item').on('mouseover', function () {
  //   $(this).children(".planer-case-description").css({ "display": "block" });
  // });
  // $('.planer-case-item').on("mouseout", function () {
  //   $(this).children(".planer-case-description").css({ "display": "none" });
  // });

  $('.planer-partners-content').slick({
    dots: false,
    arrows: true,
    infinite: true,
    speed: 300,
    slidesToShow: 4,
    adaptiveHeight: true,
    responsive: [
      {
        breakpoint: 1024,
        settings: {
          slidesToShow: 3,
          slidesToScroll: 3,
          infinite: true,
        }
      },
      {
        breakpoint: 600,
        settings: {
          slidesToShow: 1,
          slidesToScroll: 1,
          infinite: true,
        }
      },
      {
        breakpoint: 480,
        settings: {
          slidesToShow: 1,
          slidesToScroll: 1,
          infinite: true,
        }
      }
      // You can unslick at a given breakpoint now by adding:
      // settings: "unslick"
      // instead of a settings object
    ]
  });

  $("#business-card-site").click(function () {
    $(".menu-cat-item").removeClass("active");
    $("#business-card-site").addClass("active");
    $(".planer-slider-wrapper .planer-section-catalog-show-description").hide();
    $("#business-card-site-show").slideToggle();
  });

  $("#catalog-site").click(function () {
    $(".menu-cat-item").removeClass("active");
    $("#catalog-site").addClass("active");
    $(".planer-slider-wrapper .planer-section-catalog-show-description").hide();
    $("#catalog-site-show").slideToggle();
  });

  $("#online-store").click(function () {
    $(".menu-cat-item").removeClass("active");
    $("#online-store").addClass("active");
    $(".planer-section-catalog-show-description").hide();
    $("#online-store-show").slideToggle();
  });

  $("#corporate-website").click(function () {
    $(".menu-cat-item").removeClass("active");
    $("#corporate-website").addClass("active");
    $(".planer-section-catalog-show-description").hide();
    $("#corporate-website-show").slideToggle();
  });

  $("#landing-page").click(function () {
    $(".menu-cat-item").removeClass("active");
    $("#landing-page").addClass("active");
    $(".planer-section-catalog-show-description").hide();
    $("#landing-page-show").slideToggle();
  });

  $("#website-promotion").click(function () {
    $(".menu-cat-item").removeClass("active");
    $("#website-promotion").addClass("active");
    $(".planer-section-catalog-show-description").hide();
    $("#website-promotion-show").slideToggle();
  });

  $(".planer-main-btn").click(function () {
    // $.scrollify.disable();
    $(".planer-header-section").hide();
    $(".planer-modal-open").fadeIn(500);
    $(".planer-modal-open").css({
      display: "block",
      width: "100%",
      height: "100%",
      position: "fixed",
    });
    $("body").css({ "overflow-y": "" });
  });

  $(".btn-planer-buy").click(function () {
    // $.scrollify.disable();
    $(".planer-header-section").hide();
    $(".planer-modal-open").fadeIn(500);
    $(".planer-modal-open").css({
      display: "block",
      width: "100%",
      height: "100%",
      position: "fixed",
    });
    $("body").css({ "overflow-y": "" });
  });

  $(".planer-about-btn").click(function () {
    // $.scrollify.disable();
    $(".planer-header-section").hide();
    $(".planer-modal-open").fadeIn(500);
    $(".planer-modal-open").css({
      display: "block",
      width: "100%",
      height: "100%",
      position: "fixed",
    });
    $("body").css({ "overflow-y": "" });
  });
  
  $(".nav-dropdown").click(function () {
    $(".planer-header-section").hide();
    $(".planer-popup-section").fadeIn(500);
    $(".planer-popup-section").css({
      display: "block",
      width: "100%",
      height: "100%",
      position: "fixed",
    });
    $("body").css({ "overflow-y": "" });
  });

  $(".planer-navbar-popup .menu-item").click(function () {
    $(".planer-popup-section").fadeOut(500);
    $(".planer-header-section").show();
  });
  
  $(".planer-popup-close").click(function () {
    $(".planer-header-section").show();
    $(".planer-popup-section").fadeOut(500);
  });

  $(".planer-modal-close").click(function () {
    $(".planer-header-section").show();
    $(".planer-modal-open").fadeOut(500);
    $(".planer-modal-message").fadeOut(500);
    // $.scrollify.enable();
  });

  $(".planer-btn-cancel").click(function () {
    $(".planer-header-section").show();
    $(".planer-modal-open").fadeOut(500);
    // $.scrollify.enable();
  });

  $("#planer-header-nav").on("click", "a", function (event) {
    var id = $(this).attr("href"),
      top = $(id).offset().top;
    $("body,html").animate({ scrollTop: top }, 1500);
    $("#planer-header-nav li a").removeClass("active");
    $(this).toggleClass("active");
  });
  $(".planer-main-title").on("click", "a", function (event) {
    event.preventDefault();
    var id = $(this).attr("href"),
      top = $(id).offset().top;
    $("body,html").animate({ scrollTop: top }, 1500);
  });

  jQuery(".planer-modal-form").on("submit", function (e) {
    e.preventDefault();
    var client = $('#pl-client').val();
    var client_mail = $('#planer-email-client').val();
    var client_tel = $('#client-tel').val();
    var data = {
      action: "planer_call_me",
      planer_client: client,
      client_email: client_mail,
      client_tel: client_tel
    }
    jQuery.ajax({
      url: common.ajaxurl,
      dataType: "post",
    });

    jQuery.post(common.url, data, function () {
      $(".planer-modal-open").fadeOut(500);
      $(".planer-modal-message").fadeIn(500);
    });
  });



  jQuery(".planer-question-form-footer").on("submit", function (e) {
    e.preventDefault();
    var client = $('#pl-client-quest').val();
    var client_tel = $('#planer-call-client').val();
    var client_comment = $('#planer-comment-client').val();
    var data = {
      action: "planer_call_me",
      client_name: client,
      client_calls: client_tel,
      client_comment: client_comment
    }
    jQuery.ajax({
      url: common.ajaxurl,
      dataType: "post",
    });
    jQuery.post(common.url, data, function () {
      $(".planer-modal-message").fadeIn(500);
      $(".planer-modal-message").css({ display: "block", width: "100%", height: "100%", position: 'fixed' });
      $("body").css({ "overflow-y": "" });
    });
  });
  $(".planer-btn-message").click(function () {
    $(".planer-modal-message").fadeOut(500);
    $(".planer-header-section").show();
    // $.scrollify.enable();
  });

  $('.planer-case-wrapper').slick({
    slidesToShow: 3,
    slidesToScroll: 1,
    arrows: true,
    infinite: true,
    speed: 1000,
    responsive: [
      {
        breakpoint: 1024,
        settings: {
          slidesToShow: 3,
          slidesToScroll: 1,
          infinite: true,
          arrows: true,
          infinite: true,
        }
      },
      {
        breakpoint: 600,
        settings: {
          slidesToShow: 1,
          slidesToScroll: 1
        }
      },
      {
        breakpoint: 480,
        settings: {
          slidesToShow: 1,
          slidesToScroll: 1
        }
      },
    ],
  });

  $('#pl-client').on('keypress', function () {
    var that = this;
    setTimeout(function () {
      var res = /[^а-яА-ЯїЇєЄіІёЁ ]/g.exec(that.value);
      that.value = that.value.replace(res, '');
    }, 0);
  });
});
