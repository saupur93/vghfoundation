<?php
/*
Template Name: Events
*/
?>


<?php get_header(); ?>

  <section class="panel events-list">
    <article class="event-item" style="background-image:url(<?php bloginfo('template_directory'); ?>/assets/img/events/thousand-stars.jpg);">
      <div class="container">
        <div class="inner-wrap">
          <h2 class="highlight-text-upper">NIGHT OF A THOUSAND STARS GALA</h2>
          <p><a href="#" class="button white">Learn more</a></p>
        </div>
      </div>
    </article>

    <article class="event-item" style="background-image:url(<?php bloginfo('template_directory'); ?>/assets/img/events/time-to-shine.jpg);">
      <div class="container">
        <div class="inner-wrap">
          <h2 class="highlight-text-upper">TIME TO SHINE GALA</h2>
          <p><a href="#" class="button white">Learn more</a></p>
        </div>
      </div>
    </article>

    <article class="event-item" style="background-image:url(<?php bloginfo('template_directory'); ?>/assets/img/events/mrlube.jpg);">
      <div class="container">
        <div class="inner-wrap">
          <h2 class="highlight-text-upper">MR LUBE TOURNAMENT FOR LIFE</h2>
          <p><a href="#" class="button white">Learn more</a></p>
        </div>
      </div>
    </article>
  </section>

  <section class="panel padded extra-padded overview-panel">
    <div class="container">
      <div class="narrow-wrap">
        <h2>Fundraise for your cause.</h2>
        <p class="intro">Individuals like you make significant contributions to our hospitals through their fundraising efforts. These events bring communities together to support causes they believe in. Click on the links below to learn more about the events we have at VGH UBC.</p>
      </div>
    </div>
  </section>


  <section class="panel padded three-column-list">
    <article class="col-grid-4">
      <img src="http://placehold.it/427x350" />
      <div class="copy">
        <h3>Event calendar</h3>
        <p><a href="#" class="button green-keyline">Learn more</a></p>
      </div>
    </article>

    <article class="col-grid-4">
      <img src="http://placehold.it/427x350/333333" />
      <div class="copy">
        <h3>Plan your next event</h3>
        <p><a href="#" class="button green-keyline">Learn more</a></p>
      </div>
    </article>

    <article class="col-grid-4">
      <img src="http://placehold.it/427x350" />
      <div class="copy">
        <h3>Donate to an event</h3>
        <p><a href="#" class="button green-keyline">Learn more</a></p>
      </div>
    </article>
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
