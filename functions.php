<?php
/**
 * Theme Fnctions
 * 
 * @package JobHuntly
 */

if (!defined("JOBHUNTLY_DIR_PATH")) {
  define("JOBHUNTLY_DIR_PATH", untrailingslashit(get_template_directory()));
}

if (!defined("JOBHUNTLY_DIR_URI")) {
  define("JOBHUNTLY_DIR_URI", untrailingslashit(get_template_directory_uri()));
}

require_once JOBHUNTLY_DIR_PATH . "/inc/helpers/autoloader.php";

function jobhuntly_get_theme_instance() {
  JOBHUNTLY_THEME\Inc\JOBHUNTLY_THEME::get_instance();
}

jobhuntly_get_theme_instance();