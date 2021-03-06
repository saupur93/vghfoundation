<?php

  if(!isset($main_category) && empty($main_category)){
    $main_category = isset($_GET['category']) ? sanitize_title_with_dashes($_GET['category']) : '';
  }

  if(!isset($themeId) && empty($themeId)){
    $themeId = isset($_GET['theme']) ? sanitize_title_with_dashes($_GET['theme']) : '';
  }

  $paged = isset($_GET['loaded']) ? $_GET['loaded'] : 1;

  if($themeId) {
    $posts = new WP_Query(array(
      "post_type" => "post",
      "posts_per_page" => 5,
      "orderby" => "date",
      "order" => "DESC",
      "category_name" => $main_category,
      "paged" => $paged,
      'ignore_sticky_posts' => 1,
      "meta_query" => array(
        array(
          'key' => 'related_theme',
          'value' => '"' . $themeId . '"',
          'compare' => 'LIKE'
        )
      )
    ));
  } else {
    $posts = new WP_Query(array(
      "post_type" => "post",
      "posts_per_page" => 5,
      "orderby" => "date",
      "order" => "DESC",
      "category_name" => $main_category,
      "paged" => $paged,
      'ignore_sticky_posts' => 1,
    ));
  }


  if (isset($_GET['jsLoad']) && !$posts->have_posts()) {
    return false;
  }
