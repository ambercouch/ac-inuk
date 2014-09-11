<div class="site__navigation--main" id="nav-main"   role="navigation" <?php echo(AC_MENU_ABOVE_HEADER === FALSE) ? 'data-responsive-clone="true"' : ''; ?>>
  <div class="navigation--main" >
    <div class="grid">
      <div class="navigation--main__menu">
        <div class="menu--site ">
          <div class="menu--site__branding">
            <div class="branding">
              <?php if (is_home() || is_front_page()) : ?>
                <h1 class="branding__title"><a href="<?php echo esc_url(home_url('/')); ?>" title="<?php echo esc_attr(get_bloginfo('name', 'display')); ?>" rel="home"><?php bloginfo('name'); ?></a></h1>
                <h2 class="branding__description"><?php bloginfo('description'); ?></h2>
              <?php else : ?>
                <div class="branding__title"><a href="<?php echo esc_url(home_url('/')); ?>" title="<?php echo esc_attr(get_bloginfo('name', 'display')); ?>" rel="home"><?php bloginfo('name'); ?></a></div>
                <span class="branding__description"><?php bloginfo('description'); ?></span>
              <?php endif; ?>
            </div><!-- /.branding -->
            <a id="site_menu_toggle" class="menu--responsive-toggle__toggle" href="#menu">Menu</a>
            <?php wp_nav_menu(array('theme_location' => 'primary', 'container' => 'nav', 'container_class' => 'menu--site__container', 'menu_class' => 'menu--site__menu-list')); ?>
          </div>
          <!-- menu -->
        </div>
      </div>
    </div><!-- /.container -->
  </div><!-- #site-navigation -->
