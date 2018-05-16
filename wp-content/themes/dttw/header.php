<!doctype html>
<html class="no-js" lang="en" dir="ltr">
	<head>
		<meta charset="<?php bloginfo('charset'); ?>">
		<meta http-equiv="x-ua-compatible" content="ie=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title><?php wp_title(''); ?><?php if(wp_title('', false)) { echo ' :'; } ?> <?php bloginfo('name'); ?></title>
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.12/css/all.css" integrity="sha384-G0fIWCsCzJIMAVNQPfjH08cyYaUtMwjJwqiRKxxE/rx96Uroj1BtIQ6MLJuheaO9" crossorigin="anonymous">
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

		<script>
		(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
			(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
			m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
		})(window,document,'script','https://web.archive.org/web/20160803025407/https://www.google-analytics.com/analytics.js','ga');

		ga('create', 'UA-39910583-1', 'auto');
		ga('send', 'pageview');

		</script>

	</head>
	<body <?php body_class(); ?>>

			<header class="" role="banner">
				<div class="row">
					<div class="columns large-4 medium-6 small-6">
						<a class="logo" href="<?php echo home_url(); ?>">
							<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 654.8 111.7"><path class="st2" d="M16.4 110.4H0V1.3h16.4c11 0 15.4 6.9 15.4 21.5v66.2C31.8 103.5 27.3 110.4 16.4 110.4zM21.9 21c0-7-1.5-9.7-5.6-9.7H10v89.1h6.4c4.1 0 5.6-2.6 5.6-9.5V21z"/><path class="st2" d="M61.8 111.7c-8.8 0-16.2-7.5-16.2-18.7V18.7C45.6 7.7 52.9 0 61.8 0 70.6 0 78 7.7 78 18.7V93C78 104.1 70.6 111.7 61.8 111.7zM68.2 16.7c0-3.6-2.5-6.7-6.4-6.7 -4.1 0-6.4 3.1-6.4 6.7V95c0 3.8 2.3 6.7 6.4 6.7 3.9 0 6.4-2.9 6.4-6.7V16.7z"/><path class="st2" d="M130.6 110.4h-9l-6.1-68.6 -7.2 68.6h-9l-9-109.1h9.7l4.9 77.1 8.2-77.1h7.4l6.7 77.1 6.2-77.1h8.8L130.6 110.4z"/><path class="st2" d="M182.2 110.4L167.8 54l-3.3-16.5v72.9h-9.3V1.3h9.7l12.4 57 2.9 16.9V1.3h9.3v109.1H182.2z"/><path class="st2" d="M247.6 11v99.4h-9.8V11h-10.6V1.3h30.3V11H247.6z"/><path class="st2" d="M286.1 111.7c-8.8 0-16.2-7.5-16.2-18.7V18.7c0-11 7.4-18.7 16.2-18.7 8.8 0 16.2 7.7 16.2 18.7V93C302.3 104.1 294.9 111.7 286.1 111.7zM292.5 16.7c0-3.6-2.5-6.7-6.4-6.7 -4.1 0-6.4 3.1-6.4 6.7V95c0 3.8 2.3 6.7 6.4 6.7 3.9 0 6.4-2.9 6.4-6.7V16.7z"/><path class="st2" d="M359.9 11v99.4h-9.8V11h-10.6V1.3h30.3V11H359.9z"/><path class="st2" d="M405.2 110.4V61.2H393v49.1h-10V1.3h10v50.6h12.3V1.3h9.8v109.1H405.2z"/><path class="st2" d="M429.7 110.4V1.3h26.5v9.3h-16.7v39h12.1v9.3h-12.1V101h16.7v9.3H429.7z"/><path class="st2" d="M532.2 110.4h-9l-6.1-68.6 -7.2 68.6h-9L492 1.3h9.7l4.9 77.1 8.2-77.1h7.4l6.7 77.1L535 1.3h8.8L532.2 110.4z"/><path class="st2" d="M557 110.4V1.3h10v109.1H557z"/><path class="st2" d="M611.4 111.2c-5.7 0-8.2-2.1-8.2-10.2V69.3c0-4.4-2.3-7.2-5.7-7.2h-5.9v48.3h-10V1.3h16.5c6.4 0 14.4 3.3 14.4 17.2v25.4c0 6.5-1.6 11.5-6.7 13.8 5.1 2.3 7 7.2 7 13.6v29.6c0 2.9 0.3 4.3 2.1 4.3v6.1H611.4zM602.7 17.5c0-4.4-2-6.2-4.7-6.2h-6.4v41.3h5.6c3.3 0 5.6-2.8 5.6-7.2V17.5z"/><path class="st2" d="M628.3 110.4V1.3h26.5v9.3h-16.7v39h12.1v9.3h-12.1V101h16.7v9.3H628.3z"/></svg>
						</a>
					</div>
					<div class="columns large-8 medium-6 small-6">
						<div id="toggle" class="hide-for-large">
							<span class="burger bt-menu-trigger close">
								<span>Menu</span>
							</span>
						</div>
						<nav class="nav" role="navigation">
							<?php wp_nav_menu( array( 'theme_location' => 'header-menu' ) ); ?>
						</nav>
					</div>
				</div>					
			</header>
