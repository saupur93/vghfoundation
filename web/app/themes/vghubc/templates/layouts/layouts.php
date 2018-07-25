  <?php
    // these are the governance pages
    $gover_ids = menu_featured_images(49, true);
  ?>

    <?php
      $page_header_image = null !== get_field('page_header_image') ? get_field('page_header_image')['url'] : false;
      $page_header_subtitle = null !== get_field('page_header_subtitle') ? get_field('page_header_subtitle') : false;
    ?>
    <?php if($page_header_image): ?>
      <section class="panel page-header" style="background-image:url(<?php print $page_header_image; ?>);">
        <div class="container">
          <div class="inner-wrap">
            <div class="header-copy">
              <h1><?php the_title(); ?></h1>
              <p class="intro"><?php print $page_header_subtitle; ?></p>
            </div>
          </div>
        </div>
      </section>
    <?php else: ?>
      <section class="panel title-only">
        <div class="container">
          <div class="inner-wrap">
            <h1><?php the_title(); ?></h1>
          </div>
        </div>
      </section>
    <?php endif; ?>


    <?php if( have_rows('layouts') ): ?>
        <?php include(locate_template('templates/layouts/layouts-loop.php')); ?>


        <?php if(is_page('about')): ?>
          <?php include(locate_template('templates/partials/governance-menu.php')); ?>
          <?php $ID = 21106; ?>
          <?php $text_content = null !== get_field('text_content', $ID) ? get_field('text_content', $ID) : false; ?>
          <?php $white_text_colour = null !== get_field('text_colour', $ID) && get_field('text_colour') == 'White text' ? true : false; ?>
          <?php $bg_image = null !== get_field('background_image', $ID) ? get_field('background_image', $ID)['url'] : false; ?>

          <?php if($text_content): ?>
            <section class="panel extra-padded<?php if($white_text_colour) print ' bg-color-cta'; ?><?php if($bg_image) print ' bg-image-cta'; ?>"<?php if($bg_image) print ' style="background-image:url('. $bg_image .');"'; ?>>
              <div class="container">
                <div class="inner-wrap">
                  <?php print $text_content; ?>
                </div>
              </div>
            </section>
          <?php endif; ?>

          <?php include(locate_template('templates/layouts/layout-footer-menu.php')); ?>
          <?php include(locate_template('templates/partials/newsletter-signup.php')); ?>
        <?php endif; ?>


        <?php
          // if its a child of About Us, but not the Annual Report, and not one of the Governance pages
          if(menu_is_child_of(38) && get_the_ID() != 20259 && !in_array(get_the_ID(), $gover_ids)): ?>
          <?php include(locate_template('templates/layouts/layout-footer-menu.php')); ?>
          <?php include(locate_template('templates/partials/newsletter-signup.php')); ?>
        <?php endif; ?>


        <?php if(in_array(get_the_ID(), $gover_ids)): ?>
          <?php include(locate_template('templates/partials/governance-menu.php')); ?>
          <?php include(locate_template('templates/partials/newsletter-signup.php')); ?>
        <?php endif; ?>

    <?php else : ?>
      <section class="main-content panel">
        <div class="container">
          <?php the_content(); ?>
        </div>
      </section>
    <?php endif; ?>
