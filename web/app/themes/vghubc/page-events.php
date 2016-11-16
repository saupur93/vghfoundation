<?php
/*
Template Name: Events
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
        <nav class="mobile-tabs-nav">
          <h4 class="switcher">Events</h4>
          <ul class="options">
          <?php while($posts->have_posts()): $posts->the_post(); $post_count++; ?>
            <?php
              $theme_title = get_the_title();
              $sub_title = null !== get_field('sub_title') ? get_field('sub_title') : false;
             ?>
            <li class="<?php print get_post(get_the_ID())->post_name; ?>">
              <a class="open" href="#"><span><?php print $theme_title; ?></span></a>
            </li>
          <?php endwhile; ?>
          </ul>
        </nav>

        <div class="events-items">
        <?php $post_count = 0; ?>
        <?php while($posts->have_posts()): $posts->the_post(); $post_count++; ?>
        <?php
          $header_image = null !== get_field('header_image') ? get_field('header_image')['url'] : false;
          $theme_title = get_the_title();
          $sub_title = null !== get_field('sub_title') ? get_field('sub_title') : false;
        ?>
          <a href="<?php echo get_permalink(); ?>">
          <div class="events-item <?php if($post_count == 1) print ' active'; ?> <?php print get_post(get_the_ID())->post_name; ?>">
            <div class="hover-bg-image" style="background-image:url(<?php print $header_image; ?>);" data-hover-image="<?php print $header_image; ?>"></div>
            <div class="container">
              <div class="summary">
                <?php if($sub_title): ?>
                <h5><?php print $sub_title; ?></h5>
                <?php endif; ?>
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
            <li class="<?php print get_post(get_the_ID())->post_name; ?> event-item item">
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
