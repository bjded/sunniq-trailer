console.log('SunniQ Trailer Rental');

// Trailers Slider
$('#trailers .gallery').slick({
    autoplay: true,
    adaptiveHeight: true,
    cssEase: 'ease-in-out',
    dots: false,
    fade: true,
    arrows: true,
    infinite: true,
    lazyLoad: 'ondemand',
    speed: 800,
    autoplaySpeed: 5000,
    slidesToScroll: 1,
    slidesToShow: 1,
});

// Review Slider
$('.carousel').slick({
    autoplay: true,
    cssEase: 'ease-in-out',
    dots: true,
    arrows: false,
    infinite: true,
    speed: 800,
    autoplaySpeed: 5000,
    slidesToShow: 1,
    adaptiveHeight: true
});

// Document Ready
$(document).ready(function(){
    // Back to Top
    $(window).scroll(function() {
        if ($(window).scrollTop() > 0) {
            if (!$("#back-to-top").hasClass("visible")) {
                $("#back-to-top").addClass("visible");
                $("#back-to-top").animate({bottom: "0px"});
            }
        } else {
            $("#back-to-top").removeClass("visible");
            $("#back-to-top").animate({bottom: "-45px"});
        }
    });

    // Mobile Menu Toggle
    $("#mobile-menu").on('click', function() {
        if (!$("#mobile-nav").hasClass("visible")) {
            $("#mobile-nav").addClass("visible");
            $("#mobile-nav").css("visibility", "visible");
            $("#mobile-menu").html("close");
        } else {
            //$("#mobile-nav").animate({opacity: "0"}, 400);
            $("#mobile-nav").css("visibility", "hidden");
            $("#mobile-nav").removeClass("visible");
            $("#mobile-menu").html("menu");
        }
    });

    // Mobile Nav Pressed
    $("#mobile-nav a").on('click', function() {
        if ($("#mobile-nav").hasClass("visible")) {
            $("#mobile-nav").css("visibility", "hidden");
            $("#mobile-nav").removeClass("visible");
            $("#mobile-menu").html("menu");
        }
    });

    // Smooth Scrolling
    $(".smooth").on('click', function(event) {
      if (this.hash !== "") {
        event.preventDefault();
        $('html, body').animate({
            scrollTop: $(this.hash).offset().top
        }, 800);
      }
    });

    // Trailer Select
    $(".trailer-select").on('click', function() {
        let trailer = $(this).data("trailer");
        $("#trailers option[value='" + trailer + "']").prop("selected", true);
    });
});
