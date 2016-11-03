    <section class="panel inline-gallery-thumbs grid-slider">
      <div class="full-container"><div class="gallery-item item"><div class="thumb" style="background-image:url('http://placehold.it/400x400');"></div></div><!--
     --><div class="gallery-item item"><div class="thumb" style="background-image:url('http://placehold.it/400x400/000000');"></div></div><!--
     --><div class="gallery-item item"><div class="thumb" style="background-image:url('http://placehold.it/400x400');"></div></div><!--
     --><div class="gallery-item item"><div class="thumb" style="background-image:url('http://placehold.it/400x400/666666');"></div></div><!--
     --><div class="gallery-item item"><div class="thumb" style="background-image:url('http://placehold.it/400x400/666666');"></div></div><!--
     --><div class="gallery-item item"><div class="thumb" style="background-image:url('http://placehold.it/400x400/666666');"></div></div><!--
     --><div class="gallery-item item"><div class="thumb" style="background-image:url('http://placehold.it/400x400/666666');"></div></div><!--
     --><div class="gallery-item item"><div class="thumb" style="background-image:url('http://placehold.it/400x400/666666');"></div></div><!--
     --><div class="gallery-item item"><div class="thumb" style="background-image:url('http://placehold.it/400x400');"></div></div></div>
    </section>




<!--     <section class="panel padded slideshow-content-panel slideshow grey-bg<?php echo ' panel-'.$count; ?>">
      <div class="container">
        <div class="inner-wrap">
          <?php if( have_rows('slide') ): ?>
          <div class="slide-images">
            <?php $count = 0; ?>
            <?php while( have_rows('slide') ): the_row();
              $count++;
              $slide_image = get_sub_field('slide_image');
            ?>
            <div class="slide-bg slide-<?php print $count; ?><?php if($count == 1) print ' active'; ?>" style="background-image:url(<?php print $slide_image['url']; ?>);"></div>
            <?php endwhile; ?>
          </div>
          <div class="slide-content">
            <?php $count = 0; ?>
            <?php while( have_rows('slide') ): the_row(); $count++;
              $slide_text = get_sub_field('slide_text');
            ?>
            <div class="slide-text slide-<?php print $count; ?><?php if($count == 1) print ' active'; ?>">
              <?php print $slide_text; ?>
            </div>
            <?php endwhile; ?>

            <ul class="slide-pager">
            <?php $count = 0; ?>
            <?php while( have_rows('slide') ): the_row(); $count++; ?>
              <li<?php if($count == 1) print ' class="active"'; ?>><?php print $count; ?></li>
            <?php endwhile; ?>
            </ul>
          </div>

          <?php endif; ?>
        </div>
      </div>
    </section>

 -->