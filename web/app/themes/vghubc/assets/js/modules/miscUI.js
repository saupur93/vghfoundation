const $ = require('jquery');

class MiscUI {

  constructor (){
    this.transitionContentIn();
  }

  transitionContentIn () {
    if ($(['data-transition']).length){

      var st = 0;
      var contentAreas = $('[data-transition]');

      if ($('.onload-animate').length){
        setTimeout(function () {
          $('.onload-animate').addClass('animated');
        }, 200);
      }

      $(window).on('scroll', function (e){
        st = $(window).scrollTop();
        contentAreas.each(function (index, elm){

          var delay = $(this).attr('data-transition-delay') ? $(this).attr('data-transition-delay') : 0;

          if (st >= $(this).offset().top - ($(window).height() / 1)){
            var self = this;
            setTimeout(function() {
              $(self).addClass('animated');
            }, delay);
          };

        });

      });
    }

  }

}

module.exports = MiscUI;
