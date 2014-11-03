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
      <?php endwhile; // end of the loop.  ?>
      <div class="albums-list grid"  data-js="isotope">
        <?php $albums = ac_tax_loop(); ?>

        <?php foreach ($albums as $album): ?>
          <div class="albums-list__album" data-js="isotope__item">
            <div class="album" >
              <pre style="display:none;">
                <?php print_r($album); ?>
              </pre>
              <div class="album__title">
                <h1 class="title--album" ><?php echo $album->name; ?></h1>
                <small class="album__genre"><?php
                  echo substr(get_tax_meta($album->term_id, 'ac_date_field_release'), -4);
                  echo (get_tax_meta($album->term_id, 'ac_text_field_genre') == '') ? '' : ' | ' . get_tax_meta($album->term_id, 'ac_text_field_genre');
                  ?> </small>

              </div>

              <div class="album__image">
                <?php $img = get_tax_meta($album->term_id, 'ac_image_field_album_cover'); ?>

                <?php if (get_tax_meta($album->term_id, 'ac_text_field_i_tunes') != '') : ?>

                  <a href="<?php echo get_tax_meta($album->term_id, 'ac_text_field_i_tunes'); ?>" >
                    <img class="image--album" src="<?php echo $img['src']; ?>" alt="<?php echo $album->name; ?>" >
                    <?php if (get_tax_meta($album->term_id, 'ac_text_field_download_text') == '') : ?>
                      <p>
                        <img class="alignnone size-medium wp-image-10" src="/content/uploads/2014/10/itunes.svg" alt="itunes" />
                        <br>Download on itunes
                      </p>
                    <?php else : ?>
                      <p>
                        <?php echo get_tax_meta($album->term_id, 'ac_text_field_download_text'); ?>
                      </p>
                    <?php endif; ?>
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
              <?php query_posts(array('album' => $album->category_nicename, 'posts_per_page' => -1, 'order' => 'ASC')); ?>
              <?php if (have_posts()) : ?>
                <div class="album__track-list">
                  <div class="track-list--tax">
                    <h3 class="track-list__title" data-js="slideToggle" >
                      Tracks and Lyrics
                      <svg  preserveAspectRatio="none" class="icon track-list__title__icon__closed ">
                      <use xlink:href="#icon-triangle--right" />
                      </svg>
                      <svg  preserveAspectRatio="none" class="icon track-list__title__icon__open ">
                      <use xlink:href="#icon-triangle--down" />
                      </svg>
                    </h3>
                    <ol class="track-list__list">
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