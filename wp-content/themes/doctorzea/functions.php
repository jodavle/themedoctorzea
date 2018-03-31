<?php


function disable_woocommerce_default_css( $styles ) {
  // Disable the stylesheets below via unset():
  unset( $styles['woocommerce-general'] );  // Styling of buttons, dropdowns, etc.
  //unset( $styles['woocommerce-general'] );
  unset( $styles['woocommerce-layout'] );        // Layout for columns, positioning.
  // unset( $styles['woocommerce-smallscreen'] );   // Responsive design for mobile devices.
  return $styles;
}
add_action('woocommerce_enqueue_styles', 'disable_woocommerce_default_css');

function doctorZeaWP_resources() {
  wp_enqueue_style('style', get_stylesheet_uri());
  $scriptSrc = get_template_directory_uri() . '/main-script.js';
  wp_enqueue_script( 'myhandle', $scriptSrc , array('jquery'), '1.4',  true );
  wp_enqueue_style( 'aos-cdn-css', get_template_directory_uri() . '/aos.css');
  wp_enqueue_script( 'aos-cdn-js', get_template_directory_uri() . '/aos.js');
  wp_enqueue_style( 'aos-cdn-css', get_template_directory_uri() . '/woocomerce-general-custom.css');
}

add_action('wp_enqueue_scripts', 'doctorZeaWP_resources', 15);

// custom logo
function theme_prefix_setup() {

  // Navigation Menus
  register_nav_menus(array(
    'primary' => __('Menú Primario'),
    'footer' => __('Menú de pie de página'),
  ));

	add_theme_support( 'custom-logo', array(
		'height'      => 75,
		'width'       => 256,
		'flex-width' => true,
	));

  //Agregando soporte para "Feature image"
  add_theme_support('post-thumbnails');
}
add_action('after_setup_theme', 'theme_prefix_setup');

function theme_prefix_the_custom_logo() {

	if ( function_exists( 'the_custom_logo' ) ) {
		the_custom_logo();
}}

add_filter('get_custom_logo','change_logo_class');

function change_logo_class($html)
{
	$html = str_replace('custom-logo-link', 'navbar-brand', $html);
	return $html;
}

/**
 * Register our sidebars and widgetized areas.
 *
 */
function footer_widgets_init() {

	register_sidebar( array(
		'name'          => 'Footer area 1',
		'id'            => 'footer_1',
		'before_widget' => '<div class="menu-menu-principal-container">',
		'after_widget'  => '</div>',
		'before_title'  => '<h3 class="footer-menu__title">',
		'after_title'   => '</h3>',
	));
  register_sidebar( array(
		'name'          => 'Footer area 2',
		'id'            => 'footer_2',
		'before_widget' => '<div class="menu-menu-principal-container">',
		'after_widget'  => '</div>',
		'before_title'  => '<h3 class="footer-menu__title">',
		'after_title'   => '</h3>',
	));
  register_sidebar( array(
		'name'          => 'Footer area 3',
		'id'            => 'footer_3',
		'before_widget' => '<div class="menu-menu-principal-container">',
		'after_widget'  => '</div>',
		'before_title'  => '<h3 class="footer-menu__title">',
		'after_title'   => '</h3>',
	));
  register_sidebar( array(
		'name'          => 'Footer area 4',
		'id'            => 'footer_4',
		'before_widget' => '<div class="menu-menu-principal-container">',
		'after_widget'  => '</div>',
		'before_title'  => '<h3 class="footer-menu__title">',
		'after_title'   => '</h3>',
	));

}
add_action( 'widgets_init', 'footer_widgets_init' );

