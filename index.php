<?php get_header();?>
 <!--Body ya tiene la clase container-fluid-->


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
   ?>
   <div id="marcas" class="container">
   <div class="row"><p>MARCAS QUE DISTRIBUIMOS</p><img src="<?php echo get_template_directory_uri();?>/img/separador.jpg"/></div>

    <img src="<?php echo get_template_directory_uri();?>/img/marcasUno.jpg"/>
    <img src="<?php echo get_template_directory_uri();?>/img/marcasDos.jpg"/>
   </div>
   <?php
  }
 ?>
 </div>
 <?php get_footer();?>