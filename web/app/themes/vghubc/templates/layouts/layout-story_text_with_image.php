<?php
// ==== Fields ====
// *required
//
// - *display (values: text-right / text-left)
// - text_title
// - text_content
// - image (array)
?>

<section class="panel theme-story-row <?php the_sub_field('display'); ?>" data-transition="fadeUp">
	<div class="img-block">
		<?php if(get_sub_field('image')): ?>
			<?php $row_img = get_sub_field('image'); ?>
			<img src="<?php echo $row_img['url']; ?>" alt="">
		<?php endif; ?>
	</div>
	<div class="text-block">
		<div class="container">
			<div class="inner-wrap">
				<?php if(get_sub_field('text_title')): ?>
					<h3><?php the_sub_field('text_title'); ?></h3>
				<?php endif; ?>
				<?php the_sub_field('text_content'); ?>
			</div>
		</div>
	</div>
</section>