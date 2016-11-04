<?php get_header(); ?>

	<div class="page-wrap">
    <?php get_template_part('templates/layouts/layouts'); ?>



    <section class="panel footer-themes-menu padded-top">
    <?php
      $posts = new WP_Query(array(
        "post_type" => "themes_post",
        "posts_per_page" => 6,
        "order" => "ASC",
        "post_status" => "publish",
        'ignore_sticky_posts' => 1,
      ));
      $current_ID = get_the_ID();
    ?>
      <?php if($posts->have_posts()): ?>
      <ul id="themes-menu">
        <?php $count = 0; ?>
        <?php while($posts->have_posts()): $posts->the_post(); ?>
        <?php $count++; ?>
        <?php
          $featured_image = wp_get_attachment_image_src( get_post_thumbnail_id( $posts->ID ), 'full' )[0];
          $featured_image = isset($featured_image) && !empty($featured_image) ? $featured_image : '/app/themes/vghubc/assets/img/post-placeholder.jpg';
          $theme_title = get_the_title();
        ?>
          <li class="<?php print sanitize_title($theme_title); ?><?php if(get_the_ID() == $current_ID) print ' active'; ?>">
            <a class="open" href="<?php echo get_permalink(); ?>"><span><?php the_title(); ?></span><span class="read-more">Learn More</span></a>
            <div class="thumb" style="background-image:url(<?php print $featured_image; ?>);"></div>
          </li>
        <?php endwhile; ?>
      </ul>
      <?php endif; ?>
      <?php wp_reset_query(); ?>
    </section>



  </div>

  <?php edit_post_link('edit', '<div class="admin-edit-link">', '</div>'); ?>

<?php get_footer(); ?>
