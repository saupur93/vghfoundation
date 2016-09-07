<section class="panel with-sidebar padded<?php echo ' panel-'.$count; ?>">
	<div class="inner-wrap">
    <section class="content-left">
		  <?php the_sub_field('body'); ?>
    </section>
<?php if ($count == 1): ?>
    <aside class="sidebar-right join">
      <?php the_field('global_sidebar_message', 'option'); ?>
    </aside>
  <?php if(get_sub_field('sidebar')): ?>
    <aside>
      <?php the_sub_field('sidebar'); ?>
    </aside>
  <?php endif; ?>
<?php else: ?>
  <?php if(get_sub_field('sidebar')): ?>
    <aside>
      <?php the_sub_field('sidebar'); ?>
    </aside>
  <?php endif; ?>
<?php endif; ?>

	</div>
</section>