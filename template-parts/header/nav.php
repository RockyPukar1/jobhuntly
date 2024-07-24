<?php
$menu_class = JOBHUNTLY_THEME\Inc\Menus::get_instance();
$header_nav_menu_id = $menu_class->get_menu_id( 'jobhuntly-header-nav-menu' );
$header_nav_menus = wp_get_nav_menu_items( $header_nav_menu_id );
?>
<div class="container mx-auto px-4">
  <nav class="">
    <div class="flex justify-between items-center">
      <div class="text-gray-800 text-lg">
        <?php
        if (function_exists("the_custom_logo")) {
          the_custom_logo();
        }
        ?>
      </div>
      <?php if (!empty($header_nav_menus) && is_array($header_nav_menus)): ?>
        <ul class="flex space-x-4">
          <?php foreach ( $header_nav_menus as $menu_item ):
            if ( ! $menu_item->menu_item_parent ):
              $child_menu_items = $menu_class->get_child_menu_items($header_nav_menus, $menu_item->ID);
              $has_children = !empty($child_menu_items) && is_array($child_menu_items);
              if (!$has_children): ?>
                <li>
                  <a href="<?= esc_url($menu_item->url); ?>" class="text-gray-800 hover:text-gray-600">
                    <?= esc_html($menu_item->title); ?>
                  </a>
                </li>
              <?php else: ?>
                <li class="relative group">
                  <a href="#" class="text-gray-800 hover:text-gray-600">
                    <?= esc_html($menu_item->title); ?>
                  </a>
                  <ul class="absolute left-0 mt-2 w-48 bg-white rounded-md shadow-lg hidden group-hover:block">
                    <?php foreach ($child_menu_items as $child_menu_item): ?>
                      <li>
                        <a href="<?= esc_url($child_menu_item->url); ?>"
                          class="block px-4 py-2 text-gray-800 hover:bg-gray-100">
                          <?= esc_html($child_menu_item->title); ?>
                        </a>
                      </li>
                    <?php endforeach; ?>
                  </ul>
                </li>
              <?php endif;
            endif;
          endforeach; ?>
        </ul>
      <?php endif; ?>
      <div class="lg:hidden">
        <button class="text-gray-800 focus:outline-none">
          <svg class="h-6 w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
          </svg>
        </button>
      </div>
    </div>
  </nav>
</div>