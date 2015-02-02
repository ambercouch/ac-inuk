<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the id=main div and all content after
 *
 * @package ac inuk
 */
?>
</div><!-- .content -->
<div class="contnet--subsidiary">
  <div id="subsidiary" class="contnet--subsidiary__widget-area sidebar" role="complementary">
    <div class="widget-area" >
      <?php do_action('before_sidebar'); ?>
      <?php if (!dynamic_sidebar('subsidiary-aside')) : ?><?php endif; // end sidebar widget area ?>
    </div>
  </div><!-- #secondary -->
</div>
</div><!-- .site__content-->
<div class="sticky__push"></div><!-- Push that footer -->
</div><!-- .sticky__wrapper -->

<footer class="site__footer" id="colophon"  role="contentinfo">
  <div class="footer--master" >
    <div class="grid">
      <div class="footer--master__site-info" >
        <div class="site-info">
          <small>&COPY; Tim Arnold | <a href="mailto:info@timarnold.co.uk" title="contact">info@timarnold.co.uk</a> | <a href="http://ambercouch.co.uk" title="Web design Cardiff">Ambercouch, website design Cardiff</a></small>
        </div><!-- .site-info -->
      </div>
    </div>
  </div>
</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>