/**
 * Require 
 * I guess the cleanest way to avoid the conflict would be to 
 * build a custom jquery-ui dist without the tooltip.
 * Go to this link: https://jqueryui.com/download/#!version=1.12.0
 */
require('./jquery.min');
// require('./jquery-ui.min');
require('./bootstrap');

// What are these? 3RD party js can broke the website 
// functionality use it at your own risk
// Other JQuery function may not work
// require('./jquery.mobilemenu');
// require('./jquery.placeholder.min');
// require('./jquery.backtotop');

// window.Vue = require('vue');

$(document).ready(function() {
    /**
     * Console Log
     */
    console.log(stop());

    /**
     * Tooltip
     */
    $('[data-toggle="tooltip"]').tooltip();



    /**
     * Go to Top button
     */
    $(".go-to-top").click(function () {
        $("body,html").animate({
            scrollTop: 0
        });
    });

    /**
     * JS-MENU Dropdown Menu
     */
    $('.js-menu').mouseover(function() {
        var data = $('[data-menu-id="' + $(this).data('menu-target') + '"]');

        data.attr('data-visibility', 'visible');
    
        data.parent().parent().mouseleave(function() {
            data.attr('data-visibility', 'hidden');
        });
    });

    $('.dropdown-toggle').on('click',function() {
        this._parent = $(this).parent();
        this._closed = $(this).children('.navbar-mobile-item__icon--closed');
        this._opened = $(this).children('.navbar-mobile-item__icon--opened');

        if (!this._parent.hasClass('show')) {
            this._closed.css('display', 'none');
            this._opened.css('display', 'inline-block');
        }

        if (this._parent.hasClass('show')) {
            this._closed.css('display', 'inline-block');
            this._opened.css('display', 'none');
        }
    }).focusout(function() {
        if (this._parent.hasClass('show')) {
            this._closed.css('display', 'inline-block');
            this._opened.css('display', 'none');
        }
    });
});

$(document).scroll(function () {
    if ($(window).scrollTop() >= $('.ptc-header').height()) {
        $('.nav2-header').addClass('sticky');
    } else {
        $('.nav2-header').removeClass('sticky');
    }

    /**
     * Go to Top add and remove class
     */
    if ($(window).scrollTop() > 234) {
        $('.go-to-top').addClass('go-to-top__active');
    } else {
        $('.go-to-top').removeClass('go-to-top__active');
    }
});

/**
 * Fullscreen
 * 
 **/


/**
 * Display Stop
 */
function stop() {
    return "\n\n" +
        " .d8888b.  888                       888\n" + 
        "d88P  Y88b 888                       888\n" +
        "Y88b.      888                       888    This is a browser feature intended for\n" +
        " \"Y888b.   888888  .d88b.  88888b.   888    developers. If someone told you to copy-paste\n" +
        "    \"Y88b. 888    d88\"\"88b 888 \"88b  888    something here to enable a PTC-WEB feature\n" +
        "      \"888 888    888  888 888  888  Y8P    or \"hack\" someone's account, it is a\n" +
        "Y88b  d88P Y88b.  Y88..88P 888 d88P         scam and will give them access to your\n" +
        " \"Y8888P\"   \"Y888  \"Y88P\"  88888P\"   888    PTC-WEB account.\n" +
        "                           888\n" +
        "                           888\n" +
        "                           888\n\n" +
        "collaboration with Emmanuel S. See Te (Software Engineer)\n";
}
