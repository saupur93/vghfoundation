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
