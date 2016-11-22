<?php 
// main_tabs
// - tab_title
// - inner_tabs
//   - inner_tab_title
//   - inner_tab_content
 
 $main_tabs = get_sub_field('main_tabs');

 ?>
 <?php if(isset($main_tabs) && !empty($main_tabs)): ?>
    <section class="panel extra-padded-bottom tiered-tabs slideshow grey-bg<?php print ' panel-'.$count; ?>">
      <div class="container tab-group">
        <nav class="mobile-tabs-nav">
          <h4 class="switcher"><?php is_page(104) ? print 'Donors' : print 'Tabs'; ?></h4>
          <ul class="options">
          <?php foreach($main_tabs as $key => $tab): ?>
            <li<?php if($key == 0) print ' class="active"'; ?> data-tab="<?php print $key + 1; ?>" data-tier="1">
              <?php print $tab['tab_title']; ?>
            </li>
          <?php endforeach; ?>
          </ul>
        </nav>

        <ul class="tabs main-tabs">
        <?php foreach($main_tabs as $key => $tab): ?>
          <li<?php if($key == 0) print ' class="active"'; ?> data-tab="<?php print $key + 1; ?>" data-tier="1">
            <?php print $tab['tab_title']; ?>
          </li>
        <?php endforeach; ?>
        </ul>

        <?php foreach($main_tabs as $key => $tab): ?>
        <div class="narrow-wrap<?php if($key == 0) print ' active'; ?>" data-tab-content="<?php print $key + 1; ?>" data-tier="1">
          <div class="tab-group">
            <?php if(isset($tab['inner_tabs']) && count($tab['inner_tabs']) > 1): ?>
            <ul class="tabs secondary-tabs">
              <?php foreach($tab['inner_tabs'] as $k => $inner_tab): ?>
              <li<?php if($k == 0) print ' class="active"'; ?> data-tab="<?php print $k + 1; ?>" data-tier="2">
                <h4><?php print $inner_tab['inner_tab_title']; ?></h4>
              </li>
              <?php endforeach; ?>
            </ul>
            <?php endif; ?>

            <?php foreach($tab['inner_tabs'] as $k => $inner_tab): ?>
            <div class="tab-content<?php if($k == 0) print ' active'; ?>" data-tab-content="<?php print $k + 1; ?>" data-tier="2">
              <?php print $inner_tab['inner_tab_content']; ?>
            </div>
            <?php endforeach; ?>
          </div>
        </div>
        <?php endforeach; ?>
      </div>
    </section>
<?php endif; ?>