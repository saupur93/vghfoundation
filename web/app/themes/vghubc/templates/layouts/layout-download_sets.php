      <section class="panel padded grey-bg download-sets<?php echo ' panel-'.$count; ?>">
        <div class="container">
          <div class="inner-wrap">
          <?php if( have_rows('download_set') ): ?>
            <?php while( have_rows('download_set') ): the_row();
              $set_title = get_sub_field('set_title');
              $files = get_sub_field('files');
            ?>
            <article class="download-set">
            <?php if($set_title): ?>
                <h3><?php print $set_title; ?></h3>
                <?php endif; ?>
                <div class="files">
                  <ul>
                  <?php foreach($files as $file): ?>
                    <?php
                        $link = $file['file']['url'];
                        $file_title = $file['file_title'];
                        $file_type = wp_check_filetype($file['file']['url']);
                        $file_type = strtoupper($file_type['ext']);
                     ?>
                     <li><a href="<?php print $link; ?>" target="_blank"><?php print $file_title; ?><span class="extension"><?php print $file_type; ?><svg class="icon download-icon"><use xlink:href="#download-icon" /></svg></span></a></li>
                  <?php endforeach; ?>
                  </ul>
                </div>
            </article>
            <?php endwhile; ?>
          <?php endif; ?>
          </div>
        </div>
      </section>