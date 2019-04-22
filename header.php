<!DOCTYPE HTML>
<!--
	Ion by TEMPLATED
	templated.co @templatedco
	Released for free under the Creative Commons Attribution 3.0 license (templated.co/license)
-->
<html>
	<head>
		<title>Ion by TEMPLATED</title>
		<meta http-equiv="content-type" content="text/html; charset=utf-8" />
		<meta name="description" content="" />
		<meta name="keywords" content="" />
		
        <?php wp_head(); ?>
	</head>
	<body id="top" <?php body_class(); ?> >

		<!-- Header -->
			<header id="header" class="skel-layers-fixed">
				<h1><a href="#">Ion</a></h1>
				<nav id="nav">
					
						<?php wp_nav_menu( array(
                            'theme_location' => 'mainmenu',
                           
                        ) ) ?>
					
				</nav>
			</header>

		<!-- Banner -->
			<section id="banner">
                <?php
                if(is_home()){
                    get_template_part( '/template-parts/common/banner');
                }
                
                
                ?>
			</section>