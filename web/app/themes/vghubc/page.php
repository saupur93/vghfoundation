<?php get_header(); ?>
<div class="page-wrap">
  <?php get_template_part('templates/layouts/layouts'); ?>

  <?php edit_post_link('edit', '<div class="admin-edit-link">', '</div>'); ?>

  <?php if(is_page(104)): ?>
  <a href="#"><img src="<?php bloginfo('template_directory'); ?>/assets/img/back-to-top.svg" class="back-to-top" /></a>
  <?php endif; ?>
</div>
<?php get_footer(); ?>
