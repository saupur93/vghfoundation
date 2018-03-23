      <section class="panel padded-bottom two-column-image-list<?php echo ' panel-'.$count; ?>" id="<?php echo 'panel-'.$count; ?>">
        <div class="container">
          <div class="inner-wrap">
          <?php if( have_rows('columns') ): ?>
            <?php while( have_rows('columns') ): the_row();
              $list_items = get_sub_field('list_item');
              // print_r($list_items);
            ?>

            <?php foreach($list_items as $item): ?>
            <div class="col-half">
              <img src="<?php print $item['item_image']['url']; ?>" />
              <div class="item-text"><?php print $item['item_text']; ?></div>
            </div>
            <?php endforeach; ?>

            <?php endwhile; ?>
          <?php endif; ?>
          </div>
        </div>
      </section>
