const $ = require('jquery');

class DonationTabs {

  constructor (){
    this.donateUrl = 'https://secure.vghfoundation.ca/site/Donation2?df_id=1620&mfc_pref=T&1620.donation=form1';
    this.panelTabs();

    if ($('.donation-form').length) {
      this.donationForm();
    }

  }


  donationForm () {
    const formEl = $('.donation-form');

    formEl.on('click', 'span[data-donation-level]', e => {
      if(!$(e.currentTarget).hasClass('.other')){
        let donationLevel = $(e.currentTarget).data('donation-level');
        formEl.find('input[name="set.Value"]').val('');
        $(e.currentTarget).parents('form').find('#submit').attr('href', '');
        formEl.find('input[name="set.DonationLevel"]').attr('value', donationLevel);
        formEl.find('span[data-donation-level]').removeClass('selected');
        $(e.currentTarget).addClass('selected');

      }
    });

    formEl.on('click', 'input[type="submit"]', e => {
      e.preventDefault();
      let formData = $(e.currentTarget).parents('form').serializeArray();

      // Need to append 00 to dollar value for Luminate's handling of decimals
      for (let index = 0; index < formData.length; ++index) {
        console.log(formData[index].value);
        if (formData[index].name == "set.Value") {
          formData[index].value = formData[index].value + '00';
            break;
        }
      }
      formData = $.param(formData);

      if(formData.length){
        let link = this.donateUrl + '&' + formData;
        $(e.currentTarget).parents('form').find('#submit').attr('href', link);
        $(e.currentTarget).parents('form').find('#submit')[0].click();
      }
    });

    formEl.on('click', '.other', (e) => {
      formEl.find('span[data-donation-level]').removeClass('selected');
      let donationLevel = $(e.currentTarget).data('donation-level');
      formEl.find('input[name="set.DonationLevel"]').attr('value', donationLevel);
      // formEl.find('input[name="set.DonationLevel"]').attr('value', '');
    });
  }


  panelTabs () {
    const tabsEl = $('.donation-panel-tabs');

    const changeTab = e => {
      this.donateUrl = $(e.currentTarget).data('donate-url');
      console.log(this.donateUrl);

      $('[data-tab]').removeClass('active');
      $(e.currentTarget).addClass('active');

      let currentTab = $(e.currentTarget).data('tab');
      $('[data-tab-content]').removeClass('active');
      $('[data-tab-content="' + currentTab + '"]').addClass('active');

      // $('[data-tab-content]').eq(currentTab - 1).addClass('active');

    };

    tabsEl.on('click', '[data-tab]', changeTab);
  }



}

module.exports = DonationTabs;
