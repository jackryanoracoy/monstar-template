<?php
/*
 * monstar_wp functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Monstar Template
 */

if ( ! function_exists( 'monstar_wp_setup' ) ) :
  /*
   * Sets up theme defaults and registers support for various WordPress features.
   *
   * Note that this function is hooked into the after_setup_theme hook, which
   * runs before the init hook. The init hook is too late for some features, such
   * as indicating support for post thumbnails.
   */
  function monstar_wp_setup() {
    /*
     * Make theme available for translation.
     * Translations can be filed in the /languages/ directory.
     * If you're building a theme based on monstar_wp, use a find and replace
     * to change 'monstar_wp' to the name of your theme in all the template files.
     */
    load_theme_textdomain( 'monstar_wp', get_template_directory() . '/languages' );

    // Add default posts and comments RSS feed links to head.
    add_theme_support( 'automatic-feed-links' );

    /*
     * Let WordPress manage the document title.
     * By adding theme support, we declare that this theme does not use a
     * hard-coded <title> tag in the document head, and expect WordPress to
     * provide it for us.
     */
    add_theme_support( 'title-tag' );

    /*
     * Enable support for Post Thumbnails on posts and pages.
     *
     * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
     */
    add_theme_support( 'post-thumbnails' );

    // This theme uses wp_nav_menu() in one location.
    register_nav_menus( array(
      'menu-1' => esc_html__( 'Primary', 'monstar_wp' ),
    ) );

    /*
     * Switch default core markup for search form, comment form, and comments
     * to output valid HTML5.
     */
    add_theme_support( 'html5', array(
      'search-form',
      'comment-form',
      'comment-list',
      'gallery',
      'caption',
    ) );

    // Set up the WordPress core custom background feature.
    add_theme_support( 'custom-background', apply_filters( 'monstar_wp_custom_background_args', array(
      'default-color' => 'ffffff',
      'default-image' => '',
    ) ) );

    // Add theme support for selective refresh for widgets.
    add_theme_support( 'customize-selective-refresh-widgets' );

    /*
     * Add support for core custom logo.
     *
     * @link https://codex.wordpress.org/Theme_Logo
     */
    add_theme_support( 'custom-logo', array(
      'height'      => 75,
      'width'       => 75,
      'flex-width'  => true,
      'flex-height' => true,
    ) );
  }
endif;
add_action( 'after_setup_theme', 'monstar_wp_setup' );

/*
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function monstar_wp_content_width() {
  // This variable is intended to be overruled from themes.
  // Open WPCS issue: {@link https://github.com/WordPress-Coding-Standards/WordPress-Coding-Standards/issues/1043}.
  // phpcs:ignore WordPress.NamingConventions.PrefixAllGlobals.NonPrefixedVariableFound
  $GLOBALS['content_width'] = apply_filters( 'monstar_wp_content_width', 640 );
}
add_action( 'after_setup_theme', 'monstar_wp_content_width', 0 );

/*
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function monstar_wp_widgets_init() {
  register_sidebar( array(
    'name'          => esc_html__( 'Sidebar', 'monstar_wp' ),
    'id'            => 'sidebar-1',
    'description'   => esc_html__( 'Add widgets here.', 'monstar_wp' ),
    'before_widget' => '<section id="%1$s" class="widget is-%2$s">',
    'after_widget'  => '</section>',
    'before_title'  => '<h2 class="heading-widget">',
    'after_title'   => '</h2>',
  ) );
}
add_action( 'widgets_init', 'monstar_wp_widgets_init' );

/*
 * Filter the except length to 20 words.
 */
// function wp_custom_excerpt_length( $length ) { return 20; }
// add_filter( 'excerpt_length', 'wp_custom_excerpt_length', 999 );

/*
 * Filter the "get_custom_logo".
 */
add_filter( 'get_custom_logo', 'change_logo_class' );
function change_logo_class( $html ) {
    $html = str_replace( 'custom-logo', 'site-branding-logo', $html );
    $html = str_replace( 'site-branding-logo-link', 'site-branding', $html );
    return $html;
}

/*
 * Filter the "read more" excerpt string link to the post.
 */
function wp_excerpt_more( $more ) {
  if ( ! is_single() ) { $more = sprintf( '...&nbsp;<a class="read-more" href="%1$s">%2$s</a>', get_permalink( get_the_ID() ), __( 'Read More', 'monstar_wp' ) ); }
  return $more;
}
add_filter( 'excerpt_more', 'wp_excerpt_more' );

/*
 * Enqueue scripts and styles.
 */
function monstar_wp_scripts() {
  wp_enqueue_style( 'monstar_wp-style', get_stylesheet_uri() );

  wp_enqueue_script( 'monstar_wp-script', get_template_directory_uri() . '/scripts/script.js', array('jquery'), '20200402', true );

  wp_enqueue_script( 'monstar_wp-navigation', get_template_directory_uri() . '/scripts/navigation.js', array(), '20200402', true );

  wp_enqueue_script( 'monstar_wp-skip-link-focus-fix', get_template_directory_uri() . '/scripts/skip-link-focus-fix.js', array(), '20200402', true );

  if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
    wp_enqueue_script( 'comment-reply' );
  }
}
add_action( 'wp_enqueue_scripts', 'monstar_wp_scripts' );

/*
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/*
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/*
 * Functions which enhance the theme by hooking into WordPress.
 */
require get_template_directory() . '/inc/template-functions.php';

/*
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/*
 * Load Jetpack compatibility file.
 */
if ( defined( 'JETPACK__VERSION' ) ) {
  require get_template_directory() . '/inc/jetpack.php';
}



