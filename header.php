<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="main">
 *
 * @package WordPress
 * @subpackage Twenty_Twelve
 * @since Twenty Twelve 1.0
 */
?><!DOCTYPE html>
<!--[if IE 7]>
<html class="ie ie7" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 8]>
<html class="ie ie8" <?php language_attributes(); ?>>
<![endif]-->
<!--[if !(IE 7) | !(IE 8)  ]><!-->
<html <?php language_attributes(); ?>>
<!--<![endif]-->
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<meta name="viewport" content="initial-scale=1" />
<title><?php wp_title( '|', true, 'right' ); ?></title>
<link rel="profile" href="http://gmpg.org/xfn/11" />
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
<link href='http://fonts.googleapis.com/css?family=Loved+by+the+King' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Lora:400italic' rel='stylesheet' type='text/css'>
<?php // Loads HTML5 JavaScript file to add support for HTML5 elements in older IE versions. ?>
<!--[if lt IE 9]>
<script src="<?php echo get_template_directory_uri(); ?>/js/html5.js" type="text/javascript"></script>
<![endif]-->
<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
    <header id="masthead" class="site-header" role="banner">
		<hgroup class="wrapper">
		<nav id="site-navigation" class="main-navigation" role="navigation">
			<h3 class="menu-toggle"><?php _e( 'Menu', 'twentytwelve' ); ?></h3>
			<?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_class' => 'nav-menu' ) ); ?>
		</nav><!-- #site-navigation -->
        	<a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home" class="logo"><?php bloginfo( 'name' ); ?></a>
            <div class="topColRight"> 
            <?php do_action('icl_language_selector'); ?>
                <a href="#" title="Se connecter a votre espace wiine.me" class="connection">Se connecter</a>
            </div>
        </hgroup>	
	</header><!-- #masthead -->
    <div class="woodyTop">
        <div class="wrapper">
            <ul class="woodyConcept">
                <li class="wSubscribe"><a href="#subscribe" title="Wine Abonements en suisse">Subscribe</a></li>
                <li class="arrows a1"></li>
                <li class="wDrinkRemember"><a href="#drinkremember" title="Drink and remember">Drink &<br/>Remember</a></li>
                <li class="arrows a2"></li>
                <li class="wPlay"><a href="#subscribe" title="Play and learn with wiine">Play &<br/>Learn</a></li>                
            </ul>
        </div>
    </div>