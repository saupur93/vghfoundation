<?php get_header(); ?>

	<div class="page-wrap">
    <?php get_template_part('templates/layouts/layouts'); ?>



    <section class="panel footer-themes-menu padded-top">
      <ul id="themes-menu">
          <li class="surgery">
            <a class="open" href="/themes/surgery"><span>Surgery</span><span class="read-more">Learn More</span></a>
            <div class="thumb" style="background-image:url(<?php bloginfo('template_directory'); ?>/assets/img/home/surgery-thumb.jpg";)"></div>
          </li>
          <li class="cancer">
            <a class="open" href="/themes/cancer"><span>Cancer</span><span class="read-more">Learn More</span></a>
            <div class="thumb" style="background-image:url(<?php bloginfo('template_directory'); ?>/assets/img/home/cancer-thumb.jpg";)"></div>
          </li>
          <li class="heart-lung">
            <a class="open" href="/themes/heart-lung"><span>Heart & Lung</span><span class="read-more">Learn More</span></a>
            <div class="thumb" style="background-image:url(<?php bloginfo('template_directory'); ?>/assets/img/home/heart-lung-thumb.jpg";)"></div>
          </li>
          <li class="innovation">
            <a class="open" href="/themes/innovation"><span>Innovation</span><span class="read-more">Learn More</span></a>
            <div class="thumb" style="background-image:url(<?php bloginfo('template_directory'); ?>/assets/img/home/innovation-thumb.jpg";)"></div>
          </li>
          <li class="community">
            <a class="open" href="/themes/community"><span>Community</span><span class="read-more">Learn More</span></a>
            <div class="thumb" style="background-image:url(<?php bloginfo('template_directory'); ?>/assets/img/home/community-thumb.jpg";)"></div>
          </li>
          <li class="brain-health">
            <a class="open" href="/themes/brain-health"><span>Brain Health</span><span class="read-more">Learn More</span></a>
            <div class="thumb" style="background-image:url(<?php bloginfo('template_directory'); ?>/assets/img/home/brain-health-thumb.jpg";)"></div>
          </li>
      </ul>
    </section>




  </div>

  <?php edit_post_link('edit', '<div class="admin-edit-link">', '</div>'); ?>

<?php get_footer(); ?>
