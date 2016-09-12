<?php get_header(); ?>

	<div class="page-wrap">

	  <section id="page-top" class="panel page-header" style="background-image:url(<?php bloginfo('template_directory'); ?>/assets/img/headers/cancer.jpg);">
	    <div class="container">
	      <div class="inner-wrap">
	        <div class="header-copy">
	          <h1><?php the_title(); ?></h1>
	          <p>We aim to find cancers early, and treat them with the most advanced and minimally-invasive techniques so that patients experience less side-effects and return home sooner.</p>
	        </div>
	      </div>
	    </div>
	  </section>

    <section class="panel padded extra-padded overview-panel">
      <div class="container">
        <div class="narrow-wrap">
          <h2>Transforming cancer care</h2>
          <p class="intro">Whether it's innovative radiation methods, new chemotherapy treatments or state-of-the-art imaging techniques, our specialists are transforming care and saving lives at home and around the world. Your support enables us to bring these innovative treatments to patients sooner.</p>
        </div>
      </div>
    </section>

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

			<section class="panel themes-pagination">
				<div class="container">
					<div class="inner-wrap">
						<?php next_post_link('<div class="prev">%link</div>', '<svg class="icon arrow-left"><use xlink:href="#arrow-left" /></svg> <span class="pager-title">%title</span>', false); ?>
						<?php previous_post_link('<div class="next">%link</div>', '<span class="pager-title">%title</span> <svg class="icon arrow-right"><use xlink:href="#arrow-right" /></svg>', false); ?>
					</div>
          <div class="inner-wrap back-to-top">
            <a href="#page-top">Back to top</a>
          </div>
				</div>
			</section>

      <footer class="panel footer-donation">
        <div class="container">
          <div class="inner-wrap">
            <h1>Find out <span class="green">how</span> you can help.</h1>
            <a href="/ways-to-give/" class="button green">Ways to Give</a>
          </div>
        </div>
      </footer>


  </div>

  <?php edit_post_link('edit', '<div class="admin-edit-link">', '</div>'); ?>

<?php get_footer(); ?>
