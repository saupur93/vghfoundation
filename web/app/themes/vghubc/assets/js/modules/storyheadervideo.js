class StoryHeaderVideo {

  constructor () {
    this.videoLayer = document.querySelector('.theme-story-head .theme-story-video');
    this.playBtn = this.videoLayer.querySelector('.fa');
    this.videoframewrapper = this.videoLayer.querySelector('.iframe-wrapper');
    // this.videoframe = this.videoframewrapper.querySelector('iframe');

    this.setupVideoIframe();
    this.events();

  }

  events () {

    this.playBtn.addEventListener('click', event => {
      window.youTubePlayer.playVideo();

    //  // update iframe source
    //  let videosrc = this.playBtn.getAttribute('data-video');
    //  this.videoframe.setAttribute('src', videosrc);

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


  setupVideoIframe () {
    let tag = document.createElement('script');
    tag.src = "https://www.youtube.com/iframe_api";
    let firstScriptTag = document.getElementsByTagName('script')[0];
    firstScriptTag.parentNode.insertBefore(tag, firstScriptTag);

    let videoId = document.getElementById('player').getAttribute('data-video-id');

    let player;
    window.youTubePlayer = player;
    window.onYouTubeIframeAPIReady = function (){
      window.youTubePlayer = new YT.Player('player', {
        height: '720',
        width: '1280',
        videoId: videoId,
        events: {
          'onStateChange': onPlayerStateChange
        }
      });
    }

    window.onPlayerStateChange = function (event) {
      console.log('playing')
    }

  }

}

module.exports = StoryHeaderVideo;
