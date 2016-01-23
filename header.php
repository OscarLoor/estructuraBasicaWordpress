<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title><?php echo wp_title();?></title>

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