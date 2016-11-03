<?php get_header(); ?>

<?php
  $header_image = null !== get_field('header_image') ? get_field('header_image')['url'] : false;
  $donate_url = null !== get_field('donation_url') ? get_field('donation_url') : false;
 ?>

	<div class="page-wrap">
	  <section id="page-top" class="panel page-header" style="background-image:url(<?php print $header_image; ?>);">
	    <div class="container">
	      <div class="inner-wrap">
	        <div class="cover-copy">
	          <h1><?php the_title(); ?></h1>
            <?php if($donate_url): ?>
              <a class="button" href="<?php print $donate_url; ?>" target="_blank">Donate to this event</a>
            <?php endif; ?>
          </div>
          <img src="<?php bloginfo('template_directory'); ?>/assets/img/arrow-down.svg" class="cover-arrow-down" />
        </div>
	    </div>
	  </section>

    <?php if( have_rows('layouts') ): ?>
        <?php include(locate_template('templates/layouts/layouts-loop.php')); ?>
    <?php else : ?>
      <section class="main-content panel">
        <div class="container">
          <?php the_content(); ?>
        </div>
      </section>
    <?php endif; ?>

  </div>

  <?php edit_post_link('edit', '<div class="admin-edit-link">', '</div>'); ?>

<?php get_footer(); ?>
