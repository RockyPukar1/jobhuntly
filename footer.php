<?php
$menu_class = JOBHUNTLY_THEME\Inc\Menus::get_instance();

$footer_about_menu_id = $menu_class->get_menu_id( 'jobhuntly-footer-about-menu' );
$footer_about_menus = wp_get_nav_menu_items( $footer_about_menu_id );

$footer_resources_menu_id = $menu_class->get_menu_id( 'jobhuntly-footer-resources-menu' );
$footer_resources_menus = wp_get_nav_menu_items( $footer_resources_menu_id );
?>
<footer class="bg-gray-100 text-gray-800 py-8">
  <div class="container mx-auto px-4">
    <div class="grid grid-cols-3 gap-5 w-full">
      <div class="w-full mb-4 md:mb-0">
        <div class="text-lg font-semibold mb-2">
          <?php
          if (function_exists("the_custom_logo")) {
            the_custom_logo();
          }
          ?>
        </div>
        <p class="text-gray-600">Great platform for the job seeker that passionate about startups. Find your dream job easier.</p>
      </div>

      <div class="col-span-2 grid grid-cols-4 w-full">
        <div class="w-full mb-4 md:mb-0">
          <h3 class="text-lg font-semibold mb-2">About</h3>
          <?php if ( ! empty( $footer_about_menus ) && is_array( $footer_about_menus )): ?>
            <ul>
              <?php foreach ( $footer_about_menus as $menu_item ):
                if ( ! $menu_item->menu_item_parent ):
                  $child_menu_items = $menu_class->get_child_menu_items($footer_about_menus, $menu_item->ID);
                  $has_children = !empty($child_menu_items) && is_array($child_menu_items);
                  if (!$has_children): ?>
                    <li><a href="<?= esc_url( $menu_item->url ) ?>" class="text-gray-600 hover:text-gray-900"><?= esc_html( $menu_item->title ); ?></a></li>
                  <?php endif;
                endif;
              endforeach; ?>
            </ul>
          <?php endif; ?>
        </div>

        <div class="w-full mb-4 md:mb-0">
          <h3 class="text-lg font-semibold mb-2">Resources</h3>
          <?php if ( ! empty( $footer_resources_menus ) && is_array( $footer_resources_menus )): ?>
            <ul>
              <?php foreach ( $footer_resources_menus as $menu_item ):
                if ( ! $menu_item->menu_item_parent ):
                  $child_menu_items = $menu_class->get_child_menu_items( $footer_resources_menus, $menu_item->ID );
                  $has_children = ! empty( $child_menu_items ) && is_array( $child_menu_items );
                  if (!$has_children): ?>
                    <li><a href="<?= esc_url( $menu_item->url ) ?>" class="text-gray-600 hover:text-gray-900"><?= esc_html( $menu_item->title ); ?></a></li>
                  <?php endif;
                endif;
              endforeach; ?>
            </ul>
          <?php endif; ?>
        </div>

        <div class="w-full col-span-2">
          <h3 class="text-lg font-semibold mb-2">Follow Us</h3>
          <p class="text-gray-600">The latest job news, articles, sent to your inbox weekly.</p>
        </div>
      </div>
    </div>
  </div>
  <div class="bg-gray-200 py-4 mt-8">
    <div class="container mx-auto px-4 text-center">
      <p class="text-gray-600">&copy; 2024 JobHuntly. All rights reserved.</p>
    </div>
  </div>
</footer>

<?php wp_footer(); ?>
</body>

</html>