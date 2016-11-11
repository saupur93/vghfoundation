const $ = require('jquery');

class FixedHeaderScroll {

  constructor (){
    // had to offset by 59 pixels because of pseudo element effect placed over top of the header image
    this.navHeaderH = $('#top-header').outerHeight();
    this.pageTop = $('.page-header').outerHeight() + this.navHeaderH;
    this.events();
    this.lastScrollTop = 0;

  }


  events (){
    $(window).on('scroll', this.handleScroll.bind(this));
  }


  handleScroll (e){
    if (this.pageTop / 4 <= e.currentTarget.pageYOffset){
      $('body').addClass('fixed-sub-nav');
    } else {
      $('body').removeClass('fixed-sub-nav');
    }
    let st = window.pageYOffset || document.documentElement.scrollTop;
    if (st > this.lastScrollTop){
      console.log('down');
      console.log(st);
      console.log(this.navHeaderH);
      if(st > this.navHeaderH) {
        $('body').addClass('collapsed-nav');
      }
       // down
    } else {
      $('body').removeClass('collapsed-nav');
    }
    this.lastScrollTop = st;

  }



}

module.exports = FixedHeaderScroll;
