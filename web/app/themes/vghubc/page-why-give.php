<?php
/*
Template Name: Why Give
*/
?>


<?php get_header(); ?>

  <div class="page-wrap">
<!--    <section class="panel title-only">
      <div class="container">
        <h1 class="section-title"><?php the_title(); ?></h1>
      </div>
    </section> -->


  <section class="panel page-header" style="background-image:url(<?php bloginfo('template_directory'); ?>/assets/img/headers/why-give.jpg);">
    <div class="container">
      <div class="inner-wrap">
        <div class="header-copy">
          <h1><?php the_title(); ?></h1>
          <p>Your donations are critical. And with the cost of medicine rising, they are also the only way for us to continue to ensure that our hospitals and health care teams can deliver BC’s best, most specialized care for adults.</p>
        </div>
      </div>
    </div>
  </section>


  <section class="panel padded three-column-boxes">
    <div class="container">
      <div class="inner-wrap">
        <h2 class="section-title">Urgent Needs</h2>
        <article class="col-third">
          <h3>Most Urgent Needs</h3>
          <p>Support our hospitals by donating to the Most Urgent Needs Fund.</p>
          <p class="bottom"><a href="#" class="read-more">Give Now</a></p>
        </article>

        <article class="col-third">
          <h3>ALS Research</h3>
          <p>Dr. Neil Cashman, one of the world’s renowned experts in brain and spinal cord degenerative diseases, is leading revolutionary research into how neurodegenerative diseases.</p>
          <p class="bottom"><a href="#" class="read-more">Give Now</a></p>
        </article>

      </div>
    </div>
  </section>

    <?php if( have_rows('layouts') ): $count = 0; ?>
        <?php while ( have_rows('layouts') ) : the_row(); $count++;

            if( get_row_layout() == 'basic_content_area' ): ?>
              <?php include(locate_template('templates/layouts/layout-basic_content_area.php')); ?>

            <?php elseif( get_row_layout() == 'basic_content_area_sidebar' ): ?>
              <?php include(locate_template('templates/layouts/layout-basic_content_area-sidebar.php')); ?>

            <?php elseif( get_row_layout() == 'accordion' ): ?>
              <?php include(locate_template('templates/layouts/layout-accordion.php')); ?>

            <?php elseif( get_row_layout() == 'three_column' ): ?>
              <?php include(locate_template('templates/layouts/layout-three_column.php')); ?>

            <?php elseif( get_row_layout() == 'three_column_sidebar' ): ?>
              <?php include(locate_template('templates/layouts/layout-three_column_sidebar.php')); ?>


            <?php elseif( get_row_layout() == 'raw_html' ): ?>
              <?php include(locate_template('templates/layouts/layout-raw_html.php')); ?>
            <?php endif; ?>

        <?php endwhile; ?>

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
