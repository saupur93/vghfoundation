<?php
/*
Template Name: LandingPage
*/
?>


<?php get_header(); ?>

  <div class="page-wrap">
    <?php
      $page_header_image = null !== get_field('page_header_image') ? get_field('page_header_image')['url'] : false;
      $page_header_subtitle = null !== get_field('page_header_subtitle') ? get_field('page_header_subtitle') : false;
    ?>
    <?php if($page_header_image): ?>
      <section class="panel page-header" style="background-image:url(<?php print $page_header_image; ?>);">
        <div class="container">
          <div class="inner-wrap">
            <div class="header-copy-landing">
              <h1><?php print $page_header_subtitle; ?></h1>
              <p class="intro-copy-landing">For the month of August, your donation to the VGH Emergency Department will be matched by Grosvenor Americas.</p>
              <div class="donation-form-landing">
                <form name="donationform" id="donationform">
                      <div class="donation">your donation </div>
                      <div class="impact">your impact</div>
                      <div class="donation-landing">
                         <input type="text" name="yourdonation" id="yourdonation" value="$100">
                       </div>

                      <div class="impact-landing"><input type="text" name="yourimpact" id="yourimpact" value="$200" readonly="readonly">
                         <br/><p class="impact-small">with matching donation</p>
                       </div>

                       <input type="button" name="submit" id="donatenow" value="Donate now">

                 </form>
               <div>
          </div>

    </div>
  </div>
      </section>
    <?php else: ?>
      <section class="panel title-only">
        <div class="container">
          <div class="inner-wrap">
            <h1><?php the_title(); ?></h1>
          </div>
        </div>
      </section>
    <?php endif; ?>

    <?php if( have_rows('layouts') ): ?>
      <?php include(locate_template('templates/layouts/layouts-loop.php')); ?>

    <?php else : ?>
      <section class="main-content panel">
        <div class="container">
          <?php the_content(); ?>
        </div>
      </section>

    <?php endif; ?>
    <div id="cta-message" class="register-panel">
    	<div class="cta-message-content">
    		<div class="close">
    			<span></span>
    			<span></span>
    		</div>
    		<div class="text-block">
    			<h2>There is still time</h2>
    			<p>
    				In case you missed it last month, Grosvenor Americas is extending their match until <strong><em>Friday </em>, September 8th</strong>.
    			</p>
    			<div class="fb-buttons">
    				<span class="share-btn btn email-signup" onclick="window.open('https://secure.vghfoundation.ca/site/Donation2?df_id=2040&mfc_pref=T&2040.donation=form1&set.SingleDesignee=1087&set.DonationLevel=2522');">DONATE NOW</span>
    			</div>

    			<?php //print do_shortcode('[luminate_form form_id="1560" submit_text="Submit Entry" js_callback="FacebookLogin.submitLuminateSurveyCallback" form_class="facebook-luminate hidden"]'); ?>

    		</div>
        <div class="img-block" style="background-image:url('<?php echo get_template_directory_uri(); ?>/assets/img/willie/og-cast.jpg'); background-position: center top;"></div>
    	</div>
    </div>

<?php
  $related_call_to_action = null !== get_field('related_call_to_action') ? get_field('related_call_to_action') : false;
?>
<?php if($related_call_to_action): ?>
  <?php include(locate_template('templates/partials/footer-cta.php')); ?>
<?php endif; ?>

  </div>

  <?php edit_post_link('edit', '<div class="admin-edit-link">', '</div>'); ?>

<?php get_footer(); ?>
