<?php
/*
Template Name: Home
*/
?>


<?php get_header(); ?>
<?php
  $hero_title = null !== get_field('hero_title') ? get_field('hero_title') : false;
  $take_over_campaign = null !== get_field('take_over_campaign') ? get_field('take_over_campaign') : false;

?>
<div class="page-wrap">
    <?php
        $count = 0;
        $related_category = null !== get_field('story_categories_to_feature') ? get_field('story_categories_to_feature') : false;
        if(!$take_over_campaign){
          $latestArgs = array(
            'post_type' => 'post',
            'posts_per_page' => 6,
            'post_status' => 'publish',
            "orderby" => "date",
            "order" => "DESC",
            'category_name' => 'featured-on-home',
            'ignore_sticky_posts' => 1,
            'meta_query' => array(
              array(
               'key' => '_thumbnail_id',
               'compare' => 'EXISTS'
              ),
            )
          );
        } else {
          $latestArgs = array(
            "post_type" => "post",
            "posts_per_page" => 4,
            "orderby" => "date",
            "order" => "DESC",
            'category__and' => $related_category,
            'ignore_sticky_posts' => 1,
          );
        }
        $latest_query = new WP_Query($latestArgs);
      ?>
  <?php if($latest_query->have_posts()): ?>
  <?php $select_signature_event = null !== get_field('select_signature_event') ? get_field('select_signature_event') : false; ?>
  <section class="hero-content panel slideshow<?php if($select_signature_event[0]->post_name) print ' '.$select_signature_event[0]->post_name; ?>">
      <div class="slide-images">
      <?php while($latest_query->have_posts()) : $latest_query->the_post(); $count++; ?>
      <?php $featured_image = wp_get_attachment_image_src(get_post_thumbnail_id(), 'full')[0]; ?>
        <div class="slide-bg slide-<?php print $count;  ?><?php if($count == 1) print ' active'; ?>" style="background-image:url(<?php print $featured_image; ?>);"></div>
          <?php endwhile; ?>
          <?php wp_reset_postdata(); ?>
      </div>
      <div class="container">
        <div class="inner-wrap">
          <div class="hero-copy<?php if($select_signature_event[0]->post_name) print ' '.$select_signature_event[0]->post_name; ?>" data-colour-type="surgery">
            <?php if($hero_title): ?>
            <h1><?php print $hero_title; ?></h1>
            <?php else: ?>
            <h1><?php print $hero_title; ?></h1>
            <?php endif; ?>
            <?php $count = 0; while($latest_query->have_posts()) : $latest_query->the_post(); $count++; ?>
            <div class="slide-text slide-<?php print $count;  ?><?php if($count == 1) print ' active'; ?>" data-colour-type="surgery">
            <?php if(!has_excerpt()): ?>
              <p class="intro"><?php the_title(); ?></p>
            <?php else: ?>
              <p class="intro"><?php print get_the_excerpt(); ?></p>
            <?php endif; ?>
              <?php $link_text = null !== get_field('alternative_button_text') && !empty(get_field('alternative_button_text')) ? get_field('alternative_button_text') : 'Read article'; ?>
              <p>
                <a href="<?php echo get_permalink(); ?>" class="read-more white"><?php print $link_text; ?></a>
                <?php if($select_signature_event[0]->post_name == 'angel-campaign'): ?>
                  <a href="<?php echo get_permalink($select_signature_event[0]->ID); ?>" class="read-more white second-cta">The Angel Campaign</a>
                <?php endif; ?>
              </p>
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

  <?php if(have_rows('themes')): ?>
  <section class="panel" id="themes-section">
    <nav class="mobile-tabs-nav">
      <h4 class="switcher">Philanthropic Pillars</h4>
      <ul class="options">
      <?php while (have_rows('themes') ) : the_row(); ?>
        <?php
          $related_theme = null !== get_sub_field('related_theme') ? get_sub_field('related_theme')[0] : false;
          $theme_title = $related_theme->post_title;
          $theme_name = $related_theme->post_name;
         ?>
        <li class="<?php print $theme_name; ?>">
          <a class="open" href="#"><span><?php print $theme_title; ?></span></a>
        </li>
      <?php endwhile; ?>
      </ul>
    </nav>
    <div class="themes-items">
      <?php $tab_count = 0; ?>
      <?php while (have_rows('themes') ) : the_row(); $tab_count++; ?>
      <?php
        $theme_full_image = get_sub_field('theme_full_image')['url'];
        $summary = get_sub_field('summary');
        $related_theme = get_sub_field('related_theme')[0];
        $class = $related_theme->post_name;
        $learn_more = qtrans_getLanguage() !== 'zh' ? 'Learn more about '. $related_theme->post_title : '更多資訊';
      ?>
      <a href="<?php print get_permalink($related_theme->ID); ?>" class="themes-item<?php if($tab_count == 1) print ' active'; ?><?php print ' '. $class; ?>">
        <div class="hover-bg-image" style="background-image:url(<?php print $theme_full_image; ?>);" data-hover-image="<?php print $theme_full_image; ?>"></div>
        <div class="container">
          <div class="summary">
            <?php print $summary; ?>
            <span class="mobile-only read-more"><?php print $learn_more; ?></span>
          </div>
        </div>
      </a>
      <?php endwhile; ?>
    </div>

    <ul id="themes-menu">
      <?php $tab_count = 0; ?>
      <?php while (have_rows('themes') ) : the_row(); $tab_count++; ?>
      <?php
        $theme_thumbnail_image = get_sub_field('theme_thumbnail_image')['url'];
        $related_theme = get_sub_field('related_theme')[0];
        $class = $related_theme->post_name;
        $learn_more = qtrans_getLanguage() !== 'zh' ? 'Learn more' : '更多資訊';
      ?>


        <li class="<?php print ' '. $class; ?>">
          <a class="open" href="<?php print get_permalink($related_theme->ID); ?>"><span><?php print get_the_title($related_theme->ID); ?></span><span class="read-more"><?php print $learn_more; ?></span></a>
          <div class="thumb" style="background-image:url('<?php print $theme_thumbnail_image; ?>');"></div>
        </li>
      <?php endwhile; ?>
    </ul>
  </section>
  <?php endif; ?>
  <div id="cta-message" class="register-panel">
  	<div class="cta-message-content">
  		<div class="close">
  			<span></span>
  			<span></span>
  		</div>
  		<div class="text-block">
  			<h2>End the year with a donation</h2>
  			<p>
  				Your donation changes lives. Donate before midnight on Dec 31 to receive your 2017 tax receipt.
  			</p>
  			<div class="fb-buttons">
  				<a class="button big-donate  angel-campaign" href="https://secure.vghfoundation.ca/site/Donation2?df_id=2080&mfc_pref=T&2080.donation=form1&_ga=2.251262342.1053310539.1513799223-1590723844.1510451875&utm_source=google&utm_medium=homepage_pop_up&utm_campaign=year_end&utm_content=pop_up" target="_blank">Donate</a>
  			</div>

  			<?php //print do_shortcode('[luminate_form form_id="1560" submit_text="Submit Entry" js_callback="FacebookLogin.submitLuminateSurveyCallback" form_class="facebook-luminate hidden"]'); ?>

  		</div>
      <div class="img-block" style="background-image:url('<?php echo get_template_directory_uri(); ?>/assets/img/willie/Richard-Gaffney_pop_up.jpg'); background-position: center top;"></div>
  	</div>
  </div>

	<?php edit_post_link('edit', '<div class="admin-edit-link">', '</div>'); ?>

<?php get_footer(); ?>
