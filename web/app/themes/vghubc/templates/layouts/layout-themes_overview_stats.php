      <section class="panel themes-overview-stats<?php echo ' panel-'.$count; ?>" id="<?php echo 'panel-'.$count; ?>">
        <nav class="mobile-tabs-nav">
          <h4 class="switcher">Philanthropic Pillars</h4>
          <ul class="options">
          <?php while( have_rows('theme_item') ): the_row(); ?>
            <?php
              $related_theme = null !== get_sub_field('related_theme') ? get_sub_field('related_theme') : false;
              $theme_title = $related_theme[0]->post_title;
              $theme_name = $related_theme[0]->post_name;
             ?>
            <?php $theme_count++; ?>
            <li class="<?php print $theme_name; ?><?php if($theme_count == 1) print ' active'; ?>" data-tab-item="<?php print $theme_count; ?>">
              <span><?php print $theme_title; ?></span>
            </li>
          <?php endwhile; ?>
          </ul>
        </nav>
        <?php if( have_rows('theme_item') ): ?>
        <ul class="top-menu tabs-menu">
        <?php $theme_count = 0; ?>
        <?php while( have_rows('theme_item') ): the_row(); ?>
          <?php
            $related_theme = null !== get_sub_field('related_theme') ? get_sub_field('related_theme') : false;
            $theme_title = $related_theme[0]->post_title;
            $theme_name = $related_theme[0]->post_name;
           ?>
          <?php $theme_count++; ?>
          <li class="<?php print $theme_name; ?><?php if($theme_count == 1) print ' active'; ?>" data-tab-item="<?php print $theme_count; ?>">
            <a class="open" href="#"><span><?php print $theme_title; ?></span></a>
          </li>
        <?php endwhile; ?>
        </ul>
        <div class="tab-content">
        <?php $theme_count = 0; ?>
        <?php while( have_rows('theme_item') ): the_row();
          $related_theme = null !== get_sub_field('related_theme') ? get_sub_field('related_theme') : false;
          $overview_text = null !== get_sub_field('overview_text') ? get_sub_field('overview_text') : false;
          $facts_row = null !== get_sub_field('facts_row') ? get_sub_field('facts_row') : false;
          $sidebar_image = null !== get_sub_field('sidebar_image') ? get_sub_field('sidebar_image')['url'] : false;
          $sidebar_image_caption = null !== get_sub_field('sidebar_image_caption') ? get_sub_field('sidebar_image_caption') : false;
          $theme_name = $related_theme[0]->post_name;
        ?>
        <?php $theme_count++; ?>
          <div class="tab-content-item <?php print $theme_name; ?><?php if($theme_count == 1) print ' active'; ?>" data-tab-item="<?php print $theme_count; ?>">
            <article class="tab-body">
              <div class="col-half">
                <?php print $overview_text; ?>
              </div>
              <div class="col-half">
              <?php foreach ($facts_row as $key => $row): ?>
                <div class="fact-row">
                  <h5><?php print $row['fact_row_heading']; ?></h5>
                  <?php foreach ($row['fact'] as $key => $fact): ?>
                  <div class="fact">
                    <p><span class="larger-text"><?php print $fact['larger_text']; ?></span><br>
                    <span class="small"><?php print $fact['description']; ?></span>
                    </p>

                  </div>

                  <?php endforeach; ?>
                </div>
              <?php endforeach; ?>
              </div>
            </article>
            <?php if($sidebar_image): ?>
            <aside class="tab-sidebar">
              <figure style="background-image:url(<?php print $sidebar_image; ?>)">
                <figcaption>
                  <?php print $sidebar_image_caption; ?>
                </figcaption>
              </figure>
            </aside>
            <?php endif; ?>
          </div>
        <?php endwhile; ?>
        </div>
      <?php endif; ?>
      </section>
