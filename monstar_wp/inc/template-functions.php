<?php
/*
 * Functions which enhance the theme by hooking into WordPress
 *
 * @package monstar_wp
 */

/*
 * Adds custom classes to the array of body classes.
 *
 * @param array $classes Classes for the body element.
 * @return array
 */
function monstar_wp_body_classes( $classes ) {
  // Adds a class of hfeed to non-singular pages.
  if ( ! is_singular() ) {
    $classes[] = 'hfeed';
  }

  // Adds a class of no-sidebar when there is no sidebar present.
  if ( ! is_active_sidebar( 'sidebar-1' ) ) {
    $classes[] = 'has-no-sidebar';
  }

  return $classes;
}
add_filter( 'body_class', 'monstar_wp_body_classes' );

/*
 * Add a pingback url auto-discovery header for single posts, pages, or attachments.
 */
function monstar_wp_pingback_header() {
  if ( is_singular() && pings_open() ) {
    printf( '<link rel="pingback" href="%s">', esc_url( get_bloginfo( 'pingback_url' ) ) );
  }
}
add_action( 'wp_head', 'monstar_wp_pingback_header' );

/*
 * Minify/Compress HTML Output
 */
class HTML_Compression {
  protected $compress_css = true;
  protected $compress_js = true;
  protected $info_comment = true;
  protected $remove_comments = true;
  protected $html;

  public function __construct($html) {
    if (!empty($html)) { $this->parseHTML($html); }
  }

  public function __toString() { return $this->html; }
  protected function bottomComment($raw, $compressed) {
    $raw = strlen($raw);
    $compressed = strlen($compressed);
    $savings = ($raw-$compressed) / $raw * 100;
    $savings = round($savings, 2);
    return '<!--HTML compressed, size saved '.$savings.'%. From '.$raw.' bytes, now '.$compressed.' bytes-->';
  }

  protected function minifyHTML($html) {
    $pattern = '/<(?<script>script).*?<\/script\s*>|<(?<style>style).*?<\/style\s*>|<!(?<comment>--).*?-->|<(?<tag>[\/\w.:-]*)(?:".*?"|\'.*?\'|[^\'">]+)*>|(?<text>((<[^!\/\w.:-])?[^<]*)+)|/si';
    preg_match_all($pattern, $html, $matches, PREG_SET_ORDER);
    $overriding = false;
    $raw_tag = false;
    $html = '';

    foreach ($matches as $token) {
      $tag = (isset($token['tag'])) ? strtolower($token['tag']) : null;
      $content = $token[0];

      if (is_null($tag)) {

      if ( !empty($token['script']) ) { $strip = $this->compress_js; }

      else if ( !empty($token['style']) ) { $strip = $this->compress_css; }

      else if ($content == '<!--wp-html-compression no compression-->') {
      $overriding = !$overriding;
      continue; }

      else if ($this->remove_comments) {
      if (!$overriding && $raw_tag != 'textarea') { $content = preg_replace('/<!--(?!\s*(?:\[if [^\]]+]|<!|>))(?:(?!-->).)*-->/s', '', $content); }
      } }

      else {
      if ($tag == 'pre' || $tag == 'textarea') { $raw_tag = $tag; }

      else if ($tag == '/pre' || $tag == '/textarea') { $raw_tag = false; }

      else { if ($raw_tag || $overriding) { $strip = false; }

      else {
      $strip = true;
      $content = preg_replace('/(\s+)(\w++(?<!\baction|\balt|\bcontent|\bsrc)="")/', '$1', $content);
      $content = str_replace(' />', '/>', $content); }
      } }

      if ($strip) { $content = $this->removeWhiteSpace($content); }

      $html .= $content;
    }
    return $html;
  }

  public function parseHTML($html) {
    $this->html = $this->minifyHTML($html);
    if ($this->info_comment) { $this->html .= "\n" . $this->bottomComment($html, $this->html); }
  }

  protected function removeWhiteSpace($str) {
    $str = str_replace("\t", ' ', $str);
    $str = str_replace("\n",  '', $str);
    $str = str_replace("\r",  '', $str);
    while (stristr($str, '  ')) { $str = str_replace('  ', ' ', $str); }
    return $str;
  }
}

function wp_html_compression_finish($html) {
  return new HTML_Compression($html);
}

function wp_html_compression_start() {
  ob_start('wp_html_compression_finish');
}

add_action('get_header', 'wp_html_compression_start');

