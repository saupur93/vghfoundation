<?php get_header(); ?>
<div class="page-wrap">
<?php
  $large_header = get_field('display_as_large_post_header')[0];
  $large_header = isset($large_header) && $large_header == 'Yes' ? true : false;
  $featured_image = wp_get_attachment_image_src( get_post_thumbnail_id( $posts->ID ), 'full' )[0];
  $featured_image = isset($featured_image) && !empty($featured_image) ? $featured_image : false;
  $featured_image_id    = get_post_thumbnail_id($post->ID);
  $featured_image_caption = get_posts(array('p' => $featured_image_id, 'post_type' => 'attachment'));
  $theme = get_field('related_theme');
  $featured_image_gallery = null !== get_field('images') ? get_field('images') : false;
?>

<?php if($large_header && $featured_image): ?>
  <section class="panel<?php if ($featured_image_caption && isset($featured_image_caption[0])) print ' has-caption '; ?>large-featured-image"<?php if($featured_image) print ' style="background-image:url(' . $featured_image . ');"'; ?>>
    <div class="container">
      <div class="inner-wrap">
        <h1><?php the_title(); ?></h1>
        <p class="date"><?php the_time('F j, Y'); ?></p>
        <div class="social-share">
          <p><a href="#" class="share-this button white-keyline">Share this story</a></p>
          <?php get_template_part('templates/partials/social', 'share'); ?>
        </div>
      </div>

      <?php if ($featured_image_caption && isset($featured_image_caption[0])): ?>
          <div class="caption-text"><?php print $featured_image_caption[0]->post_excerpt; ?></div>
      <?php endif; ?>
    </div>
  </section>

<?php else: ?>
  <section class="panel title-only">
    <div class="container">
      <div class="narrow-wrap">
        <h1><?php the_title(); ?></h1>
        <p class="date"><?php the_time('F j, Y'); ?></p>
      </div>
    </div>
  </section>
<?php endif; ?>

<?php if($featured_image_gallery): ?>
 <section class="panel inline-gallery-thumbs grid-slider">
    <div class="full-container">
    <?php foreach($featured_image_gallery as $key => $image): ?>
    <div class="gallery-item item" data-overlay-image="<?php print $image['url']; ?>"><div class="thumb" style="background-image:url(<?php print $image['url']; ?>);"></div></div>
    <?php endforeach; ?>
   </div>
  </section>
<?php endif; ?>

  <article class="main-content padded-bottom panel">
    <div class="container">
      <div class="narrow-wrap">
        <?php while (have_posts()) : the_post(); ?>
        <?php the_content(); ?>
        <?php endwhile; ?>

        <div class="social-share center">
          <p><a href="#" class="share-this button grey-keyline">Share this story</a></p>
          <?php get_template_part('templates/partials/social', 'share'); ?>
        </div>
      </div>
    </div>
  </article>


  <?php if(isset($theme[0])): ?>
    <?php
      $relatedArgs = array(
        'post_type' => 'post',
        'posts_per_page' => 2,
        'post_status' => 'publish',
        'ignore_sticky_posts' => 1,
        'post__not_in' => array(get_the_ID()),
        'meta_query' => array(
          array(
            'key' => 'related_theme',
            'value' => '"' . $theme[0]->ID . '"',
            'compare' => 'LIKE'
          ),
          array(
           'key' => '_thumbnail_id',
           'compare' => 'EXISTS'
          ),
        )
      );
      $related_query = new WP_Query($relatedArgs);
    ?>
    <?php if ($related_query->have_posts()) : ?>
    <section class="panel padded related-posts-panel">
      <div class="container">
        <div class="narrow-wrap">
          <h3>Related Stories</h3>

          <?php while($related_query->have_posts()) : $related_query->the_post(); ?>
          <?php $featured_image = wp_get_attachment_image_src(get_post_thumbnail_id($posts->ID), 'full')[0]; ?>
          <div class="col-half">
            <a href="<?php echo get_permalink(); ?>">
              <?php if(isset($featured_image)) print '<img width="150" height="150" src='. $featured_image .' />'; ?>
              <div class="content">
                <?php the_title(); ?>
                <br><span class="read-more small">Read more</span>
              </div>
            </a>
          </div>
          <?php endwhile; ?>
          <?php wp_reset_postdata(); ?>
        </div>
      </div>
    </section>
    <?php endif; ?>
  <?php endif; ?>

  <?php
    $related_call_to_action = null !== get_field('related_call_to_action') ? get_field('related_call_to_action') : false;
  ?>
  <?php if($related_call_to_action): ?>
    <?php include(locate_template('templates/partials/footer-cta.php')); ?>
  <?php endif; ?>



</div>

  <?php edit_post_link('edit', '<div class="admin-edit-link">', '</div>'); ?>

<?php get_footer(); ?>