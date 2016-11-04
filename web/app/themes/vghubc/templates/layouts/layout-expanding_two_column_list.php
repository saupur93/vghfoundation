<?php
  $section_title = null !== get_sub_field('section_title') ? get_sub_field('section_title') : false;
  $section_content = null !== get_sub_field('section_content') ? get_sub_field('section_content') : false;
  $display_amount = null !== get_sub_field('default_display_count') ? get_sub_field('default_display_count') : false;
  $links = null !== get_sub_field('links') ? get_sub_field('links') : false;
?>

<!--
link_title
link_url
open_in_new_window
-->

    <section class="panel padded expanding-two-column-list<?php echo ' panel-'.$count; ?>">
      <div class="container">
        <div class="inner-wrap">
          <?php if($section_title): ?>
          <h2>Our Funds</h2>
          <?php endif; ?>
          <div class="col-half">
            <?php if($section_content): ?>
            <?php print $section_content; ?>
            <?php endif; ?>
          </div>

          <div class="col-half last">
            <ul class="expanding-list" data-default-showing="<?php print $display_amount; ?>">
              <?php foreach($links as $link): ?>
              <li><a href="<?php print $link['link_url']; ?>"<?php if($link['open_in_new_window']) print ' target="_blank"'; ?>><?php print $link['link_title']; ?></a></li>
              <?php endforeach; ?>
            </ul>
            <?php if (count($links) > $display_amount): ?>
            <span class="read-more list more">More +</span>
            <span class="read-more list less">Less -</span>
            <?php endif ?>
          </div>

        </div>
      </div>
    </section>