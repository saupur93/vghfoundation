<?php $event = get_post_type(get_the_ID()) == 'signature_events' ? true : false; ?>
<?php $ID = null !== get_sub_field('related_cta') ? get_sub_field('related_cta')[0]->ID : false; ?>
<?php $text_content = $ID && null !== get_field('text_content', $ID) ? get_field('text_content', $ID) : false; ?>
<?php $white_text_colour = null !== get_field('text_colour', $ID) && get_field('text_colour') == 'White text' ? true : false; ?>
<?php $bg_image = null !== get_field('background_image', $ID) ? get_field('background_image', $ID)['url'] : false; ?>
<?php $bg_color = null !== get_field('background_color', $ID) ? get_field('background_color', $ID) : false; ?>
<?php $bg_color = null !== get_field('background_color', $ID) ? get_field('background_color', $ID) : false; ?>
<?php $bg_color = explode(':', $bg_color)[0]; ?>

<?php if($text_content): ?>
  <section class="panel<?php echo ' panel-'.$count; ?> extra-padded cta-panel<?php if($white_text_colour) print ' bg-color-cta'; ?><?php if($bg_image) print ' bg-image-cta'; ?><?php if($event) print ' category-bg-color'; ?>"<?php if($bg_image) { print ' style="background-image:url('. $bg_image .');"';} elseif($bg_color){ print ' style="background-color:'. $bg_color .';"';} ?>>
    <div class="container">
      <div class="inner-wrap">
        <?php print $text_content; ?>
      </div>
    </div>
  </section>
<?php endif; ?>