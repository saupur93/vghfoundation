<?php get_header(); ?>

<?php
  $header_image = null !== get_field('header_image') ? get_field('header_image')['url'] : false;
  $donate_url = null !== get_field('donation_url') ? get_field('donation_url') : false;
 ?>

	<div class="page-wrap">
	  <section id="page-top" class="panel page-header" style="background-image:url(<?php print $header_image; ?>);">
	    <div class="container">
	      <div class="inner-wrap">
	        <div class="cover-copy">
	          <h1><?php the_title(); ?></h1>
            <?php if($donate_url): ?>
              <a class="button" href="<?php print $donate_url; ?>" target="_blank">Donate to this event</a>
            <?php endif; ?>
          </div>
          <img src="<?php bloginfo('template_directory'); ?>/assets/img/arrow-down.svg" class="cover-arrow-down" />
        </div>
	    </div>
	  </section>


    <section class="panel extra-padded overview-panel category-bg-color sidebar-right">
      <div class="container">
        <div class="inner-wrap">
          <div class="col-grid-9">
            <h2><?php the_title(); ?></h2>
            <p class="intro">From November to January, the winter wonderland trees at VGH and UBC Hospital will be filled with thousands of angels carrying messages of love and gratitude to friends and family, medical teams and hospital staff, and all the angels in our lives.</p>
            <p>Thanks to generous donors, the Angel Campaign has raised over $2.5 million since 2001. Your donation will support the most urgent needs in our hospitals, including purchasing critical equipment, funding high-impact research projects, and advancing patient care to deliver BC’s best, most specialized care for adults.</p>

            <p>Paul Dragan is a husband, a father and a business owner who nearly lost his life after being shot near his bicycle shop over a year ago. He believes he is alive and recovering today because of the passion and expertise of the VGH Trauma Team, his angels he is honouring this year. Click below for Paul’s angel story.</p>
          </div>
          <div class="col-grid-3">
            <h4>Cases for Support</h4>
            <ul class="small">
              <li>Angel Campaign has raised over $2.5 million since 2001.</li>
              <li>Your donation will support the most urgent needs in our hospitals, including purchasing critical equipment, funding high-impact research projects, and advancing patient care to deliver BC’s best, most specialized care for adults.</li>
              <li>Contact nathania.lo@vghfoundation.ca.</li>
            </ul>
          </div>
        </div>
      </div>
    </section>


    <section class="panel inline-gallery-thumbs grid-slider">
      <div class="full-container"><div class="gallery-item item"><div class="thumb" style="background-image:url('http://placehold.it/400x400');"></div></div><!--
     --><div class="gallery-item item"><div class="thumb" style="background-image:url('http://placehold.it/400x400/000000');"></div></div><!--
     --><div class="gallery-item item"><div class="thumb" style="background-image:url('http://placehold.it/400x400');"></div></div><!--
     --><div class="gallery-item item"><div class="thumb" style="background-image:url('http://placehold.it/400x400/666666');"></div></div><!--
     --><div class="gallery-item item"><div class="thumb" style="background-image:url('http://placehold.it/400x400/666666');"></div></div><!--
     --><div class="gallery-item item"><div class="thumb" style="background-image:url('http://placehold.it/400x400/666666');"></div></div><!--
     --><div class="gallery-item item"><div class="thumb" style="background-image:url('http://placehold.it/400x400/666666');"></div></div><!--
     --><div class="gallery-item item"><div class="thumb" style="background-image:url('http://placehold.it/400x400/666666');"></div></div><!--
     --><div class="gallery-item item"><div class="thumb" style="background-image:url('http://placehold.it/400x400');"></div></div></div>
    </section>



    <section class="panel padded three-stories-panel">
      <div class="container">
        <div class="inner-wrap">
          <h2>Angel Campaign Stories</h2>
          <div class="row">
            <article class="col-grid-4">
              <img src="<?php bloginfo('template_directory'); ?>/assets/img/tmp/story/Cancer/Cancer_Feature_Primary_JasonKo-thumb.jpg" />
              <div class="copy">
                <p class="small">“I didn’t even realize how many things i wanted to do until I got diagnosed.”</p>
              </div>
              <p class="more"><a href="#" class="read-more">Jamie’S STORY</a></p>
            </article>

            <article class="col-grid-4">
              <img src="<?php bloginfo('template_directory'); ?>/assets/img/tmp/story/Cancer/VGH-DrHuntsman-Final-thumb.jpg" />
              <div class="copy">
                <p class="small">We believe that understanding how cancer starts will lead to better prevention and treatment.</p>
              </div>
              <p class="more"><a href="#" class="read-more">DR. HUNTSMAN’S STORY</a></p>
            </article>

            <article class="col-grid-4">
              <img src="<?php bloginfo('template_directory'); ?>/assets/img/tmp/story/Cancer/VGHPancreatic-1382-thumb.jpg" />
              <div class="copy">
                <p class="small">“We exist because generous donors believe that research is the key.”</p>
              </div>
              <p class="more"><a href="#" class="read-more">DR. Shaeffer’S STORY</a></p>
            </article>
          </div>
        </div>
      </div>
    </section>


    <section class="panel padded video-panel">
      <div class="container">
        <div class="inner-wrap">
          <h2>Patient Videos</h2>
          <div class="video-wrapper">
            <iframe width="560" height="315" src="https://www.youtube.com/embed/k7W8UCRghQc?rel=0&amp;showinfo=0" frameborder="0" allowfullscreen></iframe>
          </div>
        </div>
      </div>
    </section>


    <section class="panel padded slideshow-content-panel slideshow grey-bg">
      <div class="container">
        <div class="inner-wrap">
          <div class="slide-images">
            <div class="slide-bg slide-1 active" style="background-image:url(<?php bloginfo('template_directory'); ?>/assets/img/tmp/theme-slide.jpg);"></div><!--
             --><div class="slide-bg slide-2" style="background-image:url(http://placehold.it/795x515);"></div>
          </div>
          <div class="slide-content">
            <div class="slide-text slide-1 active">
              <p>“Quis autem vel eum iure vero eos et accusamus et iusto reprehenderit qui in ea voluptate velit esse quam nihil molestiae n culpa qui officia odio  minus consequatur.”</p>
              <p>— Dr. Dianne Miller</p>
            </div>

            <div class="slide-text slide-2">
              <p>“Quis autem vel eum iure vero eos et accusamus et iusto reprehenderit qui in ea voluptate velit esse quam nihil molestiae n culpa qui officia odio  minus consequatur.”</p>
              <p>— Dr. Dianne Miller</p>
            </div>

            <ul class="slide-pager">
              <li class="active">1</li>
              <li>2</li>
            </ul>
          </div>

        </div>
      </div>
    </section>


    <section class="panel extra-padded bg-color-cta category-bg-color">
      <div class="container">
        <div class="inner-wrap">
          <h2>Become an Angel. Donate today.</h2>
          <p><a href="<?php print $donate_url; ?>" class="button white-keyline" target="_blank">Donate</a></p>
        </div>
      </div>
    </section>


    <section class="panel padded three-column-donors">
      <div class="container">
        <div class="inner-wrap">
          <h3>Thanks to our generous donors</h3>
          <div class="col-grid-4">
            <div class="donor-group">
              <h5>Silver</h5>
              <ul class="small">
                <li class="logo"><img src="<?php bloginfo('template_directory'); ?>/assets/img/logos/LeithWheeler_Logo-295x96.png" /></li>
              </ul>
            </div>

            <div class="donor-group">
              <h5>Bronze</h5>
              <ul class="small">
                <li>Beverly Anne Briscoe</li>
                <li>Iranian-Canadian Benevolent Foundation</li>
              </ul>
            </div>

            <div class="donor-group">
              <h5>#myangelbc</h5>
              <ul class="small">
                <li class="logo"><img src="<?php bloginfo('template_directory'); ?>/assets/img/logos/ncix-295x126.png" /></li>
              </ul>
            </div>
          </div>
          <div class="col-grid-4">
            <div class="donor-group">
              <h5>angel</h5>
              <ul class="small">
                <li>Alan and Joy Grant</li>
                <li>Kathy and Steve Bellringer</li>
                <li class="logo"><img src="<?php bloginfo('template_directory'); ?>/assets/img/logos/scotiabank.png" /></li>
                <li class="logo"><img src="<?php bloginfo('template_directory'); ?>/assets/img/logos/Shining_life_society-137x94.png" /></li>
              </ul>
            </div>
            <div class="donor-group">
              <h5>media</h5>
              <ul class="small">
                <li class="logo"><img src="<?php bloginfo('template_directory'); ?>/assets/img/logos/Sing_tao-295x111.png" /></li>
                <li class="logo"><img src="<?php bloginfo('template_directory'); ?>/assets/img/logos/ming_pao-295x98.png" /></li>
              </ul>
            </div>
          </div>
          <div class="col-grid-4">
            <div class="donor-group">
              <h5>In-kind Support</h5>
              <ul class="small">
                <li class="logo"><img src="<?php bloginfo('template_directory'); ?>/assets/img/logos/cafe_ami.png" /></li>
                <li class="logo"><img src="<?php bloginfo('template_directory'); ?>/assets/img/logos/GohBalletLogo-295x89.png" /></li>
                <li class="logo"><img src="<?php bloginfo('template_directory'); ?>/assets/img/logos/UnoGraphicImaging-295x72.jpg" /></li>
                <li class="logo"><img src="<?php bloginfo('template_directory'); ?>/assets/img/logos/choral_music_little_flower-295x53.png" /></li>
                <li>Reel Silks</li>
              </ul>
            </div>
          </div>
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
<!--
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
 -->

  </div>

  <?php edit_post_link('edit', '<div class="admin-edit-link">', '</div>'); ?>

<?php get_footer(); ?>
