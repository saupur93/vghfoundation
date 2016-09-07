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

	}

	latestNavigation () {
		const latestToggle = document.getElementById('toggleLatest');

		if ($('body').hasClass('front')) {
				setTimeout(() => {
					$('body').toggleClass('latest-open');
				}, 400);
		}

		latestToggle.onclick = () => {
			$('body').toggleClass('latest-open');
			$('body').toggleClass('latest-closed');
		};

	}
}

window.App = new App();
