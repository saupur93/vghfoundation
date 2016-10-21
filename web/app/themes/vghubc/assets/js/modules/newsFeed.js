import $ from 'jquery';

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
		this.hasMore = true;

    $('.load-more').on('click', this.loadMore.bind(this));
    this.panelTabs();
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
      dataType: 'html',
      xhr: () => {
        let xhr = new window.XMLHttpRequest();
        xhr.addEventListener('progress', (e) => {
          console.log(e);
           if (e.lengthComputable) {
               let percentComplete = e.loaded / e.total;
               console.log(percentComplete);
               //Do something with download progress
           }
        }, false);
         return xhr;
      }
    })
    .done((data) => {
      console.log("success");
      $('.load-more').removeClass('loading');
      $('[data-tab-content].active .additional-loaded-news').append(data);
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

    tabsEl.on('click', '[data-tab]', changeTab);
  }


  /**
   * Reset the filters and paging when tabs change
   */
   resetState() {
    this.paging = 1;
    $('.additional-loaded-news').empty();
   }
}