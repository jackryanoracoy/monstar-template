<?php
/*
 * The template for displaying search results pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#search-result
 *
 * @package monstar_wp
 */

get_header();
?>

  <main id="site-main" class="site-main">

    <article id="site-content" class="site-content">

      <!-- This heading is for screen reader -->
      <h6 class="sr-only"><?php the_title( '', '&nbsp;-&nbsp;' ); bloginfo( 'name' ); ?></h6>

      <div class="container">
        <section class="section">

          <?php if ( have_posts() ) : ?>

          <h1 class="heading-section">
            <?php printf( esc_html__( 'Search Results for: %s', 'monstar_wp' ), '<span>' . get_search_query() . '</span>' ); ?>
          </h1>

          <?php
          /* Start the Loop */
          while ( have_posts() ) :
          the_post();

          /*
          * Run the loop for the search to output the results.
          * If you want to overload this in a child theme then include a file
          * called content-search.php and that will be used instead.
          */
          get_template_part( 'template-parts/content', 'search' );

          endwhile;

          the_posts_navigation();

          else :

          get_template_part( 'template-parts/content', 'none' );

          endif;
          ?>

        </section><!-- End - section -->
      </div><!-- End - container -->

    </article><!-- End - site-content -->

  </main><!-- End - site-main -->

<?php
get_sidebar();
get_footer();
