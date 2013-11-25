<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the id=main div and all content after
 *
 * @package ac inuk
 */
?>

	</div><!-- #main -->

	<footer id="colophon" class="site-footer" role="contentinfo">
            <div class="container" >
                <div class="grid">
                    <div class="grid__item site-info" >
                        <div class="content-site-info">
                                <?php do_action( 'ac_inuk_credits' ); ?>
                                <a href="http://wordpress.org/" title="<?php esc_attr_e( 'A Semantic Personal Publishing Platform', 'ac_inuk' ); ?>" rel="generator"><?php printf( __( 'Proudly powered by %s', 'ac_inuk' ), 'WordPress' ); ?></a>
                                <span class="sep"> | </span>
                                <?php printf( __( 'Theme: %1$s by %2$s.', 'ac_inuk' ), 'ac inuk', '<a href="http://underscores.me/" rel="designer">Underscores.me</a>' ); ?>
                        </div><!-- .site-info -->
                    </div>
                </div>
            </div>
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>