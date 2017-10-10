import $ from 'jquery';

/**
 * Annual Report
 */
let inTransition = false;
window.section2interval;

export default class AnnualReport {
  constructor() {
    this.scrollJackPanels().init();
    this.overlayContent();

    $('.keep-going').addClass('start');
    setTimeout(() => {
      $('.ar-intro-cover').addClass('start');
    }, 1700);

    setTimeout(() => {
      $('.ar-intro-cover .hide').removeClass('hide');
      $('.ar-intro-cover .second').css('opacity', 1);
    }, 2800);
	}


  scrollJackPanels(){
      return {
        elements: {
          container: document.getElementById('annual-report'),
          pages: document.querySelectorAll('.full-panel')
        },

        init: function(){
          this.events();
        },


        getViewPortTop: function(el){
          var fromTop = el.getBoundingClientRect().bottom - el.getBoundingClientRect().height;
          return fromTop;
        },


        events: function(){
          var self = this;

          // Cross browser call to monitor the scroll
          if (window.addEventListener) {
            // all browsers except IE before version 9

            // Internet Explorer, Opera, Google Chrome and Safari
            window.addEventListener ("mousewheel", function(e){
              self.scrollEvent(e);
            } , false);

            // Firefox
            window.addEventListener ("DOMMouseScroll", function(e){
              self.scrollEvent(e);

            } , false);

          }
          else {
            // IE before version 9

            window.attachEvent ("onmousewheel", function(e){
              self.scrollEvent(e);
            });

          }
        },


        scrollEvent: function(e){
          var self = this;

          var scrollDistance = -e.detail || e.wheelDelta; // normalize scroll distance between browsers
          var delta = ( e.detail ) ? 10 : 100; // e.detail is much lower than e.wheelDelta
          var panelsEl = self.elements.container;

          // Control the panels
          if ( $('body').hasClass('page-template-page-annual-report-php') && $(window).width() > 768) {
              if(!inTransition){
                if (scrollDistance > 0) {
                  // scrolling up
                  if(scrollDistance > delta){
                    inTransition = true;
                    self.waitForTransition();
                    self.transition('up');
                    // quick way to get the element in the right spot on the way up
                    if (panelsEl.getBoundingClientRect().top > 0 ) {
                      window.scroll(0, window.innerHeight - delta );
                    }
                  }
                } else {
                  // scrolling down
                  if(scrollDistance < -delta){
                    inTransition = true;
                    self.waitForTransition();
                    self.transition('down');
                  }
                }
             }
          }
        },



        // Function: transitionDuration()
        // Calculates how long the slide transition is from the css prop
        // --------------------------
        transitionDuration: function (){
          var self = this;
          var duration = 0;

          if( typeof window.getComputedStyle === 'function' ){
            var containerStyles = window.getComputedStyle(self.elements.container, null);
            var computedDuration = containerStyles['transition-duration'] || containerStyles['MozTransitionDuration'];
          }

          if( computedDuration !== undefined ){
            duration = computedDuration.replace('s', '').split(',')[0];
          }
          return duration * 1000;
        },


        // Function: waitForTransition()
        // waits for a transition to finish then unblocks the scrollEvent functionality
        // --------------------------
        waitForTransition: function() {
          var self = this;
          setTimeout(function(){
            inTransition = false;
          }, self.transitionDuration());
        },


        // Function: transition()
        // transition the elements up or down
        // --------------------------
        transition: function ( direction, targetIndex ){
          var self = this;
          var transitionPercentage, curIndex, nextIndex, prevIndex, el;
          console.log(direction);

          // Determind the current page index
          for(var i=0; i < self.elements.pages.length; i++){
            if($(self.elements.pages[i]).hasClass('active')){
              curIndex = i;
              // i = self.elements.pages.length;
            }
          }



          // Calculate the new position & assign the new class
          switch(direction){
            case 'up':
              prevIndex = curIndex - 1;
              el = self.elements.pages[prevIndex];
              transitionPercentage = prevIndex * -100;

              //remove fixed to release the jack
              // if (curIndex === 0 && prevIndex === -1){
              //  $('body').removeClass('fixed');
              // }
            break;

            case 'down':
              nextIndex = curIndex + 1;
              el = self.elements.pages[nextIndex];
              transitionPercentage = nextIndex * -100;

            break;

            case 'jump':
              el = self.elements.pages[targetIndex];
              transitionPercentage = targetIndex * -100;
            break;
          }



          // If the element doesn't exist don't do the transition
          if( el === undefined ) return false;

          // Remove the section & nav active class
          $(self.elements.pages[curIndex]).removeClass('active');



          $(el).addClass('active');


          // Apply the new position
          self.elements.container.setAttribute('style',
            '-webkit-transform:translate3d(0,'+transitionPercentage+'%,0);' +
               '-moz-transform:translate3d(0,'+transitionPercentage+'%,0);' +
                '-ms-transform:translate3d(0,'+transitionPercentage+'%,0);' +
                    'transform:translate3d(0,'+transitionPercentage+'%,0);'
          );


          // different first panel
          if (!$('.full-panel.ar-section-1').hasClass('active')){
          if (!$('.ar-intro-cover').hasClass('active')) {
            $('.ar-main-header').removeClass('cover');

            // colors
            let newColor;
            if($('.full-panel.active').attr('data-headerColor')){
              newColor = $('.full-panel.active').attr('data-headerColor');
            } else {
              newColor = '';
            }
            $('.ar-main-header').attr('data-headerColor', newColor);


            // headers

            let headers = $('.full-panel.active .ar-section-header').find('.container').html();
            $('.ar-main-header').find('.container').html(headers);


            // last panel like cover
            if(self.elements.pages.length - 1 == $('.full-panel.active').index()) {
              $('.ar-main-header').addClass('cover');
            }
        }
            // specifically section 1
            if($('.full-panel.ar-section-1').hasClass('active')) {
              $('.ar-main-header').removeClass('cover');
              let count = 0
              window.section2interval = setInterval(() => {
                if (count < $('.animated-content .item').length -1) {
                    count = count + 1;
                } else {
                  count = 0;
                }
                $('.animated-content .item').removeClass('active');
                $('.animated-content .item').eq(count).addClass('active');


              }, 5000);
            } else {
              clearInterval(window.section2interval);
            }




          } else {
            $('.ar-main-header').addClass('cover');

          }


        }


      };

  }

/**
 * overlay content for president message
 */
  overlayContent(){
    const overlay = $('#overlay');

    const openOverlay = e => {
      e.preventDefault();
      $('body').addClass('overlay-open');
      let presHTML = $(e.currentTarget).parents('.ar-section-2').find('.message-html').html();
      overlay.find('.overlay-content').append(presHTML);
    };
    const openOverlaysurgery = e => {
      e.preventDefault();
      $('body').addClass('overlay-open');
      let presHTML = $(e.currentTarget).parents('.ar-section-4').find('.message-html').html();
      overlay.find('.overlay-content').append(presHTML);
    };
    const openOverlaycancer = e => {
      e.preventDefault();
      $('body').addClass('overlay-open');
      let presHTML = $(e.currentTarget).parents('.ar-section-5').find('.message-html').html();
      overlay.find('.overlay-content').append(presHTML);
    };
    const openOverlaylungs = e => {
      e.preventDefault();
      $('body').addClass('overlay-open');
      let presHTML = $(e.currentTarget).parents('.ar-section-6').find('.message-html').html();
      overlay.find('.overlay-content').append(presHTML);
    };
    const openOverlayinnovation = e => {
      e.preventDefault();
      $('body').addClass('overlay-open');
      let presHTML = $(e.currentTarget).parents('.ar-section-7').find('.message-html').html();
      overlay.find('.overlay-content').append(presHTML);
    };
    const openOverlaycommunity = e => {
      e.preventDefault();
      $('body').addClass('overlay-open');
      let presHTML = $(e.currentTarget).parents('.ar-section-8').find('.message-html').html();
      overlay.find('.overlay-content').append(presHTML);
    };
    const openOverlaybrainhealth = e => {
      e.preventDefault();
      $('body').addClass('overlay-open');
      let presHTML = $(e.currentTarget).parents('.ar-section-9').find('.message-html').html();
      overlay.find('.overlay-content').append(presHTML);
    };
    const openOverlaylegacy = e => {
      e.preventDefault();
      $('body').addClass('overlay-open');
      let presHTML = $(e.currentTarget).parents('.ar-section-10').find('.message-html').html();
      overlay.find('.overlay-content').append(presHTML);
    };
    $('#president-message').on('click', openOverlay);
    $('#full-story-surgery').on('click', openOverlaysurgery);
    $('#full-story-cancer').on('click', openOverlaycancer);
    $('#full-story-lungs').on('click', openOverlaylungs);
    $('#full-story-innovation').on('click', openOverlayinnovation);
    $('#full-story-community').on('click', openOverlaycommunity);
    $('#full-story-brainhealth').on('click', openOverlaybrainhealth);
    $('#full-story-legacy').on('click', openOverlaylegacy);

    // close overlay and clear DOM innerHTML
    const closeOverlay = e => {
      e.preventDefault();
      $('body').removeClass('overlay-open');
      overlay.find('.overlay-content').empty();
    };
    overlay.on('click', '.close', closeOverlay);

  }

}
