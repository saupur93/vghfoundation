<?php
  $images = null !== get_sub_field('image_gallery') ? get_sub_field('image_gallery') : false;
?>
<?php if($images): ?>
    <section class="panel inline-gallery-thumbs grid-slider<?php echo ' panel-'.$count; ?>" id="<?php echo 'panel-'.$count; ?>"><div class="full-container"><?php $i = 0; foreach($images as $image): ?><div class="gallery-item item" id="image<?php print $i;?>" data-overlay-image="<?php print $image['url']; ?>"><div class="thumb" style="background-image:url(<?php print $image['url']; ?>);"></div></div><?php $i++; endforeach; ?></div></section>
<?php endif; ?>
