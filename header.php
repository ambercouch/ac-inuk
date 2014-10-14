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
    <?php wp_head(); ?>
    <script src="//use.typekit.net/vzt7jdb.js"></script>
    <script>try {
        Typekit.load();
      } catch (e) {
      }</script>
  </head>

  <body <?php body_class(); ?> <?php ac_body_data(); ?>>

    <div style="display:none;">
      <?php include_once("assets/images/defs.svg"); ?>
    </div>
    <?php (AC_MENU_ABOVE_HEADER === TRUE) ? get_template_part('templates/snippets/site__navigation--main') : ''; ?>
    <?php get_template_part('templates/snippets/site__navigation--social'); ?>
    <div id="page" class="hfeed site">
      <div class="sticky__wrapper">
        <?php do_action('before'); ?>

        <?php (AC_MENU_ABOVE_HEADER === FALSE) ? get_template_part('templates/snippets/site__navigation--main') : ''; ?>
        <div class="site__content" id="main" >
          <div class="content">
