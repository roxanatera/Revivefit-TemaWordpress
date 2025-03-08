<?php

if(!defined('ABSPATH')) die();

class revivefit_Clases_Widget extends WP_Widget {

	function __construct() {
		parent::__construct(
			'revivefit_widget',
			esc_html__( 'revivefit Clases', 'revivefit' ), 
			array( 'description' => esc_html__( 'Agrega las Clases como Widget', 'revivefit' ), )
		);
	}

	public function widget( $args, $instance ) {
        
	}

    	public function form( $instance ) {
            $cantidad = !empty($instance['cantidad']) ? $instance['cantidad'] : esc_html( '¿Cuántas Clases deseas mostrar?');
            ?>
            <p>
                <label for="<?php echo esc_attr($this->get_field_id('cantidad')); ?>"><?php esc_html_e('Cantidad de Clases:', 'revivefit'); ?></label>
                <input
                 class="widefat" 
                 id="<?php echo esc_attr($this->get_field_id('cantidad')); ?>" 
                 name="<?php echo esc_attr($this->get_field_name('cantidad')); ?>"
                type="number"
                 value="<?php echo esc_attr($cantidad); ?>">
            </p>
            <?php
   	}

	public function update( $new_instance, $old_instance ) {

	}
} 

function revivefit_registrar_widget() {
    register_widget( 'revivefit_Clases_Widget' );
}
add_action( 'widgets_init', 'revivefit_registrar_widget' );