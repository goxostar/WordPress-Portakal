<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
   
    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Niramit:wght@200;300;400&family=Open+Sans:wght@300;400&display=swap" rel="stylesheet">

    <title>Portakal Software</title>

    <?php wp_head(); ?>

  </head>
  <body>
    <!-- Navbar Menu -->

    <nav class="navbar navbar-container navbar-expand-lg navbar-dark fixed-top" id="mainNav">

      <div class="container">
        <a href="index.html" class="navbar-brand">Portakal Software</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <i class="fas fa-bars"></i>
        </button>

      <?php

      wp_nav_menu(array(
        'theme_location'  => 'primary',
        'depth'           =>  1,
        'container'       => 'div',
        'container_class' => 'collapse navbar-collapse',
        'container_id'    => 'navbarResponsive',
        'menu_class'      => 'navbar-nav ml-auto',
        'fallback_cb'     => 'WP_Bootstrap_Navwalker::falback',
        'walker'          =>  new WP_Bootstrap_Navwalker()
      ));

      ?>

      </div>

    </nav>