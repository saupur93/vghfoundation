import $ from 'jquery';
import qs from 'query-string';

/**
 * Load additional posts via AJAX,
 * NOTE: initial page post list is still loaded via PHP,
 * this simply does the "more" data part
 */
export default class NewsFeed {
	constructor() {
		this.api = '/latest/?jsLoad';
		this.filterCategory = 'news';
		this.filterThemeId = false;
		this.paging = 1;

    const parsed = qs.parse(location.search);

    if(parsed.category && parsed.category !== '') this.filterCategory = parsed.category;
    if(parsed.theme && parsed.theme !== '') this.filterThemeId = parsed.theme;


    $('.load-more').on('click', this.loadMore.bind(this));
    this.panelTabs();

      $(window).on('scroll', (e) => {
        if(e.currentTarget.pageYOffset > ($('#newsfeed').height() * .80)) {
          $('.back-to-top').addClass('visible')
        } else {
          $('.back-to-top').removeClass('visible')
        }
      });
	}

  /**
   * Load more news posts from WP JSON endpoint
   */
  loadMore() {
    this.paging = this.paging + 1;
    let url = this.api + `&category=${this.filterCategory}&loaded=${this.paging}`;
    // let url = this.api + `?fitler[category_name]=${this.filterCategory}&per_page=${this.perPage}&page=${this.paging}`;
    if (this.filterThemeId) {
      url = url + `&theme=   ${this.filterThemeId}`;
      // url = url + `&filter[meta_key]=related_theme&filter[meta_compare]=LIKE&filter[meta_value]=${this.filterThemeId}`;
    }
    $('.load-more').addClass('loading');
    $.ajax({
      url: url,
      dataType: 'html'
    })
    .done((data) => {
      console.log(data.length);
      $('.load-more').removeClass('loading');
      if(data) {
        $('[data-tab-content].active .additional-loaded-news').append(data);
      } else {
        $('.load-more-footer').remove();
      }
      // this.paging = this.paging + 1;
    });
  }


  panelTabs () {
    const tabsEl = $('.news-tabs');

    const changeTab = e => {
      $('[data-tab]').removeClass('active');
      $(e.currentTarget).addClass('active');
      this.resetState();

      let currentTab = $(e.currentTarget).data('tab');
      $('[data-tab-content]').removeClass('active');
      $('[data-tab-content="' + currentTab + '"]').addClass('active');

      // $('[data-tab-content]').eq(currentTab - 1).addClass('active');

    };

    // tabsEl.on('click', '[data-tab]', changeTab);
  }


  /**
   * Reset the filters and paging when tabs change
   */
   resetState() {
    this.paging = 1;
    $('.additional-loaded-news').empty();
   }
}