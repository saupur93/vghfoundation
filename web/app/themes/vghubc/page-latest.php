<?php
/*
Template Name: Latest
*/
?>


<?php get_header(); ?>

  <div class="page-wrap">

    <section class="latest-header panel slideshow">
      <?php
        $count = 0;
        $latestArgs = array(
          'post_type' => 'post',
          'posts_per_page' => 4,
          'post_status' => 'publish',
          'post__in' => get_option('sticky_posts'),
          'meta_query' => array(
            array(
             'key' => '_thumbnail_id',
             'compare' => 'EXISTS'
            ),
          )
        );
        $latest_query = new WP_Query($latestArgs);
      ?>
      <div class="slide-images">
      <?php while($latest_query->have_posts()) : $latest_query->the_post(); $count++; ?>
      <?php $featured_image = wp_get_attachment_image_src(get_post_thumbnail_id(), 'full')[0]; ?>
        <div class="slide-bg slide-<?php print $count;  ?><?php if($count == 1) print ' active'; ?>" style="background-image:url(<?php print $featured_image; ?>);"></div>
          <?php endwhile; ?>
          <?php wp_reset_postdata(); ?>
      </div>
      <div class="container">
        <div class="inner-wrap">
          <div class="hero-copy" data-colour-type="surgery">
            <h1><?php the_title(); ?></h1>
            <?php $count = 0; while($latest_query->have_posts()) : $latest_query->the_post(); $count++; ?>
            <div class="slide-text slide-<?php print $count;  ?><?php if($count == 1) print ' active'; ?>" data-colour-type="surgery">
              <p class="intro"><?php the_title(); ?></p>
              <?php $link_text = null !== get_field('alternative_button_text') ? get_field('alternative_button_text') : 'Read more'; ?>
              <p><a href="<?php echo get_permalink(); ?>" class="read-more white"><?php print $link_text; ?></a></p>
            </div>
            <?php endwhile; ?>
            <?php wp_reset_postdata(); ?>
            <ul class="slide-pager">
            <?php $count = 0; while($latest_query->have_posts()) : $latest_query->the_post(); $count++; ?>
              <li class="<?php if($count == 1) print 'active'; ?>"><?php print $count; ?></li>
            <?php endwhile; ?>
            <?php wp_reset_postdata(); ?>
            </ul>
          </div>

        </div>
      </div>
    </section>

    <section class="panel news-tabs" id="newsfeed">
      <?php
        if(!isset($main_category) && empty($main_category)){
          $main_category = isset($_GET['category']) ? sanitize_title_with_dashes($_GET['category']) : '';
        }
        if(!isset($themeId) && empty($themeId)){
          $themeId = isset($_GET['theme']) ? sanitize_title_with_dashes($_GET['theme']) : '';
        }
      ?>
      <ul class="tabs">
        <li<?php if(empty($main_category) || $main_category == 'news') print ' class="active"'; ?> data-tab="1" data-postCategory="news"><a href="?category=">News</a></li>
        <li data-tab="2"<?php if($main_category == 'impact') print ' class="active"'; ?> data-postCategory="impact"><a href="?category=impact">Impact</a></li>
      </ul>

      <div class="container<?php if(empty($main_category) || $main_category == 'news') print ' active'; ?>" data-tab-content="1">
        <ul class="theme-filters">
          <li <?php if(empty($themeId)) print ' class="active"'; ?> data-themeFilter="all"><a href="?category=<?php print $main_category; ?>">All</a></li>
          <?php
            $themesArgs = array(
              'post_type' => 'themes_post',
              'posts_per_page' => '-1'
            );
            $themes_query = new WP_Query($themesArgs);
          ?>
          <?php while($themes_query->have_posts()) : $themes_query->the_post(); ?>
          <li<?php if(!empty($themeId) && $themeId == get_the_id()) print ' class="active"'; ?> data-themeFilter="<?php print get_the_id(); ?>"><a href="?category=<?php print $main_category; ?>&theme=<?php print get_the_id(); ?>"><?php the_title(); ?></a></li>
          <?php endwhile; ?>
          <?php wp_reset_postdata(); ?>
        </ul>

        <section class="panel three-stories-panel">
          <div class="container">
            <div class="inner-wrap">
              <?php include(locate_template('templates/partials/latest-loop.php')); ?>


              <?php if(!$posts->have_posts()): ?>
                <p class="center none-found">Sorry, no posts were found for this category.</p>
              <?php endif; ?>
            </div>
          </div>
        </section>
        <section class="panel additional-loaded-news three-stories-panel">
        </section>

        <?php if($posts->have_posts()): ?>
        <footer class="panel center padded load-more-footer">
          <span class="load-more button green keyline">Load more<span class="progress"></span></span>
        </footer>
        <?php endif; ?>
      </div>

      <div class="container<?php if($main_category == 'impact') print ' active'; ?>" data-tab-content="2">
        <ul class="theme-filters">
          <li <?php if(empty($themeId)) print ' class="active"'; ?> data-themeFilter="all"><a href="?category=<?php print $main_category; ?>">All</a></li>
          <?php
            $themesArgs = array(
              'post_type' => 'themes_post',
              'posts_per_page' => '-1'
            );
            $themes_query = new WP_Query($themesArgs);
          ?>
          <?php while($themes_query->have_posts()) : $themes_query->the_post(); ?>
          <li<?php if(!empty($themeId) && $themeId == get_the_id()) print ' class="active"'; ?> data-themeFilter="<?php print get_the_id(); ?>"><a href="?category=<?php print $main_category; ?>&theme=<?php print get_the_id(); ?>"><?php the_title(); ?></a></li>
          <?php endwhile; ?>
          <?php wp_reset_postdata(); ?>
        </ul>

        <section class="panel three-stories-panel">
          <div class="container">
            <div class="inner-wrap">
              <?php $main_category = 'impact'; ?>
              <?php include(locate_template('templates/partials/latest-loop.php')); ?>


              <?php if(!$posts->have_posts()): ?>
                <p class="center none-found">Sorry, no posts were found for this category.</p>
              <?php endif; ?>
            </div>
          </div>
        </section>
        <section class="panel additional-loaded-news three-stories-panel">
        </section>

        <?php if($posts->have_posts()): ?>
        <footer class="panel center padded load-more-footer">
          <span class="load-more button green keyline">Load more<span class="progress"></span></span>
        </footer>
        <?php endif; ?>
      </div>

      <a href="#"><img src="<?php bloginfo('template_directory'); ?>/assets/img/back-to-top.svg" class="back-to-top" /></a>
    </section>


    <?php include(locate_template('templates/partials/newsletter-signup.php')); ?>

  </div>

  <?php edit_post_link('edit', '<div class="admin-edit-link">', '</div>'); ?>

<?php get_footer(); ?>
