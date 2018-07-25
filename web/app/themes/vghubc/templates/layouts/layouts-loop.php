                <?php $count = 0; ?>
                <?php while ( have_rows('layouts') ) : the_row(); $count++;
                    if( get_row_layout() == 'basic_content_area' ): ?>
                      <?php include(locate_template('templates/layouts/layout-basic_content_area.php')); ?>

                    <?php elseif( get_row_layout() == 'narrow_basic_content_area' ): ?>
                      <?php include(locate_template('templates/layouts/layout-narrow_basic_content_area.php')); ?>

                    <?php elseif( get_row_layout() == 'basic_content_area_sidebar' ): ?>
                      <?php include(locate_template('templates/layouts/layout-basic_content_area-sidebar.php')); ?>

                    <?php elseif( get_row_layout() == 'accordion' ): ?>
                      <?php include(locate_template('templates/layouts/layout-accordion.php')); ?>

                    <?php elseif( get_row_layout() == 'campaign_accordion' ): ?>
                      <?php include(locate_template('templates/layouts/layout-campaign-accordion.php')); ?>

                    <?php elseif( get_row_layout() == 'two_column' ): ?>
                      <?php include(locate_template('templates/layouts/layout-two_column.php')); ?>

                    <?php elseif( get_row_layout() == 'two_column_landing' ): ?>
                      <?php include(locate_template('templates/layouts/layout-two_column_landing.php')); ?>

                    <?php elseif( get_row_layout() == 'narrow_two_column' ): ?>
                      <?php include(locate_template('templates/layouts/layout-narrow_two_column.php')); ?>

                    <?php elseif( get_row_layout() == 'two_column_image_list' ): ?>
                      <?php include(locate_template('templates/layouts/layout-two_column_image_list.php')); ?>

                    <?php elseif( get_row_layout() == 'three_column' ): ?>
                      <?php include(locate_template('templates/layouts/layout-three_column.php')); ?>

                    <?php elseif( get_row_layout() == 'three_column_sidebar' ): ?>
                      <?php include(locate_template('templates/layouts/layout-three_column_sidebar.php')); ?>

                    <?php elseif( get_row_layout() == 'inline_slideshow' ): ?>
                      <?php include(locate_template('templates/layouts/layout-inline_slideshow.php')); ?>

                    <?php elseif( get_row_layout() == 'tiered_tabs' ): ?>
                      <?php include(locate_template('templates/layouts/layout-tiered_tabs.php')); ?>

                    <?php elseif( get_row_layout() == 'download_sets' ): ?>
                      <?php include(locate_template('templates/layouts/layout-download_sets.php')); ?>

                    <?php elseif( get_row_layout() == 'themes_overview_stats' ): ?>
                      <?php include(locate_template('templates/layouts/layout-themes_overview_stats.php')); ?>

                    <?php elseif( get_row_layout() == 'inline_gallery_thumbs' ): ?>
                      <?php include(locate_template('templates/layouts/layout-inline_gallery_thumbs.php')); ?>

                    <?php elseif( get_row_layout() == 'full_width_video' ): ?>
                      <?php include(locate_template('templates/layouts/layout-full_width_video.php')); ?>

                    <?php elseif( get_row_layout() == 'three_stories_panel' ): ?>
                      <?php include(locate_template('templates/layouts/layout-three_stories_panel.php')); ?>

                    <?php elseif( get_row_layout() == 'three_stories_panel_angel' ): ?>
                      <?php include(locate_template('templates/layouts/layout-three_stories_panel_angel.php')); ?>

                    <?php elseif( get_row_layout() == 'full_width_angel_video' ): ?>
                      <?php include(locate_template('templates/layouts/layout-full_width_angel_video.php')); ?>

                    <?php elseif( get_row_layout() == 'three_column_donors' ): ?>
                      <?php include(locate_template('templates/layouts/layout-three_column_donors.php')); ?>

                    <?php elseif( get_row_layout() == 'call_to_action' ): ?>
                      <?php include(locate_template('templates/layouts/layout-call_to_action.php')); ?>

                    <?php elseif( get_row_layout() == 'expanding_two_column_list' ): ?>
                      <?php include(locate_template('templates/layouts/layout-expanding_two_column_list.php')); ?>

                    <?php elseif( get_row_layout() == 'full_stats_panel' ): ?>
                      <?php include(locate_template('templates/layouts/layout-full_stats_panel.php')); ?>

                    <?php elseif( get_row_layout() == 'three_column_image_links' ): ?>
                      <?php include(locate_template('templates/layouts/layout-three_column_image_links.php')); ?>

                    <?php elseif( get_row_layout() == 'newsletter_signup' ): ?>
                      <?php include(locate_template('templates/layouts/layout-newsletter-signup.php')); ?>

                    <?php elseif( get_row_layout() == 'raw_html' ): ?>
                      <?php include(locate_template('templates/layouts/layout-raw_html.php')); ?>
                    <?php endif; ?>
                <?php endwhile; ?>
