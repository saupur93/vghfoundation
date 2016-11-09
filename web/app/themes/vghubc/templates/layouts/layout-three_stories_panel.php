<?php
  $section_title = get_sub_field('section_title');
  $related_category = null !== get_sub_field('category_to_feature') ? get_sub_field('category_to_feature') : false;
  $related_theme = null !== get_sub_field('theme_to_feature') ? get_sub_field('theme_to_feature')[0]->ID : false;
  $current_ID = get_the_ID();



  if ($related_category && !related_theme){
    $cats = implode(', ', $related_category);
    $posts = new WP_Query(array(
      "post_type" => "post",
      "posts_per_page" => 3,
      "orderby" => "date",
      "order" => "DESC",
      'cat' => $cats,
      'ignore_sticky_posts' => 1,
    ));
  } elseif($related_theme && !related_category){
    $posts = new WP_Query(array(
      "post_type" => "post",
      "posts_per_page" => 3,
      "orderby" => "date",
      "order" => "DESC",
      'ignore_sticky_posts' => 1,
      'meta_query' => array(
        array(
          'key' => 'related_theme',
          'value' => '"' . $related_theme . '"',
          'compare' => 'LIKE'
        )
      )
    ));
  } elseif($related_category && $related_theme){
    $posts = new WP_Query(array(
      "post_type" => "post",
      "posts_per_page" => 3,
      "orderby" => "date",
      "order" => "DESC",
      'cat' => implode(', ', $related_category),
      'ignore_sticky_posts' => 1,
      'meta_query' => array(
        'relation' => 'AND',
        array(
          'key' => 'related_theme',
          'value' => '"' . $related_theme . '"',
          'compare' => 'LIKE'
        )
      )
    ));
  } else {
    $cats = implode(', ', $related_category);
    $posts = new WP_Query(array(
      "post_type" => "post",
      "posts_per_page" => 3,
      "orderby" => "date",
      "order" => "DESC",
      'ignore_sticky_posts' => 1,
      'cat' => $cats
    ));
  }
?>
<section class="panel padded three-stories-panel<?php echo ' panel-'.$count; ?>">
  <div class="container">
    <div class="inner-wrap">
      <h2><?php print $section_title; ?></h2>
      <div class="row">
      <?php if($posts->have_posts()): ?>
        <?php $post_count = 0; ?>
        <?php while($posts->have_posts()): $posts->the_post(); ?>
        <?php $post_count++; ?>
        <?php
          $featured_image = wp_get_attachment_image_src( get_post_thumbnail_id( $posts->ID ), 'full' )[0];
          $featured_image = isset($featured_image) && !empty($featured_image) ? $featured_image : '/app/themes/vghubc/assets/img/post-placeholder.jpg';
            $theme = get_field('related_theme')[0];
            $theme_title = get_the_title($theme->ID);
            $class = isset($theme->ID) ? ' ' . sanitize_title($theme_title) : '';
            $link_text = null !== get_field('alternative_button_text') && get_field('alternative_button_text') != '' ? get_field('alternative_button_text') : 'Read Article';
            $featured_image_gallery = null !== get_field('images') ? get_field('images') : false;

         ?>


        <article class="col-grid-4<?php if($featured_image_gallery) print ' multi-image'; ?>">
        <?php $is_theme = get_post_type($current_ID) == 'themes_post' ? true : false; ?>
        <?php if ($is_theme && isset($theme->post_title) && !empty($theme->post_title)): ?>
        <div class="tag"><?php print $theme->post_title; ?></div>
        <?php endif ?>
        <a href="<?php echo get_permalink(); ?>">
          <?php if(!empty($class)): ?>
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
        </a>
        </article>
      <?php endwhile; ?>
      <?php endif; ?>

        <?php wp_reset_query(); ?>

      </div>
    </div>
  </div>
</section>
