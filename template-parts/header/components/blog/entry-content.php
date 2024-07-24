<article id="post-<?php the_ID(); ?>" <?php post_class("mb-1") ?>>
  <?php get_template_part( 'template-parts/header/components/blog/entry-header' ); ?>
  <?php get_template_part( 'template-parts/header/components/blog/entry-meta' ); ?>
  <?php get_template_part( 'template-parts/header/components/blog/entry-content' ); ?>
  <?php get_template_part( 'template-parts/header/components/blog/entry-footer' ); ?>
</article>