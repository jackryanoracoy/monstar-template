<?php
/*
 * Template part for displaying a message that posts cannot be found
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Monstar Template
 */

?>

          <h1 class="heading-section"><?php esc_html_e( 'Nothing Found', 'monstar_wp' ); ?></h1>

          <?php
          if ( is_home() && current_user_can( 'publish_posts' ) ) :

          printf( '<p>' . wp_kses( __( 'Ready to publish your first post? <a href="%1$s">Get started here</a>.', 'monstar_wp' ),
          array( 'a' => array( 'href' => array(), ), ) ) . '</p>', esc_url( admin_url( 'post-new.php' ) ) );

          elseif ( is_search() ) :
          ?>

          <p><?php esc_html_e( 'Sorry, but nothing matched your search terms. Please try again with some different keywords.', 'monstar_wp' ); ?></p>
          <?php
          get_search_form();

          else :
          ?>

          <p><?php esc_html_e( 'It seems we can&rsquo;t find what you&rsquo;re looking for. Perhaps searching can help.', 'monstar_wp' ); ?></p>
          <?php
          get_search_form();

          endif;
          ?>
