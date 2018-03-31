<?php get_header(); ?>
  <section class="call-to-action--1 header-callout">
    <div class="landing--sec-1 row">
      <div class="col-8">
        <h1 class="header-callout-headline" data-aos="fade-up"><?php echo get_theme_mod('lwp-header-callout-headline') ?></h1>
        <h3 class="header-callout-text" data-aos="fade-up" data-aos-delay="250"><?php echo get_theme_mod('lwp-header-callout-text') ?></h3>
        <div class="zeaboton" data-aos="fade-up" data-aos-delay="500"><a href="<?php get_permalink(get_theme_mod('lwp-header-callout-link')) ?>"><?php echo get_the_title(get_theme_mod('lwp-header-callout-link')) ?></a></div>
      </div>
      <div class="landing--back1 header-callout-image" data-aos="fade-up" data-aos-delay="750"><img src="<?php echo wp_get_attachment_url(get_theme_mod('lwp-header-callout-image')) ?>"/></div>
    </div>
  </section>
  <section class="call-to-action--2" data-aos="fade-up">
    <div class="landing--sec-2 row">
      <h1>Conoce <br> nuestros servicios</h1>
      <div class="row grid-spaceBetween">
        <?php
          global $post;
          $myposts = get_posts( array(
              'post_type' => 'product',
          ));
          if ( $myposts ) {
              foreach ( $myposts as $post ) :
                  setup_postdata( $post );
                  ?>
                  <div class="col-4_xs-6">
                    <a href="<?php the_permalink(); ?>">
                      <?php the_post_thumbnail(); ?>
                      <h3><?php the_title(); ?></h3>
                    </a>
                  </div>
              <?php
              endforeach;
              wp_reset_postdata();
          }
        ?>
      </div>
      <div class="zeaboton text-center"><a href="<?php get_permalink(get_theme_mod('lwp-header-callout-link')) ?>"><?php echo get_the_title(get_theme_mod('lwp-header-callout-link')) ?></a></div>
      <div class="landing--back2"><img src="<?php echo wp_get_attachment_url(get_theme_mod('lwp-header-callout-image-servicios')) ?>" /></div>
    </div>
  </section>
  <section class="call-to-action--3">
    <div class="landing--sec-3 row grid-middle">
      <div class="col-6_xs-12" data-aos="flip-down"><img class="mini-banner--article" <?php echo get_the_post_thumbnail(get_theme_mod('lwp-header-callout-link-featured')); ?>
      </div>
      <div class="col-6_xs-12" data-aos="fade-right" data-aos-delay="200">
        <h6>Conoce más</h6>
        <h2><a href="<?php get_permalink(get_theme_mod('lwp-header-callout-link-featured')) ?>"><?php echo get_the_title(get_theme_mod('lwp-header-callout-link-featured')) ?></a></h2>
        <p><?php echo get_the_excerpt(get_theme_mod('lwp-header-callout-link-featured')) ?></p>
        <div class="zeaboton"><a href="<?php get_permalink(get_theme_mod('lwp-header-callout-link-featured')) ?>">Leer más</a></div>
      </div>
    </div>
  </section>
  <section class="call-to-action--4">
    <div class="landing--sec-4 row grid-middle">
        <div class="col-6_xs-12" data-aos="fade-up" data-aos-delay="250">       
            <h2>Subscríbete</h2>
        </div>
        <div class="col-6_xs-12">
          <div id="mc_embed_signup">
            <form action="https://facebook.us15.list-manage.com/subscribe/post?u=32d5cc71dbb78b7fd90fe1b3a&amp;id=0f900fa9f4" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>
            <div id="mc_embed_signup_scroll">
              <div class="mc-field-group">
                <div class="input-group mb-3" data-aos="fade-up" data-aos-delay="350">
                  <input type="email" placeholder="A nuestras ofertas mensuales" name="EMAIL" class="required email" id="mce-EMAIL">
                    <div id="mce-responses" class="clear">
                      <div class="response" id="mce-error-response" style="display:none"></div>
                      <div class="response" id="mce-success-response" style="display:none"></div>
                    </div>
                    <div style="position: absolute; left: -5000px;" aria-hidden="true"><input type="text" name="b_32d5cc71dbb78b7fd90fe1b3a_0f900fa9f4" tabindex="-1" value=""></div>
                  <div class="input-group-append clear">
                    <button type="submit" name="subscribe" id="mc-embedded-subscribe" class="btn btn-outline" type="button"><i class="demo-icon icon-right-big">&#xe803;</i></button>
                  </div>
                </div>                  
              </div>
            </div>
            </form>
          </div>
        </div>
      </div>
  </section>
<?php get_footer(); ?>