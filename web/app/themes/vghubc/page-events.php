<?php
/*
Template Name: Events
*/
?>

<?php get_header(); ?>

<?php get_header(); ?>

  <div class="page-wrap">

  <section class="panel page-header" style="background-image:url(<?php bloginfo('template_directory'); ?>/assets/img/headers/EVENTS-Gala-Option-1.jpg);">
    <div class="container">
      <div class="inner-wrap">
        <div class="header-copy">
          <h1><?php the_title(); ?></h1>
          <p class="intro">Each year our donors and supporters help raise much needed funds through events.</p>
        </div>
      </div>
    </div>
  </section>


  <section class="panel extra-padded overview-panel sidebar-right">
    <div class="container">
      <div class="inner-wrap">
        <div class="col-grid-9">
          <p>Individuals like you make significant contributions to our hospitals through their fundraising efforts. These events bring communities together to support causes they believe in. Click on the links below to learn more about the events we have at VGH UBC.</p>
        </div>
        <div class="col-grid-3">
          <h4>Cases for Support</h4>
          <ul class="small">
            <li>Last year 32 survivors and patients attended support groups</li>
            <li>Last year 32 survivors and patients attended support groups</li>
            <li>Last year 32 survivors and patients attended support groups</li>
          </ul>
        </div>
      </div>
    </div>
  </section>



  <section class="panel three-column-list white-bg">
    <article class="col-grid-4">
      <img src="<?php bloginfo('template_directory'); ?>/assets/img/tmp/event-calendar.jpg" />
      <div class="copy">
        <h4>Event calendar</h4>
        <p><a href="#" class="read-more">Learn more</a></p>
      </div>
    </article>

    <article class="col-grid-4">
      <img src="<?php bloginfo('template_directory'); ?>/assets/img/tmp/plan-event.jpg" />
      <div class="copy">
        <h4>Plan your next event</h4>
        <p><a href="#" class="read-more">Learn more</a></p>
      </div>
    </article>

    <article class="col-grid-4">
      <img src="<?php bloginfo('template_directory'); ?>/assets/img/tmp/ways-to-give-thumb3.jpg" />
      <div class="copy">
        <h4>Donate to an event</h4>
        <p><a href="#" class="read-more">Learn more</a></p>
      </div>
    </article>
  </section>



  <section class="panel extra-padded-top signature-events-panel">
    <div class="container">
      <div class="inner-wrap">
        <h2>Our Signature Events</h2>
      </div>
    </div>

    <section class="panel" id="events-section">
      <div class="events-items">
        <div class="events-item active angel-event">
          <div class="hover-bg-image" style="background-image:url(<?php bloginfo('template_directory'); ?>/assets/img/home/surgery-theme.jpg);" data-hover-image="<?php bloginfo('template_directory'); ?>/assets/img/home/surgery-theme.jpg"></div>
          <div class="container">
            <div class="summary">
              <h5>HONOUR AN ANGEL IN YOUR LIFE</h5>
              <h2>Angel Campaign</h2>
            </div>
          </div>
        </div>
        <div class="events-item stars-gala">
          <div class="hover-bg-image" style="background-image:url(<?php bloginfo('template_directory'); ?>/assets/img/home/cancer-theme.jpg);" data-hover-image="<?php bloginfo('template_directory'); ?>/assets/img/home/cancer-theme.jpg);"></div>
          <div class="container">
            <div class="summary">
              <h5>Night of a Thousand Stars Gala</h5>
              <h2>Night of a Thousand Stars Gala</h2>
            </div>
          </div>
        </div>
        <div class="events-item shine-gala">
          <div class="hover-bg-image" style="background-image:url(<?php bloginfo('template_directory'); ?>/assets/img/home/heart-lung-theme.jpg);" data-hover-image="<?php bloginfo('template_directory'); ?>/assets/img/home/heart-lung-theme.jpg);"></div>
          <div class="container">
            <div class="summary">
              <h5>DE BEERS TIME TO SHINE GALA</h5>
              <h2>DE BEERS TIME TO SHINE GALA</h2>
            </div>
          </div>
        </div>
        <div class="events-item">
          <div class="hover-bg-image" style="background-image:url(<?php bloginfo('template_directory'); ?>/assets/img/home/innovation-theme.jpg);" data-hover-image="<?php bloginfo('template_directory'); ?>/assets/img/home/innovation-theme.jp"></div>
          <div class="container">
            <div class="summary">
              <h5>How we can change lives together</h5>
              <h2>Imagining a world where disease are cured through an innovative small needle.</h2>
            </div>
          </div>
        </div>
      </div>

      <ul id="events-menu">
          <li class="angel-event">
            <a class="open" href="/events/surgery">
            <span>ANGEL CAMPAIGN</span>
            <span class="date">October 21, 2016</span>
            <span class="read-more">Learn More</span></a>
            <img class="thumb" src="<?php bloginfo('template_directory'); ?>/assets/img/home/surgery-thumb.jpg" ?>
          </li>
          <li class="stars-gala">
            <a class="open" href="/events/cancer">
            <span>Night of a Thousand Stars Gala</span>
            <span class="date">October 21, 2016</span>
            <span class="read-more">Learn More</span></a>
            <img class="thumb" src="<?php bloginfo('template_directory'); ?>/assets/img/home/cancer-thumb.jpg" ?>
          </li>
          <li class="shine-gala">
            <a class="open" href="/events/heart-lung">
            <span>DE BEERS TIME TO SHINE GALA</span>
            <span class="date">October 21, 2016</span>
            <span class="read-more">Learn More</span></a>
            <img class="thumb" src="<?php bloginfo('template_directory'); ?>/assets/img/home/heart-lung-thumb.jpg" ?>
          </li>
          <li class="innovation">
            <a class="open" href="/events/innovation">
            <span>Ismaili Walk</span>
            <span class="date">October 21, 2016</span>
            <span class="read-more">Learn More</span></a>
            <img class="thumb" src="<?php bloginfo('template_directory'); ?>/assets/img/home/innovation-thumb.jpg" ?>
          </li>
      </ul>

    </section>

  </section>




    <!-- <?php if( have_rows('layouts') ): $count = 0; ?>
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

        <?php endwhile; ?> -->

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
