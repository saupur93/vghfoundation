<?php
  $facts_row = null !== get_sub_field('facts_row') ? get_sub_field('facts_row') : false;
  $factsheet_download = null !== get_sub_field('factsheet_download') ? get_sub_field('factsheet_download') : false;
?>

<section class="panel padded-top full-stats-panel<?php echo ' panel-'.$count; ?>">
  <div class="container">
    <div class="inner-wrap">
    <?php foreach($facts_row as $row): ?>
      <div class="stat-focus">
        <?php if (isset($row['section_title'])): ?>
        <h2><?php print $row['section_title']; ?></h2>
        <?php endif ?>
        <div class="col-third overview">
        <?php if (isset($row['section_overview'])): ?>
          <?php print $row['section_overview']; ?>
        <?php endif ?>
        </div>

        <?php if (isset($row['fact'])): ?>
        <?php foreach ($row['fact'] as $fact): ?>
        <div class="col-third stat-col">
          <div class="fact-row">
            <p><span class="larger-text"><?php print $fact['larger_text']; ?></span><br>
            <span class="small"><?php print $fact['description']; ?></span>
            </p>
          </div>
        </div>
        <?php endforeach; ?>
        <?php endif ?>
      </div>
    <?php endforeach; ?>

    <?php if ($factsheet_download): ?>
      <div class="fact-sheet center">
        <a href="<?php print $factsheet_download; ?>" target="_blank" class="button keyline">Download Fact Sheet</a>
      </div>
    <?php endif ?>
    </div>
  </div>
</section>
