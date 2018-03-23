<?php if( have_rows('columns') ): ?>
  <section class="panel three-column-image-links three-column-list white-bg<?php echo ' panel-'.$count; ?>" id="<?php echo 'panel-'.$count; ?>">
    <?php while( have_rows('columns') ): the_row();
      $column_title = get_sub_field('column_title');
      $link = get_sub_field('link');
      $image = get_sub_field('image')['url'];
      $learn_more = qtrans_getLanguage() !== 'zh' ? 'Learn more' : '更多資訊';
    ?>
    <article class="col-grid-4">
      <a href="<?php print $link; ?>">
        <div class="thumb" style="background-image:url('<?php print $image; ?>');"></div>
        <div class="copy">
          <?php if($column_title): ?>
          <h4><?php print $column_title; ?></h4>
          <?php endif; ?>
          <?php if($link): ?>
          <p><span class="read-more"><?php print $learn_more; ?></span></p>
          <?php endif; ?>
        </div>
      </a>
    </article>
    <?php endwhile; ?>
  </section>
<?php endif; ?>
