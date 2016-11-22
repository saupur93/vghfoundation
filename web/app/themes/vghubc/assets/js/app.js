import $ from 'jquery';
const FixedHeaderScroll = require('./modules/fixedHeaderScroll');
const DonationTabs = require('./modules/donationTabs');
import slideshow from './modules/slideshow';
import NewsFeed from './modules/newsFeed';
import AnnualReport from './modules/annualReport';

class App {

  constructor() {
    // just some console fun.
    console.log('%cBuilt by', 'font: 200 16px Calibri;color:#CCC');
    console.log('%cSignals', 'font: 200 28px Calibri;color:#93cb3c');
    console.log('%chttp://www.signals.ca', 'font: 200 16px Calibri;color:#CCC');

    this.behaviours();

  }

  /**
   * load Classes based on body CSS class
   */
  behaviours() {
    this.latestNavigation();
    this.themesGrid();
    this.eventsGrid();
    this.toggleMobileNav();
    this.submenuMobileDropdown();


    if ($('#sub-navigation').length) {
      this.fixedHeaderScroll = new FixedHeaderScroll();
    }

    if ($('.donation-panel-tabs').length) {
      this.donationTabs = new DonationTabs();
    }

    if ($('.fixed-sidebar').length) {
      this.anchorStickyNav();
    }

    if ($('.slideshow').length) {
      $('.slideshow').each((i, elm) => {
        slideshow.init(elm);
      });
    }

    if ($('.themes-overview-stats').length) {
      const options = {
        menuEl: '.tabs-menu',
        contentEl: '.tab-content',
        tabItem: '[data-tab-item]'
      };
      this.themesTabs(options);
    }

    if ($('.expanding-list').length) {
      this.expandingLinks();
    }

    if ($('.grid-slider').length) {
      this.gridSlider();
    }

    if($('.page-template-page-latest').length) {
      this.newsFeed = new NewsFeed();
    }

    if($('.page-template-page-annual-report').length) {
      this.annualReport = new AnnualReport();
    }

    if ($('.single-post').length) {
      this.shareToggle();
    }

    if ($('.accordion-panel').length) {
      this.accordion();
    }

    if ($('.panel.tiered-tabs').length) {
      this.tierTabs();
    }
  }

  /**
   * latest news navigation menu animations
   */
  latestNavigation() {
    const latestToggle = document.getElementById('toggleLatest');
    let scrolled = false;

    const toggleFunction = (e, close) => {
      if (!$('body').hasClass('latest-open') || close) {
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
      }


      return false;
    };

    if($(window).width() > 1180) {
      if ($('body').hasClass('front')) {
        setTimeout(() => {
          $('body').toggleClass('latest-open');
        }, 400);
      } else {
        scrolled = true;
        $('body').toggleClass('latest-closed');
        $('body').addClass('latest-closed-finished');
      }

      if ($('body').hasClass('front')) {
        if($(window).height() <= 800) {
          setTimeout(() => {
            toggleFunction(undefined, true);
          }, 3000);
        }
      }

      latestToggle.onmouseover = toggleFunction;

      $(window).on('scroll', (e) => {
        if (!scrolled) toggleFunction(e, true);
        scrolled = true;
      });
    }
  }

  /**
   * preload images
   * @param  {[type]} url [description]
   */
  preloadImage(url) {
    try {
      let loadingImg = new Image();
      loadingImg.src = url;
    } catch (e) {
      console.log(e);
    }
  }

