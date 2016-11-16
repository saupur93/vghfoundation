<footer id="footer">
  <div class="container">
    <div class="col-grid-3 first">
      <img src="<?php bloginfo('template_directory'); ?>/assets/img/VGHUBC-logo-footer.svg" />
    </div>

    <div class="col-grid-3 second">
      <?php $address_content = get_field('global_footer_address_area', 'option'); ?>
      <?php if($address_content): ?>
        <?php print $address_content; ?>
      <?php endif; ?>
    </div>

    <div class="col-grid-6 third">
      <div class="footer-right">


        <div class="col">
          <h4>Navigation</h4>
            <ul class="menu">
              <?php wp_nav_menu(array(
                'menu'        => 'Main Menu',
                'container'   => '',
                'items_wrap'  => '%3$s',
                'depth'       => 1
              )); ?>
            </ul>
        </div>

        <div class="col green-text">
          <h4>Follow Us</h4>
          <ul class="social">
            <li><a href="https://www.facebook.com/VGHUBCHospitalFoundation" target="_blank" class="fa fa-facebook"></a></li>
            <li><a href="https://twitter.com/vghfdn" target="_blank" class="fa fa-twitter"></a></li>
            <li><a href="https://www.youtube.com/user/VGHandUBCHFoundation" target="_blank" class="fa fa-youtube"></a></li>
            <li><a href="https://instagram.com/vghfdn/" target="_blank" class="fa fa-instagram"></a></li>
            <li><a href="https://www.linkedin.com/company/vgh-&amp;-ubc-hospital-foundation" target="_blank" class="fa fa-linkedin"></a></li>
          </ul>

          <form role="search" method="get" class="search-form" action="<?php echo home_url( '/' ); ?>">
            <input type="search" class="search-field"
                   placeholder="<?php echo esc_attr_x( 'Search', 'placeholder' ) ?>"
                   value="<?php echo get_search_query() ?>" name="s"
                   title="<?php echo esc_attr_x( 'Search for:', 'label' ) ?>" />
            <input type="submit" class="search-submit"
                value="<?php echo esc_attr_x( 'Search', 'submit button' ) ?>" />
          </form>

        </div>
      </div>
    </div>

  </div>
  <div class="container bottom-line">
    <p class="copyright">© <?php print date('Y'); ?> VGH & UBC Hospital Foundation. All rights reserved.</p>
    <div class="footer-secondary-menu">
      <a href="/privacy-policy/">Privacy Policy</a></a>
    </div>
  </div>
</footer>

<?php if ( WP_ENV == 'production' || WP_ENV == 'staging' ): ?>
  <?php $bundle = bundle_rev_file('js'); ?>
  <?php if($bundle): ?>
  <script src="<?php bloginfo('template_directory'); ?>/assets/js/<?php echo $bundle; ?>"></script>
  <?php else: ?>
  <script src="<?php bloginfo('template_directory'); ?>/assets/js/bundle.js"></script>
  <?php endif; ?>

<?php else: ?>
  <script src="<?php bloginfo('template_directory'); ?>/assets/js/bundle.js"></script>
<?php endif; ?>


  <script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
      (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
          m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');
  </script>

  <?php if ( WP_ENV == 'production' ): ?>
      <script>
          ga('create', '00000000');
          ga('send', 'pageview');
      </script>
  <?php endif; ?>

  <?php wp_footer(); ?>
</body>
</html>
