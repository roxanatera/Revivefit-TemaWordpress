<?php
/*
    Plugin Name: Revive Fit- Post Types
    Plugin URI: http://twitter.com/codigoconjuan
    Description: Añade Post Types al sitio Revive Fit
    Version: 1.0.0
    Author: Julia Roxana Natera (JR)
    Author URI: http://twitter.com/codigoconjuan
    Text Domain: revivefit
*/



if(!defined('ABSPATH')) die();//para que nadie acceda directamente a este archivo

// Registrar Custom Post Type
function revivefit_clases_post_type() {

	$labels = array(
		'name'                  => _x( 'Clases', 'Post Type General Name', 'revivefit' ),
		'singular_name'         => _x( 'Clase', 'Post Type Singular Name', 'revivefit' ),
		'menu_name'             => __( 'Clases', 'revivefit' ),
		'name_admin_bar'        => __( 'Clase', 'revivefit' ),
		'archives'              => __( 'Archivo', 'revivefit' ),
		'attributes'            => __( 'Atributos', 'revivefit' ),
		'parent_item_colon'     => __( 'Clase Padre', 'revivefit' ),
		'all_items'             => __( 'Todas Las Clases', 'revivefit' ),
		'add_new_item'          => __( 'Agregar Clase', 'revivefit' ),
		'add_new'               => __( 'Agregar Clase', 'revivefit' ),
		'new_item'              => __( 'Nueva Clase', 'revivefit' ),
		'edit_item'             => __( 'Editar Clase', 'revivefit' ),
		'update_item'           => __( 'Actualizar Clase', 'revivefit' ),
		'view_item'             => __( 'Ver Clase', 'revivefit' ),
		'view_items'            => __( 'Ver Clases', 'revivefit' ),
		'search_items'          => __( 'Buscar Clase', 'revivefit' ),
		'not_found'             => __( 'No Encontrado', 'revivefit' ),
		'not_found_in_trash'    => __( 'No Encontrado en Papelera', 'revivefit' ),
		'featured_image'        => __( 'Imagen Destacada', 'revivefit' ),
		'set_featured_image'    => __( 'Guardar Imagen destacada', 'revivefit' ),
		'remove_featured_image' => __( 'Eliminar Imagen destacada', 'revivefit' ),
		'use_featured_image'    => __( 'Utilizar como Imagen Destacada', 'revivefit' ),
		'insert_into_item'      => __( 'Insertar en Clase', 'revivefit' ),
		'uploaded_to_this_item' => __( 'Agregado en Clase', 'revivefit' ),
		'items_list'            => __( 'Lista de Clases', 'revivefit' ),
		'items_list_navigation' => __( 'Navegación de Clases', 'revivefit' ),
		'filter_items_list'     => __( 'Filtrar Clases', 'revivefit' ),
	);
	$args = array(
		'label'                 => __( 'Clase', 'revivefit' ),
		'description'           => __( 'Clases para el Sitio Web', 'revivefit' ),
		'labels'                => $labels,
		'supports'              => array( 'title', 'editor', 'thumbnail' ),
		'hierarchical'          => true, // true = posts , false = paginas
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
        'menu_position'         => 6,
        'menu_icon'             => 'dashicons-welcome-learn-more',
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => true,
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'capability_type'       => 'page',
	);
	register_post_type( 'revivefit_clases', $args );

}
add_action( 'init', 'revivefit_clases_post_type', 0 );



