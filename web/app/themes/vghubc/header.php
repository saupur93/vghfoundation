<?php $currentLang = qtrans_getLanguage(); ?>
<!doctype html>
<!--[if lt IE 9 ]><html lang="<?php print $currentLang; ?>" class="no-js lt-ie9 ie"><![endif]-->
<!--[if IE 9 ]><html lang="<?php print $currentLang; ?>" class="no-js ie9 ie"><![endif]-->
<!--[if (gt IE 9)|!(IE)]><!--><html lang="<?php print $currentLang; ?>" class="no-js"><!--<![endif]-->
<head>
	<meta content="text/html;charset=utf-8" http-equiv="Content-Type">
	<title><?php wp_title('&raquo;','true','right'); ?></title>
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1,user-scalable=no">

	<!--[if IE]>
		<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->

	<link href='http://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,300italic,400italic,600italic' rel='stylesheet' type='text/css'>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css">

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

<?php if (WP_ENV == 'production'): ?>
  <!-- Google Tag Manager -->
  <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
  new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
  j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
  'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
  })(window,document,'script','dataLayer','GTM-KMXJKD');</script>
  <!-- End Google Tag Manager -->
<?php endif; ?>

<?php if ( WP_ENV !== 'production' ): ?>
	<meta name="robots" content="noindex">
<?php endif; ?>

	<?php wp_head(); ?>
  <script src="//cdnjs.cloudflare.com/ajax/libs/luminateExtend/1.8.1/luminateExtend.min.js"></script>
</head>

<body <?php body_class(); ?>>
<?php if (WP_ENV == 'production'): ?>
  <!-- Google Tag Manager (noscript) -->
  <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-KMXJKD"
  height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
  <!-- End Google Tag Manager (noscript) -->
<?php endif; ?>

	<?php get_template_part('templates/partials/ie', 'message'); ?>


	<?php get_template_part('templates/partials/svg', 'icons'); ?>


	<?php get_template_part('templates/partials/global', 'nav'); ?>
