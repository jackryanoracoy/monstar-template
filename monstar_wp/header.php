<?php
/*
 * The template for displaying the header
 *
 * This is the template that displays all of the <head> section
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Monstar Template
 */

?>
<!doctype html>
<html class="no-js" <?php language_attributes(); ?>>

<head>

	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="mobile-web-app-capable" content="yes">
  <meta name="theme-color" content="#009688">
  <meta name="apple-mobile-web-app-capable" content="yes">
  <meta name="apple-mobile-web-app-status-bar-style" content="black">

	<link rel="profile" href="https://gmpg.org/xfn/11">

  <?php wp_head(); ?>

</head>

<body <?php body_class(); ?>>

  <!--[if IE]><p class="browser-notice">You are using an <strong>outdated</strong> browser. Please upgrade your browser to improve your experience and security.</p><![endif]-->

	<a class="sr-only is-focusable" href="#site-content"><?php esc_html_e( 'Skip to content', 'monstar_wp' ); ?></a>

  <header class="site-header">

    <div class="site-header-content bg-primary flex is-jus-spbetween is-alt-center">

      <div class="site-header-branding">

        <?php
        if ( is_front_page() && is_home() ) :
        ?>

        <h1 class="site-branding"><a class="site-branding-title" href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>

        <?php
        else :
        ?>

        <p class="site-branding"><a class="site-branding-title" href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>

        <?php
        endif;

        $monstar_wp_description = get_bloginfo( 'description', 'display' );
        if ( $monstar_wp_description || is_customize_preview() ) :
        ?>

        <p class="sr-only"><?php echo $monstar_wp_description; ?></p>

        <?php
        endif;
        ?>

      </div><!-- End - branding -->

      <div class="site-header-menu hidden-lg-min">
        <a class="site-menu" href="javascript:void(0)"><span class="site-menu-box"><span class="site-menu-inner"></span></span></a>
      </div><!-- End - menu -->

    </div><!-- End - content -->

    <div class="site-header-content bg-secondary">

      <nav class="site-header-navigation" role="navigation">
        <?php
        wp_nav_menu( array(
        'theme_location' => 'menu-1',
        'menu_class'     => 'site-nav',
        'menu_id'        => 'primary-menu',
        ) );
        ?>
      </nav><!-- End - navigation -->

    </div><!-- End - content -->

  </header><!-- End - site-header -->
