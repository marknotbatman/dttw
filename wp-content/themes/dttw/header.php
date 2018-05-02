<!doctype html>
<html class="no-js" lang="en" dir="ltr">
	<head>
		<meta charset="<?php bloginfo('charset'); ?>">
		<meta http-equiv="x-ua-compatible" content="ie=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title><?php wp_title(''); ?><?php if(wp_title('', false)) { echo ' :'; } ?> <?php bloginfo('name'); ?></title>

		<link href="//www.google-analytics.com" rel="dns-prefetch">
        <link href="<?php echo get_template_directory_uri(); ?>/img/icons/favicon.ico" rel="shortcut icon">
        <link href="<?php echo get_template_directory_uri(); ?>/img/icons/touch.png" rel="apple-touch-icon-precomposed">

		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="description" content="<?php bloginfo('description'); ?>">

		<meta property="og:title" content="Down to the Wire">
		<meta property="og:description" content="Earlybird registration starts May 20th">
		<meta property="og:url" content="http://savethedate.dttwfilmrace.com" />
		<meta property="og:type" content="website" />
		<meta property="og:image" content="http://savethedate.dttwfilmrace.com//dttw-2018-social-share.jpg" />

		<meta name="twitter:site" value="@CreativeRushKS" />
		<meta property="twitter:url" content="http://savethedate.dttwfilmrace.com" />
		<meta property="twitter:title" content="Down to the Wire" />
		<meta property="twitter:description" content="Earlybird registration starts May 20th" />
		<meta property="twitter:image" content="http://savethedate.dttwfilmrace.com/dttw-2018-social-share.jpg" />
		<meta name="twitter:card" value="summary_large_image" />

		<link rel="stylesheet" href="/wp-content/themes/dttw/assets/dist/css/app.css">
		<link rel="shortcut icon" href="/dttw-favicon.png">
		<script defer src="https://use.fontawesome.com/releases/v5.0.8/js/all.js" integrity="sha384-SlE991lGASHoBfWbelyBPLsUlwY1GwNDJo3jSJO04KZ33K2bwfV9YBauFfnzvynJ" crossorigin="anonymous"></script>

	</head>
	<body <?php body_class(); ?>>

			<header class="" role="banner">
				<div class="row">
					<div class="columns medium-4">
						<a class="logo" href="<?php echo home_url(); ?>">
							logo
						</a>
					</div>
					<div class="columns medium-8">
						<nav class="nav" role="navigation">
							<?php wp_nav_menu( array( 'theme_location' => 'header-menu' ) ); ?>
						</nav>
					</div>
				</div>					
			</header>
