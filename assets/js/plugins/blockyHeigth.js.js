/* 
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

jQuery.fn.extend({
  blockyHeight: function() {
    this.each(function() {
     var cssObj = {
    'transition' : 'all 0s',
    '-webkit-transition' : 'all 0s',
    'opacity' : 0,
    'visibility' : 'hidden',
    'max-height': 'none',
    'height' : 'auto',
    'display' : 'block'
    };
    
    var ac_height = this.css(cssObj).height();
    this.removeAttr('style');

    });
    return ac_height;
  }
});


