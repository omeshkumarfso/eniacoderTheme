<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Rapid Bootstrap Template</title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta content="" name="keywords">
  <meta content="" name="description">

  <!-- Favicons -->
  <link href="img/favicon.png" rel="icon">
  <link href="img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,500,600,700,700i|Montserrat:300,400,500,600,700" rel="stylesheet">

  <?php wp_head();  ?>

  <!-- =======================================================
    Theme Name: Rapid
    Theme URL: https://bootstrapmade.com/rapid-multipurpose-bootstrap-business-template/
    Author: BootstrapMade.com
    License: https://bootstrapmade.com/license/
  ======================================================= -->
</head>

<body>
  <!--==========================
  Header
  ============================-->
  <header id="header">

    <div id="topbar">
      <div class="container">
        <div class="social-links">
        
          <a href="#" class="twitter"><i class="fa fa-twitter"></i></a>
          <a href="#" class="facebook"><i class="fa fa-facebook"></i></a>
          <a href="#" class="linkedin"><i class="fa fa-linkedin"></i></a>
          <a href="#" class="instagram"><i class="fa fa-instagram"></i></a>

        </div>
      </div>
    </div>

    <div class="container">

      <div class="logo float-left" style="background-color:#000000">
        <!-- Uncomment below if you prefer to use an image logo -->
        <!-- <h1 class="text-light"><a href="#intro" class="scrollto"><span>Rapid</span></a></h1> -->
        <a href="#header" class="scrollto"><img src="<?php echo get_template_directory_uri(); ?>/img/eniacoderlogo.png" alt="" class="img-fluid" background-color="black"></a>
      </div>

      <nav class="main-nav float-right d-none d-lg-block">

      <?php
                   
                   wp_nav_menu(
                    array(
                      'menu' => 'EniacoderMenu',
                      'theme_location' => 'menu-1',
                      'menu_id'        => 'primary-menu',
                      'container'         => 'nav',
                      'container_class'   => ' main-nav float-right d-none d-lg-block   ',
                      'menu_class'        => '',
                      'echo'                 => true,
                      'fallback_cb'          => 'wp_page_menu',
                      'before'               => '',
                      'after'                => '',
                      'link_before'          => '',
                      'link_after'        => '',
                      'items_wrap'           => '<ul id="%1$s" class="%2$s">%3$s</ul>',
                      'item_spacing'         => 'preserve',
                      'depth'                => 0,
                    )
                  );




            // wp_nav_menu( array( 'theme_location' => 'EniacoderMenu' ) );
        ?>
        


        <!-- <ul>
          <li class="active"><a href="#intro">Home</a></li>
          <li><a href="<?php echo get_template_directory_uri(); ?>/aboutUs.php">About Us</a></li>
          <li><a href="#footer">Contact Us</a></li>
        </ul> -->
      </nav><!-- .main-nav -->
      
    </div>
  </header><!-- #header -->

