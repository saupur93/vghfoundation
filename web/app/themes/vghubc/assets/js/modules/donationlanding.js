const $ = require('jquery');

class DonationLanding {

  constructor (){
    this.donateUrl = 'https://secure.vghfoundation.ca/site/Donation2?df_id=2040&mfc_pref=T&2040.donation=form1';
    console.log ("entered");

    if ($('.donationform').length) {
      this.donationForm();

    }

  }

  donationForm () {
    const formEl = $('.donationform');

    //console.log ("entered again");



    formEl.on('keydown', 'input[name="yourdonation"]', e => {

        e.focus();

        formEl.find('input[name="yourdonation"]').val('');



    });

    formEl.on('click', 'input[type="submit"]', e => {
      e.preventDefault();
      e.focus();
      console.log("focused on submit");
    var text_value = formEl.find('input[name="yourdonation"]').val('');
    console.log (text_value);

      // Need to append 00 to dollar value for Luminate's handling of decimals

    });


  }






}

module.exports = DonationLanding;
