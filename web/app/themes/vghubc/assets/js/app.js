'use strict';

const $ = require('jquery');

const Home = require('./modules/home');


class App {

	constructor (){
		// just some console fun.
		console.log('%cBuilt by', 'font: 200 16px Calibri;color:#CCC');
		console.log('%cSignals', 'font: 200 28px Calibri;color:#93cb3c');
		console.log('%chttp://www.signals.ca', 'font: 200 16px Calibri;color:#CCC');

		this.routes();


	}

	/**
	 * load Classes based on body CSS class
	 */
	routes (){

			if ($('body').hasClass('home')){
				this.home = new Home();
			}



	}
}

window.App = new App();