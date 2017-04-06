<?php
	echo $before_widget;
	echo $before_title . $title . $after_title;
?>

<script>
(function($) {
  /* define init variables for your organization */
  luminateExtend({
    apiKey: '<?php echo $luminate_api_key?>',
    path: {
      nonsecure: '<?php echo $nonsecure_luminate_url ?>site/',
      secure: '<?php echo $secure_luminate_url ?>site/'
    }
  });
});
</script>

<form class="luminateApi survey-form" method="POST" action="<?php echo $nonsecure_luminate_url ?>site/CRSurveyAPI" data-luminateApi='{"callback": "submitSurveyCallback", "requiresAuth": "true"}'>
          <input type="hidden" name="method" value="submitSurvey">
          <input type="hidden" name="survey_id" value="1441">
          <div class="row">
              <input type="text" placeholder="First Name" name="cons_first_name" id="survey-cons-first-name">
          </div>
          <br />
          <div class="row">
              <input type="text" placeholder="Last Name" name="cons_last_name" id="survey-cons-last-name">
          </div>
          <br />
          <div class="row">
              <input type="text" placeholder="Email" name="cons_email" id="survey-cons-email">
          </div>
          <br/>
          <input type="hidden" name="cons_email_opt_in" value="true">
          <div class="row">
            <div class="small-12 large-9 large-offset-3 columns">
              <button type="submit" class="button small">Sign Me Up</button>
            </div>
          </div>
        </form>


<?php
	echo $after_widget;
?>
