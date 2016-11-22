<?php
  $images = null !== get_sub_field('image_gallery') ? get_sub_field('image_gallery') : false;
?>
<?php if($images): ?>
    <section class="panel inline-gallery-thumbs grid-slider<?php echo ' panel-'.$count; ?>"><div class="full-container"><?php foreach($images as $image): ?><div class="gallery-item item" data-overlay-image="<?php print $image['url']; ?>"><div class="thumb" style="background-image:url(<?php print $image['url']; ?>);"></div></div><?php endforeach; ?></div></section>
<?php endif; ?>