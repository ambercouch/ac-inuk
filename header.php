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
    <meta charset="<?php bloginfo('charset'); ?>" />
    <meta name="viewport" content="width=device-width" />
    <title><?php wp_title('|', true, 'right'); ?></title>
    <link rel="profile" href="http://gmpg.org/xfn/11" />
    <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
    <!--[if lt IE 9]>
    <script src="<?php echo get_template_directory_uri(); ?>/js/html5.js" type="text/javascript"></script>
    <![endif]-->
    <script src="//use.typekit.net/kmf8utp.js"></script>
    <script>try {
        Typekit.load();
      } catch (e) {
      }</script>
<?php wp_head(); ?>
  </head>

  <body <?php body_class(); ?> <?php ac_body_data(); ?>>
    <div style="display:none;">
<?php include_once("assets/images/defs.svg"); ?>
    </div>
    <a class="site__tel" href="tel:02920382671">
      <span>029 2038 2671</span>
    </a>
<?php (AC_MENU_ABOVE_HEADER === TRUE) ? get_template_part('templates/snippets/site__navigation--main') : ''; ?>
    <div id="page" class="hfeed site">
<?php do_action('before'); ?>
      <header class="site__header--master" id="masthead"   role="banner">
        <div class="header--master" >
          <img class="header--master__banner-image"  src="<?php echo get_template_directory_uri(); ?>/assets/images/jpg/smile-makeover-cardiff.jpg" alt="" />
          <div class="header--master__strap"><span>Caring for <b>you</b><br>and <b>your</b> Smile</span></div>
          <div class="header--master__tel">
            <span>029 2038 2671</span>
          </div>
        </div><!-- /.header--master -->
      </header><!-- /.site__header -->
<?php get_template_part('templates/snippets/site__navigation--services'); ?>
      <div class="site__content" id="main" >
        <div class="content">
