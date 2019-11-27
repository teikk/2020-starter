<?php
use Teik\Theme;
use Teik\TimberConfig;
/**
 * Core setup
 * Ustawia stałe dla motywu.
 */
define( 'TEIK_THEME_DIR', trailingslashit(get_template_directory()) );
define( 'TEIK_THEME_URI', trailingslashit(get_template_directory_uri()) );
/**
 * Ustawia stałe do załączania plików *.js i *.css
 *
 * Przykład:
 * wp_enqueue_script( 'teik-main', JS_PATH .'/nazwa.pliku.min.js', array( 'jquery' ),'1.0',true );
 */
define( 'ASSETS_PATH', TEIK_THEME_URI . 'dist/');
define( 'JS_PATH', TEIK_THEME_URI . 'dist/js/');
define( 'CSS_PATH', TEIK_THEME_URI . 'dist/css/');

add_filter('acf/settings/path', 'teik_acf_settings_path');
function teik_acf_settings_path( $path ) {
  $path = TEIK_THEME_DIR . 'includes/acf/';

  return $path;
}

add_filter('acf/settings/dir', 'teik_acf_settings_dir');
function teik_acf_settings_dir( $dir ) {
  $dir = TEIK_THEME_URI . 'includes/acf/';

  return $dir;
}
require_once( TEIK_THEME_DIR . 'includes/acf/acf.php' );

require_once( TEIK_THEME_DIR . 'vendor/autoload.php' );

new \Timber\Timber;

Theme::instance()->setup();
TimberConfig::instance()->setup();