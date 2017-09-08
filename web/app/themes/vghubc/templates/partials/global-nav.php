<div class="header-wrap">
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
    <div class="menu-set">
      <nav id="main-menu">
        <ul id="primary-nav">
          <?php wp_nav_menu(array(
            'menu'        => 'Main Menu',
            'container'   => '',
            'after' => '<i class="submenu-trigger"></i>',
            'items_wrap'  => '%3$s'
          )); ?>
          <li class="latest-toggle<?php if(get_the_ID() == 117) print ' active'; ?>"><a href="<?php print get_permalink(117); ?>" id="toggleLatest"><?php print get_the_title(117); ?><span class="mobile-only">View All</span></a></li>
        </ul>
        <?php
          $currentLang = qtrans_getLanguage();
          $page_url = get_permalink();
          $page_url = parse_url($page_url);
          $page_url = $page_url['path'];
          $page_url = str_replace('/en', '', $page_url);
          $page_url = str_replace('/zh', '', $page_url);
         ?>
        <ul id="language-switcher">
          <li><a href="/en<?php print $page_url; ?>"<?php if($currentLang == 'en') print ' class="active"'; ?>>EN</a></li>
          <li><a href="/zh<?php print $page_url; ?>"<?php if($currentLang == 'zh') print ' class="active"'; ?>>中文</a></li>
        </ul>
      </nav>
      <nav id="latest-menu">
        <div id="latest-highlights">
          <?php
            $count = 0;
            $global_lottery_feature = get_field('global_lottery_feature', 'option');
            if ($global_lottery_feature == 'none') {
              $posts_per_page = 4;
            } else {
              $posts_per_page = 3;
            }

            $latestArgs = array(
              'post_type' => 'post',
              'posts_per_page' => $posts_per_page,
              'post_status' => 'publish',
              'ignore_sticky_posts' => true,
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

          <?php if ($global_lottery_feature != 'none'): ?>
            <div class="highlight highlight-<?php print $global_lottery_feature ?> highlight-lottery">
              <a href="<?php echo get_field('global_lottery_feature_link', 'option') ?>">
                <h2><?php echo get_field('global_lottery_feature_text', 'option'); ?></h2>
              </a>
            </div>
          <?php endif ?>

          <?php while($latest_query->have_posts()) : $latest_query->the_post(); $count++; ?>
          <?php $featured_image = wp_get_attachment_image_src(get_post_thumbnail_id(), 'full')[0]; ?>
          <div class="highlight highlight-<?php print $count;  ?>" style="background-image:url(<?php print $featured_image; ?>);">
            <a href="<?php echo get_permalink(); ?>">
              <h2><?php the_title(); ?></h2>
              <span class="read-more">Read article </span>
            </a>
          </div>
          <?php endwhile; ?>
          <?php wp_reset_postdata(); ?>

        </div>
      </nav>
    </div>
    <?php $global_donate_button_link = get_field('global_donate_button_link', 'option'); ?>
    <?php $donate = qtrans_getLanguage() == 'zh' ?  '捐助' : 'Donate' ?>
    <?php $take_over_campaign = null !== get_field('take_over_campaign') ? get_field('take_over_campaign') : false; ?>
    <?php if (!$take_over_campaign): ?>
      <?php $signature_event = get_post(get_the_ID()); ?>
      <?php $specific_donate_link = get_field('donation_url', get_the_ID()); ?>
      <?php $donation_link = isset($specific_donate_link) && !empty($specific_donate_link) ? $specific_donate_link : $global_donate_button_link; ?>
      <?php if(get_post_type(get_the_ID()) == 'signature_events'): ?>
      <a class="button green big-donate<?php if($signature_event->post_name) print ' '.preg_replace("/\-+\d+$/", "",$signature_event->post_name); ?>" href="<?php print $donation_link; ?>" target="_blank"><?php print $donate; ?></a>
      <?php elseif(get_post_type(get_the_ID()) == 'themes_post'): ?>
      <a class="button green big-donate<?php if($signature_event->post_name) print ' '.$signature_event->post_name; ?>" href="<?php print $donation_link; ?>" target="_blank"><?php print $donate; ?></a>
      <?php else:
        $specific_donate_link = get_field('donation_url', get_the_ID());
        $donation_link2 = isset($specific_donate_link) && !empty($specific_donate_link) ? $specific_donate_link : $global_donate_button_link;
        ?>
      <a class="button green big-donate" href="<?php print $donation_link2; ?>" target="_blank"><?php print $donate; ?></a>
      <?php endif; ?>
    <?php else: ?>
      <?php $select_signature_event = null !== get_field('select_signature_event') ? get_field('select_signature_event') : false; ?>
      <?php $donation_link = $select_signature_event && null !== get_field('donation_url', $select_signature_event[0]->ID) ? get_field('donation_url', $select_signature_event[0]->ID) : false; ?>
      <?php if($donation_link && !empty($donation_link)): ?>
      <a class=" <?php if($select_signature_event[0]->post_name) print ' '.$select_signature_event[0]->post_name; ?>" href="<?php print $donation_link; ?>" target="_blank"><?php print $donate; ?></a>
    <?php else: ?>
      <a class="button green big-donate" href="<?php print $global_donate_button_link; ?>" target="_blank"><?php print $donate; ?></a>
      <?php endif ?>
    <?php endif ?>
  </div>
</header>

<?php if(get_post_type(get_the_ID()) == 'themes_post'): ?>
<header id="sub-navigation">
  <div class="container breadcrumb">
  <h3><a href="/why-give"><span class="back-arrow"><img src="<?php bloginfo('template_directory'); ?>/assets/img/back-arrow.svg" /></span> Why Give</a></h3> <span class="separator">></span> <h3><?php print get_the_title(get_the_ID()); ?></h3>
  <?php $donation_link = null !== get_field('donation_url', get_the_ID()) ? get_field('donation_url', get_the_ID()) : false; ?>
  <?php if($donation_link && !empty($donation_link)): ?>
  <a href="<?php print $donation_link; ?>" target="_blank" class="sub-header-donate"><h3>Donate to <?php print get_the_title(get_the_ID()); ?></h3></a>
  <?php endif; ?>
  </div>
</header>
<?php endif; ?>


<?php if(get_post_type(get_the_ID()) == 'signature_events'): ?>
<header id="sub-navigation">
  <div class="container breadcrumb">
  <?php $event_text = qtrans_getLanguage() == 'zh' ?  '筹款活动' : 'Events' ?>
  <?php $donate_text = qtrans_getLanguage() == 'zh' ?  '捐助' : 'Donate to this event' ?>
  <?php $donation_button_text = null !== get_field('donation_button_text') ? get_field('donation_button_text') : $donate_text; ?>

  <h3><a href="/events/#signature-events"><span class="back-arrow"><img src="<?php bloginfo('template_directory'); ?>/assets/img/back-arrow.svg" /></span> <?php print $event_text; ?></a></h3> <span class="separator">></span> <h3><?php print get_the_title(get_the_ID()); ?></h3>
  <?php $donation_link = null !== get_field('donation_url', get_the_ID()) ? get_field('donation_url', get_the_ID()) : false; ?>
  <?php if($donation_link && !empty($donation_link)): ?>
  <a href="<?php print $donation_link; ?>" target="_blank" class="sub-header-donate"><h3><?php print $donation_button_text; ?></h3></a>
  <?php endif; ?>
  </div>
</header>
<?php endif; ?>


<?php /* 38 is the About page; 20259 is the Annual Report page */
  if(menu_is_child_of(38) && get_the_ID() != 20259): ?>
<header id="sub-navigation">
  <div class="container breadcrumb">
  <h3><a href="/about"><span class="back-arrow"><img src="<?php bloginfo('template_directory'); ?>/assets/img/back-arrow.svg" /></span> <?php print get_the_title(38); ?></a></h3> <span class="separator">></span> <h3><?php print get_the_title(get_the_ID()); ?></h3>
  </div>
</header>
<?php endif; ?>
</div>
