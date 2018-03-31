<?php 
  $url = wp_get_attachment_url( get_post_thumbnail_id($post->ID) );
  echo '<div class="banner" id="page-banner" style="background: linear-gradient(rgba(255, 255, 255, 0.8),rgba(255, 255, 255, 0.5)), url('. $url.'); background-position: center center;background-repeat: no-repeat; background-size: cover;">';
    ?>
    <h2><?php the_title(); ?></h2>
  </div>
  <article class="page">
    <div class="contenido row grid">
        <?php
        if ( has_children() OR $post->post_parent > 0) { ?>
        <div class="col-3_xs-12">
          <nav class="child-nav children-links clearfix">
            <span class="parent-link">
              <a href="<?php echo get_the_permalink(get_top_ancestor_id()); ?>">
                <h6><?php echo get_the_title(get_top_ancestor_id()); ?></h6>
              </a>
            </span>
            <ul>
              <?php
              $args = array(
                'child_of' => get_top_ancestor_id(),
                'title_li' => '',
                'link_before' => '<h6>',
                'link_after' => '</h6>'
              )
              ?>
              <?php wp_list_pages($args); ?>

            </ul>
          </nav>
        </div>
        <div class="col-9_xs-12">
      <?php } else {?>
        <div class="col-12">
      <?php }?>
          <?php the_content(); ?>
          <?php comments_template(); ?>
        </div>
    </div>
  </article>