<?php
/*
Template Name: Home
*/
?>


<?php get_header(); ?>
  <section class="hero-content panel slideshow">
    <div class="slide-images">
      <div class="slide-bg slide-1 active" style="background-image:url(<?php bloginfo('template_directory'); ?>/assets/img/headers/Surgery-primary_Umberto-copy.jpg);"></div><!--
       --><div class="slide-bg slide-2" style="background-image:url(<?php bloginfo('template_directory'); ?>/assets/img/headers/Feature-primary-photo-Jamie-skiing-downhill.jpg);"></div></div><!--
       -->
    </div>
    <div class="container">
      <div class="inner-wrap">
        <div class="hero-copy" data-colour-type="surgery">
          <h1>what's vital?</h1>
          <div class="slide-text slide-1 active" data-colour-type="surgery">
            <p class="intro">“The outstanding pre- and post-operative care I received was absolutely world-class.”</p>
            <p><a href="#" class="read-more white">Umberto's Story</a></p>
          </div>

          <div class="slide-text slide-2" data-colour-type="cancer">
            <p class="intro">World-class skier Jamie Crane-Mauzy credits revolutionary brain surgery and VGH’s ICU team for saving her life.</p>
            <p><a href="#" class="read-more white">Jamie's Story</a></p>
          </div>



          <ul class="slide-pager">
            <li class="active">1</li>
            <li>2</li>

          </ul>
        </div>

      </div>
    </div>
  </section>

  <section class="panel extra-padded overview-panel">
    <div class="container">
      <div class="narrow-wrap">
        <div class="col-grid-6">
          <p>Together with your support, VGH UBC Hospital Foundation is saving lives in our community. We are Vancouver Costal Health's primary philanthropic partner.</p>
          <p><a href="#" class="read-more">about the foundation</a></p>
        </div>
        <div class="col-grid-6">
          <p>Your support enables us to provide the best hospital care to every adult British Columbian. Our donors drive innovation and health care transformation.</p>
        </div>
      </div>
    </div>
  </section>

  <section class="panel" id="themes-section">
    <div class="themes-items">
      <div class="themes-item active surgery">
        <div class="hover-bg-image" style="background-image:url(<?php bloginfo('template_directory'); ?>/assets/img/home/surgery-theme.jpg);" data-hover-image="<?php bloginfo('template_directory'); ?>/assets/img/home/surgery-theme.jpg"></div>
        <div class="container">
          <div class="summary">
            <h5>How we can change lives together</h5>
            <h2>What if complex surgery could be performed in a one-stop innovative hybrid space?</h2>
          </div>
        </div>
      </div>
      <div class="themes-item cancer">
        <div class="hover-bg-image" style="background-image:url(<?php bloginfo('template_directory'); ?>/assets/img/home/cancer-theme.jpg);" data-hover-image="<?php bloginfo('template_directory'); ?>/assets/img/home/cancer-theme.jpg);"></div>
        <div class="container">
          <div class="summary">
            <h5>How we can change lives together</h5>
            <h2>What if we could detect cancer earlier with new revolutionary technology?</h2>
          </div>
        </div>
      </div>
      <div class="themes-item heart-lung">
        <div class="hover-bg-image" style="background-image:url(<?php bloginfo('template_directory'); ?>/assets/img/home/heart-lung-theme.jpg);" data-hover-image="<?php bloginfo('template_directory'); ?>/assets/img/home/heart-lung-theme.jpg);"></div>
        <div class="container">
          <div class="summary">
            <h5>How we can change lives together</h5>
            <h2>What if we could revolutionize heart and lung surgery so it no longer required invasive procedures?</h2>
          </div>
        </div>
      </div>
      <div class="themes-item innovation">
        <div class="hover-bg-image" style="background-image:url(<?php bloginfo('template_directory'); ?>/assets/img/home/innovation-theme.jpg);" data-hover-image="<?php bloginfo('template_directory'); ?>/assets/img/home/innovation-theme.jp"></div>
        <div class="container">
          <div class="summary">
            <h5>How we can change lives together</h5>
            <h2>Imagining a world where disease are cured through an innovative small needle.</h2>
          </div>
        </div>
      </div>
      <div class="themes-item community">
        <div class="hover-bg-image" style="background-image:url(<?php bloginfo('template_directory'); ?>/assets/img/home/community-theme.jpg);" data-hover-image="<?php bloginfo('template_directory'); ?>/assets/img/home/community-theme.jpg"></div>
        <div class="container">
          <div class="summary">
            <h5>How we can change lives together</h5>
            <h2>What if the continuum of care extended beyond the hospital walls and into the community?</h2>
          </div>
        </div>
      </div>
      <div class="themes-item brain-health">
        <div class="hover-bg-image" style="background-image:url(<?php bloginfo('template_directory'); ?>/assets/img/home/brain-health-theme.jpg);" data-hover-image="<?php bloginfo('template_directory'); ?>/assets/img/home/brain-health-theme.jpg);"></div>
        <div class="container">
          <div class="summary">
            <h5>How we can change lives together</h5>
            <h2>When it’s a matter of brain health, what if our neurosurgeons depended on a revolutionary new procedure in order to save lives?</h2>
          </div>
        </div>
      </div>

    </div>

    <ul id="themes-menu">
        <li class="surgery">
          <a class="open" href="/themes/surgery"><span>Surgery</span><span class="read-more">Learn More</span></a>
          <div class="thumb" style="background-image:url('<?php bloginfo('template_directory'); ?>/assets/img/home/surgery-thumb.jpg');"></div>
        </li>
        <li class="cancer">
          <a class="open" href="/themes/cancer"><span>Cancer</span><span class="read-more">Learn More</span></a>
          <div class="thumb" style="background-image:url('<?php bloginfo('template_directory'); ?>/assets/img/home/cancer-thumb.jpg');"></div>
        </li>
        <li class="heart-lung">
          <a class="open" href="/themes/heart-lung"><span>Heart & Lung</span><span class="read-more">Learn More</span></a>
          <div class="thumb" style="background-image:url('<?php bloginfo('template_directory'); ?>/assets/img/home/heart-lung-thumb.jpg');"></div>
        </li>
        <li class="innovation">
          <a class="open" href="/themes/innovation"><span>Innovation</span><span class="read-more">Learn More</span></a>
          <div class="thumb" style="background-image:url('<?php bloginfo('template_directory'); ?>/assets/img/home/innovation-thumb.jpg');"></div>
        </li>
        <li class="community">
          <a class="open" href="/themes/community"><span>Community</span><span class="read-more">Learn More</span></a>
          <div class="thumb" style="background-image:url('<?php bloginfo('template_directory'); ?>/assets/img/home/community-thumb.jpg');"></div>
        </li>
        <li class="brain-health">
          <a class="open" href="/themes/brain-health"><span>Brain Health</span><span class="read-more">Learn More</span></a>
          <div class="thumb" style="background-image:url('<?php bloginfo('template_directory'); ?>/assets/img/home/brain-health-thumb.jpg');"></div>
        </li>
    </ul>

  </section>



	<section class="main-content">
		<div class="container">
			<?php the_content(); ?>
		</div>
	</section>


	<?php edit_post_link('edit', '<div class="admin-edit-link">', '</div>'); ?>

<?php get_footer(); ?>
