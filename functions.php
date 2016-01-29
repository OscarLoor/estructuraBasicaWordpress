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
  register_sidebar( array(
			'name'          => 'Lateral',
			'id'            => 'lateral',
			'description'   => 'Se ubica en el lado lateral de la página',
			'before_widget' => '',
			'after_widget'  => '',
			'before_title'  => '<h3>',
			'after_title'   => '</h3>',
		) );
	}
add_action( 'widgets_init', 'registrarSideBars' );
add_theme_support('post-thumbnails');

add_filter(‘loop_shop_columns’, ‘loop_columns’);

if (!function_exists(‘loop_columns’)) {
function loop_columns() {
return 2; // 3 products per row
}
}

/**
 * WooCommerce Extra Feature
 * --------------------------
 *
 * Change number of related products on product page
 * Set your own value for 'posts_per_page'
 *
 */ 
function woo_related_products_limit() {
  global $product;

    $args = array(
        'post_type'             => 'product',
        'no_found_rows'         => 1,
        'posts_per_page'        => 3,
        'ignore_sticky_posts'   => 1,
        'orderby'               => $orderby,
        'post__in'              => $related,
        'post__not_in'          => array($product->id)
    );
    return $args;
}
add_filter( 'woocommerce_related_products_args', 'woo_related_products_limit' );
?>