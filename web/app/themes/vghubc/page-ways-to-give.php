<?php
/*
Template Name: Ways to Give
*/
?>


<?php get_header(); ?>

<div class="page-wrap">
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

  <?php else : ?>
    <section class="main-content panel">
      <div class="container">
        <?php the_content(); ?>
      </div>
    </section>

  <?php endif; ?>


  <!-- <?php if(have_rows('tab')): ?>
  <section class="panel padded grey-bg donation-panel-tabs">
    <ul class="tabs">
      <?php $tab_count = 0; ?>
      <?php while (have_rows('tab') ) : the_row(); $tab_count++; ?>
        <?php
          $url = get_sub_field('donate_url');
          $tab_name = get_sub_field('tab_name');
        ?>
      <li<?php if($tab_count == 1) print ' class="active"'; ?> data-donate-url="<?php print $url; ?>" data-tab="<?php print $tab_count; ?>"><?php print $tab_name; ?></li>
      <?php endwhile; ?>
    </ul>

    <?php $tab_count = 0; ?>
    <?php while (have_rows('tab') ) : the_row(); $tab_count++; ?>
      <?php
        $form = get_sub_field('raw_form_html');
      ?>
    <div class="container<?php if($tab_count == 1) print ' active'; ?>" data-tab-content="<?php print $tab_count; ?>">
      <div class="inner-wrap">
        <?php print $form; ?>
      </div>
    </div>
    <?php endwhile; ?>


    <?php $tab_count = 0; ?>
    <?php while (have_rows('tab') ) : the_row(); $tab_count++; ?>
      <?php
        $image = get_sub_field('tab_image')['url'];
        $summary = get_sub_field('tab_summary_text');
      ?>
    <section class="panel padded-top three-column-list<?php if($tab_count == 1) print ' active'; ?>" data-tab-content="<?php print $tab_count; ?>">
      <section class="panel padded slideshow-content-panel slideshow grey-bg">
        <div class="container">
          <div class="inner-wrap">
            <div class="slide-images">
              <div class="slide-bg slide active" style="background-image:url(<?php print $image; ?>);"></div>
            </div>
            <div class="slide-content">
              <div class="slide-text active">
                <?php print $summary; ?>
              </div>
            </div>
          </div>
        </div>
      </section>
    </section>
    <?php endwhile; ?>

  </section>
  <?php endif; ?> -->


  <?php
    $related_call_to_action = null !== get_field('related_call_to_action') ? get_field('related_call_to_action') : false;
  ?>
  <?php if($related_call_to_action): ?>
    <?php include(locate_template('templates/partials/footer-cta.php')); ?>
  <?php endif; ?>
</div>

  <?php edit_post_link('edit', '<div class="admin-edit-link">', '</div>'); ?>

<?php get_footer(); ?>
