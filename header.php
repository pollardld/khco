<!DOCTYPE html>
<!--[if IE 8]>
<html class="ie ie8" <?php language_attributes(); ?>>
<![endif]-->
<!--[if !(IE 7) | !(IE 8)  ]><!-->
<html <?php language_attributes(); ?> class="no-us">
<!--<![endif]-->
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta name="viewport" content="width=device-width">
	<title><?php wp_title( '|', true, 'right' ); ?></title>
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
  <link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/img/favicon.ico"/>
		
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

    <header>
        <nav>
        	<ul id="primary-nav">
           		<li id="coverageNav"><a href="#">Coverage</a>
           			<ul class="subnav">
           				<li><a href="/healthcare-coverage-for-children/">Children</a></li>
           				<li><a href="/healthcare-coverage-for-adults/">Adults</a></li>
           			</ul>
           		</li>
           		<li><a href="/about-the-family-healthcare-foundation/">About</a></li>
		   		<li class="logo current_page_item"><h1><a href="/"><img src="<?php echo get_template_directory_uri(); ?>/img/logo.svg" /></a></h1></li>
		   		<li><a href="/enroll/">Get Enrolled</a></li>
		   		<li><a href="/contact-us/">Contact</a></li>
        	</ul>
        </nav>
    </header>