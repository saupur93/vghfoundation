const $ = require('jquery');
const FixedHeaderScroll = require('./modules/fixedHeaderScroll');
const DonationTabs = require('./modules/donationTabs');

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

		if($('.single-themes_post').length){
			this.fixedHeaderScroll = new FixedHeaderScroll();
		}

		if ($('.donation-panel-tabs').length) {
			this.donationTabs = new DonationTabs();
		}

		if ($('.fixed-sidebar').length) {
			this.anchorStickyNav();
		}

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
					$('body').addClass('latest-closed-finished');
					scrolled = true;
				}, 400);
			}

			if ($('body').hasClass('latest-closed-finished')) {
				$('body').removeClass('latest-closed-finished');
			}


			return false;
		};

		if ($('body').hasClass('front')) {
				setTimeout(() => {
					$('body').toggleClass('latest-open');
				}, 400);
		} else {
			scrolled = true;
			$('body').toggleClass('latest-closed');
			$('body').addClass('latest-closed-finished');
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
		const sectionEl = $('#themes-section');
		const gridEl = $('#grid');

    const preloadImage = url => {
			try {
				let loadingImg = new Image();
				loadingImg.src = url;
			} catch (e) {
				console.log(e);
			}
    };
		gridEl.find('li').each(function () {
			let imageURL = $(this).data('hover-image');
			preloadImage(imageURL);
		});


		const openItem = (e) => {
			e.preventDefault();
			sectionEl.addClass('expanded-overlay');
			$(e.currentTarget).parents('li').addClass('expanded');

			$('html, body').animate({ scrollTop: gridEl.offset().top - $('#top-header').outerHeight()});
		};

		const closeItem = (e) => {
			e.preventDefault();
			gridEl.find('.expanded').removeClass('expanded');
			sectionEl.removeClass('expanded-overlay');
		};

		const mouseEnterItem = (e) => {
			let hoverTitle = $(e.currentTarget).data('hover-title');
			let hoverImage = $(e.currentTarget).data('hover-image');
			sectionEl.addClass('hovered-on');
			sectionEl.find('.summary').empty().append(`<h1>${hoverTitle}</h1>`);
			sectionEl.find('.hover-bg-image').css('background-image', `url(${hoverImage})`);

		};

		const mouseLeaveItem = () => {
			sectionEl.removeClass('hovered-on');
			if (!sectionEl.hasClass('expanded-overlay')) {
				let defaultTitle = sectionEl.find('.summary').data('default-title');
				sectionEl.find('.summary').empty().append(`<h1>${defaultTitle}</h1>`);
				sectionEl.find('.hover-bg-image').removeAttr('style');
			}
		};

		gridEl.on('click', 'li .open', openItem);
		gridEl.on('click', 'li .close', closeItem);

		gridEl.on('mouseenter', 'li', mouseEnterItem);
		gridEl.on('mouseleave', mouseLeaveItem);
	}


	/**
	 * Anchor Sticky Nav
	 */
	 anchorStickyNav() {
		var lastId,
		    topMenu = $(".fixed-sidebar"),
		    // topMenuHeight = topMenu.outerHeight() + 15,
		    // All list items
		    menuItems = topMenu.find("a"),
		    // Anchors corresponding to menu items
		    scrollItems = menuItems.map(function() {
		        var item = $($(this).attr("href"));
		        if (item.length) {
		            return item;
		        }
		    });


		// Bind to scroll
		$(window).on('scroll', function() {
		    // Get container scroll position
		    var fromTop = $(this).scrollTop() + $('#top-header').outerHeight();

		    // Get id of current scroll item
		    var cur = scrollItems.map(function() {
	        if (this[0].offsetTop < fromTop) {
	            return this;
	        }
		    });
		    // Get the id of the current element
		    cur = cur[cur.length - 1];
		    var id = cur && cur.length ? cur[0].id : "";

		    if (lastId !== id) {
		        lastId = id;
		        // Set/remove active class
		        menuItems
		            .parent().removeClass("active")
		            .end().filter('[href="#' + id + '"]').parent().addClass("active");

		        // if (history.replaceState) {
		        //     history.replaceState(null, null, $location.path() +'#'+ id);
		        // } else {
		        //     location.hash = target;
		        // }
		    }
		});

	 }
}

window.App = new App();
