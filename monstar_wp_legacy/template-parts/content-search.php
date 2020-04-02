<?php
/*
 * Template part for displaying results in search pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package monstar_wp_legacy
 */

?>


          <?php the_title( sprintf( '<h2 class="heading-section"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h2>' );

          if ( 'post' === get_post_type() ) : ?>

          <div class="entry-meta">
            <?php
            monstar_wp_legacy_posted_on();
            monstar_wp_legacy_posted_by();
            ?>
          </div><!-- End - meta -->

          <?php endif; ?>

          <?php monstar_wp_legacy_post_thumbnail(); ?>

          <div class="entry-summary">
            <?php the_excerpt(); ?>
          </div><!-- End - summary -->

          <?php monstar_wp_legacy_entry_footer(); ?>

