class CTAMessage {

	constructor () {
		this.ctamsgbox = document.querySelector('#cta-message');
		this.close = this.ctamsgbox.querySelector('.close');

		this.events();
	}

	events () {

		this.close.addEventListener('click', () => {
			this.ctamsgbox.classList.add('animate');
			setTimeout(() => {
				this.ctamsgbox.style.display = "none";
			})
		});

	}

}

module.exports = CTAMessage;
