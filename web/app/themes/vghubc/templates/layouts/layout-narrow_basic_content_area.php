<?php if($count == 1): ?>
<section class="panel extra-padded overview-panel narrow-basic-content"<?php echo ' panel-'.$count; ?>>
<?php else: ?>
<section class="panel padded-top narrow-basic-content<?php echo ' panel-'.$count; ?>">
<?php endif; ?>
  <div class="container">
  	<div class="narrow-wrap">
  		<?php the_sub_field('body'); ?>
  	</div>
  </div>
</section>