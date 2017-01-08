<?php
/*
  Template Name: Tax List
 */
get_header();
?>
  <div class="grid">
    <div id="primary" class="content__tax--list">
      <div id="content" class="single-page" role="main">
        <?php while (have_posts()) : the_post(); ?>
          <?php get_template_part('templates/content', 'page--tax'); ?>
          <?php $tax = the_field('taxonomy'); ?>
        <?php endwhile; // end of the loop.  ?>
        <div class="albums-list grid" data-js="isotope">
          <?php $albums = ac_tax_loop(); ?>

          <?php foreach ($albums as $album): ?>
            <div class="albums-list__album" data-js="isotope__item">
              <div class="album">
              <pre style="display:none;">
                <?php print_r($album); ?>
              </pre>
                <div class="album__title">
                  <h1 class="title--album"><?php echo $album->name; ?></h1>
                  <small class="album__genre"><?php
                    echo substr(get_tax_meta($album->term_id, 'ac_date_field_release'), -4);
                    echo (get_tax_meta($album->term_id, 'ac_text_field_genre') == '') ? '' : ' | ' . get_tax_meta($album->term_id, 'ac_text_field_genre');
                    ?> </small>

                </div>

                <div class="album__image">
                  <?php $img = get_tax_meta($album->term_id, 'ac_image_field_album_cover'); ?>

                  <?php if (get_tax_meta($album->term_id, 'ac_text_field_i_tunes') != '') : ?>


                      <img class="image--album" src="<?php echo $img['src']; ?>" alt="<?php echo $album->name; ?>">
                      <div class="album__buy">
                      <?php if (get_tax_meta($album->term_id, 'ac_text_field_download_text') == '') : ?>
                        <div class="album__itunes">
                          <a href="<?php echo get_tax_meta($album->term_id, 'ac_text_field_i_tunes'); ?>">
                          <img class="alignnone size-medium wp-image-10" src="/content/uploads/2014/10/itunes.svg"
                               alt="itunes"/>
                          <br>Download on itunes
                            </a>
                        </div>
                      <?php else : ?>
                        <a href="<?php echo get_tax_meta($album->term_id, 'ac_text_field_i_tunes'); ?>">
                          <?php echo get_tax_meta($album->term_id, 'ac_text_field_download_text'); ?>
                        </a>
                      <?php endif; ?>
                    </a>
                  <?php else: ?>
                    <img class="image--album" src="<?php echo $img['src']; ?>" alt="<?php echo $album->name; ?>">
                  <?php endif; ?>

                  </div>
                </div>
                  <?php if (get_tax_meta($album->term_id, 'ac_text_field_paypal') != '') : ?>
                    <div class="album__paypal">
                      <form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_top">
                        <input type="hidden" name="cmd" value="_s-xclick">
                        <input type="hidden" name="hosted_button_id" value="<?php echo get_tax_meta($album->term_id, 'ac_text_field_paypal'); ?>">
                        <input type="image" src="/content/themes/ac-inuk/assets/images/svg/buynow.svg" border="0" name="submit" alt="PayPal – The safer, easier way to pay online.">
                        <img alt="" border="0" src="https://www.paypalobjects.com/en_GB/i/scr/pixel.gif" width="1" height="1">
                      </form>
                      <?php if (get_tax_meta($album->term_id, 'ac_text_field_paypal_text') != '') : ?>
                          <p><?php echo get_tax_meta($album->term_id, 'ac_text_field_paypal_text') ?></p>
                          <?php else: ?>
                          <p>Available on CD</p>
                    <?php endif; ?>
                    </div>
                  <?php endif ?>
                <?php if ($album->description != '') : ?>
                  <div class="album__review">
                    <blockquote class="review">
                      <p class="review__body"> <?php echo $album->description; ?></p>
                      <cite
                        class="review__cite"><?php echo get_tax_meta($album->term_id, 'ac_text_field_cite') ?></cite>
                    </blockquote>
                  </div>
                <?php endif; ?>
                <?php query_posts(array('album' => $album->category_nicename, 'posts_per_page' => -1, 'order' => 'ASC')); ?>
                <?php if (have_posts()) : ?>
                  <div class="album__track-list">
                    <div class="track-list--tax">
                      <h3 class="track-list__title" data-js="slideToggle">
                        Tracks and Lyrics
                        <svg preserveAspectRatio="none" class="icon track-list__title__icon__closed ">
                          <use xlink:href="#icon-triangle--right"/>
                        </svg>
                        <svg preserveAspectRatio="none" class="icon track-list__title__icon__open ">
                          <use xlink:href="#icon-triangle--down"/>
                        </svg>
                      </h3>
                      <ol class="track-list__list">
                        <?php while (have_posts()) : the_post(); ?>
                          <?php if (get_the_content() != '') : ?>
                            <li><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></li>
                          <?php else : ?>
                            <li><?php the_title(); ?></li>
                          <?php endif; ?>
                        <?php endwhile; ?>
                      </ol>
                    </div>
                  </div>
                <?php endif; ?>
              </div>
              <!-- .album -->
            </div><!-- .albums-list__album -->
          <?php endforeach; ?>
        </div>

      </div>
      <!-- /.site-content -->
    </div>
    <!-- /.content__single-page -->
  </div><!-- /.grid -->
<?php get_footer(); ?>