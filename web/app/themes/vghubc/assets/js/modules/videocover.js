class VideoCover {

	constructor () {
		this.videoBox = document.querySelector('.theme-video-box');
		this.videocover = this.videoBox.querySelector('.cover');
		this.videoframe = this.videoBox.querySelector('iframe');

		this.events();
	}

	events () {

		this.videocover.addEventListener('click', () => {

			// update iframe source
			let videosrc = this.videocover.getAttribute('data-video');
			this.videoframe.setAttribute('src', videosrc);

			// take away cover
			this.videocover.classList.add('fade');
			setTimeout(() => {
				this.videocover.style.display = 'none';
			}, 500);

		});

	}

}

module.exports = VideoCover;
