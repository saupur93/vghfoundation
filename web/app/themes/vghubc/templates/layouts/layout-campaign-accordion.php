<section class="panel padded-top overview-panel accordion-panel<?php echo ' panel-'.$count; ?>" id="<?php echo 'panel-'.$count; ?>">
  <div class="container">
    <div class="inner-wrap">

      <section class="panel padded campaign-accordion two-column<?php echo ' panel-'.$count; ?>" id="<?php echo 'panel-'.$count; ?>">
          <?php if(get_sub_field('accordion_campaign_description')): ?>
            <div class="col-half">
              <?php the_sub_field('accordion_campaign_description');?>
              <a class="button green big-donate" href="<?php the_sub_field('accordion_donate_link')?>" target="_blank">Donate now</a>
            </div>
          <?php endif; ?>

          <?php if(get_sub_field('accordion_campaign_image')): ?>
            <div class="col-half">
              <?php $row_img = get_sub_field('accordion_campaign_image'); ?>
          		<img src="<?php echo $row_img['url']; ?>" alt="">
              <p class="campaign-caption"><?php the_sub_field('accordion_campaign_image_caption');?></p>

            </div>
          <?php endif; ?>
        </section>

        <section class="accordion">
        <?php if( have_rows('accordion_item') ): ?>

          <?php while ( have_rows('accordion_item') ) : the_row(); ?>
            <?php
             $titleStripped = get_sub_field('accordion_title');
             $titleStripped = sanitize_text_field($titleStripped);
            ?>
            <article class="accordion-item">
              <?php echo '<a class="anchor" id="'. $titleStripped .'"></a>' ?>
              <h4 class="accordion-title"> <?php the_sub_field('accordion_title'); ?></h4>
              <section class="accordion-content">
                <?php if(get_sub_field('accordion_image')): ?>
                  <div class="col-half">
                    <?php the_sub_field('accordion_content'); ?>
                  </div>
                  <div class="col-half">
                    <?php $row_img = get_sub_field('accordion_image'); ?>
                		<img src="<?php echo $row_img['url']; ?>" alt="">
                    <p class="campaign-caption"><?php echo the_sub_field('accordion_image_caption') ?></p>
                  </div>
                <?php else: ?>
                  <?php the_sub_field('accordion_content'); ?>
                <?php endif; ?>

              </section>
            </article>
          <?php endwhile; ?>
        <?php endif; ?>
        </section>

    </div>
  </div>
</section>
