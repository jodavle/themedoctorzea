<?php get_header(); ?>

<?php if (have_posts()) :
  while (have_posts()): the_post();

  get_template_part('content');

  endwhile;
  else:
    echo '<p>Sin contenido</p>';
  endif; ?>
</div>

<?php get_footer(); ?>
