<?php
require_once('wp_bootstrap_navwalker.php');
function registrarMenuPrincipal() {
  register_nav_menu('menu-principal',__( 'Menú Principal' ));
}
add_action( 'init', 'registrarMenuPrincipal' );

?>