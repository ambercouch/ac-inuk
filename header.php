<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="main">
 *
 * @package ac inuk
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<meta name="viewport" content="width=device-width" />
<title><?php wp_title( '|', true, 'right' ); ?></title>
<link rel="profile" href="http://gmpg.org/xfn/11" />
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
<!--[if lt IE 9]>
<script src="<?php echo get_template_directory_uri(); ?>/js/html5.js" type="text/javascript"></script>
<![endif]-->

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?> <?php ac_body_data(); ?>>
<div id="page" class="hfeed site">
	<?php do_action( 'before' ); ?>
	<header id="masthead" class="site-header" role="banner">
            <div class="container" >
                <div class="grid">
                     <div class="site-branding grid__item">
                        <div class="content-site-branding">
                            <?php if(is_home() || is_front_page()) :?>
                            <h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
                            <h2 class="site-description"><?php bloginfo( 'description' ); ?></h2>
                            <?php else : ?>
                            <div class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></div>
                            <span class="site-description"><?php bloginfo( 'description' ); ?></span>
                            <?php endif; ?>
                        </div><!-- /.content-site-branding -->
                    </div><!-- /.site-branding -->
                </div>
            </div><!-- /.container -->
        </header><!-- #masthead -->
        <nav id="nav-main"class="site-navigation"  role="navigation">
            <div class="container" >
                 <div class="grid">
                     <div class="grid__item site-navigation__menu">
                         <a class="site-navigation__menu-link" href="#menu">Menu</a>
                         <?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_class' => 'menu multi-dropdown'  ) ); ?>
                     </div>
                </div>
            </div><!-- /.container -->
        </nav><!-- #site-navigation -->
	<div id="main" class="site-main container">
