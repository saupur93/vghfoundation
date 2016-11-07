<?php $ID = $related_call_to_action[0]->ID; ?>
<?php $text_content = null !== get_field('text_content', $ID) ? get_field('text_content', $ID) : false; ?>
<?php $white_text_colour = null !== get_field('text_colour', $ID) && get_field('text_colour') == 'White text' ? true : false; ?>
<?php $bg_image = null !== get_field('background_image', $ID) ? get_field('background_image', $ID)['url'] : false; ?>

<?php if($text_content): ?>
  <section class="panel extra-padded footer-cta<?php if($white_text_colour) print ' bg-color-cta'; ?><?php if($bg_image) print ' bg-image-cta'; ?>"<?php if($bg_image) print ' style="background-image:url('. $bg_image .');"'; ?>>
    <div class="container">
      <div class="inner-wrap">
        <?php print $text_content; ?>
      </div>
    </div>
  </section>
<?php endif; ?>