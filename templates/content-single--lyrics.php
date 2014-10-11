<?php
/**
 * @package ac inuk
 */
?>

<article <?php post_class(); ?> id="post-<?php the_ID(); ?>" >
  <header class="post__header">
    <div class="header--article">
      <h1 class="header--article__title">
        <span class="title--article" ><?php the_title(); ?></span>
      </h1>


    </div>
  </header><!-- .entry-header -->

  <div class="post__content">
    <?php the_content(); ?>
    <?php
    wp_link_pages(array(
        'before' => '<div class="page-links">' . __('Pages:', 'ac_inuk'),
        'after' => '</div>',
    ));
    ?>
  </div><!-- .entry-content -->
</article><!-- #post-## -->
