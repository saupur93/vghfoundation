<section class="panel padded<?php echo ' panel-'.$count; ?>">
	<div class="inner-wrap">

			<section class="accordion">
					<?php if(get_sub_field('accordion_main_title')): ?>
					<h2 class="panel-title accordion-heading"><?php the_sub_field('accordion_main_title'); ?></h2>
					<?php endif; ?>

					<?php if(get_sub_field('accordion_main_intro')): ?>
					<div class="accordion-intro">
						<?php the_sub_field('accordion_main_intro');?>
					</div>
					<?php endif; ?>


			<?php if( have_rows('accordion_item') ): ?>


				<?php while ( have_rows('accordion_item') ) : the_row(); ?>
					<?php
					 $titleStripped = get_sub_field('accordion_title');
					 $titleStripped = clean_string($titleStripped);
				 	?>
					<article class="accordion-item">
						<?php echo '<a class="anchor" id="'. $titleStripped .'"></a>' ?>
						<h3 class="accordion-title"><?php the_sub_field('accordion_title'); ?></h3>
						<section class="accordion-content"><?php the_sub_field('accordion_content'); ?></section>
					</article>
				<?php endwhile; ?>
			<?php endif; ?>
			</section>

	</div>
</section>