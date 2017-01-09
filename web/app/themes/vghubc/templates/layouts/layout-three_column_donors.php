<?php
  $section_title = null !== get_sub_field('section_title') ? get_sub_field('section_title') : false;

?>

    <section class="panel padded three-column-donors<?php echo ' panel-'.$count; ?>">
      <div class="container">
        <div class="inner-wrap">
          <?php if($section_title): ?>
          <h3><?php print $section_title; ?></h3>
          <?php endif; ?>

          <?php if( have_rows('columns') ): ?>
            <?php while( have_rows('columns') ): the_row();
              $donor_group = get_sub_field('donor_group');
            ?>
            <div class="col-grid-4">
              <?php foreach($donor_group as $group): ?>
              <div class="donor-group">
                <h5><?php print $group['group_title']; ?></h5>
                <ul class="small">
                <?php foreach ($group['donor'] as $donor): ?>
                  <?php if($donor['donor_link']) print ' <a href="'.$donor['donor_link'].'" target="_blank">'; ?>
                  <?php if(isset($donor['donor_image']['url'])): ?>
                  <li class="logo"><img src="<?php print $donor['donor_image']['url']; ?>" alt="<?php print $donor['donor_name'] ?>" /></li>
                  <?php else: ?>
                    <li><?php print $donor['donor_name'] ?></li>
                  <?php endif; ?>
                  <?php if($donor['donor_link']) print ' </a>'; ?>
                <?php endforeach ?>
                </ul>
              </div>
              <?php endforeach; ?>

            </div>
            <?php endwhile; ?>
          <?php endif; ?>

        </div>
      </div>
    </section>