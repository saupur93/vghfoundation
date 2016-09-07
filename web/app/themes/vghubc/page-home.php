<?php
/*
Template Name: Home
*/
?>


<?php get_header(); ?>
  <section class="hero-content panel" style="background-image:url(<?php bloginfo('template_directory'); ?>/assets/img/home-hero-bg.jpg);">
    <div class="container">
      <div class="hero-copy">
        <blockquote>I didn’t even realize how many things <br>I wanted to do until I got diagnosed.”</blockquote>
        <p><a href="#" class="button">Jaime's Story</a></p>
      </div>

      <h1>what’s <span class="green">v</span>ital to jaime</h1>

    </div>
    <div class="down-arrow">
      <img src="<?php bloginfo('template_directory'); ?>/assets/img/down-arrow.svg" />
    </div>
  </section>

  <section class="panel extra-padded">
    <div class="container">
      <div class="inner-wrap">
        <div class="col-grid-6">
          <h1>Together with your support, VGH UBC Hospital Foundation is saving lives in our community.</h1>
        </div>

        <div class="col-grid-6">
          <p>We are Vancouver Costal Health's primary philanthropic partner.</p>
          <p>Your support enables us to provide the best hospital care to every adult British Columbian.</p>
          <p>Our donors drive innovation and healthcare transformation.</p>
          <p><a href="#" class="read-more">about the foundation</a></p>
        </div>
      </div>
    </div>
  </section>

  <section class="panel" id="themes-section">
    <div class="container">
      <div class="col-grid-5">
        <h1>Our donors provide funds essential to delivering BC’s best, most specialized care for adults.</h1>
      </div>
    </div>
  </section>

<section class="panel" id="newsletter-signup">
    <div class="container">
        <p class="intro">Sign up and find out how your donations are making a difference.</p>
        <form>
          <input type="text" placeholder="Name" />
          <input type="email" placeholder="Email" />
          <input type="submit" value="Subscribe" />
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
