	<div class="page-wrap">
		<section class="panel title-only">
			<div class="container">
				<h1 class="section-title"><?php the_title(); ?></h1>
			</div>
		</section>

		<?php	if( have_rows('layouts') ): $count = 0; ?>
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
	</div>