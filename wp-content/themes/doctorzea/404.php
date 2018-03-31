<?php

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

			<section class="error-404 not-found">
				<header class="page-header">
					<h1 class="page-title">404</h1>
					<h2><?php _e( 'No hemos podido encontrar la pagina'); ?></h2>
				</header><!-- .page-header -->

				<div class="page-content">
					<p><?php _e( 'Parece que no existe la pagina que solía estar aquí.'); ?></p>
				</div><!-- .page-content -->
			</section><!-- .error-404 -->

		</main><!-- .site-main -->
	</div><!-- .content-area -->

<?php get_footer(); ?>
