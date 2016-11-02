<?php get_header(); ?>
<div class="page-wrap">

<?php if (!have_posts()) : ?>
<section class="panel title-only">
  <div class="container">
  <div class="inner-wrap">
    <div class="not-found">
      <h2>Page not found</h2>
      <p class="intro">Sorry, this page does not exist. <a href="/">Go back to home</a>.</p>
    </div>
  </div>
  </div>
</section>

<?php endif; ?>

<?php while (have_posts()) : the_post(); ?>
  <section class="main-content padded panel">
    <div class="container">
      <h1><?php the_title(); ?></h1>
      <?php the_content(); ?>
    </div>
  </section>
<?php endwhile; ?>
</div>

  <?php edit_post_link('edit', '<div class="admin-edit-link">', '</div>'); ?>

<?php get_footer(); ?>