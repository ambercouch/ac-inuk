<?php
/**
 * The Template for displaying all single posts.
 *
 * @package ac inuk
 */
get_header();
?>
<div class="grid" >
  <div id="primary" class="content__single-lyrics">
    <div id="content" class="single-lyrics" role="main">

      <?php while (have_posts()) : the_post(); ?>

        <?php get_template_part('templates/content', 'single--lyrics'); ?>

      <?php endwhile; // end of the loop.  ?>

    </div><!-- #content -->
  </div><!-- #primary -->


</div><!-- /.grid -->
<?php get_footer(); ?>