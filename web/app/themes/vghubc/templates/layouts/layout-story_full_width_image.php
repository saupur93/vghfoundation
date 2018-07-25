<?php
// ==== Fields ====
// *required
//
// - *image (array)
?>

<section class="panel theme-story-row theme-full-width-img" data-transition="fadeUp" id="<?php echo 'panel-'.$count; ?>">
	<div class="img-block">
		<?php $row_img = get_sub_field('image'); ?>
		<img src="<?php echo $row_img['url']; ?>" alt="">
	</div>
</section>
