class StoryHeaderVideo {

	constructor () {
		this.videoLayer = document.querySelector('.theme-story-head .theme-story-video');
		this.playBtn = this.videoLayer.querySelector('.fa');
		this.videoframewrapper = this.videoLayer.querySelector('.iframe-wrapper');
		this.videoframe = this.videoframewrapper.querySelector('iframe');

		this.events();
	}

	events () {

		this.playBtn.addEventListener('click', () => {

			// update iframe source
			let videosrc = this.playBtn.getAttribute('data-video');
			this.videoframe.setAttribute('src', videosrc);

			// take away button
			this.playBtn.classList.add('fade');
			this.videoframewrapper.style.display = 'block';
			setTimeout(() => {
				this.videoframewrapper.style.opacity = 1;
			}, 100);
			setTimeout(() => {
				this.playBtn.style.display = 'none';
			}, 500);

		});

	}

}

module.exports = StoryHeaderVideo;
