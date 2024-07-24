<?php
namespace JOBHUNTLY_THEME\Inc;
use JOBHUNTLY_THEME\Inc\Traits\Singleton;

class Menus {
  use Singleton;

  public function __construct() {
    // load class
    $this->setup_hooks();
  }

  protected function setup_hooks() {
    // actions and filters
    add_action( "init", [ $this, "register_menus" ] );
  }

  public function register_menus() {
    register_nav_menus( [
      'jobhuntly-header-nav-menu' => esc_html__( 'Header Nav Menu', 'jobhuntly' ),
      'jobhuntly-header-auth-menu' => esc_html__( 'Header Auth Menu', 'jobhuntly' ),
      'jobhuntly-footer-about-menu' => esc_html__( 'Footer About Menu', 'jobhuntly' ),
      'jobhuntly-footer-resources-menu' => esc_html__( 'Footer Resources Menu', 'jobhuntly' ),
    ] );
  }

  public function get_menu_id( $location ) {
    // Get all the locations
    $locations = get_nav_menu_locations();

    // Get object id by location
    $menu_id = $locations[$location];

    return $menu_id ?? "";
  }

  public function get_child_menu_items( $menu_array, $parent_id ) {
    $child_menus = [];

    if ( ! empty( $menu_array ) && is_array( $menu_array ) ) {
      foreach ( $menu_array as $menu ) {
        if ( intval( $menu->menu_item_parent ) === $parent_id ) {
          array_push( $child_menus, $menu );
        }
      }
    }
  }
}