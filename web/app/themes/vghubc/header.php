<?php $currentLang = qtrans_getLanguage(); ?>
<!doctype html>
<!--[if lt IE 9 ]><html lang="<?php print $currentLang; ?>" class="no-js lt-ie9 ie"><![endif]-->
<!--[if IE 9 ]><html lang="<?php print $currentLang; ?>" class="no-js ie9 ie"><![endif]-->
<!--[if (gt IE 9)|!(IE)]><!--><html lang="<?php print $currentLang; ?>" class="no-js"><!--<![endif]-->
<head>
	<meta content="text/html;charset=utf-8" http-equiv="Content-Type">
	<title><?php wp_title('&raquo;','true','right'); ?><?php bloginfo('name'); ?></title>
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



  <?php if ( WP_ENV !== 'production' ): ?>
  <meta name="robots" content="noindex">
  <?php endif; ?>

  <?php wp_head(); ?>

</head>

<body <?php body_class(); ?>>
  <script>document.body.classList.add('fade-out');</script>

	<?php get_template_part('templates/partials/ie', 'message'); ?>


	<?php get_template_part('templates/partials/svg', 'icons'); ?>


	<?php get_template_part('templates/partials/global', 'nav'); ?>


