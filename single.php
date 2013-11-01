<?php
/**
 * The Template for displaying all single posts.
 *
 * @package ac inuk
 */

get_header(); ?>
<div class="grid" >
	<div id="primary" class="grid__item content-area">
		<div id="content" class="site-content" role="main">

		<?php while ( have_posts() ) : the_post(); ?>

			<?php get_template_part( 'tempaltes/content', 'single' ); ?>

			<?php ac_inuk_content_nav( 'nav-below' ); ?>

			<?php
				// If comments are open or we have at least one comment, load up the comment template
				if ( comments_open() || '0' != get_comments_number() )
					comments_template();
			?>

		<?php endwhile; // end of the loop. ?>

		</div><!-- #content -->
	</div><!-- #primary -->

        <div class="grid__item" >
            <?php get_sidebar(); ?>
        </div>
        </div><!-- /.grid -->
<?php get_footer(); ?>