$(document).ready(function() {


	// * * * * * * * * * * * * * * * * * * * * * * * * *
	// * Name
	// *
	// *



    // * * * * * * * * * * * * * * * * * * * * * * * * *
    // * parent clickable elements (excludes links inside)
    // *
    // * @set outer parent element class: js-click-item-parent
    // * @set link (<a> tag) element class: js-click-item-link
    // *
    // * This makes the whole element clickable and still
    // * makes other links inside clickable with their target
    // *
    $(".js-click-item-parent").delegate('a', 'click', function(e){
        window.location = $(this).attr("href");
        return false;
    }).click(function(){
        window.location = $(this).find("a.js-click-item-link").attr("href");
        return false;
    });​




    // * * * * * * * * * * * * * * * * * * * * * * * * *
    // * Scroll-To
    // *
    // * Smooth-Scroll to targets on page
    // *
    $('a[href*="#"]:not([href="#"])').click(function() {
        if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
            var target = $(this.hash);
            target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
            if (target.length) {
                scrollTo(target);
            return false;
            }
        }
    });

    function scrollTo(element) {
        $('html, body').animate({
            scrollTop: element.offset().top - 100
        }, 1000);
    }

    // * * * * * * * * * * * * * * * * * * * * * * * * *
    // *  Header toggle
    // *
    // *

    $(".header__button").click(function(){
        $(".header__navItem").toggleClass("active");
        $(".header__button").toggleClass("active");
    });

    // * * * * * * * * * * * * * * * * * * * * * * * * *
    // * background to header, change color
    // *
    //
    var $header = $(".js-header"),
        headerState = sessionStorage.headerState;

    if($header.length){
        $(window).scroll(function() {
            if ($(this).scrollTop() >= $(".hero").outerHeight() && $header.hasClass("header__toggle")){
                $header.removeClass("header__toggle");
            }
            if ($(this).scrollTop() <= $(".hero").outerHeight()){
                $header.addClass("header__toggle");
            }
        });
    }

    // * * * * * * * * * * * * * * * * * * * * * * * * *
    // * accordion
    // *
    // *
    $(".js-accordion-button").click(function(){
        $(this).parents(".js-accordion-parent").toggleClass("active").find(".js-accordion-content").slideToggle();
        $(this).parents(".js-accordion-parent").siblings().removeClass("active").find(".js-accordion-content").slideUp();
    });


    // * * * * * * * * * * * * * * * * * * * * * * * * *
    // * ie11 Fix SVG + opbject fit
    // *
    // *
    svg4everybody();
    objectFitImages();





});
