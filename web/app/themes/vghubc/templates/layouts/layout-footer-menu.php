        <section class="panel extra-padded expanding-two-column-list footer-about-menu">
          <div class="container">
            <div class="inner-wrap">
              <?php print_r($content['section_title']); ?>

              <?php if( have_rows('global_about_message', 'option') ): ?>
                <?php while( have_rows('global_about_message', 'option') ): the_row();
                  $content_title = get_sub_field('section_title');
                  $content_text = get_sub_field('section_text');
                ?>
                  <h2><?php print $content_title; ?></h2>
                  <div class="col-half">
                    <?php print $content_text; ?>
                  </div>

                <?php endwhile; ?>
              <?php endif; ?>




              <div class="col-half last">
                <ul class="expanding-list">
                  <?php
                    $args = array(
                        'child_of' => 38,
                        'depth' => 1,
                        'title_li' => null,
                        'exclude' => implode(',', $gover_ids),
                        'sort_column' => 'menu_order'
                      );
                    wp_list_pages($args);
                  ?>
                </ul>
              </div>

            </div>
          </div>
        </section>