<?php
namespace JOBHUNTLY_THEME\Inc;
use JOBHUNTLY_THEME\Inc\Traits\Singleton;

class Assets {
  use Singleton;

  public function __construct() {
    // load class
    $this->setup_hooks();
  }

  protected function setup_hooks() {
    // actions and filters
    add_action("wp_enqueue_scripts", [$this, "register_styles"]);
    add_action("wp_enqueue_scripts", [$this, "register_scripts"]);
  }

  public function register_styles() {
    wp_enqueue_style("tailwind-css", JOBHUNTLY_DIR_URI . "/assets/css/tailwind.min.css", [], "3.4.5", "all");
    wp_enqueue_style("style-css", get_stylesheet_uri(), [], filemtime(JOBHUNTLY_DIR_PATH . "/style.css"));
  }

  public function register_scripts() {
    wp_enqueue_script("main-js", JOBHUNTLY_DIR_URI . "/assets/main.js", ["jquery"], filemtime(JOBHUNTLY_DIR_PATH . "/assets/js/main.js"), true);
  }
}