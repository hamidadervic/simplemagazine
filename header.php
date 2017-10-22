<!DOCTYPE html>
<!DOCTYPE html>
<html>
<head>
  <title> <?php bloginfo('name'); ?> </title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta charset="<?php bloginfo('charset'); ?>">
  <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>

  <header class="header">
     <div class="container">
      <div id="home-info">
          <a href="<?php echo home_url(); ?>"> 
              <h1> <?php bloginfo('name'); ?> </h1>
          </a>
          <p> <?php bloginfo('description')?> </p>
      </div>

     <div id="menu">
       <img  src="<?php echo get_template_directory_uri(); ?>/assets/images/menu.png" />
     </div>

     <nav class="site-nav">
      <?php 

      $args = array(
        'theme_location' => "category"
        );
        ?>

        <?php wp_nav_menu( $args ); ?>
      </nav>
    </div>
  </header>

  <div class="container"> <!-- container -->