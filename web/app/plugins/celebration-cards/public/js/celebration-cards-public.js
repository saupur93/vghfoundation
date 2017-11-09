/* Add ons code */

/*
* FlowType.JS v1.1
* Copyright 2013-2014, Simple Focus http://simplefocus.com/
*
* FlowType.JS by Simple Focus (http://simplefocus.com/)
* is licensed under the MIT License. Read a copy of the
* license in the LICENSE.txt file or at
* http://choosealicense.com/licenses/mit
*
* Thanks to Giovanni Difeterici (http://www.gdifeterici.com/)
*/

(function($) {
   $.fn.flowtype = function(options) {

// Establish default settings/variables
// ====================================
      var settings = $.extend({
         maximum   : 9999,
         minimum   : 1,
         maxFont   : 14,
         minFont   : 1,
         fontRatio : 35
      }, options),

// Do the magic math
// =================
      changes = function(el) {
         var $el = $(el),
            elw = $el.width(),
            width = elw > settings.maximum ? settings.maximum : elw < settings.minimum ? settings.minimum : elw,
            fontBase = width / settings.fontRatio,
            fontSize = fontBase > settings.maxFont ? settings.maxFont : fontBase < settings.minFont ? settings.minFont : fontBase;
         $el.css('font-size', fontSize + 'px');
      };

// Make the magic visible
// ======================
      return this.each(function() {
      // Context for resize callback
         var that = this;
      // Make changes upon resize
         $(window).resize(function(){changes(that);});
      // Set changes on load
         changes(this);
      });
   };
}(jQuery));

/*! Copyright (c) 2011 Piotr Rochala (http://rocha.la)
 * Dual licensed under the MIT (http://www.opensource.org/licenses/mit-license.php)
 * and GPL (http://www.opensource.org/licenses/gpl-license.php) licenses.
 *
 * Version: 1.3.7
 *
 */
(function(e){e.fn.extend({slimScroll:function(f){var a=e.extend({width:"auto",height:"250px",size:"7px",color:"#000",position:"right",distance:"1px",start:"top",opacity:.4,alwaysVisible:!1,disableFadeOut:!1,railVisible:!1,railColor:"#333",railOpacity:.2,railDraggable:!0,railClass:"slimScrollRail",barClass:"slimScrollBar",wrapperClass:"slimScrollDiv",allowPageScroll:!1,wheelStep:20,touchScrollStep:200,borderRadius:"7px",railBorderRadius:"7px"},f);this.each(function(){function v(d){if(r){d=d||window.event;
var c=0;d.wheelDelta&&(c=-d.wheelDelta/120);d.detail&&(c=d.detail/3);e(d.target||d.srcTarget||d.srcElement).closest("."+a.wrapperClass).is(b.parent())&&n(c,!0);d.preventDefault&&!k&&d.preventDefault();k||(d.returnValue=!1)}}function n(d,e,f){k=!1;var g=d,h=b.outerHeight()-c.outerHeight();e&&(g=parseInt(c.css("top"))+d*parseInt(a.wheelStep)/100*c.outerHeight(),g=Math.min(Math.max(g,0),h),g=0<d?Math.ceil(g):Math.floor(g),c.css({top:g+"px"}));l=parseInt(c.css("top"))/(b.outerHeight()-c.outerHeight());
g=l*(b[0].scrollHeight-b.outerHeight());f&&(g=d,d=g/b[0].scrollHeight*b.outerHeight(),d=Math.min(Math.max(d,0),h),c.css({top:d+"px"}));b.scrollTop(g);b.trigger("slimscrolling",~~g);w();q()}function x(){u=Math.max(b.outerHeight()/b[0].scrollHeight*b.outerHeight(),30);c.css({height:u+"px"});var a=u==b.outerHeight()?"none":"block";c.css({display:a})}function w(){x();clearTimeout(B);l==~~l?(k=a.allowPageScroll,C!=l&&b.trigger("slimscroll",0==~~l?"top":"bottom")):k=!1;C=l;u>=b.outerHeight()?k=!0:(c.stop(!0,
!0).fadeIn("fast"),a.railVisible&&m.stop(!0,!0).fadeIn("fast"))}function q(){a.alwaysVisible||(B=setTimeout(function(){a.disableFadeOut&&r||y||z||(c.fadeOut("slow"),m.fadeOut("slow"))},1E3))}var r,y,z,B,A,u,l,C,k=!1,b=e(this);if(b.parent().hasClass(a.wrapperClass)){var p=b.scrollTop(),c=b.siblings("."+a.barClass),m=b.siblings("."+a.railClass);x();if(e.isPlainObject(f)){if("height"in f&&"auto"==f.height){b.parent().css("height","auto");b.css("height","auto");var h=b.parent().parent().height();b.parent().css("height",
h);b.css("height",h)}else"height"in f&&(h=f.height,b.parent().css("height",h),b.css("height",h));if("scrollTo"in f)p=parseInt(a.scrollTo);else if("scrollBy"in f)p+=parseInt(a.scrollBy);else if("destroy"in f){c.remove();m.remove();b.unwrap();return}n(p,!1,!0)}}else if(!(e.isPlainObject(f)&&"destroy"in f)){a.height="auto"==a.height?b.parent().height():a.height;p=e("<div></div>").addClass(a.wrapperClass).css({position:"relative",overflow:"hidden",width:a.width,height:a.height});b.css({overflow:"hidden",
width:a.width,height:a.height});var m=e("<div></div>").addClass(a.railClass).css({width:a.size,height:"100%",position:"absolute",top:0,display:a.alwaysVisible&&a.railVisible?"block":"none","border-radius":a.railBorderRadius,background:a.railColor,opacity:a.railOpacity,zIndex:90}),c=e("<div></div>").addClass(a.barClass).css({background:a.color,width:a.size,position:"absolute",top:0,opacity:a.opacity,display:a.alwaysVisible?"block":"none","border-radius":a.borderRadius,BorderRadius:a.borderRadius,MozBorderRadius:a.borderRadius,
WebkitBorderRadius:a.borderRadius,zIndex:99}),h="right"==a.position?{right:a.distance}:{left:a.distance};m.css(h);c.css(h);b.wrap(p);b.parent().append(c);b.parent().append(m);a.railDraggable&&c.bind("mousedown",function(a){var b=e(document);z=!0;t=parseFloat(c.css("top"));pageY=a.pageY;b.bind("mousemove.slimscroll",function(a){currTop=t+a.pageY-pageY;c.css("top",currTop);n(0,c.position().top,!1)});b.bind("mouseup.slimscroll",function(a){z=!1;q();b.unbind(".slimscroll")});return!1}).bind("selectstart.slimscroll",
function(a){a.stopPropagation();a.preventDefault();return!1});m.hover(function(){w()},function(){q()});c.hover(function(){y=!0},function(){y=!1});b.hover(function(){r=!0;w();q()},function(){r=!1;q()});b.bind("touchstart",function(a,b){a.originalEvent.touches.length&&(A=a.originalEvent.touches[0].pageY)});b.bind("touchmove",function(b){k||b.originalEvent.preventDefault();b.originalEvent.touches.length&&(n((A-b.originalEvent.touches[0].pageY)/a.touchScrollStep,!0),A=b.originalEvent.touches[0].pageY)});
x();"bottom"===a.start?(c.css({top:b.outerHeight()-c.outerHeight()}),n(0,!0)):"top"!==a.start&&(n(e(a.start).position().top,null,!0),a.alwaysVisible||c.hide());window.addEventListener?(this.addEventListener("DOMMouseScroll",v,!1),this.addEventListener("mousewheel",v,!1)):document.attachEvent("onmousewheel",v)}});return this}});e.fn.extend({slimscroll:e.fn.slimScroll})})(jQuery);

