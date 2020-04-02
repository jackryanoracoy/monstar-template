<?php
/*
 * Template part for displaying page content in page.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package monstar_wp_legacy
 */

?>

          <?php the_title( '<h1 class="heading-section">', '</h1>' ); ?>

          <?php monstar_wp_legacy_post_thumbnail(); ?>

          <?php
          the_content();

          wp_link_pages( array(
            'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'monstar_wp_legacy' ),
            'after'  => '</div>',
          ) );
          ?>

          <?php if ( get_edit_post_link() ) :
          edit_post_link(
            sprintf( wp_kses( __( 'Edit <span class="sr-only">%s</span> Content', 'monstar_wp_legacy' ),
            array( 'span' => array( 'class' => array(), ), ) ),
            get_the_title() ), '<p class="u-mar-top-20 u-text-right">', '</p>', null, 'button'
          );
          endif;
          ?>
