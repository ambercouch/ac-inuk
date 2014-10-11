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
        <?php get_template_part('templates/content', 'page--tax'); ?>
        <?php $tax = the_field('taxonomy'); ?>
        <?php
        // If comments are open or we have at least one comment, load up the comment template
        // And we allow comments on pages.
        if ((comments_open() || '0' != get_comments_number()) && AC_PAGE_COMMENTS === TRUE) :
          ?>
          <?php // comments_template(); ?>

        <?php endif; ?>
      <?php endwhile; // end of the loop.  ?>
      <div class="albums-list grid">
        <?php foreach (get_categories(array('taxonomy' => 'album')) as $album): ?>
          <div class="albums-list__album">
            <div class="album" >
              <pre style="display:none;">
                <?php print_r($album); ?>
              </pre>
              <div class="album__title">
                <h1 class="title--album" ><?php echo $album->name; ?></h1>
              </div>

              <div class="album__image">
                <?php $img = get_tax_meta($album->term_id, 'ac_image_field_album_cover'); ?>

                <?php if (get_tax_meta($album->term_id, 'ac_text_field_i_tunes') != '') : ?>

                  <a href="<?php echo get_tax_meta($album->term_id, 'ac_text_field_i_tunes'); ?>" >
                    <img class="image--album" src="<?php echo $img['src']; ?>" alt="<?php echo $album->name; ?>" >
                    <p>
                      <img class="alignnone size-medium wp-image-10" src="/content/uploads/2014/10/itunes.svg" alt="itunes" />
                      <br>Download on itunes
                    </p>
                  </a>
                <?php else: ?>
                  <img class="image--album" src="<?php echo $img['src']; ?>" alt="<?php echo $album->name; ?>" >
                <?php endif; ?>
              </div>
              <?php if ($album->description != '') : ?>
                <div class="album__review">
                  <blockquote class="review">
                    <p class="review__body"> <?php echo $album->description; ?></p>
                    <cite class="review__cite"><?php echo get_tax_meta($album->term_id, 'ac_text_field_cite') ?></cite>
                  </blockquote>
                </div>
              <?php endif; ?>
              <?php query_posts(array('album' => $album->category_nicename, 'posts_per_page' => -1)); ?>
              <?php if (have_posts()) : ?>
                <div class="album__track-list">
                  <div class="track-list--tax">
                    <h3 class="title--tracks">Tracks</h3>
                    <ol>
                      <?php while (have_posts()) : the_post(); ?>
                        <?php if (get_the_content() != '') : ?>
                          <li><a href="<?php the_permalink() ?>" ><?php the_title(); ?></a></li>
                        <?php else : ?>
                          <li><?php the_title(); ?></li>
                        <?php endif; ?>
                      <?php endwhile; ?>
                    </ol>
                  </div>
                </div>
              <?php endif; ?>
            </div><!-- .album -->
          </div><!-- .albums-list__album -->
        <?php endforeach; ?>
      </div>

    </div><!-- /.site-content -->
  </div><!-- /.content__single-page -->
</div><!-- /.grid -->
<?php get_footer(); ?>
