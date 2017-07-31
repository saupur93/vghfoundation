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


<?php
  $related_call_to_action = null !== get_field('related_call_to_action') ? get_field('related_call_to_action') : false;
?>
<?php if($related_call_to_action): ?>
  <?php include(locate_template('templates/partials/footer-cta.php')); ?>
<?php endif; ?>

  </div>

  <?php edit_post_link('edit', '<div class="admin-edit-link">', '</div>'); ?>

<?php get_footer(); ?>
