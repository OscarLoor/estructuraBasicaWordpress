<?php
require_once('wp_bootstrap_navwalker.php');
function registrarMenuPrincipal() {
  register_nav_menu('menu-principal',__( 'Menú Principal' ));
}
add_action( 'init', 'registrarMenuPrincipal' );

function registrarMenuSuperior() {
  register_nav_menu('menu-superior',__( 'Menú Superior' ));
}
add_action( 'init', 'registrarMenuSuperior' );

function registrarSideBars(){
		register_sidebar( array(
			'name'          => 'Footer Uno',
			'id'            => 'footer-uno',
			'description'   => 'Aparece en la parte inferior de la página',
			'before_widget' => '',
			'after_widget'  => '',
			'before_title'  => '<h3>',
			'after_title'   => '</h3>',
		) );
 
 register_sidebar( array(
			'name'          => 'Footer Dos',
			'id'            => 'footer-dos',
			'description'   => 'Aparece en la parte inferior de la página',
			'before_widget' => '',
			'after_widget'  => '',
			'before_title'  => '<h3>',
			'after_title'   => '</h3>',
		) );
 register_sidebar( array(
			'name'          => 'Footer Tres',
			'id'            => 'footer-tres',
			'description'   => 'Aparece en la parte inferior de la página',
			'before_widget' => '',
			'after_widget'  => '',
			'before_title'  => '<h3>',
			'after_title'   => '</h3>',
		) );
	}
add_action( 'widgets_init', 'registrarSideBars' );
?>