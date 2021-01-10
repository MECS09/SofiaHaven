 // makes sure the whole site is loaded
 jQuery(window).load(function () {
    "use strict";
        // will first fade out the loading animation
    if(  jQuery( '.et-bfb' ).length <= 0 && jQuery( '.et-fb' ).length <= 0  ){ 
        jQuery(".status").fadeOut();
        // will fade out the whole DIV that covers the website.
        jQuery(".preloader").delay(1000).fadeOut("slow");
        }else{
        jQuery(".preloader").css('display','none');
    }
}); 
