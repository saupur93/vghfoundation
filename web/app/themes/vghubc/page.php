<?php get_header(); ?>


	<section class="main-content">
		<div class="inner-wrap">
			<h1><?php the_title(); ?></h1>
			<?php the_content(); ?>
		</div>
	</section>


	<?php edit_post_link('edit', '<div class="admin-edit-link">', '</div>'); ?>

<?php get_footer(); ?>
