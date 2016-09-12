const $ = require('jquery');

class FixedHeaderScroll {

	constructor (){
		// had to offset by 59 pixels because of pseudo element effect placed over top of the header image
		this.navHeaderH = $('#top-header').outerHeight();
		this.pageTop = $('.page-header').outerHeight() + this.navHeaderH;
		this.events();

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
	}



}

module.exports = FixedHeaderScroll;