  /**
   * Homepage themes grid expansion animations
   */
  themesGrid() {
    let self = this;
    const sectionEl = $('#themes-section');
    const gridEl = $('#themes-menu');


    sectionEl.find('.hover-bg-image').each(function() {
      let imageURL = $(this).data('hover-image');
      self.preloadImage(imageURL);
    });

    const mouseEnterItem = (e) => {
      sectionEl.addClass('hovered-on');
      let index = $(e.currentTarget).index();
      sectionEl.find('.themes-item').removeClass('active');
      sectionEl.find('.themes-item').eq(index).addClass('active');
    };

    const mouseLeaveItem = () => {
      sectionEl.removeClass('hovered-on');
    };

    gridEl.on('mouseenter', 'li', mouseEnterItem);

    sectionEl.find('.switcher').on('click', e => {
      $(e.currentTarget).parents('.mobile-tabs-nav').toggleClass('open');
    });

    sectionEl.find('.options li').on('click', e => {
      mouseEnterItem(e);
      $(e.currentTarget).parents('.mobile-tabs-nav').toggleClass('open');
      let index = $(e.currentTarget).index();
      sectionEl.find('#themes-menu li').each(function(i){
        if (i == index) {
          $(this).removeClass('hide')
        } else {
          $(this).addClass('hide')
        }
      });

    });



  }


/**
   * Homepage themes grid expansion animations
   */
  eventsGrid() {
    let self = this;
    const sectionEl = $('#events-section');
    const gridEl = $('#events-menu');


    sectionEl.find('.hover-bg-image').each(function() {
      let imageURL = $(this).data('hover-image');
      self.preloadImage(imageURL);
    });

    const mouseEnterItem = (e) => {
      sectionEl.addClass('hovered-on');
      let index = $(e.currentTarget).index();
      sectionEl.find('.events-item').removeClass('active');
      sectionEl.find('.events-item').eq(index).addClass('active');
    };

    const mouseLeaveItem = () => {
      sectionEl.removeClass('hovered-on');
    };

    gridEl.on('mouseenter', 'li', mouseEnterItem);

    sectionEl.find('.switcher').on('click', e => {
      $(e.currentTarget).parents('.mobile-tabs-nav').toggleClass('open');
    });

    sectionEl.find('.options li').on('click', e => {
      e.preventDefault();
      mouseEnterItem(e);
      $(e.currentTarget).parents('.mobile-tabs-nav').toggleClass('open');
      let index = $(e.currentTarget).index();
      sectionEl.find('#themes-menu li').each(function(i){
        if (i == index) {
          $(this).removeClass('hide')
        } else {
          $(this).addClass('hide')
        }
      });

    });


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

        menuItems
          .parent().removeClass("active")
          .end().filter('[href="#' + id + '"]').parent().addClass("active");
      }
    });

  }

  /**
   * theme hover tab behaviour
   * @param  options = {menuEl: '.tabs-menu', contentEl: '.tab-content', tabItem: '[data-tab-item]'}
   * @return {[type]}            [description]
   */
  themesTabs(options) {
    const self = this;
    const {
      menuEl,
      contentEl,
      tabItem
    } = options;

    const $contentEl = $(contentEl);
    const $menuEl = $(menuEl);
    const $tabItem = $contentEl.find(tabItem);

    const mouseEnterItem = (e) => {
      $contentEl.addClass('hovered-on');
      let index = $(e.currentTarget).index();
      $tabItem.removeClass('active');
      $tabItem.eq(index).addClass('active');
    };

    const mouseLeaveItem = () => {
      $contentEl.removeClass('hovered-on');
    };

    $menuEl.on('mouseenter', 'li', mouseEnterItem);
    $menuEl.on('click', 'li', () => {
      return false;
    });

    $('.themes-overview-stats').find('.switcher').on('click', e => {
      $(e.currentTarget).parents('.mobile-tabs-nav').toggleClass('open');
    });

    $('.themes-overview-stats').find('.options li').on('click', e => {
      // e.preventDefault();
      mouseEnterItem(e);
      $(e.currentTarget).parents('.mobile-tabs-nav').toggleClass('open');
      let index = $(e.currentTarget).index();
      $('.themes-overview-stats').find('#themes-menu li').each(function(i){
        if (i == index) {
          $(this).removeClass('hide')
        } else {
          $(this).addClass('hide')
        }
      });

    });

  }

  /**
   * expanding li links list
   */
  expandingLinks() {
    const panel = $('.expanding-two-column-list');
    const list = panel.find('.expanding-list');
    const displayCount = list.data('default-showing');

    const showItems = () => {
      for (var i = displayCount; i < list.find('li').length; i++) {
        $(list.find('li')[i]).addClass('hide');
      }
    };
    showItems();

    $('.read-more.list.more').on('click', () => {
      panel.addClass('expanded');
      $(list.find('li')).removeClass('hide');
    });

    $('.read-more.list.less').on('click', () => {
      panel.removeClass('expanded');
      showItems();
    });


  }


