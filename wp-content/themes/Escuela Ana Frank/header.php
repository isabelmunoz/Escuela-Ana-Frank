<<<<<<< HEAD
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
  <head>
    <meta charset="<?php bloginfo('charset') ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
  	<title>Escuela Ana Frank</title>
    <?php wp_head() ?>
  </head>
<body>

      <?php
    	$custom_logo_id = get_theme_mod( 'custom_logo' );
    	$logo = wp_get_attachment_image_src( $custom_logo_id , 'full' );
      ?>

      <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-info">
        <div class="container" id="rowlogo">
          <a class="logo"><img src="<?php echo $logo[0]; ?>" alt="logo"></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
              <?php if ( has_nav_menu( 'header-menu' ) ) { ?>
              	<?php wp_nav_menu( array(
              		'theme_location' 	=> 'header-menu',
              		'container_id'		=> 'navbarResponsive',
              		'container_class' 	=> 'collapse navbar-collapse',
              		'menu_class'     	=> 'navbar-nav ml-auto'
              		)
              	); ?>
              <?php } ?>
            </div>
        </div>
      </nav>
=======
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
  <head>
    <meta charset="<?php bloginfo('charset') ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
  	<title>Escuela Ana Frank</title>
    <?php wp_head() ?>
  </head>
<body>

      <?php
    	$custom_logo_id = get_theme_mod( 'custom_logo' );
    	$logo = wp_get_attachment_image_src( $custom_logo_id , 'full' );
      ?>

      <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-info">
        <div class="container col-md-12" id="rowlogo">
          <a class="logo"><img src="<?php echo $logo[0]; ?>" alt="logo"></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
              <?php if ( has_nav_menu( 'header-menu' ) ) { ?>
              	<?php wp_nav_menu( array(
              		'theme_location' 	=> 'header-menu',
              		'container_id'		=> 'navbarResponsive',
              		'container_class' 	=> 'collapse navbar-collapse',
              		'menu_class'     	=> 'navbar-nav ml-auto'
              		)
              	); ?>
              <?php } ?>
            </div>
        </div>
      </nav>
>>>>>>> avance proyecto