/*!
 * clipboard.js v1.5.5
 * https://zenorocha.github.io/clipboard.js
 *
 * Licensed MIT © Zeno Rocha
 */
!function(t){if("object"==typeof exports&&"undefined"!=typeof module)module.exports=t();else if("function"==typeof define&&define.amd)define([],t);else{var e;e="undefined"!=typeof window?window:"undefined"!=typeof global?global:"undefined"!=typeof self?self:this,e.Clipboard=t()}}(function(){var t,e,n;return function t(e,n,r){function o(a,c){if(!n[a]){if(!e[a]){var s="function"==typeof require&&require;if(!c&&s)return s(a,!0);if(i)return i(a,!0);var u=new Error("Cannot find module '"+a+"'");throw u.code="MODULE_NOT_FOUND",u}var l=n[a]={exports:{}};e[a][0].call(l.exports,function(t){var n=e[a][1][t];return o(n?n:t)},l,l.exports,t,e,n,r)}return n[a].exports}for(var i="function"==typeof require&&require,a=0;a<r.length;a++)o(r[a]);return o}({1:[function(t,e,n){var r=t("matches-selector");e.exports=function(t,e,n){for(var o=n?t:t.parentNode;o&&o!==document;){if(r(o,e))return o;o=o.parentNode}}},{"matches-selector":2}],2:[function(t,e,n){function r(t,e){if(i)return i.call(t,e);for(var n=t.parentNode.querySelectorAll(e),r=0;r<n.length;++r)if(n[r]==t)return!0;return!1}var o=Element.prototype,i=o.matchesSelector||o.webkitMatchesSelector||o.mozMatchesSelector||o.msMatchesSelector||o.oMatchesSelector;e.exports=r},{}],3:[function(t,e,n){function r(t,e,n,r){var i=o.apply(this,arguments);return t.addEventListener(n,i),{destroy:function(){t.removeEventListener(n,i)}}}function o(t,e,n,r){return function(n){n.delegateTarget=i(n.target,e,!0),n.delegateTarget&&r.call(t,n)}}var i=t("closest");e.exports=r},{closest:1}],4:[function(t,e,n){n.node=function(t){return void 0!==t&&t instanceof HTMLElement&&1===t.nodeType},n.nodeList=function(t){var e=Object.prototype.toString.call(t);return void 0!==t&&("[object NodeList]"===e||"[object HTMLCollection]"===e)&&"length"in t&&(0===t.length||n.node(t[0]))},n.string=function(t){return"string"==typeof t||t instanceof String},n.function=function(t){var e=Object.prototype.toString.call(t);return"[object Function]"===e}},{}],5:[function(t,e,n){function r(t,e,n){if(!t&&!e&&!n)throw new Error("Missing required arguments");if(!c.string(e))throw new TypeError("Second argument must be a String");if(!c.function(n))throw new TypeError("Third argument must be a Function");if(c.node(t))return o(t,e,n);if(c.nodeList(t))return i(t,e,n);if(c.string(t))return a(t,e,n);throw new TypeError("First argument must be a String, HTMLElement, HTMLCollection, or NodeList")}function o(t,e,n){return t.addEventListener(e,n),{destroy:function(){t.removeEventListener(e,n)}}}function i(t,e,n){return Array.prototype.forEach.call(t,function(t){t.addEventListener(e,n)}),{destroy:function(){Array.prototype.forEach.call(t,function(t){t.removeEventListener(e,n)})}}}function a(t,e,n){return s(document.body,t,e,n)}var c=t("./is"),s=t("delegate");e.exports=r},{"./is":4,delegate:3}],6:[function(t,e,n){function r(t){var e;if("INPUT"===t.nodeName||"TEXTAREA"===t.nodeName)t.focus(),t.setSelectionRange(0,t.value.length),e=t.value;else{t.hasAttribute("contenteditable")&&t.focus();var n=window.getSelection(),r=document.createRange();r.selectNodeContents(t),n.removeAllRanges(),n.addRange(r),e=n.toString()}return e}e.exports=r},{}],7:[function(t,e,n){function r(){}r.prototype={on:function(t,e,n){var r=this.e||(this.e={});return(r[t]||(r[t]=[])).push({fn:e,ctx:n}),this},once:function(t,e,n){function r(){o.off(t,r),e.apply(n,arguments)}var o=this;return r._=e,this.on(t,r,n)},emit:function(t){var e=[].slice.call(arguments,1),n=((this.e||(this.e={}))[t]||[]).slice(),r=0,o=n.length;for(r;o>r;r++)n[r].fn.apply(n[r].ctx,e);return this},off:function(t,e){var n=this.e||(this.e={}),r=n[t],o=[];if(r&&e)for(var i=0,a=r.length;a>i;i++)r[i].fn!==e&&r[i].fn._!==e&&o.push(r[i]);return o.length?n[t]=o:delete n[t],this}},e.exports=r},{}],8:[function(t,e,n){"use strict";function r(t){return t&&t.__esModule?t:{"default":t}}function o(t,e){if(!(t instanceof e))throw new TypeError("Cannot call a class as a function")}n.__esModule=!0;var i=function(){function t(t,e){for(var n=0;n<e.length;n++){var r=e[n];r.enumerable=r.enumerable||!1,r.configurable=!0,"value"in r&&(r.writable=!0),Object.defineProperty(t,r.key,r)}}return function(e,n,r){return n&&t(e.prototype,n),r&&t(e,r),e}}(),a=t("select"),c=r(a),s=function(){function t(e){o(this,t),this.resolveOptions(e),this.initSelection()}return t.prototype.resolveOptions=function t(){var e=arguments.length<=0||void 0===arguments[0]?{}:arguments[0];this.action=e.action,this.emitter=e.emitter,this.target=e.target,this.text=e.text,this.trigger=e.trigger,this.selectedText=""},t.prototype.initSelection=function t(){if(this.text&&this.target)throw new Error('Multiple attributes declared, use either "target" or "text"');if(this.text)this.selectFake();else{if(!this.target)throw new Error('Missing required attributes, use either "target" or "text"');this.selectTarget()}},t.prototype.selectFake=function t(){var e=this;this.removeFake(),this.fakeHandler=document.body.addEventListener("click",function(){return e.removeFake()}),this.fakeElem=document.createElement("textarea"),this.fakeElem.style.position="absolute",this.fakeElem.style.left="-9999px",this.fakeElem.style.top=(window.pageYOffset||document.documentElement.scrollTop)+"px",this.fakeElem.setAttribute("readonly",""),this.fakeElem.value=this.text,document.body.appendChild(this.fakeElem),this.selectedText=c.default(this.fakeElem),this.copyText()},t.prototype.removeFake=function t(){this.fakeHandler&&(document.body.removeEventListener("click"),this.fakeHandler=null),this.fakeElem&&(document.body.removeChild(this.fakeElem),this.fakeElem=null)},t.prototype.selectTarget=function t(){this.selectedText=c.default(this.target),this.copyText()},t.prototype.copyText=function t(){var e=void 0;try{e=document.execCommand(this.action)}catch(n){e=!1}this.handleResult(e)},t.prototype.handleResult=function t(e){e?this.emitter.emit("success",{action:this.action,text:this.selectedText,trigger:this.trigger,clearSelection:this.clearSelection.bind(this)}):this.emitter.emit("error",{action:this.action,trigger:this.trigger,clearSelection:this.clearSelection.bind(this)})},t.prototype.clearSelection=function t(){this.target&&this.target.blur(),window.getSelection().removeAllRanges()},t.prototype.destroy=function t(){this.removeFake()},i(t,[{key:"action",set:function t(){var e=arguments.length<=0||void 0===arguments[0]?"copy":arguments[0];if(this._action=e,"copy"!==this._action&&"cut"!==this._action)throw new Error('Invalid "action" value, use either "copy" or "cut"')},get:function t(){return this._action}},{key:"target",set:function t(e){if(void 0!==e){if(!e||"object"!=typeof e||1!==e.nodeType)throw new Error('Invalid "target" value, use a valid Element');this._target=e}},get:function t(){return this._target}}]),t}();n.default=s,e.exports=n.default},{select:6}],9:[function(t,e,n){"use strict";function r(t){return t&&t.__esModule?t:{"default":t}}function o(t,e){if(!(t instanceof e))throw new TypeError("Cannot call a class as a function")}function i(t,e){if("function"!=typeof e&&null!==e)throw new TypeError("Super expression must either be null or a function, not "+typeof e);t.prototype=Object.create(e&&e.prototype,{constructor:{value:t,enumerable:!1,writable:!0,configurable:!0}}),e&&(Object.setPrototypeOf?Object.setPrototypeOf(t,e):t.__proto__=e)}function a(t,e){var n="data-clipboard-"+t;if(e.hasAttribute(n))return e.getAttribute(n)}n.__esModule=!0;var c=t("./clipboard-action"),s=r(c),u=t("tiny-emitter"),l=r(u),f=t("good-listener"),d=r(f),h=function(t){function e(n,r){o(this,e),t.call(this),this.resolveOptions(r),this.listenClick(n)}return i(e,t),e.prototype.resolveOptions=function t(){var e=arguments.length<=0||void 0===arguments[0]?{}:arguments[0];this.action="function"==typeof e.action?e.action:this.defaultAction,this.target="function"==typeof e.target?e.target:this.defaultTarget,this.text="function"==typeof e.text?e.text:this.defaultText},e.prototype.listenClick=function t(e){var n=this;this.listener=d.default(e,"click",function(t){return n.onClick(t)})},e.prototype.onClick=function t(e){var n=e.delegateTarget||e.currentTarget;this.clipboardAction&&(this.clipboardAction=null),this.clipboardAction=new s.default({action:this.action(n),target:this.target(n),text:this.text(n),trigger:n,emitter:this})},e.prototype.defaultAction=function t(e){return a("action",e)},e.prototype.defaultTarget=function t(e){var n=a("target",e);return n?document.querySelector(n):void 0},e.prototype.defaultText=function t(e){return a("text",e)},e.prototype.destroy=function t(){this.listener.destroy(),this.clipboardAction&&(this.clipboardAction.destroy(),this.clipboardAction=null)},e}(l.default);n.default=h,e.exports=n.default},{"./clipboard-action":8,"good-listener":5,"tiny-emitter":7}]},{},[9])(9)});


