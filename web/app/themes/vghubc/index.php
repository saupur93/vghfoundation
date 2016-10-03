<?php get_header(); ?>

		<section class="panel title-only">
			<div class="container">
				<h1 class="section-title"><?php the_title(); ?></h1>
			</div>
		</section>

	<section class="main-content padded panel">
		<div class="container">
		  <?php if (!have_posts()) : ?>
		  <div class="inner-wrap">
				<div class="not-found">
				  <h2>Page not found</h2>
				  <p class="intro">Sorry, this page does not exist. <a href="/">Go back to home</a>.</p>
				</div>
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