const $ = require('jquery');
const Home = require('./modules/home');

class App {

	constructor () {
		// just some console fun.
		console.log('%cBuilt by', 'font: 200 16px Calibri;color:#CCC');
		console.log('%cSignals', 'font: 200 28px Calibri;color:#93cb3c');
		console.log('%chttp://www.signals.ca', 'font: 200 16px Calibri;color:#CCC');

		this.behaviours();


	}

	/**
	 * load Classes based on body CSS class
	 */
	behaviours () {
		this.latestNavigation();
		this.themesGrid();

	}

	/**
	 * latest news navigation menu animations
	 */
	latestNavigation () {
		const latestToggle = document.getElementById('toggleLatest');
		let scrolled = false;

		const toggleFunction = () => {
			scrolled = false;
			$('body').toggleClass('latest-open');
			$('body').toggleClass('latest-closed');

			if ($('body').hasClass('latest-closed')) {
				setTimeout(() => {
					$('body').removeClass('latest-closed');
				}, 400);
			}
			return false;
		};

		if ($('body').hasClass('front')) {
				setTimeout(() => {
					$('body').toggleClass('latest-open');
				}, 400);
		}

		latestToggle.onclick = toggleFunction;

		$(window).on('scroll', () => {
			if(!scrolled) toggleFunction();
			scrolled = true;
		});
	}

	/**
	 * Homepage themes grid expansion animations
	 */
	themesGrid () {
		const gridElm = $('#grid');

		const openItem = (e) => {
			e.preventDefault();
			$('#themes-section').addClass('expanded-overlay');
			$(e.currentTarget).addClass('expanded');
			$('html, body').animate({ scrollTop: gridElm.position().top - $('#top-header').outerHeight()});
		};

		const closeItem = (e) => {
			e.preventDefault();
			gridElm.find('.expanded').removeClass('expanded');
			$('#themes-section').removeClass('expanded-overlay');
		};

		gridElm.on('click', 'li', openItem);
		gridElm.on('click', 'li.expanded', closeItem);
	}

}

window.App = new App();
