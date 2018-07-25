<section class="panel three-column-panel<?php echo ' panel-'.$count; ?>" id="<?php echo 'panel-'.$count; ?>">
	<div class="inner-wrap">
  <?php if( have_rows('columns') ): ?>
    <?php while( have_rows('columns') ): the_row();
      $column_title = get_sub_field('column_title');
      $column_body = get_sub_field('column_body');
    ?>
		<div class="col-3">
      <?php if($column_title): ?>
      <h3 class="entry-title"><?php print $column_title; ?></h3>
      <?php endif; ?>

      <?php print $column_body; ?>
    </div>
    <?php endwhile; ?>
  <?php endif; ?>
	</div>
</section>
