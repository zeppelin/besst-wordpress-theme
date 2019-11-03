<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <title><?php bloginfo('name'); ?></title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat:400,700&display=swap">
    <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>">
    <?php wp_head(); ?>
</head>
<body class="bg-gray-900 text-white font-body">

  <div class="bg-red-600">
    <header class="container mx-auto px-4 flex items-center font-bold">
      <h1>
        <a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
          <?php bloginfo( 'name' ); ?>
        </a>
      </h1>

      <!-- <h3><?php bloginfo('description'); ?></h3> -->

      <nav class="ml-auto">
        <?php
        wp_nav_menu(
          array(
            'theme_location' => 'primary',
            'menu_class'     => 'main-menu',
            'items_wrap'     => '<ul id="%1$s" class="%2$s">%3$s</ul>',
          )
        );
        ?>
      </nav>
    </header>
  </div>
