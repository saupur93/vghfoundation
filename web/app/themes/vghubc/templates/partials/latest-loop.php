          <?php
            if(!$main_category){
              $main_category = isset($_GET['category']) ? sanitize_text_field($_GET['category']) : null;
            }

            if(!$themeId){
              $themeId = isset($_GET['theme']) ? sanitize_text_field($_GET['theme']) : null;
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
              ));
            }
           ?>

            <?php if($posts->have_posts()): ?>
                <?php $count = 0; ?>
                <?php while($posts->have_posts()): $posts->the_post(); ?>
                <?php $count++; ?>
                <?php
                  $featured_image = wp_get_attachment_image_src( get_post_thumbnail_id( $posts->ID ), 'full' )[0];
                  $featured_image = isset($featured_image) && !empty($featured_image) ? $featured_image : 'http://placehold.it/400x200/333333';
                    $theme = get_field('related_theme')[0];
                    $theme_title = get_the_title($theme);
                    $class = isset($theme) ? ' ' . sanitize_title($theme_title) : '';
                 ?>
              <?php if($count == 1): ?>
              <div class="row">
                <a href="<?php echo get_permalink(); ?>">
                <article class="col-float-4">
                  <?php if(!empty($class)): ?>
                  <div class="tag<?php print $class; ?>"><?php print $theme_title; ?></div>
                  <?php endif; ?>
                  <div class="thumb"<?php if($featured_image) print ' style="background-image:url('. $featured_image .')"'; ?>></div>
                  <div class="copy">
                    <p class="date"><?php the_time('F j, Y'); ?></p>
                    <p><?php the_title(); ?></p>
                  </div>
                  <p class="more"><span class="read-more">Read Article</span></p>
                </article>
                </a>
              <?php endif; ?>

                <?php if($count == 2): ?>
                <a href="<?php echo get_permalink(); ?>">
                <article class="col-float-4">
                  <?php if(!empty($class)): ?>
                  <div class="tag<?php print $class; ?>"><?php print $theme; ?></div>
                  <?php endif; ?>
                  <div class="thumb"<?php if($featured_image) print ' style="background-image:url('. $featured_image .')"'; ?>></div>
                  <div class="copy">
                    <p class="date"><?php the_time('F j, Y'); ?></p>
                    <p><?php the_title(); ?></p>
                  </div>
                  <p class="more"><span class="read-more">Read Article</span></p>
                </article>
                </a>
                <?php endif; ?>

                <?php if($count == 3): ?>
                <a href="<?php echo get_permalink(); ?>">
                <article class="col-float-4">
                  <?php if(!empty($class)): ?>
                  <div class="tag<?php print $class; ?>"><?php print $theme; ?></div>
                  <?php endif; ?>
                  <div class="thumb"<?php if($featured_image) print ' style="background-image:url('. $featured_image .')"'; ?>></div>
                  <div class="copy">
                    <p class="date"><?php the_time('F j, Y'); ?></p>
                    <p><?php the_title(); ?></p>
                  </div>
                  <p class="more"><span class="read-more">Read Article</span></p>
                </article>
                </a>
              </div>
              <?php endif; ?>


              <?php if($count == 4): ?>
              <div class="row">
                <a href="<?php echo get_permalink(); ?>">
                <article class="col-float-8">
                  <?php if(!empty($class)): ?>
                  <div class="tag<?php print $class; ?>"><?php print $theme; ?></div>
                  <?php endif; ?>
                  <div class="thumb"<?php if($featured_image) print ' style="background-image:url('. $featured_image .')"'; ?>></div>
                  <div class="copy">
                    <p class="date"><?php the_time('F j, Y'); ?></p>
                    <p><?php the_title(); ?></p>
                  </div>
                  <p class="more"><span class="read-more">Read Article</span></p>
                </article>
                </a>
                <?php endif; ?>

                <?php if($count == 5): ?>
                <a href="<?php echo get_permalink(); ?>">
                <article class="col-float-4">
                  <?php if(!empty($class)): ?>
                  <div class="tag<?php print $class; ?>"><?php print $theme; ?></div>
                  <?php endif; ?>
                  <div class="thumb"<?php if($featured_image) print ' style="background-image:url('. $featured_image .')"'; ?>></div>
                  <div class="copy">
                    <p class="date"><?php the_time('F j, Y'); ?></p>
                    <p><?php the_title(); ?></p>
                  </div>
                  <p class="more"><span class="read-more">Read Article</span></p>
                </article>
                </a>
                <?php endif; ?>

              <?php endwhile; ?>
            <?php if($count > 4): ?>
              </div>
            <?php endif; ?>
              <?php wp_reset_query(); ?>
            <?php endif; ?>