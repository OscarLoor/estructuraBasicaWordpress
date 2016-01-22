<?php get_header();?> 
<!--Body ya tiene la clase container-fluid-->
<div id="elementosMenu">
  <div class="container">
   <div class="row">
    <div class="col-md-2">
     <a class="navbar-brand" href="http://www.emrproyectos.com/"><img src="<?php echo get_template_directory_uri();?>/img/logoEMRHorizontal.jpg"></a>
    </div><!--col md 2-->
    <div class="col-md-8">
     <nav class="navbar " role="navigation">

      <!-- Agrupamos los elementos que se mostrarán en dispositivos móviles -->
      <div class="navbar-header">

       <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
        <!--Muestra solo a screen readers-->
        <span class="sr-only">Desplegar navegación</span> MENÚ <i class="fa fa-bars"></i>
       </button>


      </div><!--navbar-header-->

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
     </nav><!--nav-->

    </div><!--col md 8-->
    

   </div><!--row-->
   
  </div><!--container-->
 </div>
 <!--elementosMenu-->
<div id="contenidoDeLaPagina">
<?php
  if(!is_front_page()){
?>
 <?php 
if (have_posts()) :
   while (have_posts()) :
      the_post();
      the_content();
   endwhile;
endif;
?>
 <?php
  }else{
   echo '<h1>PáginaDeInicio<h1>';
  }
 ?>
</div>
<?php get_footer();?>
