<?php
/*
Template Name: Latest
*/
?>


<?php get_header(); ?>

  <div class="page-wrap">

    <section class="latest-header panel slideshow">
      <div class="slide-images">
        <div class="slide-bg slide-1 active" style="background-image:url(<?php bloginfo('template_directory'); ?>/assets/img/headers/Surgery-primary_Umberto-copy.jpg);"></div><!--
         --><div class="slide-bg slide-2" style="background-image:url(<?php bloginfo('template_directory'); ?>/assets/img/headers/Feature-primary-photo-Jamie-skiing-downhill.jpg);"></div><!--
         -->
      </div>
      <div class="container">
        <div class="inner-wrap">
          <div class="hero-copy" data-colour-type="surgery">
            <h1><?php the_title(); ?></h1>
            <div class="slide-text slide-1 active" data-colour-type="surgery">
              <p class="intro">“The outstanding pre- and post-operative care I received was absolutely world-class.”</p>
              <p><a href="#" class="read-more white">Umberto's Story</a></p>
            </div>

            <div class="slide-text slide-2" data-colour-type="cancer">
              <p class="intro">World-class skier Jamie Crane-Mauzy credits revolutionary brain surgery and VGH’s ICU team for saving her life.</p>
              <p><a href="#" class="read-more white">Jamie's Story</a></p>
            </div>

            <ul class="slide-pager">
              <li class="active">1</li>
              <li>2</li>

            </ul>
          </div>

        </div>
      </div>
    </section>

    <section class="panel news-tabs" id="newsfeed">
      <?php
        if(!$main_category){
          $main_category = isset($_GET['category']) ? sanitize_title_with_dashes($_GET['category']) : '';
        }

        if(!$themeId){
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

    </section>


    <section class="panel grey-bg extra-padded newsletter-signup">
      <div class="container">
          <h2>Find out how <span class="green">your donations</span> make a difference.</h2>
          <form>
            <input type="text" placeholder="Name" />
            <input type="email" placeholder="Email" />
            <input type="submit" value="Subscribe" />
          </form>
        </div>
    </section>









  </div>

  <?php edit_post_link('edit', '<div class="admin-edit-link">', '</div>'); ?>

<?php get_footer(); ?>
