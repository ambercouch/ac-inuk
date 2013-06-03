
jQuery(function () {
// Slideshow 4
      jQuery("#slider4").responsiveSlides({
        auto: false,
        pager: false,
        nav: true,
        speed: 500,
        prevText: "<",
        nextText:">",
        namespace: "callbacks",
        before: function () {
         
        },
        after: function () {
          
        }
      });

});

jQuery(document).scroll(function(){
    
    var el = jQuery('#site-navigation'),
        header_height = jQuery('#masthead').outerHeight(),
        top = jQuery('#masthead').offset().top - jQuery(document).scrollTop(),
        header_pos = (top + header_height);
       
        if (header_pos < -12 ){
            console.log('fix');
        jQuery(el).addClass('fix-it');
    }
    if (header_pos > -12 ){
        console.log('release');
        jQuery(el).removeClass('fix-it');
    }  
});

var slide_height
var main_top

jQuery(window).load(function(){
    slide_height = jQuery('.callbacks_container').height();
    main_top = slide_height;    
    jQuery('#main').css('top', main_top);
});

jQuery(window).resize(function(){
    slide_height = jQuery('.callbacks_container').height();
    main_top = slide_height;    
    jQuery('#main').css('top', main_top);
});

