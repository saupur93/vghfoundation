import $ from 'jquery';

const slideshow = {
  container: 'slideshow',
  slide: '.slide-bg',
  slideText: '.slide-text',
  slides: [],
  slideIndex: 0,
  currentSlide: 0,
  pagerLeft: '.prev',
  pagerRight: '.next',
  loop: false,
  pagerContainer: '.slide-pager',
  transitionDuration: 6000,



  /**
   * Initialize slideshow
   *  - defaults exist above, but you can pass your own when initializing the slideshow
   *  to use your own classes for the container, slides, and left and right pager
   */
  init (container){
    this.container = container ? $(container) : $(this.container);
    this.slideIndex = this.container.find(this.slide).length;
    this.slides = this.container.find(this.slide);
    this.slideText = this.container.find(this.slideText);
    this.pagerContainer = this.container.find(this.pagerContainer);
    this.pagerLeft = this.container.find(this.pagerLeft);
    this.pagerRight = this.container.find(this.pagerRight);
    this.loop = false;

    this.pagerEvents();
    this.autoTransition();
  },


  /**
   * Pager click events
   */
  pagerEvents (){
    var self = this;

    this.pagerLeft.on('click', function(e){
        e.preventDefault();
      // page left, but not beyond first slide
      if (self.currentSlide > 0 ) {
        self.slideCurrentIndex('left');
        self.transitionSlides(self.currentSlide);
      }

      // if (self.currentSlide === 0) {
      //   self.currentSlide = self.slides.length - 1;
      //   self.transitionSlides(self.slides.length - 1);
      // }

    });

    this.pagerRight.on('click', function(e){
      e.preventDefault();
      // page right, but not beyond end
      if (self.currentSlide < self.slides.length - 1) {
        self.slideCurrentIndex('right');
        self.transitionSlides(self.currentSlide);
      }
      // if (self.currentSlide === self.slides.length - 1) {
      //   self.currentSlide = -1;
      //   self.transitionSlides(-1);
      // }
    });

    this.pagerContainer.on('click', 'li', (e) => {
      e.preventDefault();
      let index = $(e.currentTarget).index();
      this.currentSlide = index;
      this.transitionSlides(index);

    });

    $(document).on('keydown', function(e){
      if(e.keyCode == 37){
        if (self.currentSlide > 0 ) {
          self.slideCurrentIndex('left');
          self.transitionSlides(self.currentSlide);
        }
      }

      if(e.keyCode == 39){
        if (self.currentSlide < self.slides.length - 1) {
          self.slideCurrentIndex('right');
          self.transitionSlides(self.currentSlide);
        }
      }
    });

    $(this.pagerContainer).on('mouseenter', () => {
      clearTimeout(this.loop);
    });

  },


  /**
   * Update current slide index
   */
  slideCurrentIndex (direction){
    if (direction === 'right'){
      this.currentSlide++;
    }

    if (direction === 'left'){
      this.currentSlide--;
    }
  },


  /**
   * Slide transition
   */
  transitionSlides (currentSlide){
    var self = this;

    this.slides.css({
      transform: 'translate3d(-'+ 100 * currentSlide +'%,0,0)'
    });

    this.slideText.removeClass('active');
    this.slideText.eq(currentSlide).addClass('active');

    let boxColour = this.slideText.eq(currentSlide).data('colour-type');
    this.container.find('.hero-copy').attr('data-colour-type', boxColour);


    this.pagerContainer.find('li').removeClass('active')
    this.pagerContainer.find('li').eq(currentSlide).addClass('active');
  },


  /**
   * Auto-transition
   */
  autoTransition (){
    this.loop = setTimeout(() => {
      // page left, but not beyond first slide
      if (this.currentSlide < this.slides.length - 1) {
        this.slideCurrentIndex('right');
        this.transitionSlides(this.currentSlide);
      } else {
        this.currentSlide = 0;
        this.transitionSlides(this.currentSlide);

      }
      this.autoTransition();

    }, this.transitionDuration);


  }

}

export default slideshow;