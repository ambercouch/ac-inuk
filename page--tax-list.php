<?php
/*
  Template Name: Tax List
 */
get_header();
?>
<div class="grid" >
  <div id="primary" class="content__tax--list">
    <div id="content" class="single-page" role="main">
      <?php while (have_posts()) : the_post(); ?>
        <?php get_template_part('templates/content', 'page'); ?>
        <?php $tax = the_field('taxonomy'); ?>
        <?php
        // If comments are open or we have at least one comment, load up the comment template
        // And we allow comments on pages.
        if ((comments_open() || '0' != get_comments_number()) && AC_PAGE_COMMENTS === TRUE) :
          ?>
          <?php // comments_template(); ?>

        <?php endif; ?>
      <?php endwhile; // end of the loop.  ?>
      <pre>
        <?php print_r(get_categories(array('taxonomy' => 'album'))); ?>
        <?php foreach (get_categories(array('taxonomy' => 'album')) as $album): ?>
                <h1 class="" ><?php echo $album->name; ?></h1>
          <?php //print_r(get_tax_meta($album->term_id, 'ac_date_field_release')); ?>

        <?php endforeach; ?>
      </pre>
    </div><!-- /.site-content -->
  </div><!-- /.content__single-page -->
</div><!-- /.grid -->
<?php get_footer(); ?>
