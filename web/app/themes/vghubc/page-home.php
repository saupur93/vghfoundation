<?php
/*
Template Name: Home
*/
?>


<?php get_header(); ?>
  <section class="hero-content panel" style="background-image:url(<?php bloginfo('template_directory'); ?>/assets/img/home-hero-bg.jpg);">
    <div class="container">
      <div class="inner-wrap">
        <div class="hero-copy">
          <h1>what's vital?</h1>
          <p>“I didn’t even realize how many things I wanted to do until I got diagnosed.”</p>
          <p><a href="#" class="button white">Jaime's Story</a></p>

          <ul class="slide-pager">
            <li class="active">1</li>
            <li>2</li>
            <li>3</li>
            <li>4</li>
          </ul>
        </div>

      </div>

<!--       <div class="hero-copy">
        <blockquote><span class="highlight-text-upper">“I didn’t even realize how many things</span><br>
        <span class="highlight-text-upper">I wanted to do until I got diagnosed.”</span></blockquote>
        <p><a href="#" class="button">Jaime's Story</a></p>
      </div>

      <h1>what’s <span class="green">v</span>ital to jaime</h1> -->

    </div>
    <!-- <div class="down-arrow">
      <img src="<?php bloginfo('template_directory'); ?>/assets/img/down-arrow.svg" />
    </div> -->
  </section>

  <section class="panel extra-padded overview-panel">
    <div class="container">
      <div class="narrow-wrap">
        <h2>Together with your support, VGH UBC Hospital Foundation is <span class="highlighted-text">saving lives</span> in our community.</h2>

        <p>We are Vancouver Costal Health's primary philanthropic partner. Your support enables us to provide the best hospital care to every adult British Columbian. Our donors drive innovation and health care transformation.</p>
        <p><a href="#" class="read-more">about the foundation</a></p>

      </div>
    </div>
  </section>

  <section class="panel" id="themes-section">
    <div class="hover-bg-image"></div>
    <div class="container">
      <div class="summary" data-default-title="Our donors provide funds essential to delivering BC’s best, most specialized care for adults.">
        <h1>Our donors provide funds essential to delivering BC’s best, most specialized care for adults.</h1>
      </div>
    </div>

    <ul id="grid" class="grid">
        <li data-hover-title="The foundation funds care for cancer patients in a variety of ways" data-hover-image="<?php bloginfo('template_directory'); ?>/assets/img/themes-bg.jpg">
            <a class="open" href="#"><span>Surgical</span></a>
            <div class="overlay">
                <a class="close" href="#"><svg class="icon close-x"><use xlink:href="#close-x" /></svg></a>
                <div class="copy">
                    <p>Patients are provided with educational materials and equipment to assist them in their recovery, breast cancer support group meetings, digital imaging tools for mammography, education and training for oncology staff, and emergency financial assistance for patients undergoing treatment.</p>
                    <p><a href="/themes/surgical" class="learn-more">Learn more</a></p>
                </div>
            </div>
        </li>
        <li data-hover-title="Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod" data-hover-image="http://placehold.it/1282x849/000">
            <a class="open" href="#"><span>Cancer</span></a>
            <div class="overlay">
                <a class="close" href="#"><svg class="icon close-x"><use xlink:href="#close-x" /></svg></a>
                <div class="copy">
                    <p>Patients are provided with educational materials and equipment to assist them in their recovery, breast cancer support group meetings, digital imaging tools for mammography, education and training for oncology staff, and emergency financial assistance for patients undergoing treatment.</p>
                    <p><a href="/themes/cancer" class="learn-more">Learn more</a></p>
                </div>
            </div>
        </li>
        <li data-hover-title="consectetur adipisicing elit, sed do eiusmod Lorem ipsum dolor sit amet, " data-hover-image="http://placehold.it/1282x849/999">
            <a class="open" href="#"><span>Heart & Lung</span></a>
            <div class="overlay">
                <a class="close" href="#"><svg class="icon close-x"><use xlink:href="#close-x" /></svg></a>
                <div class="copy">
                    <p>Patients are provided with educational materials and equipment to assist them in their recovery, breast cancer support group meetings, digital imaging tools for mammography, education and training for oncology staff, and emergency financial assistance for patients undergoing treatment.</p>
                    <p><a href="/themes/heart-lung" class="learn-more">Learn more</a></p>
                </div>
            </div>
        </li>
        <li data-hover-title="ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod" data-hover-image="http://placehold.it/1282x849">
            <a class="open" href="#"><span>Brain Health</span></a>
            <div class="overlay">
                <a class="close" href="#"><svg class="icon close-x"><use xlink:href="#close-x" /></svg></a>
                <div class="copy">
                    <p>Patients are provided with educational materials and equipment to assist them in their recovery, breast cancer support group meetings, digital imaging tools for mammography, education and training for oncology staff, and emergency financial assistance for patients undergoing treatment.</p>
                    <p><a href="/themes/brain-health" class="learn-more">Learn more</a></p>
                </div>
            </div>
        </li>
        <li data-hover-title="Lorem ipsum dolor consectetur adipisicing elit, sed do eiusmod" data-hover-image="http://placehold.it/1282x849/666">
            <a class="open" href="#"><span>Innovation</span></a>
            <div class="overlay">
                <a class="close" href="#"><svg class="icon close-x"><use xlink:href="#close-x" /></svg></a>
                <div class="copy">
                    <p>Patients are provided with educational materials and equipment to assist them in their recovery, breast cancer support group meetings, digital imaging tools for mammography, education and training for oncology staff, and emergency financial assistance for patients undergoing treatment.</p>
                    <p><a href="/themes/innovation" class="learn-more">Learn more</a></p>
                </div>
            </div>
        </li>
        <li data-hover-title="Lorem ipsum dolor sit amet, consectetur sed do eiusmod" data-hover-image="http://placehold.it/1282x849">
            <a class="open" href="#"><span>Community</span></a>
            <div class="overlay">
                <a class="close" href="#"><svg class="icon close-x"><use xlink:href="#close-x" /></svg></a>
                <div class="copy">
                    <p>Patients are provided with educational materials and equipment to assist them in their recovery, breast cancer support group meetings, digital imaging tools for mammography, education and training for oncology staff, and emergency financial assistance for patients undergoing treatment.</p>
                    <p><a href="/themes/community" class="learn-more">Learn more</a></p>
                </div>
            </div>
        </li>
    </ul>

  </section>

  <section class="panel" id="newsletter-signup">
    <div class="container">
        <p class="intro">Sign up and find out how your donations are making a difference.</p>
        <form>
          <input type="text" placeholder="Name" />
          <input type="email" placeholder="Email" />
          <input type="submit" value="Subscribe" class="button green" />
        </form>
      </div>
  </section>

	<section class="main-content">
		<div class="container">
			<?php the_content(); ?>
		</div>
	</section>


	<?php edit_post_link('edit', '<div class="admin-edit-link">', '</div>'); ?>

<?php get_footer(); ?>
