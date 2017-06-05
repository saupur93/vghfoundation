class CTAMessage {

	constructor () {
		this.ctamsgbox = document.querySelector('#cta-message');
		this.close = this.ctamsgbox.querySelector('.close');
		this.windowheight = window.innerHeight;

		this.events();
	}

	events () {

		this.close.addEventListener('click', () => {
			this.ctamsgbox.classList.add('animate');
			setTimeout(() => {
				this.ctamsgbox.style.display = "none";
			}, 500);
		});

		window.addEventListener('scroll', () => {
			console.log('scrolling');
			if(window.pageYOffset > this.windowheight/1.5) {
				this.ctamsgbox.classList.add('show');
			}
			else {
				this.ctamsgbox.classList.remove('show');
			}
		});

	}

}

module.exports = CTAMessage;
