<!DOCTYPE html>
<html lang="es">

<head>
 <meta charset="utf-8">
 <meta http-equiv="X-UA-Compatible" content="IE=edge">
 <meta name="viewport" content="width=device-width, initial-scale=1">
 <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
 <title>
  <?php echo wp_title();?>
 </title>

 <link rel="shortcut icon" href="<?php echo get_template_directory_uri();?>/favicon.ico" type="image/x-icon">
 <link rel="icon" href="<?php echo get_template_directory_uri();?>/favicon.ico" type="image/x-icon">
 <!-- Bootstrap -->
 <link href="<?php echo get_template_directory_uri();?>/css/bootstrap.min.css" rel="stylesheet">

 <!-- Wordpress Core -->
 <link href="<?php echo get_template_directory_uri();?>/css/wordpressCore.css" rel="stylesheet">

 <!-- CSS Propio -->
 <link href="<?php echo get_template_directory_uri();?>/css/style.css" rel="stylesheet">

 <!--Fontawesome-->
 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">

 <!--Cosas agregadas por Wordpress-->
 <?php wp_head(); ?>


  <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body class="container-fluid">
 <div id="menuUno" class="row">
  <div class="container">
   <div class="pull-left">
    <p class="pull-left"><i class="fa fa-envelope"></i> <span>Email:</span> info@deoferta.ec</p>
    <p class="pull-left"><i class="fa fa-phone"></i> <span>Llámanos:</span> Claro: 0980860534 | Movistar: 0969087979 </p>
   </div>
   <div class="pull-right">
    <?php

						if ( has_nav_menu( 'menu-superior' ) ) { /* if menu location 'primary-menu' exists then use custom menu */


						$defaults = array(
							'theme_location'  => 'menu-superior',
							'menu'            => '',
							'container'       => 'div',
							'container_class' => 'collapse navbar-collapse navbar-ex1-collapse',
							'container_id'    => 'menuSuperior',
							'menu_class'      => 'menu',
							'menu_id'         => '',
							'echo'            => true,
							'fallback_cb'     => 'wp_page_menu',
							'before'          => '',
							'after'           => '',
							'link_before'     => '',
							'link_after'      => '',
							'items_wrap'      => '<ul id="%1$s" class="nav navbar-nav">%3$s</ul>',
							'depth'           => 0,
							'walker'		  => new wp_bootstrap_navwalker()
						);

						wp_nav_menu( $defaults );


						}

						?>
   </div>
  </div>
 </div>

 <div id="menuPrincipal" class="row">
  <div class="container">
   <div class="col-md-2 col-sm-12">
    <a class="navbar-brand" href="<?php echo get_site_url(); ?>"><img src="<?php echo get_template_directory_uri();?>/img/logo.png"></a>
   </div>
   <div class="col-md-10 col-sm-12">
    <div id="menuArriba" class="row">
     <div class="col-md-10">
      <nav class="navbar " role="navigation">

       <!-- Agrupamos los elementos que se mostrarán en dispositivos móviles -->
       <div class="navbar-header">

        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
         <!--Muestra solo a screen readers-->
         <span class="sr-only">Desplegar navegación</span> MENÚ <i class="fa fa-bars"></i>
        </button>


       </div>
       <!--navbar-header-->

       <!-- Agrupar los enlaces de navegación, los formularios y cualquier
					       otro elemento que se pueda ocultar al minimizar la barra -->
       <?php

						if ( has_nav_menu( 'menu-principal' ) ) { /* if menu location 'primary-menu' exists then use custom menu */


						$defaults = array(
							'theme_location'  => 'menu-principal',
							'menu'            => '',
							'container'       => 'div',
							'container_class' => 'collapse navbar-collapse navbar-ex1-collapse',
							'container_id'    => '',
							'menu_class'      => 'menu',
							'menu_id'         => '',
							'echo'            => true,
							'fallback_cb'     => 'wp_page_menu',
							'before'          => '',
							'after'           => '',
							'link_before'     => '',
							'link_after'      => '',
							'items_wrap'      => '<ul id="%1$s" class="nav navbar-nav">%3$s</ul>',
							'depth'           => 0,
							'walker'		  => new wp_bootstrap_navwalker()
						);

						wp_nav_menu( $defaults );


						}

						?>
      </nav>
     </div>
     <div class="col-md-2">
      <a href="#"><i class="fa fa-shopping-cart"></i></a>
     </div>
    </div>
    <div id="menuAbajo" class="row">


      <form action="/productos" method="get">
       <div class="col-md-10 col-sm-12"><input id="textoBuscar" type="text" name="s" value="" placeholder="Búsqueda por producto..."></div>
       <div class="col-md-2 col-sm-12"><input id="buscar" type="submit" value=""></input></div>
      </form>


     
    </div>
   </div>
  </div>
 </div>