/**
   * Grid slider for events
   */
  gridSlider() {
    const panel = $('.grid-slider');
    const items = panel.find('.item');
    const pagerTpl = '<div class="pager"><div class="left"></div><div class="right"></div></div>';
    let currentSlide = 0;

    const transitionSlides = (currentSlide) => {
      items.css({
        transform: 'translate3d(-'+ 100 * currentSlide +'%,0,0)'
      });
    };

    const pagerVisibility = () => {
      if(currentSlide == 0) {
        panel.find('.pager .left').fadeOut();
        panel.find('.pager .right').fadeIn();
      }

      if (currentSlide > 0) {
        panel.find('.pager .left').fadeIn();
      }

      if (currentSlide == (items.length - 3)) {
        panel.find('.pager .right').fadeOut();
      }
    };

    if (items.length >= 3) {
      panel.append(pagerTpl);
      pagerVisibility();
    }

    panel.find('.pager').on('click', '.left', () => {
      if (currentSlide > 0 ) {
        currentSlide--;
        transitionSlides(currentSlide);
        pagerVisibility();
      }
    });

    panel.find('.pager').on('click', '.right', () => {
      if (currentSlide < (items.length - 3)) {
        currentSlide++;
        transitionSlides(currentSlide);
        pagerVisibility();
      }
    });


    const overlay = $('#overlay');
    // ajax the content
    const loadContent = (e) => {
      let galleryHTML = $(e.currentTarget).parents('.inline-gallery-thumbs').html();
      overlay.find('.overlay-content').append(galleryHTML);
    };

    // open overlay
    const openOverlay = (e) => {
      e.preventDefault();
      $('body').addClass('overlay-open');
      let index = $(e.currentTarget).index();
      transitionSlides(index);
      loadContent(e);
    };

    // close overlay and clear DOM innerHTML
    const closeOverlay = (e) => {
      e.preventDefault();
      $('body').removeClass('overlay-open');
      overlay.find('.overlay-content').empty();
    };

    const loadPrevious = e => {
      if (currentSlide > 0 ) {
        currentSlide--;
        $('#overlay .gallery-item').css({
          transform: 'translate3d(-'+ 100 * currentSlide +'%,0,0)'
        });
        pagerVisibility();
      }
    };

    const loadNext = e => {
      if (currentSlide < ($('#overlay .gallery-item').length - 3)) {
        currentSlide++;
        $('#overlay .gallery-item').css({
          transform: 'translate3d(-'+ 100 * currentSlide +'%,0,0)'
        });
        pagerVisibility();
      }
    };

    // overlay events
    $('[data-overlay-image]').on('click', openOverlay);
    overlay.on('click', '.close', closeOverlay);
    overlay.on('click', '.prev', loadPrevious);
    overlay.on('click', '.next', loadNext);

  }

  /**
   * Toggle share option visibility
   */
  shareToggle() {
    const elm = $('.social-share');
    const toggleShareVisible = (e) => {
      e.preventDefault();
      $(e.currentTarget).parents('.social-share').find('.share-options').toggleClass('showing');
    }
    elm.find('.share-this').on('click', toggleShareVisible);
  }


  accordion () {
    let accordion = $('.accordion-item');
    accordion.find('.accordion-title').on('click', function () {
      $(this).parents('.accordion-item').toggleClass('active');
    });
  }


  /**
   * tier tabs
   */
  tierTabs () {
    let tab = $('[data-tab]');
    tab.on('click', function () {
      const index = $(this).index();
      const tierLevel = $(this).data('tier');

      $('html,body').animate({
        scrollTop: $(this).parents('.panel').offset().top - 140
      }, 600);

      $(this).parents('.tab-group').find('[data-tab][data-tier="' + tierLevel + '"]').removeClass('active');
      $(this).addClass('active');
      $(this).parents('.tab-group').first().find('[data-tab-content]').removeClass('active');
      $(this).parents('.tab-group').first().find('[data-tab-content][data-tier="' + tierLevel + '"]').eq(index).addClass('active');
      // if(tierLevel == 1) {
      //   $(this).parents('.panel').find('[data-tab-content="1"][data-tier="2"]').eq(0).addClass('active');
      // }
      if(tierLevel == 1){
        $(this).parents('.panel').find('[data-tab-content="1"][data-tier="2"]').addClass('active');
      }
    });


    $('.mobile-tabs-nav').find('.switcher').on('click', e => {
      $(e.currentTarget).parents('.mobile-tabs-nav').toggleClass('open');
    });

    $('.mobile-tabs-nav').find('.options li').on('click', e => {
      $(e.currentTarget).parents('.mobile-tabs-nav').toggleClass('open');
      let index = $(e.currentTarget).index();
      $('.mobile-tabs-nav').find('#themes-menu li').each(function(i){
        if (i == index) {
          $(this).removeClass('hide')
        } else {
          $(this).addClass('hide')
        }
      });

      $('.main-tabs li').removeClass('active');
      $('.tab-group').find('.main-tabs li').eq(index).addClass('active');

    });


  }




  /**
   * mobile nav toggle
   */
  toggleMobileNav() {
    const elm = $('.navburger');
    elm.on('click', function (){
      $('body').toggleClass('nav-open');
    });
  }

  /**
   * Dropdown triggers
   */
  submenuMobileDropdown(){
    $('.submenu-trigger').on('click', function(e) {
      const parent = $(this).parent();
      parent.toggleClass('submenu-open');
    })
  }
}

window.App = new App();
