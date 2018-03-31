<!DOCTYPE html>
<html <?php language_attributes(); ?>>
  <head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?php bloginfo('name'); ?></title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/gridlex/2.7.1/gridlex.min.css">
    <?php wp_head(); ?>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  </head>

<body <?php body_class(); ?>>
  <header class="site-header">
    <div class="row grid">
      <div class="col-6_xs-9">
        <?php theme_prefix_the_custom_logo(); ?>
      </div>
      <div class="col-6 sm-hidden">
        <nav class="site-nav">
          <?php
          $args = array(
            'theme_location' => 'primary'
          );
          ?>
          <?php wp_nav_menu(  $args ); ?>
        </nav>
      </div>
      <div class="col-6_xs-3 sm-show">
        <div id="nav-container">
    			<div id="nav-overlay"></div>
    			<nav id="nav-fullscreen">
            <?php
            $args = array(
              'theme_location' => 'primary'
            );
            ?>
            <?php wp_nav_menu(  $args ); ?>
    			</nav>
    			<a id="nav-toggle">
    				<span></span>
     				<span></span>
     				<span></span>
     			</a>
        </div>
      </div>
    </div>
    <div class="float-bottom-right--shopmenu">
      <li>
        <a href="#" id="cart">
          <i class="fa fa-shopping-cart"></i>
          <span class="badge"><?php echo WC()->cart->get_cart_contents_count(); ?></span>
        </a>
      </li>
    </div>
  </header>

<div class="container">
