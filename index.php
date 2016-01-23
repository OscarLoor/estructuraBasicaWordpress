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
  }
 ?>
 </div>
 <?php get_footer();?>