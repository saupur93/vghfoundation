<footer id="footer">
  <div class="container">


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
