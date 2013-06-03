<?php
/*
 * 

$defaults = array(
	'theme_location'  => '',
	'menu'            => '',
	'container'       => 'div',
	'container_class' => '',
	'container_id'    => '',
	'menu_class'      => 'menu',
	'menu_id'         => '',
	'echo'            => true,
	'fallback_cb'     => 'wp_page_menu',
	'before'          => '',
	'after'           => '',
	'link_before'     => '',
	'link_after'      => '',
	'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>',
	'depth'           => 0,
	'walker'          => ''
);

wp_nav_menu( $defaults );
    
 * 
 */

function site_nav(){ 
    $args = array( 'theme_location' => 'primary',
                    'menu_class'      => 'nav  nav--center nav--pill')  
    ?>
    
    <!-- Site Nav -->
    <nav id="site-navigation" class="navigation-main" role="navigation">
        <?php wp_nav_menu( $args ); ?>
    </nav><!-- #site-navigation -->

  <?php 
  
}
add_action('site_nav', 'site_nav');

