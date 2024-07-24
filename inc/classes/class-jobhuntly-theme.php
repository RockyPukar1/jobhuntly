<?php
/**
 * Bootstraps the Theme
 * 
 * @package JOBHUNTLY
 */

namespace JOBHUNTLY_THEME\Inc;

use JOBHUNTLY_THEME\Inc\Traits\Singleton;

class JOBHUNTLY_THEME {
  use Singleton;

  public function __construct() {
    // load class
    Assets::get_instance();
    Menus::get_instance();
    $this->setup_hooks();
  }

  protected function setup_hooks() {
    // actions and filters
    add_action( "after_setup_theme", [ $this, "setup_theme" ] );
  }

  public function setup_theme() {
    add_theme_support( 'title-tag' );
    add_theme_support( 'custom-logo', [
      'height'               => 100,
      'width'                => 400,
      'flex-height'          => true,
      'flex-width'           => true,
      'header-text'          => [ 'site-title', 'site-description' ],
      'unlink-homepage-logo' => true,
    ] );
    // add_theme_support( 'custom-background', [
    //   'default-color' => '0000ff',
    //   'default-image' => get_template_directory_uri() . '/images/wapuu.jpg',
    // ] );
    add_theme_support( 'post-thumbnails' );

    add_theme_support( 'customize-selective-refresh-widgets' );

    add_theme_support( 'automatic-feed-links' );

    add_theme_support( 'html5', [
      "search-form",
      "comment-form",
      "gallery",
      "caption",
      "script",
      "style"
    ] );

    add_editor_style();

    add_theme_support( "wp-block-styles" );

    add_theme_support( 'align-wide' );

    global $content_width;
    if ( ! isset( $content_width ) ) {
      $content_width = 1240;
    }
  }
}