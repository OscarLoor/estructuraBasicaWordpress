<?php get_header();?>
 <!--Body ya tiene la clase container-fluid-->


 <div id="contenidoDeLaPagina">
  <?php
  if(!is_front_page()){
?>
   <div class="container">
    <div id="menuLateral" class="col-md-3">
      <?php if ( is_active_sidebar( 'lateral' ) ) : ?>
        <?php dynamic_sidebar( 'lateral' ); ?>
      <?php endif; ?>

      <h3>Aceptamos</h3>
      <div id="logoMarcas">
      <img src="<?php echo get_template_directory_uri();?>/img/logosTarjetas.jpg"/>  
      </div>          


    </div>
    <div id="parteDerecha" class="col-md-9">
  <?php 
						woocommerce_content();
					?>

    </div>
   </div>


    <?php
  }else{
   ?>
   <div class="container">
    <div id="menuLateral" class="col-md-3">
      <?php if ( is_active_sidebar( 'lateral' ) ) : ?>
        <?php dynamic_sidebar( 'lateral' ); ?>
      <?php endif; ?>

      <h3>Aceptamos</h3>
      <div id="logoMarcas">
      <img src="<?php echo get_template_directory_uri();?>/img/logosTarjetas.jpg"/>  
      </div>          


    </div>
    <div id="parteDerecha" class="col-md-9">
      <div id="slider" class="row">
        <?php
	echo do_shortcode('[image-carousel]');
    
?>
      </div>
      <div id="beneficios" class="row">
        <div class="col-md-4">
          <img src="<?php echo get_template_directory_uri();?>/img/iconoBeneficio.jpg"/> 
          <p><span>ENVÍO GRATIS</span></p>
          <p>Entregamos a partir de los $30 desde la Av. Patria hasta la Av. El inca</p>
        </div>
        <div class="col-md-4">
          <img src="<?php echo get_template_directory_uri();?>/img/iconoBeneficio.jpg"/> 
          <p><span>ENVÍO GRATIS</span></p>
          <p>Entregamos a partir de los $30 desde la Av. Patria hasta la Av. El inca</p>
        </div>
        <div class="col-md-4">
          <img src="<?php echo get_template_directory_uri();?>/img/iconoBeneficio.jpg"/> 
          <p><span>ENVÍO GRATIS</span></p>
          <p>Entregamos a partir de los $30 desde la Av. Patria hasta la Av. El inca</p>
        </div>
      </div>
    </div>
   </div>
   <div class="container">
   <h3 id="tituloProductosDestacados">Produtos destacados</h3>
      <?php 
if (have_posts()) :
   while (have_posts()) :
      the_post();
      the_content();
   endwhile;
endif;
?>
   </div>
   <!--Marcas-->
   <div id="marcas" class="container">
   <div class="row"><p>MARCAS QUE DISTRIBUIMOS</p><img src="<?php echo get_template_directory_uri();?>/img/separador.jpg"/></div>

    <img src="<?php echo get_template_directory_uri();?>/img/marcasUno.jpg"/>
    <img src="<?php echo get_template_directory_uri();?>/img/marcasDos.jpg"/>
   </div>
   <!--Marcas-->
   <?php
  }//else !isFrontPage
 ?>
 </div>
 <?php get_footer();?>