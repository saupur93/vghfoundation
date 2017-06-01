const $ = require('jquery');

class MiscUI {

  constructor (){
    this.transitionContentIn();
    if( $('#movewithmouse').length ) {
      this.elementMouseMove();
    }
  }

  elementMouseMove () {
    let movementStrength = 25;
    let height = movementStrength / $(window).height();
    let width = movementStrength / $(window).width();

    $('body').on('mousemove', function(e) {
      let pageX = e.pageX - ($(window).width() / 2);
      let pageY = e.pageY - ($(window).height() / 2);
      let newvalueX = width * pageX * - 1 - 25;
      let newvalueY = height * pageY * - 1 - 50;
      // let movethis = $('#movewithmouse');
      $('#movewithmouse').css("background-position", "calc(0% + " + newvalueX + "px)  calc(50% + " + newvalueY + "px)");
      // console.log($('#movewithmouse').css('background'));
    });
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
        // console.log('scrolling');
        st = $(window).scrollTop();
        contentAreas.each(function (index, elm){

          // console.log('each loop');

          var delay = $(this).attr('data-transition-delay') ? $(this).attr('data-transition-delay') : 0;

          if (st >= $(this).offset().top - ($(window).height() / 1)){
            // console.log('if');
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
