<?php
/**
 * Header template
 */
?>
<!DOCTYPE html>
<html lang="en">

<head lang="<?php language_attributes(); ?>">
  <meta charset="<?php bloginfo('charset') ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
  <?php
  if (function_exists("wp_body_open")) {
    wp_body_open();
  }
  ?>
  <header class="bg-gray-100 text-gray-800 py-8">

    <?php get_template_part("template-parts/header/nav"); ?>
  </header>