<!doctype html>
<html class="no-js"  <?php language_attributes(); ?>>

	<head>
		<meta charset="utf-8">
		<!-- Google Tag Manager -->
		<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
		new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
		j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
		'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
		})(window,document,'script','dataLayer','GTM-TH824T4');</script>
		<!-- End Google Tag Manager -->

		<?php // Force IE to use the latest rendering engine available ?>
		<meta http-equiv="X-UA-Compatible" content="IE=edge">

		<?php // Mobile Meta ?>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta class="foundation-mq">
		<script src="https://use.typekit.net/ler4txx.js"></script>
		<script>try{Typekit.load({ async: true });}catch(e){}</script>
		<?php // If Site Icon isn't set in customizer ?>
		<?php if ( ! function_exists( 'has_site_icon' ) || ! has_site_icon() ) { ?>
			<?php // Icons & Favicons ?>
			<link rel="icon" href="<?php echo get_template_directory_uri(); ?>/favicon.png">
			<link href="<?php echo get_template_directory_uri(); ?>/assets/images/apple-icon-touch.png" rel="apple-touch-icon" />
			<!--[if IE]>
				<link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/favicon.ico">
			<![endif]-->
			<meta name="msapplication-TileColor" content="#f01d4f">
			<meta name="msapplication-TileImage" content="<?php echo get_template_directory_uri(); ?>/assets/images/win8-tile-icon.png">
			<meta name="theme-color" content="#121212">
		<?php } ?>

		<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">
		<?php wp_head(); ?>
		<style>
			.request-form .input-request {
				padding: 10px !important;
			}
		</style>

		<!-- Drop Google Analytics here -->
		<!-- end analytics -->
	</head>

	<?php // Uncomment this line if using the Off-Canvas Menu ?>
	<body <?php body_class(); ?>>

		<div class="off-canvas-wrapper">

			<?php get_template_part( 'parts/content', 'offcanvas' ); ?>

			<div class="off-canvas-content" data-off-canvas-content>
				<div id="nav-anchor" class="header" role="banner">

					<?php /* This navs will be applied to the topbar, above all content
						To see additional nav styles, visit the /parts directory */ ?>
					<?php get_template_part( 'parts/nav', 'offcanvas-topbar-ab' ); ?>

				</div> <!-- end .header -->
