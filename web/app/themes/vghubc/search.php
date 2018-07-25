<?php get_header(); ?>
<div class="page-wrap">

<section class="panel title-only">
  <div class="container">
  <div class="narrow-wrap">
    <div class="not-found">
      <h2 class="section-title"><?php printf( __( 'Search Results for: %s', 'shape' ), '<span class="highlighted-text">' . get_search_query() . '</span>' ); ?></h2>
    </div>
  </div>
  </div>
</section>


<section class="main-content padded-bottom panel search-results">
  <div class="container">
    <div class="narrow-wrap">
        <?php if ( have_posts() ) : ?>
          <?php while ( have_posts() ) : the_post(); ?>
          <article class="entry">
            <h4 class="entry-title"><a href="<?php the_permalink(); ?>"><?php the_title();?></a></h4>
            <p><?php the_excerpt(); ?></p>
          </article>
          <?php endwhile; ?>
          <?php wp_reset_query(); ?>
        <?php else : ?>
          <p class="intro">Sorry, no results here found for that term.</p>
        <?php endif; ?>
    </div>
  </div>
</section>

<?php get_footer(); ?>