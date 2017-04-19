<?php $event = get_post_type(get_the_ID()) == 'signature_events' ? true : false; ?>
<?php if($count == 1): ?>
<section class="panel extra-padded overview-panel narrow-basic-content <?php echo ' panel-'.$count; ?><?php if($event) print ' category-bg-color'; ?>">
<?php else: ?>
<section class="panel padded-top narrow-basic-content <?php echo ' panel-'.$count; ?><?php if($event) print ' category-bg-color'; ?>">
<?php endif; ?>
  <div class="container">
  	<div class="narrow-wrap">
  		<?php the_sub_field('body'); ?>
  	</div>
  </div>
</section>
