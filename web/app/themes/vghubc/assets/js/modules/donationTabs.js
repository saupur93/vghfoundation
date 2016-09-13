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
			let donationAmount = $(e.currentTarget).data('donation-level');
			formEl.find('input[name="set.Value"]').val('');
			formEl.find('input[name="set.DonationLevel"]').attr('value', donationAmount);
			formEl.find('span[data-donation-level]').removeClass('selected');
			$(e.currentTarget).addClass('selected');
		});

		formEl.on('click', 'input[type="submit"]', e => {
			e.preventDefault();
			let formData = formEl.serialize();
			if(formData.length){
				let link = this.donateUrl + '&' + formData;
				$('#submit').attr('href', link);
				document.getElementById('submit').click();
			}
		});

		formEl.on('click', '.other', () => {
			formEl.find('span[data-donation-level]').removeClass('selected');
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
			$('[data-tab-content]').eq(currentTab - 1).addClass('active');

		};

		tabsEl.on('click', '[data-tab]', changeTab);
	}



}

module.exports = DonationTabs;
