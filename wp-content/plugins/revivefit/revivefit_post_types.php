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