//get top get_top_ancestor_id
function get_top_ancestor_id() {

  global $post;

  if ($post->post_parent){
    $ancestors = array_reverse(get_post_ancestors($post->ID));
    return $ancestors[0];
  }

  return $post->ID;

}
// tiene hijos?
function has_children(){
  global $post;

  $pages = get_pages('child_of=' . $post->ID);
  return count($pages);
}
// customizar el inicio facilmente
function lwp_header_callout($wp_customize) {
  $wp_customize->add_section(
    'lwp-header-callout-section', array(
      'title' => 'Encabezado de Inicio'
    )
  );
  $wp_customize->add_setting(
    'lwp-header-callout-headline', array(
      'default' => '¡Texto de ejemplo para encabezado!'
    )
  );
  $wp_customize->add_control(
    new WP_Customize_Control(
      $wp_customize,
      'lwp-header-callout-headline-control',
      array(
        'label' => 'Titulo',
        'section' => 'lwp-header-callout-section',
        'settings' => 'lwp-header-callout-headline'
      )));
  $wp_customize->add_setting(
    'lwp-header-callout-text', array(
      'default' => '¡Texto de ejemplo para texto!'
    )
  );
  $wp_customize->add_control(
    new WP_Customize_Control(
      $wp_customize,
      'lwp-header-callout-text-control',
      array(
        'label' => 'Texto',
        'section' => 'lwp-header-callout-section',
        'settings' => 'lwp-header-callout-text',
        'type' => 'textarea'
      )));
    $wp_customize->add_setting('lwp-header-callout-link');
    $wp_customize->add_control(
      new WP_Customize_Control(
        $wp_customize,
        'lwp-header-callout-link-control',
        array(
          'label' => 'Link',
          'section' => 'lwp-header-callout-section',
          'settings' => 'lwp-header-callout-link',
          'type' => 'dropdown-pages'
        )));
    $wp_customize->add_setting('lwp-header-callout-image');
    $wp_customize->add_control(
      new WP_Customize_Cropped_Image_Control(
        $wp_customize,
        'lwp-header-callout-image-control',
        array(
        'label' => 'Imagen',
          'section' => 'lwp-header-callout-section',
          'settings' => 'lwp-header-callout-image',
          'width' => 1281,
          'height' => 1148
        )));
      $wp_customize->add_setting('lwp-header-callout-image-servicios');
      $wp_customize->add_control(
        new WP_Customize_Cropped_Image_Control(
          $wp_customize,
          'lwp-header-callout-image-servicios-control',
          array(
          'label' => 'Imagen Servicios',
            'section' => 'lwp-header-callout-section',
            'settings' => 'lwp-header-callout-image-servicios',
            'width' => 2492,
            'height' => 1711
          )));
        $wp_customize->add_setting('lwp-header-callout-link-featured');
        $wp_customize->add_control(
          new WP_Customize_Control(
            $wp_customize,
            'lwp-header-callout-link-featured-control',
            array(
              'label' => 'Link post destacado',
              'section' => 'lwp-header-callout-section',
              'settings' => 'lwp-header-callout-link-featured',
              'type' => 'dropdown-pages'
            )));
}
add_action('customize_register', 'lwp_header_callout');

remove_action( 'woocommerce_variable_add_to_cart', 'woocommerce_variable_add_to_cart', 30 );
remove_action( 'woocommerce_single_product_summary', 'woocommerce_template_single_meta', 40 );
remove_action( 'woocommerce_after_single_product_summary', 'woocommerce_output_product_data_tabs', 10 );
remove_action( 'woocommerce_review_before', 'woocommerce_review_display_gravatar', 10 );
remove_action( 'woocommerce_review_before_comment_meta', 'woocommerce_review_display_rating', 10 );
remove_action( 'woocommerce_review_meta', 'woocommerce_review_display_meta', 10 );
remove_action( 'woocommerce_review_comment_text', 'woocommerce_review_display_comment_text', 10 );

add_action( 'wp', 'bbloomer_remove_sidebar_product_pages' );
function bbloomer_remove_sidebar_product_pages() {
if ( is_product() ) {
remove_action( 'woocommerce_sidebar', 'woocommerce_get_sidebar', 10 );
}
}

// Woocommerce
add_action ( "woocommerce_before_shop_loop_item", "after_li_started", 9 );

function after_li_started () {
    echo "<div class='col-4_xs-6'>";
}

add_action ( "woocommerce_after_shop_loop_item", "before_li_started", 10 );

function before_li_started () {
    echo "</div>";
}