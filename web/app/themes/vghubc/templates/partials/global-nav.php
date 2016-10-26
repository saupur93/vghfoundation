<header id="top-header">
  <div class="container">
    <div class="navburger">
      <div class="stripes">
        <div class="stripe stripe1"></div>
        <div class="stripe stripe2"></div>
        <div class="stripe stripe3"></div>
      </div>
    </div>

    <h1 class="site-name"><a href="<?php bloginfo('url') ?>"><?php bloginfo('name') ?></a></h1>

    <nav id="main-menu">
      <ul id="primary-nav">
        <?php wp_nav_menu(array(
          'menu'        => 'Main Menu',
          'container'   => '',
          'items_wrap'  => '%3$s'
        )); ?>
        <li><a href="/latest/" id="toggleLatest">Latest</a></li>
      </ul>

      <ul id="language-switcher">
        <li><a href="#">EN</a></li>
        <li><a href="#">中文</a></li>
      </ul>
    </nav>

    <a class="button green big-donate" href="/donate">Donate</a>

    <nav id="latest-menu">
      <div id="latest-highlights">
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
        <?php while($latest_query->have_posts()) : $latest_query->the_post(); $count++; ?>
        <?php $featured_image = wp_get_attachment_image_src(get_post_thumbnail_id($posts->ID), 'full')[0]; ?>
        <div class="highlight highlight-<?php print $count;  ?>" style="background-image:url(<?php print $featured_image; ?>);">
          <a href="<?php echo get_permalink(); ?>">
            <h2><?php the_title(); ?></h2>
            <span class="read-more">Read article</span>
          </a>
        </div>
        <?php endwhile; ?>
        <?php wp_reset_postdata(); ?>

      </div>
    </nav>
  </div>
</header>

<?php if(get_post_type(get_the_ID()) == 'themes_post'): ?>
<header id="sub-navigation">
  <div class="container breadcrumb">
  <h3><a href="/why-give"><span class="back-arrow"><img src="<?php bloginfo('template_directory'); ?>/assets/img/back-arrow.svg" /></span> Why Give</a></h3> <span class="separator">></span> <h3><?php print get_the_title(get_the_ID()); ?></h3>
  </div>
</header>
<?php endif; ?>


<?php if(get_post_type(get_the_ID()) == 'signature_events'): ?>
<header id="sub-navigation">
  <div class="container breadcrumb">
  <h3><a href="/events"><span class="back-arrow"><img src="<?php bloginfo('template_directory'); ?>/assets/img/back-arrow.svg" /></span> Events</a></h3> <span class="separator">></span> <h3><?php print get_the_title(get_the_ID()); ?></h3>
  </div>
</header>
<?php endif; ?>


<?php /* 38 is the About page */ if(menu_is_child_of(38) && get_the_ID() != 20259): ?>
<header id="sub-navigation">
  <div class="container breadcrumb">
  <h3><a href="/about"><span class="back-arrow"><img src="<?php bloginfo('template_directory'); ?>/assets/img/back-arrow.svg" /></span> <?php print get_the_title(38); ?></a></h3> <span class="separator">></span> <h3><?php print get_the_title(get_the_ID()); ?></h3>
  </div>
</header>
<?php endif; ?>