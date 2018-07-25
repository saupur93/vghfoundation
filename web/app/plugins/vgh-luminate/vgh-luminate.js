(function($) {
  /* define init variables for your organization */
  luminateExtend({
    apiKey: 'wDB09SQODRpVIOvX',
    path: {
      nonsecure: 'http://support.vghfoundation.ca/site/',
      secure: 'https://secure.vghfoundation.ca/site/'
    }
  });

  $(function() {
    /* UI handlers for the Survey example */
    if($('.survey-form').length > 0) {
      $('.survey-form').submit(function() {
        window.scrollTo(0, 0);
        $(this).hide();
        $(this).before('<div class="panel survey-loading">' +
                         'Loading ...' +
                       '</div>');
      });
    }

    /* example: handle the Survey form submission */
    /* if the Survey is submitted succesfully, display a thank you message */
    /* if there is an error, display it inline */
    window.submitSurveyCallback = {
      error: function(data) {
        $('#survey-errors').remove();
        $('.survey-form .row .alert').remove();

        $('.survey-form').prepend('<div id="survey-errors">' +
                                      '<div class="alert-box alert" style="color: red;">' +
                                        data.errorResponse.message + '<br /><br />' +
                                      '</div>' +
                                    '</div>');

        $('.survey-loading').remove();
        $('.survey-form').show();
      },
      success: function(data) {
        $('#survey-errors').remove();
        $('.survey-form .row .survey-alert-wrap').remove();

        if(data.submitSurveyResponse.success == 'false') {
          $('.survey-form').prepend('<div id="survey-errors">' +
                                      '<div class="alert-box alert" style="color: red;">' +
                                        'There was an error with your submission. Please try again.' + '<br /><br />' +
                                      '</div>' +
                                    '</div>');

          var surveyErrors = luminateExtend.utils.ensureArray(data.submitSurveyResponse.errors);
          $.each(surveyErrors, function() {
            if(this.errorField) {
              $('input[name="' + this.errorField + '"]').closest('.row')
                                                        .prepend('<div class="small-12 columns survey-alert-wrap">' +
                                                                   '<div class="alert-box alert" style="color: red;">' +
                                                                     this.errorMessage +
                                                                   '</div>' +
                                                                 '</div>');
            }
          });

          $('.survey-loading').remove();
          $('.survey-form').show();
        }
        else {
          $('.survey-loading').remove();
          $('.survey-form').before('<div class="alert-box success">' +
                                     'You\'ve been signed up!' +
                                   '</div>' +
                                   '<div class="panel">' +
                                     `<p>Thanks for joining our community. You'll be hearing from us soon.</p>` +
                                   '</div>');
        }
      }
    };
    /* bind any forms with the "luminateApi" class */
    luminateExtend.api.bind();
  });
})(typeof jQuery === 'undefined' && typeof Zepto === 'function' ? Zepto : jQuery);
