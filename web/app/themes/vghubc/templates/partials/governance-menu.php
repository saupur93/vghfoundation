      <section class="panel padded three-subpages-panel">
        <div class="container">
          <div class="inner-wrap">
            <div class="row">
            <?php
              $governance_menu = menu_featured_images(49);
            ?>

            <?php foreach($governance_menu as $menu_item): ?>
              <article class="col-grid-4">
              <a href="<?php print $menu_item['link']; ?>">
                <div class="thumb"<?php print ' style="background-image:url('. $menu_item['image'] .')"'; ?>></div>
                <div class="copy center">
                  <h3><?php print $menu_item['title']; ?></h3>
                </div>
                <p class="more"><span class="read-more">Learn more</span></p>
              </a>
              </article>
            <?php endforeach; ?>

            </div>
          </div>
        </div>
      </section>