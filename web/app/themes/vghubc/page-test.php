<html>
	<head>
		<title>Test</title>
		<?php wp_head(); ?>
		<?php if ( WP_ENV == 'production' || WP_ENV == 'staging' ): ?>
		  <?php $bundle = bundle_rev_file('css'); ?>
		  <?php if($bundle): ?>

		  <link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo('template_directory'); ?>/assets/css/<?php echo $bundle; ?>" />
		  <?php else: ?>
		  <link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo('template_directory'); ?>/assets/css/styles.css" />
		  <?php endif; ?>

		<?php else: ?>
		  <link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo('template_directory'); ?>/assets/css/styles.css" />
		<?php endif; ?>
	</head>
	<body>
		<div class="page-wrap" style="height:3000px;">
		  test
		</div>
		<?php wp_footer(); ?>
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
	</body>
</html>
