<?php
/*
Template Name: Home
*/
?>


<?php get_header(); ?>
  <section class="hero-content panel" style="background-image:url(http://placehold.it/1600x900);">
    <div class="container">
      <div class="hero-copy">
        <blockquote>I didn’t even realize how many things <br>I wanted to do until I got diagnosed.”</blockquote>
        <p><a href="#" class="button">Jaime's Story</a></p>
      </div>

      <h1>what’s <span class="green">v</span>ital to jaime</h1>

    </div>
  </section>

	<section class="main-content">
		<div class="container">
			<?php the_content(); ?>
		</div>
	</section>


	<?php edit_post_link('edit', '<div class="admin-edit-link">', '</div>'); ?>

<?php get_footer(); ?>
