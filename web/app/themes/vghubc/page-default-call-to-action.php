<?php
/*
Template Name: Default w/ Call to Action
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
            <div class="header-copy">
              <h1><?php the_title(); ?></h1>
              <p class="intro"><?php print $page_header_subtitle; ?></p>
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
