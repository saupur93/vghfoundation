<?php
  $section_title = null !== get_sub_field('section_title') ? get_sub_field('section_title') : false;
  $video_embed = null !== get_sub_field('video_embed') ? get_sub_field('video_embed') : false;
?>

<?php if ($video_embed): ?>
    <section class="panel padded video-panel<?php echo ' panel-'.$count; ?>" id="<?php echo 'panel-'.$count; ?>">
      <div class="container">
        <div class="inner-wrap">
        <?php if($section_title): ?>
          <h2><?php print $section_title; ?></h2>
        <?php endif; ?>
          <div class="video-wrapper">
            <?php print $video_embed; ?>
          </div>
        </div>
      </div>
    </section>
<?php endif ?>
