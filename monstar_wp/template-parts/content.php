<?php
/*
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package monstar_wp
 */

?>

          <?php
          if ( is_singular() ) :
          the_title( '<h1 class="heading-section">', '</h1>' );
          else :
          the_title( '<h2 class="heading-section"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
          endif;

          if ( 'post' === get_post_type() ) :
          ?>
          <div class="entry-meta">
            <?php
            monstar_wp_posted_on();
            monstar_wp_posted_by();
            ?>
          </div><!-- End - meta -->
          <?php endif; ?>

          <?php
          monstar_wp_post_thumbnail();

          the_content( sprintf(
            wp_kses( __( 'Continue reading<span class="screen-reader-text"> "%s"</span>', 'monstar_wp' ),
            array( 'span' => array( 'class' => array(), ), ) ),
            get_the_title() )
          );

          wp_link_pages( array(
            'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'monstar_wp' ),
            'after'  => '</div>',
          ) );

          monstar_wp_entry_footer();
          ?>
