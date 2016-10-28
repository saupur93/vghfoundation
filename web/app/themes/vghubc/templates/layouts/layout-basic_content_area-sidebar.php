<?php if($count == 1): ?>
<section class="panel extra-padded overview-panel sidebar-right"<?php echo ' panel-'.$count; ?>>
<?php else: ?>
<section class="panel padded overview-panel sidebar-right"<?php echo ' panel-'.$count; ?>>
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