function revivefit_instructores_post_type() {

	$labels = array(
		'name'                  => _x( 'Instructores', 'Post Type General Name', 'revivefit' ),
		'singular_name'         => _x( 'Instructor', 'Post Type Singular Name', 'revivefit' ),
		'menu_name'             => __( 'Instructores', 'revivefit' ),
		'name_admin_bar'        => __( 'Instructor', 'revivefit' ),
		'archives'              => __( 'Archivo', 'revivefit' ),
		'attributes'            => __( 'Atributos', 'revivefit' ),
		'parent_item_colon'     => __( 'Instructor Padre', 'revivefit' ),
		'all_items'             => __( 'Todas Las Instructores', 'revivefit' ),
		'add_new_item'          => __( 'Agregar Instructor', 'revivefit' ),
		'add_new'               => __( 'Agregar Instructor', 'revivefit' ),
		'new_item'              => __( 'Nueva Instructor', 'revivefit' ),
		'edit_item'             => __( 'Editar Instructor', 'revivefit' ),
		'update_item'           => __( 'Actualizar Instructor', 'revivefit' ),
		'view_item'             => __( 'Ver Instructor', 'revivefit' ),
		'view_items'            => __( 'Ver Instructores', 'revivefit' ),
		'search_items'          => __( 'Buscar Instructor', 'revivefit' ),
		'not_found'             => __( 'No Encontrado', 'revivefit' ),
		'not_found_in_trash'    => __( 'No Encontrado en Papelera', 'revivefit' ),
		'featured_image'        => __( 'Imagen Destacada', 'revivefit' ),
		'set_featured_image'    => __( 'Guardar Imagen destacada', 'revivefit' ),
		'remove_featured_image' => __( 'Eliminar Imagen destacada', 'revivefit' ),
		'use_featured_image'    => __( 'Utilizar como Imagen Destacada', 'revivefit' ),
		'insert_into_item'      => __( 'Insertar en Instructor', 'revivefit' ),
		'uploaded_to_this_item' => __( 'Agregado en Instructor', 'revivefit' ),
		'items_list'            => __( 'Lista de Instructores', 'revivefit' ),
		'items_list_navigation' => __( 'Navegación de Instructores', 'revivefit' ),
		'filter_items_list'     => __( 'Filtrar Instructores', 'revivefit' ),
	);
	$args = array(
		'label'                 => __( 'Instructores', 'revivefit' ),
		'description'           => __( 'Instructores para el Sitio Web', 'revivefit' ),
		'labels'                => $labels,
		'supports'              => array( 'title', 'editor', 'thumbnail' ),
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 7,
		'menu_icon'             => 'dashicons-admin-users',
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => false,
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'capability_type'       => 'page',
	);
	register_post_type( 'instructores', $args );

}
add_action( 'init', 'revivefit_instructores_post_type', 0 );


function revivefit_testimoniales_post_type() {
	$labels = array(
		'name'                  => _x( 'Testimoniales', 'Post Type General Name', 'revivefit' ),
		'singular_name'         => _x( 'Testimonial', 'Post Type Singular Name', 'revivefit' ),
		'menu_name'             => __( 'Testimoniales', 'revivefit' ),
		'name_admin_bar'        => __( 'Testimonial', 'revivefit' ),
		'archives'              => __( 'Archivo', 'revivefit' ),
		'attributes'            => __( 'Atributos', 'revivefit' ),
		'parent_item_colon'     => __( 'Testimonial Padre', 'revivefit' ),
		'all_items'             => __( 'Todas Las Testimoniales', 'revivefit' ),
		'add_new_item'          => __( 'Agregar Testimonial', 'revivefit' ),
		'add_new'               => __( 'Agregar Testimonial', 'revivefit' ),
		'new_item'              => __( 'Nueva Testimonial', 'revivefit' ),
		'edit_item'             => __( 'Editar Testimonial', 'revivefit' ),
		'update_item'           => __( 'Actualizar Testimonial', 'revivefit' ),
		'view_item'             => __( 'Ver Testimonial', 'revivefit' ),
		'view_items'            => __( 'Ver Testimoniales', 'revivefit' ),
		'search_items'          => __( 'Buscar Testimonial', 'revivefit' ),
		'not_found'             => __( 'No Encontrado', 'revivefit' ),
		'not_found_in_trash'    => __( 'No Encontrado en Papelera', 'revivefit' ),
		'featured_image'        => __( 'Imagen Destacada', 'revivefit' ),
		'set_featured_image'    => __( 'Guardar Imagen destacada', 'revivefit' ),
		'remove_featured_image' => __( 'Eliminar Imagen destacada', 'revivefit' ),
		'use_featured_image'    => __( 'Utilizar como Imagen Destacada', 'revivefit' ),
		'insert_into_item'      => __( 'Insertar en Testimonial', 'revivefit' ),
		'uploaded_to_this_item' => __( 'Agregado en Testimonial', 'revivefit' ),
		'items_list'            => __( 'Lista de Testimoniales', 'revivefit' ),
		'items_list_navigation' => __( 'Navegación de Testimoniales', 'revivefit' ),
		'filter_items_list'     => __( 'Filtrar Testimoniales', 'revivefit' ),
	);
	$args = array(
		'label'                 => __( 'Testimoniales', 'revivefit' ),
		'description'           => __( 'Testimoniales para el Sitio Web', 'revivefit' ),
		'labels'                => $labels,
		'supports'              => array( 'title', 'editor', 'thumbnail' ),
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 8,
		'menu_icon'             => 'dashicons-editor-quote',
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => false,
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'capability_type'       => 'page',
	);
	register_post_type( 'testimoniales', $args );
}
add_action( 'init', 'revivefit_testimoniales_post_type', 0 );