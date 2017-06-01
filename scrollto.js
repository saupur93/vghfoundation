/*
Name: Scroll To
Desc: Animates the scroll to a specific pixel value with a given duration.

Usage:
import st from './scrollto';
st.animate(element.offsetTop, 1000);

*/
var _module;

export default _module = {
  animate: function(to, duration) {
    var _this = this;
    var start = document.documentElement.scrollTop + document.body.scrollTop,
      change = to - start,
      increment = 20;

    var anim = function(elapsedTime) {
      elapsedTime += increment;
      var position = _this.easeInOut(elapsedTime, start, change, duration);

      document.documentElement.scrollTop = position;
      document.body.scrollTop = position;

      if (elapsedTime < duration) {
        setTimeout(function() {
          anim(elapsedTime);
        }, increment);
      }
    };

    anim(0);
  },

  easeInOut: function(currentTime, start, change, duration) {
    currentTime /= duration / 2;
    if (currentTime < 1) {
      return change / 2 * currentTime * currentTime + start;
    }
    currentTime -= 1;
    return -change / 2 * (currentTime * (currentTime - 2) - 1) + start;
  }
};
