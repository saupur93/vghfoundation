<?php if($count == 1): ?>
<section class="panel two-column overview-panel<?php echo ' panel-'.$count; ?> newsletter">
<?php else: ?>
<section class="panel padded two-column<?php echo ' panel-'.$count; ?>">
<?php endif; ?>
  <div class="container">
    <div class="inner-wrap">
    <?php if( have_rows('columns') ): ?>
      <?php while( have_rows('columns') ): the_row();
        $column_title = get_sub_field('column_title');
        $column_body = get_sub_field('column_body');
      ?>
      <div class="col-half <?php if($column_title): print $column_title; endif; ?>">
        <?php print $column_body; ?>
      </div>
      <?php endwhile; ?>
    <?php endif; ?>
    </div>
  </div>
</section>
