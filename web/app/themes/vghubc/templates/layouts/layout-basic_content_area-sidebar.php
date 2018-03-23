<?php $event = get_post_type(get_the_ID()) == 'signature_events' ? true : false; ?>
<?php $section_title = null !== get_sub_field('section_title') ? get_sub_field('section_title') : false; ?>
<?php
 $id = get_the_ID();
    if(($count == 1) && ($id != '25347')):  ?>
  <section id="<?php echo 'panel-'.$count; ?>" class="panel extra-padded overview-panel sidebar-right<?php echo ' panel-'.$count; ?><?php if($event) print ' category-bg-color'; ?>">
<?php elseif($id == '25347'): ?>
  <section id="<?php echo 'panel-'.$count; ?>" class="panel extra-padded-landing overview-panel sidebar-right<?php echo ' panel-'.$count; ?><?php if($event) print ' category-bg-color'; ?>">
  <?php else: ?>
<section id="<?php echo 'panel-'.$count; ?>" class="panel padded sidebar-right<?php echo ' panel-'.$count; ?><?php if($event) print ' category-bg-color'; ?>">
<?php endif; ?>

    <div class="container">
      <div class="inner-wrap">
        <?php if($section_title): ?>
          <h2 class="section-title" id="<?php print $section_title ?>"><?php print $section_title; ?></h2>
        <?php endif; ?>
        <div class="col-grid-9">
          <?php the_sub_field('body'); ?>
        </div>
        <aside class="col-grid-3" id="sidebar">
          <?php if(get_sub_field('sidebar')): ?>
            <?php the_sub_field('sidebar'); ?>
          <?php endif; ?>
        </aside>
      </div>
    </div>

</section>
