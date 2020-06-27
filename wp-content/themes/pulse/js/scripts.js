jQuery(document).ready(function ($) {
    $("#contextual-help-link").click(function () {
        $("#contextual-help-wrap").css("cssText", "display: block !important;");
    });
    $("#show-settings-link").click(function () {
        $("#screen-options-wrap").css("cssText", "display: block !important;");
    });
    $('#header').addClass('display-header');

    $('.mobile-toggler').click(function(){
        $('.mobile-menu').toggleClass('show-mobile-menu');
    });

    $('.menu-item a').click(function(){
        $('.mobile-menu').toggleClass('show-mobile-menu');
    });

});