/* Plugin Code */
/******************************************************/

(function( $ ) {
	'use strict';

	/**
	 * All of the code for your public-facing JavaScript source
	 * should reside in this file.
	 *
	 * Note: It has been assumed you will write jQuery code here, so the
	 * $ function reference has been prepared for usage within the scope
	 * of this function.
	 *
	 * This enables you to define handlers, for when the DOM is ready:
	 *
	 * $(function() {
	 *
	 * });
	 *
	 * When the window is loaded:
	 *
	 * $( window ).load(function() {
	 *
	 * });
	 *
	 * ...and/or other possibilities.
	 *
	 * Ideally, it is not considered best practise to attach more than a
	 * single DOM-ready or window-load handler for a particular page.
	 * Although scripts in the WordPress core, Plugins and Themes may be
	 * practising this, we should strive to set a better example in our own work.
	 */

   // global vars
   var template = '';
   var aspectRatio = '';
   var decorationImage = '';
   var backgroundImage = '';
   var backgroundColor = '';
   var textColor = '';
   var textFont = '';
   var textMessage = '';
   var textMessage2 = '';
   var textMessage3 = '';
  // var backMessage = '';

   // aux var (used as a first time flag)
   var flowtype = true;

   // ajax variable (used to abort if cancel clicked)
   var xhrImageUpload = undefined;

   /* 0 no user added image,
    * 1 user added image but not uploaded
    * 2 user uploaded image
    */
   var uploadedImage = 0;

   // modal html code
   var modal = '<div class="celebration-cards-modal">' +
                  '<div class="canvas">' +
                     '<div class="canvas-flipper">' +
                        '<div class="front">' +
                           '<div class="canvas__background-image"></div>' +
                           '<div class="canvas__decoration-image"></div>' +
                           '<span class="canvas__message">Your message</span>' +
                           '<span class="canvas__message2">To</span>' +
                           '<span class="canvas__message3">From</span>' +
                        '</div>' +
                        '</div>' +
                           '</div>' +
                        '</div>' +
                     '</div>' +
                  '</div>' +
                  '<div class="celebration-cards-modal__close-button">' +
                     '<img src="">' +
                  '</div>' +
                  '<div class="celebration-cards-modal-actions">' +
                     '<div class="celebration-cards-modal-front-button">Front</div>' +
                     '</div>' +
               '</div>';

   // aux function to detect if ie
   function detectIE() {
       var ua = window.navigator.userAgent;

       var msie = ua.indexOf('MSIE ');
       if (msie > 0) {
           // IE 10 or older => return version number
           return parseInt(ua.substring(msie + 5, ua.indexOf('.', msie)), 10);
       }

       var trident = ua.indexOf('Trident/');
       if (trident > 0) {
           // IE 11 => return version number
           var rv = ua.indexOf('rv:');
           return parseInt(ua.substring(rv + 3, ua.indexOf('.', rv)), 10);
       }

       var edge = ua.indexOf('Edge/');
       if (edge > 0) {
          // IE 12 (aka Edge) => return version number
          return parseInt(ua.substring(edge + 5, ua.indexOf('.', edge)), 10);
       }

       // other browser
       return false;
   }

   // base 64 string
   var keyStr = "ABCDEFGHIJKLMNOP" +
            "QRSTUVWXYZabcdef" +
            "ghijklmnopqrstuv" +
            "wxyz0123456789+/" +
            "=";

   function encode64(input) {
      input = escape(input);
      var output = "";
      var chr1, chr2, chr3 = "";
      var enc1, enc2, enc3, enc4 = "";
      var i = 0;

      do {
         chr1 = input.charCodeAt(i++);
         chr2 = input.charCodeAt(i++);
         chr3 = input.charCodeAt(i++);

         enc1 = chr1 >> 2;
         enc2 = ((chr1 & 3) << 4) | (chr2 >> 4);
         enc3 = ((chr2 & 15) << 2) | (chr3 >> 6);
         enc4 = chr3 & 63;

         if (isNaN(chr2)) {
            enc3 = enc4 = 64;
         }
         else if (isNaN(chr3)) {
            enc4 = 64;
         }

         output = output +
           keyStr.charAt(enc1) +
           keyStr.charAt(enc2) +
           keyStr.charAt(enc3) +
           keyStr.charAt(enc4);
         chr1 = chr2 = chr3 = "";
         enc1 = enc2 = enc3 = enc4 = "";
      } while (i < input.length);

      return output;
   }

   function decode64(input) {
      var output = "";
      var chr1, chr2, chr3 = "";
      var enc1, enc2, enc3, enc4 = "";
      var i = 0;

      // remove all characters that are not A-Z, a-z, 0-9, +, /, or =
      var base64test = /[^A-Za-z0-9\+\/\=]/g;
      if (base64test.exec(input)) {
         alert("There were invalid base64 characters in the input text.\n" +
               "Valid base64 characters are A-Z, a-z, 0-9, '+', '/',and '='\n" +
               "Expect errors in decoding.");
      }
      input = input.replace(/[^A-Za-z0-9\+\/\=]/g, "");

      do {
         enc1 = keyStr.indexOf(input.charAt(i++));
         enc2 = keyStr.indexOf(input.charAt(i++));
         enc3 = keyStr.indexOf(input.charAt(i++));
         enc4 = keyStr.indexOf(input.charAt(i++));

         chr1 = (enc1 << 2) | (enc2 >> 4);
         chr2 = ((enc2 & 15) << 4) | (enc3 >> 2);
         chr3 = ((enc3 & 3) << 6) | enc4;

         output = output + String.fromCharCode(chr1);

         if (enc3 != 64) {
            output = output + String.fromCharCode(chr2);
         }
         if (enc4 != 64) {
            output = output + String.fromCharCode(chr3);
         }

         chr1 = chr2 = chr3 = "";
         enc1 = enc2 = enc3 = enc4 = "";

      } while (i < input.length);

      return unescape(output);
   }

   // get parameters from the URL
   function getURLParameter(name) {
      return decodeURIComponent((new RegExp('[?|&]' + name + '=' + '([^&;]+?)(&|#|;|$)').exec(location.search)||[,""])[1].replace(/\+/g, '%20'))||null
   }

   // upload and show picture
   function uploadAndShowPicture(evt) {
      // Check for the various File API support.
      if (window.File && window.FileReader && window.FileList && window.Blob) {
         // Great success! All the File APIs are supported.
         var files = evt.target.files; // FileList object

         // Loop through the FileList and render image files as thumbnails.
         for (var i = 0, f; f = files[i]; i++) {

         // Only process image files.
         if (!f.type.match('image.*')) {
           continue;
         }

         var reader = new FileReader();

         // Closure to capture the file information.
         reader.onload = (function(theFile) {
           return function(e) {
             // Render thumbnail.

                  $('.canvas__background-image').css("background-image", "url("+e.target.result+")");
                  uploadedImage = 1;
                  return e.target.result;
              };
            })(f);

            // Read in the image file as a data URL.
            reader.readAsDataURL(f);
         }
      } else {
         console.log('The File APIs are not fully supported in this browser.');
         return undefined;
      }
   }

   // show the share modal

   function showShareModal() {
      $( '.celebration-cards-share-modal' ).css( "display", "block" );

      // modal animation
      $( '.celebration-cards-share-modal' ).animate( {
         opacity: 1
      }, 500, function() {
         celebrationShare();
      });
   }

   function showDonatePage() {
      self.location = "http://support.vghfoundation.ca/site/Donation2?df_id=1720&mfc_pref=T&1720.donation=form1&set.SingleDesignee=1087&set.DonationLevel=2186";

   }

   // function used to show the new created link to be shared
   function showLink(link) {
      textMessage = $('.canvas-wrapper .canvas .canvas__message').html();
      textMessage2 = $('.canvas-wrapper .canvas .canvas__message2').html();
      textMessage3 = $('.canvas-wrapper .canvas .canvas__message3').html();
    //  backMessage = $('.canvas-wrapper .canvas .back .paper div').html();
      textFont = $('.canvas-wrapper .canvas .canvas__message').css("font-family");

      if (link != '') {
         backgroundImage = link;
      }

      var url = [location.protocol, '//', location.host, location.pathname].join('');
      url = url + '?ccshare=a&ccs='+ encodeURIComponent(encode64(textMessage))+'&ccs2='+ encodeURIComponent(encode64(textMessage2)) +'&ccs3='+ encodeURIComponent(encode64(textMessage3)) +'&ccl='+ encodeURIComponent(encode64(template)) +'&cca='+ encodeURIComponent(encode64(((aspectRatio == 'horizontal') ? 0 : 1 ))) +'&ccd='+ encodeURIComponent(encode64(decorationImage)) +'&cci='+ encodeURIComponent(encode64(backgroundImage)) +'&ccb='+ encodeURIComponent(encode64(backgroundColor.slice( 1 ))) +'&cct='+ encodeURIComponent(encode64(textColor.slice( 1 ))) +'&ccf='+ encodeURIComponent(encode64(textFont));

      $('.celebration-cards-share-modal__content__cancel').css('display', 'none');
      $('.celebration-cards-share-modal__content__input input').val( url );
      $('.twitter-share-button').remove();
      $('.fb-share-button').remove();
      $('.email-share-button').remove();
      $('.celebration-cards-share-modal__content__input').append('<a class="twitter-share-button" title="" data-text="" href="https://twitter.com/intent/tweet?url='+encodeURIComponent(url)+'"></a')
      $('.celebration-cards-share-modal__content__input').append('<div class="fb-share-button" data-layout="button" data-href="'+url+'"></div>')
      $('.celebration-cards-share-modal__content__input').append(' <a class="email-share-button" href="mailto:?subject=Angel Card&amp;body='+encodeURIComponent(url)+'" title="">Email</a>')

      $('.celebration-cards-share-modal__content__input').css('display', 'block');
      $('.celebration-cards-share-modal__content__input').animate( {
         opacity: 1
      }, 500, function() {
          twttr.widgets.load();
          FB.XFBML.parse();

      });
   }

   // hide the share modal
   function hideShareModal() {
      // modal animation
      $( '.celebration-cards-share-modal' ).animate( {
         opacity: 0
      }, 500, function() {
         $( '.celebration-cards-share-modal' ).css( "display", "none" );
         $('.celebration-cards-share-modal__content__cancel').css('display', 'block');
         $('.celebration-cards-share-modal__content__input').css('display', 'none');
         $('.celebration-cards-share-modal__content__input').css('opacity', '0');
      });
   }

   // share the card
   function celebrationShare() {
      if (uploadedImage == 0 || uploadedImage == 2) {
         showLink('');
         $('.celebration-cards-share-modal__content__message').html('Click the copy button to copy the link or if you are in mobile hold on to the input and tap copy.');
         $('.celebration-cards-share-modal__content__social-message').html('or share in twitter, facebook and email');
      }
      else if (uploadedImage == 1) {
         $('.celebration-cards-share-modal__content__message').html("Uploading your image...");

         var formData = new FormData($('.celebration-cards-form')[0]);

         xhrImageUpload = jQuery.ajax({
            type:'POST',
            url: adminAjax + "/admin-ajax.php",
            data: formData,
            //Options to tell jQuery not to process data or worry about content-type.
            cache: false,
            contentType: false,
            processData: false,
            success: function(value) {
               uploadedImage = 2;
               showLink(value);
               $('.celebration-cards-share-modal__content__message').html('Click the copy button to copy the link or if you are in mobile hold on to the input and tap copy.')
               $('.celebration-cards-share-modal__content__social-message').html('or share in twitter, facebook and email');
            },
            error: function(jqXHR, textStatus, errorThrown) {
               console.log(jqXHR + " " + errorThrown);
               $('.celebration-cards-share-modal__content__message').html('There is an error. Please, try again or contact us.');
            }
         });
      }
   }

   // recursive function used to resize the cards
   function onResize() {
      var selectedCategory = $('.element-side-bar__templates-categories-element.selected').attr("data-id");
      if ( $( '.celebration-cards-wrapper' ).length != 0 ) {

         if ( $( '.celebration-cards-wrapper' ).width() < 720 ) {
            $('.side-bar' ).addClass( 'side-bar--small' );
            $('.elements-side-bar' ).addClass( 'elements-side-bar--small' );
            $('.canvas-wrapper' ).addClass( 'canvas-wrapper--small' );
            $('.categories-arrow').css("top", "15px");

            $( '.vertical.templates-container-in-category-'+selectedCategory+', .horitzontal.templates-container-in-category-'+selectedCategory ).css('display', 'inline-block');
         }
         else {
            $( '.side-bar' ).removeClass( 'side-bar--small' );
            $( '.elements-side-bar' ).removeClass( 'elements-side-bar--small' );
            $( '.canvas-wrapper' ).removeClass( 'canvas-wrapper--small' );
            $('.categories-arrow').css("top", "28px");

            if ( $('.selected-text').hasClass('vertical-button') ) {
               $( '.vertical-button' ).click();
            }
            else {
               $( '.horitzontal-button' ).click();
            }
         }

         var w = $( '.canvas-wrapper' ).width();
         var h = $( '.canvas-wrapper' ).height();

         if ( $( '.canvas-wrapper .canvas' ).hasClass( 'canvas--vertical' ) ) {
            $( '.canvas-wrapper .canvas' ).css( 'height', '90%' );
            $( '.canvas-wrapper .canvas' ).width( $( '.canvas-wrapper .canvas' ).height() * 0.6 );
         }
         else {
            $( '.canvas-wrapper .canvas' ).css( 'width', '100%' );

            if ( $( '.canvas-wrapper .canvas' ).width() * 0.6 > h ) {
               var nw = (h - 20) / 0.6;
               nw = (nw / $( '.canvas-wrapper' ).width() ) * 100;

               $( '.canvas-wrapper .canvas' ).css( 'width', nw + '%' );
               $( '.canvas-wrapper .canvas' ).height( $( '.canvas-wrapper .canvas' ).width() * 0.6 );
            }
            else {
               $( '.canvas-wrapper .canvas' ).height( $( '.canvas-wrapper .canvas' ).width() * 0.6 );
            }
         }

         if ( $( '.celebration-cards-modal .canvas' ).hasClass( 'canvas--vertical' ) ) {
            $( '.celebration-cards-modal .canvas' ).css( 'height', '90%' );
            $( '.celebration-cards-modal .canvas' ).width( $( '.celebration-cards-modal .canvas' ).height() * 0.6 );
         }
         else {
            $( '.celebration-cards-modal .canvas' ).css( 'width', '100%' );
            $( '.celebration-cards-modal .canvas' ).height( $( '.celebration-cards-modal .canvas' ).width() * 0.6 );
         }

         // aux var used to apply flowtype and other functions only the first time
         if (flowtype) {
            flowtype = false;

            $($('.templates-container')[0]).click();
            $($('.horitzontal-button')[0]).click();

            setTimeout( function() {
               $('.canvas-wrapper .canvas').flowtype({
                  minimum   : 300,
                  maximum   : 1200,
                  minFont   : 4,
                  maxFont   : 14,
                  fontRatio : 45
               });
            }, 100);

            window.mobileAndTabletcheck = function() {
               var check = false;
               (function(a){if(/(android|bb\d+|meego).+mobile|avantgo|bada\/|blackberry|blazer|compal|elaine|fennec|hiptop|iemobile|ip(hone|od)|iris|kindle|lge |maemo|midp|mmp|mobile.+firefox|netfront|opera m(ob|in)i|palm( os)?|phone|p(ixi|re)\/|plucker|pocket|psp|series(4|6)0|symbian|treo|up\.(browser|link)|vodafone|wap|windows ce|xda|xiino|android|ipad|playbook|silk/i.test(a)||/1207|6310|6590|3gso|4thp|50[1-6]i|770s|802s|a wa|abac|ac(er|oo|s\-)|ai(ko|rn)|al(av|ca|co)|amoi|an(ex|ny|yw)|aptu|ar(ch|go)|as(te|us)|attw|au(di|\-m|r |s )|avan|be(ck|ll|nq)|bi(lb|rd)|bl(ac|az)|br(e|v)w|bumb|bw\-(n|u)|c55\/|capi|ccwa|cdm\-|cell|chtm|cldc|cmd\-|co(mp|nd)|craw|da(it|ll|ng)|dbte|dc\-s|devi|dica|dmob|do(c|p)o|ds(12|\-d)|el(49|ai)|em(l2|ul)|er(ic|k0)|esl8|ez([4-7]0|os|wa|ze)|fetc|fly(\-|_)|g1 u|g560|gene|gf\-5|g\-mo|go(\.w|od)|gr(ad|un)|haie|hcit|hd\-(m|p|t)|hei\-|hi(pt|ta)|hp( i|ip)|hs\-c|ht(c(\-| |_|a|g|p|s|t)|tp)|hu(aw|tc)|i\-(20|go|ma)|i230|iac( |\-|\/)|ibro|idea|ig01|ikom|im1k|inno|ipaq|iris|ja(t|v)a|jbro|jemu|jigs|kddi|keji|kgt( |\/)|klon|kpt |kwc\-|kyo(c|k)|le(no|xi)|lg( g|\/(k|l|u)|50|54|\-[a-w])|libw|lynx|m1\-w|m3ga|m50\/|ma(te|ui|xo)|mc(01|21|ca)|m\-cr|me(rc|ri)|mi(o8|oa|ts)|mmef|mo(01|02|bi|de|do|t(\-| |o|v)|zz)|mt(50|p1|v )|mwbp|mywa|n10[0-2]|n20[2-3]|n30(0|2)|n50(0|2|5)|n7(0(0|1)|10)|ne((c|m)\-|on|tf|wf|wg|wt)|nok(6|i)|nzph|o2im|op(ti|wv)|oran|owg1|p800|pan(a|d|t)|pdxg|pg(13|\-([1-8]|c))|phil|pire|pl(ay|uc)|pn\-2|po(ck|rt|se)|prox|psio|pt\-g|qa\-a|qc(07|12|21|32|60|\-[2-7]|i\-)|qtek|r380|r600|raks|rim9|ro(ve|zo)|s55\/|sa(ge|ma|mm|ms|ny|va)|sc(01|h\-|oo|p\-)|sdk\/|se(c(\-|0|1)|47|mc|nd|ri)|sgh\-|shar|sie(\-|m)|sk\-0|sl(45|id)|sm(al|ar|b3|it|t5)|so(ft|ny)|sp(01|h\-|v\-|v )|sy(01|mb)|t2(18|50)|t6(00|10|18)|ta(gt|lk)|tcl\-|tdg\-|tel(i|m)|tim\-|t\-mo|to(pl|sh)|ts(70|m\-|m3|m5)|tx\-9|up(\.b|g1|si)|utst|v400|v750|veri|vi(rg|te)|vk(40|5[0-3]|\-v)|vm40|voda|vulc|vx(52|53|60|61|70|80|81|83|85|98)|w3c(\-| )|webc|whit|wi(g |nc|nw)|wmlb|wonu|x700|yas\-|your|zeto|zte\-/i.test(a.substr(0,4)))check = true})(navigator.userAgent||navigator.vendor||window.opera);

               return check;
            }

            if (!window.mobileAndTabletcheck()) {
               $('.element-side-bar__templates').slimScroll();
               $('.element-side-bar__colors').slimScroll();
               $('.element-side-bar__text').slimScroll();
            }

            var totalWidth = 0;
            $('.element-side-bar__templates-categories-element').each(function() {
               console.log($(this).width() + " " + parseFloat($(this).css("margin-left")))
               totalWidth = totalWidth + $(this).outerWidth(true) + parseFloat($(this).css("padding-left"));
            });

            $('.element-side-bar__templates-categories-container').css("width", totalWidth + 'px');

            // get parameters
            var sharing = getURLParameter('ccshare');

            // check if there is a card to be shown (being shared)
            if (sharing != null) {
               $('body').append(modal);

               $( '.celebration-cards-modal' ).css( "display", "block" );

               // modal animation
               $( '.celebration-cards-modal' ).animate( {
                  opacity: 1
               }, 500, function() {

                  var modTemplate = decodeURIComponent(decode64(getURLParameter('ccl')));
                  var modAspectRatio = decodeURIComponent(decode64(getURLParameter('cca')));
                  var modDecorationImage = decodeURIComponent(decode64(getURLParameter('ccd')));
                  var modBackgroundImage = decodeURIComponent(decode64(getURLParameter('cci')));
                  var modBackgroundColor = decodeURIComponent(decode64(getURLParameter('ccb')));
                  var modTextColor = decodeURIComponent(decode64(getURLParameter('cct')));
                  var modTextFont = decodeURIComponent(decode64(getURLParameter('ccf')));
                  var modTextMessage = decodeURIComponent(decode64(getURLParameter('ccs')));
                  var modTextMessage2 = decodeURIComponent(decode64(getURLParameter('ccs2')));
                  var modTextMessage3 = decodeURIComponent(decode64(getURLParameter('ccs3')));
                //  var modBackMessage = decodeURIComponent(decode64(getURLParameter('ccm')));

                  $(".celebration-cards-modal .canvas").addClass("template-" + modTemplate);

                  if (modAspectRatio == 0){
                     $(".celebration-cards-modal .canvas").addClass("canvas--horizontal");
                  }
                  else{
                     $(".celebration-cards-modal .canvas").addClass("canvas--vertical");
                  }

                  $('.celebration-cards-modal .canvas__decoration-image').css("background-image", "url("+modDecorationImage+")");

                  if (backgroundImage.search('img_template0.png') == -1) {
                     $('.celebration-cards-modal .canvas__background-image').css("background-image", "url("+modBackgroundImage+")");
                  }

                  $(".celebration-cards-modal .canvas .front").css("background-color", "#" + modBackgroundColor);
                  $(".celebration-cards-modal .canvas__message").css("color", "#" + modTextColor);
                  $(".celebration-cards-modal .canvas__message").css("font-family", modTextFont);
                  $(".celebration-cards-modal .canvas__message").html(modTextMessage);
                  $(".celebration-cards-modal .canvas__message2").css("color", "#" + modTextColor);
                  $(".celebration-cards-modal .canvas__message2").css("font-family", modTextFont);
                  $(".celebration-cards-modal .canvas__message2").html(modTextMessage2);
                  $(".celebration-cards-modal .canvas__message3").css("color", "#" + modTextColor);
                  $(".celebration-cards-modal .canvas__message3").css("font-family", modTextFont);
                  $(".celebration-cards-modal .canvas__message3").html(modTextMessage3);
                //  $(".celebration-cards-modal .back .paper div").html(modBackMessage);

              //    $(".celebration-cards-modal .back .left-side img").attr('src', logo);
                  $(".celebration-cards-modal__close-button img").attr('src', close);

                  setTimeout( function() {
                     $('.celebration-cards-modal .canvas').flowtype({
                        minimum   : 300,
                        maximum   : 1200,
                        minFont   : 4,
                        maxFont   : 14,
                        fontRatio : 30
                     });
                  }, 100);
               });
            }

            // clipboard
            var clipboard = new Clipboard('.celebration-cards-share-modal__content__input button', {
               target: function(trigger) {
                  return $('.celebration-cards-share-modal__content__input input')[0];
               }
            });

            clipboard.on('success', function(e) {
            $('.celebration-cards-share-modal__content__message').html('Copied! Now share it anywhere by pasting it :)');
               e.clearSelection();
            });

            clipboard.on('error', function(e) {
               $('.celebration-cards-share-modal__content__message').html('We are sorry, but it seems it does not work. Try to select the input and the manually copy it.');
            });

            onResize();
         }
      }
      else {
         setTimeout(function() {
            onResize();
         }, 100);
      }
   }
   $(document).ready(function(){
       $('#message').keyup(function(){   //triggers when keyup in textbox
            var txtBoxVal =$(this).val();
           $('#canvas__message').text(txtBoxVal);   //assigns value to your div
       });
       $('#name_honouree').keyup(function(){   //triggers when keyup in textbox
            var txtBoxVal =$(this).val();
           $('#canvas__message2').text(txtBoxVal);   //assigns value to your div
       });
       $('#first_name').keyup(function(){   //triggers when keyup in textbox
            var txtBoxVal =$(this).val();
           $('#canvas__message3').text(txtBoxVal);   //assigns value to your div
       });
   });
   $(document).on("click", ".templates-button", function(){
      $(".side-bar__button").removeClass("selected");
      $(".templates-button").addClass("selected");
      $(".element-side-bar__templates-wrapper").css("opacity", "1");
      $(".element-side-bar__background-wrapper").css("opacity", "0");
      $(".element-side-bar__text-wrapper").css("opacity", "0");
      $(".element-side-bar__templates-wrapper").addClass("elements-selected");
      $(".element-side-bar__background-wrapper").removeClass("elements-selected");
      $(".element-side-bar__text-wrapper").removeClass("elements-selected");
   });

   $(document).on("click", ".background-button", function(){
      $(".side-bar__button").removeClass("selected");
      $(".background-button").addClass("selected");
      $(".element-side-bar__templates-wrapper").css("opacity", "0");
      $(".element-side-bar__background-wrapper").css("opacity", "1");
      $(".element-side-bar__text-wrapper").css("opacity", "0");
      $(".element-side-bar__templates-wrapper").removeClass("elements-selected");
      $(".element-side-bar__background-wrapper").addClass("elements-selected");
      $(".element-side-bar__text-wrapper").removeClass("elements-selected");
   });

   $(document).on("click", ".text-button", function(){
      $(".side-bar__button").removeClass("selected");
      $(".text-button").addClass("selected");
      $(".element-side-bar__templates-wrapper").css("opacity", "0");
      $(".element-side-bar__background-wrapper").css("opacity", "0");
      $(".element-side-bar__text-wrapper").css("opacity", "1");
      $(".element-side-bar__templates-wrapper").removeClass("elements-selected");
      $(".element-side-bar__text-wrapper").addClass("elements-selected");
      $(".element-side-bar__background-wrapper").removeClass("elements-selected");
   });

   $(document).on("click", ".text-button", function(){
      $(".side-bar__button").removeClass("selected");
      $(".text-button").addClass("selected");
   });

   $(document).on("click", '.templates-container', function(){
      uploadedImage = 0;
      template = $(this).attr("data-template");
      aspectRatio = $(this).attr("data-aspect-ratio");
      decorationImage = $(this).attr("data-decoration-img");
      backgroundImage = $(this).attr("data-background-img");
      backgroundColor = $(this).attr("data-background-color");
      textColor = $(this).attr("data-text-color");
      textFont = $(this).attr("data-text-font");

      $(".canvas-wrapper .canvas").removeClass(function(index,css){
         return (css.match(/\btemplate-\S+/g) || []).join(' ');
      });

      $(".canvas-wrapper .canvas").addClass("template-" + template);

      if (aspectRatio == "vertical"){
         $(".canvas-wrapper .canvas").removeClass("canvas--horizontal");
      }
      else{
         $(".canvas-wrapper .canvas").removeClass("canvas--vertical");
      }

      $(".canvas-wrapper .canvas").addClass("canvas--" + aspectRatio);

      $('.canvas__decoration-image').css("background-image", "url("+decorationImage+")");

      if (backgroundImage.search('img_template0.png') == -1) {
         $('.canvas__background-image').css("background-image", "url("+backgroundImage+")");
      }

      $(".canvas-wrapper .canvas .front").css("background-color", backgroundColor);

      $(".canvas-wrapper .canvas__message").css("color", textColor);

      $(".canvas-wrapper .canvas__message").css("font-family", textFont);

      $(".canvas-wrapper .canvas__message2").css("color", textColor);

      $(".canvas-wrapper .canvas__message2").css("font-family", textFont);

      $(".canvas-wrapper .canvas__message3").css("color", textColor);

      $(".canvas-wrapper .canvas__message3").css("font-family", textFont);

      setTimeout(function() {
         onResize();
      }, 1);

   });

   $(document).on("click", ".color-container", function(){
      var color = $(this).attr("data-color");
      backgroundColor = color;
      $(".canvas-wrapper .canvas .front").css("background-color", color);
   });

   $(document).on("click", ".color-text-container", function(){
      var color = $(this).attr("data-color");
      textColor = color;
      $(".canvas-wrapper .canvas .canvas__message").css("color", color);
   });

   $(document).on("click", ".font-text-container", function(){
      var font = $(this).attr("data-font");
      $(".canvas-wrapper .canvas .canvas__message").css("font-family", font);
   });

   $(document).on("click", ".horitzontal-button", function(){
      var selectedCategory = $('.element-side-bar__templates-categories-element.selected').attr("data-id");
      $(".vertical").css("display","none");
      $(".horizontal.templates-container-in-category-"+selectedCategory).css("display","inline-block");
      $(".vertical-button").removeClass("selected-text");
      $(".horitzontal-button").addClass("selected-text");
   });

   $(document).on("click", ".vertical-button", function(){
      var selectedCategory = $('.element-side-bar__templates-categories-element.selected').attr("data-id");
      $(".horizontal").css("display","none");
      $(".vertical.templates-container-in-category-"+selectedCategory).css("display","inline-block");
      $(".horitzontal-button").removeClass("selected-text");
      $(".vertical-button").addClass("selected-text");
   });

   $(document).on('click', '.celebration-cards-modal__close-button, .celebration-cards-modal-new-button', function( event ) {
      event.stopPropagation();

      // modal animation
      $( '.celebration-cards-modal' ).animate( {
         opacity: 0
      }, 500, function() {
         // hide modal
         $( '.celebration-cards-modal' ).css( "display", "none" );
         $('html,body').animate({
            scrollTop: $('#celebration-cards-wrapper').offset().top + 'px'
         }, 'fast');
      });
   });

   $( document ).on('click', '.canvas-wrapper .canvas__background-image-upload-button', function(e) {
      e.stopPropagation();
   });

   $( document ).on('click', '.canvas-wrapper .canvas__message', function(e) {
      e.stopPropagation();
   });

   $( document ).on('click', '.canvas-wrapper .paper', function(e) {
      e.stopPropagation();
   });

//   $( document ).on('click', '.canvas-flipper', function() {
//      if (!detectIE()) {
//         if ($(this).hasClass("flipped")) {
//            $(this).removeClass("flipped");
//         }
//         else {
//            $(this).addClass("flipped");
//         }
//      }
//   });

   setTimeout(function() {
      onResize();
   }, 100);

   $(window).resize( function() {
      onResize();
   });

   $(document).on("change", ".celebration-cards-file", function(evt) {
      uploadAndShowPicture(evt);
   });

   $(document).on('click', '.celebration-cards-share-button', function() {
      showShareModal();
   });

   $(document).on('click', '#share', function() {
      showShareModal();
   });

   $(document).on('click', '#donate', function() {
      showDonatePage();
   });

  // $(document).on('click', '#card', function() {
  //    if ($(this).hasClass('flipped')) {
  //       $(this).removeClass('flipped');
  //    }
  //    else {
  //       $(this).addClass('flipped');//
  //    }
  // });

  // $(document).on('click', '.celebration-cards-front-button', function() {
  //    if ($('.canvas-flipper').hasClass('flipped')) {
  //       $('.canvas-flipper').removeClass('flipped');
  //    }
  // });

  // $(document).on('click', '.celebration-cards-modal-actions .celebration-cards-modal-front-button', function() {
  //    console.log("dsadsad");
  //    if ($('.celebration-cards-modal .canvas-flipper').hasClass('flipped')) {
  //       $('.celebration-cards-modal .canvas-flipper').removeClass('flipped');
  //    }
  // });

  // $(document).on('click', '.celebration-cards-back-button', function() {
  //    if (!$('.canvas-flipper').hasClass('flipped')) {
    //     $('.canvas-flipper').addClass('flipped');
  //    }
  // });

  // $(document).on('click', '.celebration-cards-modal-actions .celebration-cards-modal-back-button', function() {
  //    if (!$('.celebration-cards-modal .canvas-flipper').hasClass('flipped')) {
  //       $('.celebration-cards-modal .canvas-flipper').addClass('flipped');
  //    }
//  });

   $(document).on('click', '.celebration-cards-share-modal__close-button' , function() {
      hideShareModal();
      if (xhrImageUpload != undefined) {
         xhrImageUpload.abort();
      }
   });

   $(document).on('click', '.celebration-cards-share-modal__content__cancel button', function() {
      //kill the request
      if (xhrImageUpload != undefined) {
         xhrImageUpload.abort();
         hideShareModal();
      }
   });

   $(document).on('click', '.element-side-bar__templates-categories-element', function() {
      $('.element-side-bar__templates-categories-element').removeClass("selected");
      $(this).addClass("selected");
      $('.templates-container').css("display", "none");
      if ( $( '.celebration-cards-wrapper' ).width() < 720 ) {
         $('.templates-container-in-category-' + $(this).attr("data-id")).css("display", "inline-block");
      }
      else {
         if ( $('.selected-text').hasClass('vertical-button') ) {
            $( '.vertical-button' ).click();
         }
         else {
            $( '.horitzontal-button' ).click();
         }
      }
   });

   var currentIndex = -1;
   var elementsPositions = [];

   $(document).on('click', '.categories-arrow', function() {
      currentIndex = (currentIndex == -1) ? 0 : currentIndex;
      if (elementsPositions.length == 0) {
         $('.element-side-bar__templates-categories-container span').each(function() {
            elementsPositions.push($(this).position().left);
         });
      }
      if ($(this).hasClass('categories-arrow-right')) {
         if (currentIndex < elementsPositions.length - 1) {
            currentIndex = currentIndex + 1;
            $('.element-side-bar__templates-categories-wrapper').animate({
               scrollLeft: elementsPositions[currentIndex]
            }, 500, function() {

            });
         }
      }
      else {
         if (currentIndex > 0) {
            currentIndex = currentIndex - 1;
            $('.element-side-bar__templates-categories-wrapper').animate({
               scrollLeft: elementsPositions[currentIndex]
            }, 500, function() {

            });
         }
      }
   });

})( jQuery );
