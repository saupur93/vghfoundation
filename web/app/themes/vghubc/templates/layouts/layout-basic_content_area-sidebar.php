<?php $event = get_post_type(get_the_ID()) == 'signature_events' ? true : false; ?>
<?php if($count == 1): ?>
<section class="panel extra-padded overview-panel sidebar-right<?php echo ' panel-'.$count; ?><?php if($event) print ' category-bg-color'; ?>">
<?php else: ?>
<section class="panel padded sidebar-right<?php echo ' panel-'.$count; ?><?php if($event) print ' category-bg-color'; ?>">
<?php endif; ?>

    <div class="container">
      <div class="inner-wrap">
        <div class="col-grid-9">
          <?php the_sub_field('body'); ?>
        </div>
        <aside class="col-grid-3">
          <?php if(get_sub_field('sidebar')): ?>
            <?php the_sub_field('sidebar'); ?>
          <?php endif; ?>
        </aside>
      </div>
    </div>


	</div>
</section>