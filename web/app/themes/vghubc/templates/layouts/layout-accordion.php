<section class="panel padded-top accordion-panel<?php echo ' panel-'.$count; ?>">
  <div class="container">
    <div class="inner-wrap">

        <section class="accordion">
            <?php if(get_sub_field('accordion_main_title')): ?>
            <h2 class="panel-title accordion-heading"><?php the_sub_field('accordion_main_title'); ?></h2>
            <?php endif; ?>

            <?php if(get_sub_field('accordion_main_intro')): ?>
            <div class="accordion-intro">
              <?php the_sub_field('accordion_main_intro');?>
            </div>
            <?php endif; ?>
        <?php if( have_rows('accordion_item') ): ?>

          <?php while ( have_rows('accordion_item') ) : the_row(); ?>
            <?php
             $titleStripped = get_sub_field('accordion_title');
             $titleStripped = sanitize_text_field($titleStripped);
            ?>
            <article class="accordion-item">
              <?php echo '<a class="anchor" id="'. $titleStripped .'"></a>' ?>
              <h4 class="accordion-title"><?php the_sub_field('accordion_title'); ?></h4>
              <section class="accordion-content"><?php the_sub_field('accordion_content'); ?></section>
            </article>
          <?php endwhile; ?>
        <?php endif; ?>
        </section>

    </div>
  </div>
</section>