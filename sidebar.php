<?php
/**
 * The Sidebar containing the main widget areas.
 *
 * @package ac inuk
 */
?>      <div id="secondary" class="grid__item side-bar" role="complementary">
            <div class="widget-area" >
                <?php do_action( 'before_sidebar' ); ?>
                <?php if ( ! dynamic_sidebar( 'sidebar-1' ) ) : ?><?php endif; // end sidebar widget area ?>
            </div>
        </div><!-- #secondary -->
