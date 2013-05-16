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

<body <?php body_class(); ?>>
    
    <div class="callbacks_container">
        <ul class="rslides" id="slider4">
          <li>
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/1.jpg" alt="">
            <p class="caption">This is a caption</p>
          </li>
          <li>
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/2.jpg" alt="">
            <p class="caption">This is another caption</p>
          </li>
          <li>
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img//3.jpg" alt="">
            <p class="caption">The third caption</p>
          </li>
        </ul>
      </div>
    
<div id="page"  class="hfeed site">
	<?php do_action( 'before' ); ?>
	<header id="masthead" class="site-header" role="banner">
            <div class="container">
                <div class="grid">
		<div class="site-branding">
			<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
			<h2 class="site-description"><?php bloginfo( 'description' ); ?></h2>
		</div>
		<?php do_action('site_nav'); ?>
                </div><!-- /.grid -->
            </div><!-- /.container -->
	</header><!-- #masthead -->

	<div id="main" class="site-main">
            <div class="container" >
                <div class="grid">
