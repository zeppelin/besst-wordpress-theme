<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <title><?php bloginfo('name'); ?></title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat:400,700&display=swap">
    <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php wp_head(); ?>
</head>
<body class="bg-gray-900 text-white font-body">

  <div class="bg-red-600">
    <header class="lg:container mx-auto lg:px-4 flex flex-wrap items-center font-bold overflow-x-hidden">
      <h1 class="pl-4 lg:pl-0">
        <a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
          <?php bloginfo( 'name' ); ?>
        </a>
      </h1>

      <label for="menu-toggle" class="pointer-cursor ml-auto my-5 pr-4 lg:pr-0 lg:hidden block">
        <svg class="fill-current" xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20">
          <title>menu</title>
          <path d="M0 3h20v2H0V3zm0 6h20v2H0V9zm0 6h20v2H0v-2z"></path>
        </svg>
      </label>

      <input class="hidden" type="checkbox" id="menu-toggle" />

      <nav id="menu" class="ml-auto hidden lg:flex lg:items-center lg:w-auto w-full">
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
