<?php
/**
 * The template for displaying Search Results pages.
 *
 * @package ac inuk
 */
get_header();
?>
<div class="grid" >
  <section class="grid__item content-area" id="primary"  >
    <div class="site-content page" id="content"  role="main">

      <?php if (have_posts()) : ?>

        <header class="page__header">
          <h1 class="header"><?php printf(__('Search Results for: %s', 'ac_inuk'), '<span>' . get_search_query() . '</span>'); ?></h1>
        </header><!-- .page-header -->

        <?php /* Start the Loop */ ?>
        <?php while (have_posts()) : the_post(); ?>

          <?php get_template_part('templates/content', 'search'); ?>

        <?php endwhile; ?>

        <?php ac_inuk_content_nav('nav-below'); ?>

      <?php else : ?>

        <?php get_template_part('templates/no-results', 'search'); ?>

      <?php endif; ?>

    </div><!-- #content -->
  </section><!-- #primary -->

  <div class="grid__item" >
    <?php get_sidebar(); ?>
  </div>
</div><!-- /.grid -->
<?php get_footer(); ?>