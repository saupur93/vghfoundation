<?php if($count == 1): ?>
<section class="panel extra-padded overview-panel narrow-two-column<?php echo ' panel-'.$count; ?>">
<?php else: ?>
<section class="panel padded narrow-two-column<?php echo ' panel-'.$count; ?>">
<?php endif; ?>
  <div class="container">
    <div class="narrow-wrap">
    <?php if( have_rows('columns') ): ?>
      <?php
        $two_titles = false;
        $rowcount = 0;
      ?>
      <?php while( have_rows('columns') ): the_row();
        $rowcount++;
        $two_titles = $rowcount == 2 && get_sub_field('column_title') != '' ? true : false;
      ?>
      <?php endwhile; ?>

      <?php while( have_rows('columns') ): the_row();
        $column_title = get_sub_field('column_title');
        $column_body = get_sub_field('column_body');
      ?>
      <?php if (!$two_titles): ?>
        <?php if($column_title): ?>
        <h3><?php print $column_title; ?></h3>
        <?php endif; ?>
      <?php endif ?>
      <div class="col-half">
        <?php if ($two_titles): ?>
          <?php if($column_title): ?>
          <h3><?php print $column_title; ?></h3>
          <?php endif; ?>
        <?php endif ?>
        <?php print $column_body; ?>
      </div>
      <?php endwhile; ?>
    <?php endif; ?>
    </div>
  </div>
</section>