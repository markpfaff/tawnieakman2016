<?php
/**
 * The header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package tawnieakman
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
    <script src="js/jquery.ez-bg-resize.js" type="text/javascript" charset="utf-8"></script>
<script src="https://code.jquery.com/jquery-2.1.4.min.js" type="text/javascript" charset="utf-8"></script>
<!--<script src="<?php //bloginfo('template_directory'); ?>/scripts/jquery.flexslider.js"></script>-->

<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/flexslider.css" type="text/css" media="all" />

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="hfeed site">
	<a class="skip-link screen-reader-text" href="#content"><?php _e( 'Skip to content', 'tawnieakman' ); ?></a>


	<header id="masthead" class="site-header" role="banner">
            
            <!--<div class="site-branding">
			<h1 class="site-title"><a href="</?php echo esc_url( home_url( '/' ) ); ?>" rel="home"></?php bloginfo( 'name' ); ?></a></h1>
			<h2 class="site-description"></?php bloginfo( 'description' ); ?></h2>
		</div><!-- .site-branding -->

		<nav id="site-navigation" class="main-navigation" role="navigation">
			<button class="menu-toggle" aria-controls="menu" aria-expanded="false"><img src="<?php bloginfo('template_directory'); ?>/images/menu.png" alt="Menu Button"/></button>
                        
                        <div id="logo">
                           
                            <a href="<?php echo home_url(); ?>"><img src="<?php bloginfo('template_directory'); ?>/images/logo2.png" alt="Tawni Eakman Logo"/></a>
<!--    alt logo placement             
<a class="link-block" href="</?php echo home_url(); ?>">
                                <div id="logo-inner">
                            
                                </div> end logo-inner div
                            </a>-->                        
                        </div>
                        
			<?php wp_nav_menu( array( 'theme_location' => 'primary' ) ); ?>
		</nav><!-- #site-navigation -->

	</header><!-- #masthead -->

	<div id="content" class="site-content">