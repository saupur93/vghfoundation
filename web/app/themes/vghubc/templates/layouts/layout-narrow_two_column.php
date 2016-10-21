      <section class="panel padded narrow-two-column<?php echo ' panel-'.$count; ?>">
        <div class="container">
          <div class="narrow-wrap">
          <?php if( have_rows('columns') ): ?>
            <?php while( have_rows('columns') ): the_row();
              $column_title = get_sub_field('column_title');
              $column_body = get_sub_field('column_body');
            ?>
            <?php if($column_title): ?>
            <h3><?php print $column_title; ?></h3>
            <?php endif; ?>
            <div class="col-half">
              <?php print $column_body; ?>
            </div>
            <?php endwhile; ?>
          <?php endif; ?>
          </div>
        </div>
      </section>