?>

    <?php if($posts->have_posts()): ?>
        <?php $count = 0; ?>
        <?php while($posts->have_posts()): $posts->the_post(); ?>
        <?php $count++; ?>
        <?php
          $featured_image = wp_get_attachment_image_src( get_post_thumbnail_id( $posts->ID ), 'full' )[0];
          $featured_image = isset($featured_image) && !empty($featured_image) ? $featured_image : '/app/themes/vghubc/assets/img/post-placeholder.jpg';
            $theme = isset(get_field('related_theme')[0]) ? get_field('related_theme')[0] : false;
            if($theme) {
              $theme_title = get_the_title($theme->ID);
            } else {
              $theme_title = false;
            }
            if($theme) {
              $class = isset($theme->ID) ? ' ' . get_post($theme->ID)->post_name : '';
            } else {
              $class = false;
            }
            $link_text = null !== get_field('alternative_button_text') && get_field('alternative_button_text') != '' ? get_field('alternative_button_text') : 'Read Article';
            $featured_image_gallery = null !== get_field('images') ? get_field('images') : false;
         ?>
      <?php if($count == 1): ?>
      <div class="row">
        <a href="<?php echo get_permalink(); ?>">
        <article class="col-float-4<?php if($featured_image_gallery) print ' multi-image'; ?>">
          <?php if(!empty($class)): ?>
          <div class="tag<?php print $class; ?>"><?php print $theme_title; ?></div>
          <?php endif; ?>
          <?php if($featured_image_gallery): ?>
          <div class="featured-multi">
          <?php foreach($featured_image_gallery as $key => $image): ?>
          <?php if($key < 3): ?>
            <div class="thumb thumb-<?php print $key; ?>"<?php if($image) print ' style="background-image:url('. $image['url'] .')"'; ?>></div>
          <?php endif; ?>
          <?php endforeach; ?>
          </div>
          <?php else: ?>
          <div class="thumb"<?php if($featured_image) print ' style="background-image:url('. $featured_image .')"'; ?>></div>
          <?php endif; ?>
          <div class="copy">
            <p class="date"><?php the_time('F j, Y'); ?></p>
            <p><?php the_title(); ?></p>
          </div>
          <p class="more"><span class="read-more"><?php print $link_text; ?></span></p>
        </article>
        </a>
      <?php endif; ?>

        <?php if($count == 2): ?>
        <a href="<?php echo get_permalink(); ?>">
        <article class="col-float-4<?php if($featured_image_gallery) print ' multi-image'; ?>">
          <?php if(!empty($class)): ?>
          <div class="tag<?php print $class; ?>"><?php print $theme_title; ?></div>
          <?php endif; ?>
          <?php if($featured_image_gallery): ?>
          <div class="featured-multi">
          <?php foreach($featured_image_gallery as $key => $image): ?>
          <?php if($key < 3): ?>
            <div class="thumb thumb-<?php print $key; ?>"<?php if($image) print ' style="background-image:url('. $image['url'] .')"'; ?>></div>
          <?php endif; ?>
          <?php endforeach; ?>
          </div>
          <?php else: ?>
          <div class="thumb"<?php if($featured_image) print ' style="background-image:url('. $featured_image .')"'; ?>></div>
          <?php endif; ?>
          <div class="copy">
            <p class="date"><?php the_time('F j, Y'); ?></p>
            <p><?php the_title(); ?></p>
          </div>
          <p class="more"><span class="read-more"><?php print $link_text; ?></span></p>
        </article>
        </a>
        <?php endif; ?>

        <?php if($count == 3): ?>
        <a href="<?php echo get_permalink(); ?>">
        <article class="col-float-4<?php if($featured_image_gallery) print ' multi-image'; ?>">
          <?php if(!empty($class)): ?>
          <div class="tag<?php print $class; ?>"><?php print $theme_title; ?></div>
          <?php endif; ?>
          <?php if($featured_image_gallery): ?>
          <div class="featured-multi">
          <?php foreach($featured_image_gallery as $key => $image): ?>
          <?php if($key < 3): ?>
            <div class="thumb thumb-<?php print $key; ?>"<?php if($image) print ' style="background-image:url('. $image['url'] .')"'; ?>></div>
          <?php endif; ?>
          <?php endforeach; ?>
          </div>
          <?php else: ?>
          <div class="thumb"<?php if($featured_image) print ' style="background-image:url('. $featured_image .')"'; ?>></div>
          <?php endif; ?>
          <div class="copy">
            <p class="date"><?php the_time('F j, Y'); ?></p>
            <p><?php the_title(); ?></p>
          </div>
          <p class="more"><span class="read-more"><?php print $link_text; ?></span></p>
        </article>
        </a>
      </div>
      <?php endif; ?>


      <?php if($count == 4): ?>
      <div class="row">
        <a href="<?php echo get_permalink(); ?>">
        <article class="col-float-8">
          <?php if(!empty($class)): ?>
          <div class="tag<?php print $class; ?>"><?php print $theme_title; ?></div>
          <?php endif; ?>
          <?php if($featured_image_gallery): ?>
          <div class="featured-multi">
          <?php foreach($featured_image_gallery as $key => $image): ?>
          <?php if($key < 3): ?>
            <div class="thumb thumb-<?php print $key; ?>"<?php if($image) print ' style="background-image:url('. $image['url'] .')"'; ?>></div>
          <?php endif; ?>
          <?php endforeach; ?>
          </div>
          <?php else: ?>
          <div class="thumb"<?php if($featured_image) print ' style="background-image:url('. $featured_image .')"'; ?>></div>
          <?php endif; ?>
          <div class="copy">
            <p class="date"><?php the_time('F j, Y'); ?></p>
            <p><?php the_title(); ?></p>
          </div>
          <p class="more"><span class="read-more"><?php print $link_text; ?></span></p>
        </article>
        </a>
        <?php endif; ?>

        <?php if($count == 5): ?>
        <a href="<?php echo get_permalink(); ?>">
        <article class="col-float-4<?php if($featured_image_gallery) print ' multi-image'; ?>">
          <?php if(!empty($class)): ?>
          <div class="tag<?php print $class; ?>"><?php print $theme_title; ?></div>
          <?php endif; ?>
          <?php if($featured_image_gallery): ?>
          <div class="featured-multi">
          <?php foreach($featured_image_gallery as $key => $image): ?>
          <?php if($key < 3): ?>
            <div class="thumb thumb-<?php print $key; ?>"<?php if($image) print ' style="background-image:url('. $image['url'] .')"'; ?>></div>
          <?php endif; ?>
          <?php endforeach; ?>
          </div>
          <?php else: ?>
          <div class="thumb"<?php if($featured_image) print ' style="background-image:url('. $featured_image .')"'; ?>></div>
          <?php endif; ?>
          <div class="copy">
            <p class="date"><?php the_time('F j, Y'); ?></p>
            <p><?php the_title(); ?></p>
          </div>
          <p class="more"><span class="read-more"><?php print $link_text; ?></span></p>
        </article>
        </a>
        <?php endif; ?>

      <?php endwhile; ?>
    <?php if($count > 4): ?>
      </div>
    <?php endif; ?>
      <?php wp_reset_query(); ?>
    <?php endif; ?>
