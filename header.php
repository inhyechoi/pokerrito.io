<?php
/**
 * The header for our theme.
 *
 * @package RED_Starter_Theme
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
	<head>
		<meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="new.css">
		<link rel="profile" href="http://gmpg.org/xfn/11">
		<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400|Raleway:300,400" rel="stylesheet">


	<?php wp_head(); ?>
	</head>

	<body <?php body_class(); ?>>
		<div id="page" class="hfeed site">
			<a class="skip-link screen-reader-text" href="#content"><?php esc_html( 'Skip to content' ); ?></a>

			<header id="masthead" class="site-header" role="banner">
    
				<nav id="site-navigation" class="main-navigation" role="navigation">
            
          <!--<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html( 'Primary Menu' ); ?></button>-->
          <div id="header-logo">
            <img alt="logo-white" class="logo-white" src="http://www.pokerrito.ca/wp-content/uploads/2017/08/pokerrito-logo-white.png">
          </div>
          <section class="responsive-menu">
            <input class="burger-check" id="burger-check" type="checkbox">
            <label for="burger-check" class="burger"></label>
            <nav id="navigation1" class="navigation">
              
              <div class="mainmenu-list show">
                 <?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_id' => 'primary-menu') );?>
              </div>
            </nav>


          </section>
        </nav><!-- #site-navigation -->
			</header><!-- #masthead -->

			<div id="content" class="site-content">
