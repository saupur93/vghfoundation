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

                    <?php elseif( get_row_layout() == 'two_column' ): ?>
                      <?php include(locate_template('templates/layouts/layout-two_column.php')); ?>

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

                    <?php elseif( get_row_layout() == 'raw_html' ): ?>
                      <?php include(locate_template('templates/layouts/layout-raw_html.php')); ?>
                    <?php endif; ?>
                <?php endwhile; ?>