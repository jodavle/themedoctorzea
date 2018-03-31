<?php get_header();

if (have_posts()) :?>

	<h2>Resultados de la busqueda: <?php the_search_query(); ?></h2>

<?php while (have_posts()): the_post();

  get_template_part('content');

  endwhile;
  else:
    echo '<p>Sin contenido</p>';
  endif; ?>

<?php get_footer(); ?>