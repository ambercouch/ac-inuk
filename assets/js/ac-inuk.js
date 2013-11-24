ACINUK = {
    common : {
        init : function(){
            console.log('common');
            
            jQuery('body').addClass('js');
              var $menu = jQuery('.menu-main-container'),
                  $menulink = jQuery('.site-navigation__menu-link'),
                  $container = jQuery('#nav-main'),
                  container_height =  $container.height();
          
                  if($container.css('position') == 'absolute'){
                      
                       
                     
                       jQuery('body').css('margin-top', container_height);
                      
                       
                  }

              $menulink.click(function() {
              
              
              $menulink.toggleClass('active');
              $menu.toggleClass('active');
              var height = jQuery('.menu-main-container.active').height();
              console.log(height);
              return false;
             });
            
        }
    },
    page : {
        init : function(){
            console.log('all pages');
        }
    },
    post : {
        init : function(){
            console.log('all posts');
        }
    }
};
UTIL = {
    exec: function(template, handle){
       var ns = ACINUK,
           handle = (handle === undefined )? "init" : handle;
   
   if(template !== '' && ns[template] && typeof ns[template][handle] === 'function'){
       ns[template][handle] ();
   }
    },
    init: function(){
        var body = document.body,
            template = body.getAttribute('data-post-type'),
            handle = body.getAttribute('data-post-slug');
    
     UTIL.exec('common');
     UTIL.exec(template);
     UTIL.exec(template, handle);
    }
};
jQuery(window).load(UTIL.init);





