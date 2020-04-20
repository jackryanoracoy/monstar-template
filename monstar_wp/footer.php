<?php
/*
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Monstar Template
 */

?>

  <footer class="site-footer">

    <div class="bg-grey-300">
      <div class="container">
        <section class="section has-padding-narrow">

          <h5 class="text-center font-small font-medium-lg">&copy; <?php echo date('Y'); ?>&nbsp;<?php bloginfo( 'name' ); ?> - All Rights Reserved</h5>

        </section><!-- End - section -->
      </div><!-- End - container -->
    </div><!-- End - main-footer -->

  </footer><!-- End - site-footer -->

<?php wp_footer(); ?>

<!-- Google Analytics: change UA-XXXXX-Y to be your site's ID. -->
<script async src="https://www.google-analytics.com/analytics.js"></script>
<script>
window.ga = function () { ga.q.push(arguments) }; ga.q = []; ga.l = +new Date;
ga('create', 'UA-XXXXX-Y', 'auto'); ga('set','transport','beacon'); ga('send', 'pageview')
</script>

<!-- No Script -->
<noscript><p class="browser-notice">Please enable JavaScript and revisit (reload) this page, Thank you!</p></noscript>

</body>
</html>
