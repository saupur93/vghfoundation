<?php
/*
Template Name: Why Give
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

    <?php if( have_rows('layouts') ): $count = 0; ?>
        <?php while ( have_rows('layouts') ) : the_row(); $count++;

            if( get_row_layout() == 'basic_content_area' ): ?>
              <?php include(locate_template('templates/layouts/layout-basic_content_area.php')); ?>

            <?php elseif( get_row_layout() == 'basic_content_area_sidebar' ): ?>
              <?php include(locate_template('templates/layouts/layout-basic_content_area-sidebar.php')); ?>

            <?php elseif( get_row_layout() == 'accordion' ): ?>
              <?php include(locate_template('templates/layouts/layout-accordion.php')); ?>

            <?php elseif( get_row_layout() == 'three_column' ): ?>
              <?php include(locate_template('templates/layouts/layout-three_column.php')); ?>

            <?php elseif( get_row_layout() == 'three_column_sidebar' ): ?>
              <?php include(locate_template('templates/layouts/layout-three_column_sidebar.php')); ?>


            <?php elseif( get_row_layout() == 'raw_html' ): ?>
              <?php include(locate_template('templates/layouts/layout-raw_html.php')); ?>
            <?php endif; ?>

        <?php endwhile; ?>

    <?php else : ?>
      <section class="main-content panel">
        <div class="container">
          <?php the_content(); ?>
        </div>
      </section>

    <?php endif; ?>


  <section class="panel themes-overview-stats">
    <ul class="top-menu tabs-menu">
        <li class="surgery active" data-tab-item="1">
          <a class="open" href="#"><span>Surgery</span></a>
        </li>
        <li class="cancer" data-tab-item="2">
          <a class="open" href="#"><span>Cancer</span></a>
        </li>
        <li class="heart-lung" data-tab-item="3">
          <a class="open" href="#"><span>Heart & Lung</span></a>
        </li>
        <li class="innovation" data-tab-item="4">
          <a class="open" href="#"><span>Innovation</span></a>
        </li>
        <li class="community" data-tab-item="5">
          <a class="open" href="#"><span>Community</span></a>
        </li>
        <li class="brain-health" data-tab-item="6">
          <a class="open" href="#"><span>Brain Health</span></a>
        </li>
    </ul>

    <div class="tab-content">
      <div class="tab-content-item surgery active" data-tab-item="1">
        <article class="tab-body">
          <div class="col-half">
            <h2>Surgery</h2>
            <p>With your support, we are transforming cancer care for patients. VGH UBC is aiming to be one of the largest cancer programs in North America.</p>
            <p><a href="#" class="button">Donate</a> <a href="/themes/surgery" class="button keyline">Learn more</a></p>
          </div>
          <div class="col-half">
            <div class="fact-row">
              <h5>Facts</h5>
              <div class="left">
                <p class="small">Last year<br><span class="number">175</span></p>
              </div>
              <div class="right">
                <p class="small">survivors and current patients attended support groups</p>
              </div>
            </div>

            <div class="fact-row">
              <h5>Outcomes</h5>
              <div class="left">
                <p class="small">Last year<br><span class="number">175</span></p>
              </div>
              <div class="right">
                <p class="small">survivors and current patients attended support groups</p>
              </div>
            </div>
          </div>
        </article>

        <aside class="tab-sidebar">
          <figure style="background-image:url(<?php bloginfo('template_directory'); ?>/assets/img/tmp/Cancer_Feature_Primary_JasonKo.jpg)">
            <figcaption><p>Jason and Emily Ko donated $1.2M to support a Lung Cancer Screening pilot program at VGH.</p></figcaption>
          </figure>
        </aside>
      </div>

      <div class="tab-content-item cancer" data-tab-item="2">
        <article class="tab-body">
          <div class="col-half">
            <h2>Cancer</h2>
            <p>With your support, we are transforming cancer care for patients. VGH UBC is aiming to be one of the largest cancer programs in North America.</p>
            <p><a href="#" class="button">Donate</a> <a href="/themes/cancer" class="button keyline">Learn more</a></p>
          </div>
          <div class="col-half">
            <div class="fact-row">
              <h5>Facts</h5>
              <div class="left">
                <p class="small">Last year<br><span class="number">175</span></p>
              </div>
              <div class="right">
                <p class="small">survivors and current patients attended support groups</p>
              </div>
            </div>

            <div class="fact-row">
              <h5>Outcomes</h5>
              <div class="left">
                <p class="small">Last year<br><span class="number">175</span></p>
              </div>
              <div class="right">
                <p class="small">survivors and current patients attended support groups</p>
              </div>
            </div>
          </div>
        </article>

        <aside class="tab-sidebar">
          <figure style="background-image:url(<?php bloginfo('template_directory'); ?>/assets/img/tmp/Cancer_Feature_Primary_JasonKo.jpg)">
            <figcaption><p>Jason and Emily Ko donated $1.2M to support a Lung Cancer Screening pilot program at VGH.</p></figcaption>
          </figure>
        </aside>
      </div>

      <div class="tab-content-item heart-lung" data-tab-item="3">
        <article class="tab-body">
          <div class="col-half">
            <h2>Heart & Lung</h2>
            <p>With your support, we are transforming cancer care for patients. VGH UBC is aiming to be one of the largest cancer programs in North America.</p>
            <p><a href="#" class="button">Donate</a> <a href="/themes/heart-lung" class="button keyline">Learn more</a></p>
          </div>
          <div class="col-half">
            <div class="fact-row">
              <h5>Facts</h5>
              <div class="left">
                <p class="small">Last year<br><span class="number">175</span></p>
              </div>
              <div class="right">
                <p class="small">survivors and current patients attended support groups</p>
              </div>
            </div>

            <div class="fact-row">
              <h5>Outcomes</h5>
              <div class="left">
                <p class="small">Last year<br><span class="number">175</span></p>
              </div>
              <div class="right">
                <p class="small">survivors and current patients attended support groups</p>
              </div>
            </div>
          </div>
        </article>

        <aside class="tab-sidebar">
          <figure style="background-image:url(<?php bloginfo('template_directory'); ?>/assets/img/tmp/Cancer_Feature_Primary_JasonKo.jpg)">
            <figcaption><p>Jason and Emily Ko donated $1.2M to support a Lung Cancer Screening pilot program at VGH.</p></figcaption>
          </figure>
        </aside>
      </div>

      <div class="tab-content-item innovation" data-tab-item="4">
        <article class="tab-body">
          <div class="col-half">
            <h2>Innovation</h2>
            <p>With your support, we are transforming cancer care for patients. VGH UBC is aiming to be one of the largest cancer programs in North America.</p>
            <p><a href="#" class="button">Donate</a> <a href="/themes/innovation" class="button keyline">Learn more</a></p>
          </div>
          <div class="col-half">
            <div class="fact-row">
              <h5>Facts</h5>
              <div class="left">
                <p class="small">Last year<br><span class="number">175</span></p>
              </div>
              <div class="right">
                <p class="small">survivors and current patients attended support groups</p>
              </div>
            </div>

            <div class="fact-row">
              <h5>Outcomes</h5>
              <div class="left">
                <p class="small">Last year<br><span class="number">175</span></p>
              </div>
              <div class="right">
                <p class="small">survivors and current patients attended support groups</p>
              </div>
            </div>
          </div>
        </article>

        <aside class="tab-sidebar">
          <figure style="background-image:url(<?php bloginfo('template_directory'); ?>/assets/img/tmp/Cancer_Feature_Primary_JasonKo.jpg)">
            <figcaption><p>Jason and Emily Ko donated $1.2M to support a Lung Cancer Screening pilot program at VGH.</p></figcaption>
          </figure>
        </aside>
      </div>

      <div class="tab-content-item community" data-tab-item="5">
        <article class="tab-body">
          <div class="col-half">
            <h2>Community</h2>
            <p>With your support, we are transforming cancer care for patients. VGH UBC is aiming to be one of the largest cancer programs in North America.</p>
            <p><a href="#" class="button">Donate</a> <a href="/themes/community" class="button keyline">Learn more</a></p>
          </div>
          <div class="col-half">
            <div class="fact-row">
              <h5>Facts</h5>
              <div class="left">
                <p class="small">Last year<br><span class="number">175</span></p>
              </div>
              <div class="right">
                <p class="small">survivors and current patients attended support groups</p>
              </div>
            </div>

            <div class="fact-row">
              <h5>Outcomes</h5>
              <div class="left">
                <p class="small">Last year<br><span class="number">175</span></p>
              </div>
              <div class="right">
                <p class="small">survivors and current patients attended support groups</p>
              </div>
            </div>
          </div>
        </article>

        <aside class="tab-sidebar">
          <figure style="background-image:url(<?php bloginfo('template_directory'); ?>/assets/img/tmp/Cancer_Feature_Primary_JasonKo.jpg)">
            <figcaption><p>Jason and Emily Ko donated $1.2M to support a Lung Cancer Screening pilot program at VGH.</p></figcaption>
          </figure>
        </aside>
      </div>

      <div class="tab-content-item brain-health" data-tab-item="6">
        <article class="tab-body">
          <div class="col-half">
            <h2>Brain Health</h2>
            <p>With your support, we are transforming cancer care for patients. VGH UBC is aiming to be one of the largest cancer programs in North America.</p>
            <p><a href="#" class="button">Donate</a> <a href="/themes/brain-health" class="button keyline">Learn more</a></p>
          </div>
          <div class="col-half">
            <div class="fact-row">
              <h5>Facts</h5>
              <div class="left">
                <p class="small">Last year<br><span class="number">175</span></p>
              </div>
              <div class="right">
                <p class="small">survivors and current patients attended support groups</p>
              </div>
            </div>

            <div class="fact-row">
              <h5>Outcomes</h5>
              <div class="left">
                <p class="small">Last year<br><span class="number">175</span></p>
              </div>
              <div class="right">
                <p class="small">survivors and current patients attended support groups</p>
              </div>
            </div>
          </div>
        </article>

        <aside class="tab-sidebar">
          <figure style="background-image:url(<?php bloginfo('template_directory'); ?>/assets/img/tmp/Cancer_Feature_Primary_JasonKo.jpg)">
            <figcaption><p>Jason and Emily Ko donated $1.2M to support a Lung Cancer Screening pilot program at VGH.</p></figcaption>
          </figure>
        </aside>
      </div>
    </div>
  </section>


<?php
  $related_call_to_action = null !== get_field('related_call_to_action') ? get_field('related_call_to_action') : false;
?>
<?php if($related_call_to_action): ?>
  <?php include(locate_template('templates/partials/footer-cta.php')); ?>
<?php endif; ?>

  </div>

  <?php edit_post_link('edit', '<div class="admin-edit-link">', '</div>'); ?>

<?php get_footer(); ?>
