<?php if($count == 1): ?>
<section class="panel extra-padded two-column overview-panel<?php echo ' panel-'.$count; ?>" id="<?php echo 'panel-'.$count; ?>">
<?php else: ?>
<section class="panel padded two-column<?php echo ' panel-'.$count; ?>" id="<?php echo 'panel-'.$count; ?>">
<?php endif; ?>
  <div class="container">
    <div class="inner-wrap">
    <?php if( have_rows('columns') ): ?>
      <?php while( have_rows('columns') ): the_row();
        $column_title = get_sub_field('column_title');
        $column_body = get_sub_field('column_body');
      ?>
      <?php if($column_title): ?>
      <h3 id="<?php print sanitize_title($column_title); ?>"><?php print $column_title; ?></h3>
      <?php endif; ?>
      <div class="col-half">
        <?php print $column_body; ?>
      </div>
      <?php endwhile; ?>
    <?php endif; ?>
    </div>
  </div>
</section>
