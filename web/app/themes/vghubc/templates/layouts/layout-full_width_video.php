    <section class="panel padded video-panel">
      <div class="container">
        <div class="inner-wrap">
          <h2>Patient Videos</h2>
          <div class="video-wrapper">
            <iframe width="560" height="315" src="https://www.youtube.com/embed/k7W8UCRghQc?rel=0&amp;showinfo=0" frameborder="0" allowfullscreen></iframe>
          </div>
        </div>
      </div>
    </section>

<!--       <section class="panel padded two-column<?php echo ' panel-'.$count; ?>">
        <div class="container">
          <div class="inner-wrap">
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
      </section> -->