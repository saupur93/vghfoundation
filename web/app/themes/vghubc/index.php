<?php get_header(); ?>


	<section class="main-content">
		<div class="container">
		  <?php if (!have_posts()) : ?>
			<div class="not-found center">
			  <h1>Page not found</h1>
			  <p class="intro">Sorry, this page does not exist. <a href="/">Go back to home</a>.</p>
			</div>
		  <?php endif; ?>

		  <?php while (have_posts()) : the_post(); ?>
			<h1><?php the_title(); ?></h1>
			<?php the_content(); ?>
		  <?php endwhile; ?>
		</div>
	</section>


	<?php edit_post_link('edit', '<div class="admin-edit-link">', '</div>'); ?>

<?php get_footer(); ?>