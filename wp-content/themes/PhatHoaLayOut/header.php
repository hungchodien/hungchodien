<!DOCTYPE html>
<!--[if IE 6]>
<html id="ie6" class="ie" dir="ltr" lang="en-US">
<![endif]-->
<!--[if IE 7]>
<html id="ie7" class="ie" dir="ltr" lang="en-US">
<![endif]-->
<!--[if IE 8]>
<html id="ie8" class="ie" dir="ltr" lang="en-US">
<![endif]-->
<!--[if IE 9]>
<html class="ie" dir="ltr" lang="en-US">
<![endif]-->
<!--[if !(IE 6) | !(IE 7) | !(IE 8)  ]><!-->
<html  <?php language_attributes(); ?>>
<!--<![endif]-->
<head>
<link rel="shortcut icon" href="<?php echo get_stylesheet_directory_uri(); ?>/favicon.ico" />
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
<link rel="profile" href="http://gmpg.org/xfn/11" />
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
<!--[if lt IE 9]>
	<script src="<?php echo get_template_directory_uri(); ?>/js/html5.js" type="text/javascript"></script>
	<script src="<?php echo get_template_directory_uri(); ?>/js/selectivizr.js" type="text/javascript"></script>
	<script src="<?php echo get_template_directory_uri(); ?>/js/css3-mediaqueries.js" type="text/javascript"></script>
<![endif]-->
<!--[if lt IE 10]>
   <script src="<?php echo get_template_directory_uri(); ?>/js/matchMedia.js" type="text/javascript"></script>
<![endif]-->
    <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/customslider.js"></script>
    <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/jssorSlider.js"></script>
    <link rel="stylesheet" href = "<?php echo get_template_directory_uri(); ?>/css/customstyle.css">
<?php wp_head(); ?>

</head>
<body <?php body_class(); ?>>
