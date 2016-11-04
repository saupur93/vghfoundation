<?php
/*
Template Name: Events
*/
?>

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
              <li>Events bring people together to help saves lives. From treks in the mountains to golf tournaments, events of every size make a difference in the lives of our patients and families.</li>
              <li>Each year, hundreds of caring individuals and groups raise money for VGH UBC Hospital Foundation in their own creative way by hosting Community Events</li>
              <li>Be sure to visit our <a href="/events-calendar">Event Calendar</a> section regularly for upcoming events.</li>
            </ul>
          </div>
        </div>
      </div>
    </section>



    <section class="panel three-column-list white-bg">
      <article class="col-grid-4">
        <a href="/events-calendar">
          <div class="thumb" style="background-image:url('<?php bloginfo('template_directory'); ?>/assets/img/tmp/event-calendar.jpg');"></div>
          <div class="copy">
            <h4>Event calendar</h4>
            <p><span class="read-more">Learn more</span></p>
          </div>
        </a>
      </article>

      <article class="col-grid-4">
        <a href="#">
          <div class="thumb" style="background-image:url('<?php bloginfo('template_directory'); ?>/assets/img/tmp/plan-event.jpg');"></div>
          <div class="copy">
            <h4>Plan your next event</h4>
            <p><span class="read-more">Learn more</span></p>
          </div>
        </a>
      </article>

      <article class="col-grid-4">
        <a href="#">
          <div class="thumb" style="background-image:url('<?php bloginfo('template_directory'); ?>/assets/img/tmp/ways-to-give-thumb3.jpg');"></div>
          <div class="copy">
            <h4>Donate to an event</h4>
            <p><span class="read-more">Learn more</span></p>
          </div>
        </a>
      </article>
    </section>

    <?php
      $posts = new WP_Query(array(
        "post_type" => "signature_events",
        "posts_per_page" => 8,
        "order" => "DESC",
        "post_status" => "publish",
        'ignore_sticky_posts' => 1,
      ));
      $current_ID = get_the_ID();
      $post_count = 0;
    ?>
    <section class="panel extra-padded-top signature-events-panel">
      <div class="container">
        <div class="inner-wrap">
          <h2>Our Signature Events</h2>
        </div>
      </div>

      <?php if($posts->have_posts()): ?>
      <section class="panel grid-slider" id="events-section">
        <?php while($posts->have_posts()): $posts->the_post(); $post_count++; ?>
        <?php
          $header_image = null !== get_field('header_image') ? get_field('header_image')['url'] : false;
          $theme_title = get_the_title();
        ?>
        <div class="events-items">
          <a href="<?php echo get_permalink(); ?>">
          <div class="events-item <?php if($post_count == 1) print ' active'; ?> <?php print sanitize_title($theme_title); ?>">
            <div class="hover-bg-image" style="background-image:url(<?php print $header_image; ?>);" data-hover-image="<?php print $header_image; ?>"></div>
            <div class="container">
              <div class="summary">
                <h5>HONOUR AN ANGEL IN YOUR LIFE</h5>
                <h2><?php the_title(); ?></h2>
              </div>
            </div>
          </div>
          </a>
          <?php endwhile; ?>
        </div>

        <ul id="events-menu">
        <?php while($posts->have_posts()): $posts->the_post(); ?>
        <?php
          $header_image = null !== get_field('header_image') ? get_field('header_image')['url'] : false;
          $theme_title = get_the_title();
        ?>
            <li class="<?php print sanitize_title($theme_title); ?> event-item item">
              <a class="open" href="<?php echo get_permalink(); ?>">
              <span><?php the_title(); ?></span>
              <span class="date"><?php print date('F j, Y' , strtotime(get_field('event_date'))); ?></span>
              <span class="read-more">Learn More</span></a>
              <div class="thumb" style="background-image:url(<?php print $header_image; ?>);"></div>
            </li>
            <?php endwhile; ?>
        </ul>

      </section>
    <?php endif; ?>
    <?php wp_reset_query(); ?>
    </section>



  </div>

  <?php edit_post_link('edit', '<div class="admin-edit-link">', '</div>'); ?>

<?php get_footer(); ?>
