<?php wp_footer(); ?>
 <div class="social-icons">
  <a class="socialitems" target="_blank" href="https://es-la.facebook.com/deofertaec/">
   <p>
    <i class="fa fa-facebook-official"></i>
    <span class="social-text">Facebook</span>
   </p>
  </a>
 </div>
 <div id="redSocialAbajo" class="social-icons">
   <p class="socialitems">
    <i class="fa fa-whatsapp"></i>
    <span class="social-text">Whatsapp - 0980 860 534</span>
   </p>
 </div>

 <div id="footer" class="row">
  <div id="parteSuperiorFooter" class="container">
   <div class="col-md-3">
    <a id="logoFooter" href="<?php echo get_site_url(); ?>"><img src="<?php echo get_template_directory_uri();?>/img/logoNegro.png"></a>
   </div>
   <!--col-md-3-->
   <div class="col-md-3">
    <?php if ( is_active_sidebar( 'footer-uno' ) ) : ?>
     <?php dynamic_sidebar( 'footer-uno' ); ?>
      <?php endif; ?>
   </div>
   <!--col-md-3-->

   <div class="col-md-3">
    <?php if ( is_active_sidebar( 'footer-dos' ) ) : ?>
     <?php dynamic_sidebar( 'footer-dos' ); ?>
      <?php endif; ?>
   </div>
   <!--col-md-3-->

   <div id="datosContacto" class="col-md-3">
    <?php if ( is_active_sidebar( 'footer-tres' ) ) : ?>
     <?php dynamic_sidebar( 'footer-tres' ); ?>
      <?php endif; ?>
   </div>
   <!--col-md-3-->
  </div>
  <div id="parteInferiorFooter" class="container">
   <p><span>Todos los derechos reservados ©2016 DEOFERTA.EC</span></p>
   <p><a href="http://www.paginaswebenquito.ec/" target="_blank">PáginasWebEnQuito.EC</a> |
    <a href="http://www.paginaswebenquito.ec/" target="_blank">Tienda Virtual</a> -
    <a href="http://www.paginaswebenquito.ec/" target="_blank">Diseño Web</a> -
    <a href="http://www.paginaswebenquito.ec/" target="_blank">Desarrollo Web</a> -
    <a href="http://www.paginaswebenquito.ec/" target="_blank">Sitios Web</a> -
    <a href="http://www.paginaswebenquito.ec/" target="_blank">Paginas Web</a> -
    <a href="http://www.paginaswebenquito.ec/" target="_blank">Páginas Web</a> -
    <a href="http://www.paginaswebenquito.ec/" target="_blank">Revistas Digitales</a> -
    <a href="http://www.paginaswebenquito.ec/" target="_blank">Catálogos Digitales</a></p>
  </div>
 </div>

 <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
 <!-- Include all compiled plugins (below), or include individual files as needed -->
 <script src="<?php echo get_template_directory_uri();?>/js/bootstrap.min.js"></script>

 </body>

 </html>