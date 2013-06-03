<?php
/*
Template Name: Parts
*/

global $wp_query;
        $temp_q = $wp_query;
        $wp_query= null;
        $wp_query = new WP_Query();
        $wp_query->query(array( 
                            'post_type' => 'post',
                            'showposts' => 5,
                            'tag' => 'part',
                            'orderby' => 'menu_order',
                            'order' => 'DESC')
                         ); 

get_header(); ?>
<!-- Template parts -->
	<div id="primary" class="content-area full-width">
		<div id="content" class="site-content" role="main">

		<?php if ( have_posts() ) : ?>

			<?php /* Start the Loop */ ?>
			<?php while ( have_posts() ) : the_post(); ?>

				<?php get_template_part( 'content', 'page-part' ); ?>

			<?php endwhile; ?>

			<?php endif; ?>

		</div><!-- #content -->
	</div><!-- #primary -->
<?php  $wp_query = $temp_q; ?>  
        
<?php get_footer(); ?>