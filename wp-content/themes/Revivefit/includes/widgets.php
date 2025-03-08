<?php

if (!defined('ABSPATH')) die();

class revivefit_Clases_Widget extends WP_Widget {

    function __construct() {
        parent::__construct(
            'revivefit_widget',
            esc_html__('revivefit Clases', 'revivefit'),
            array('description' => esc_html__('Agrega las Clases como Widget', 'revivefit'),)
        );
    }

    public function widget($args, $instance) {
        ?>
        <ul class="clases-sidebar">
            <?php
            
            $args = array(
                'post_type' => 'revivefit_clases',
                'posts_per_page' => $instance['cantidad']
            );
            $clases = new WP_Query($args);
            while ($clases->have_posts()) {
                $clases->the_post();
                ?>
                <li>
                    <div class="imagen">
                        <?php
                        if (has_post_thumbnail()) {
                            the_post_thumbnail('medium');
                        } else {
                            echo '<p>No hay imagen disponible</p>'; // Mensaje si no hay imagen
                        }
                        ?>
                    </div>
                    <div class="contenido-clase">
                        <a href="<?php the_permalink(); ?>">
                            <h3><?php the_title(); ?></h3>
                        </a>
                        <?php
                            $hora_inicio = get_field('hora_inicio');
                            $hora_fin = get_field('hora_fin');
                        ?>
                        <p>
                            <?php the_field('dias_de_clases'); ?> -
                            <?php echo $hora_inicio . " a " . $hora_fin; ?>
                        </p>
                </li>
                <?php
            }
            wp_reset_postdata(); // Restablece la consulta original
            ?>
        </ul>
        <?php

        echo $args['after_widget']; // Cierra el contenedor HTML del widget
    }

    public function form($instance) {
        $cantidad = !empty($instance['cantidad']) ? $instance['cantidad'] : esc_html('¿Cuántas Clases deseas mostrar?');
        ?>
        <p>
            <label for="<?php echo esc_attr($this->get_field_id('cantidad')); ?>">
                <?php esc_html_e('Cantidad de Clases:', 'revivefit'); ?>
            </label>
            <input class="widefat"
                   id="<?php echo esc_attr($this->get_field_id('cantidad')); ?>"
                   name="<?php echo esc_attr($this->get_field_name('cantidad')); ?>"
                   type="number"
                   value="<?php echo esc_attr($cantidad); ?>">
        </p>
        <?php
    }

    public function update($new_instance, $old_instance) {
        $instance = array();
        $instance['cantidad'] = (!empty($new_instance['cantidad'])) ? sanitize_text_field($new_instance['cantidad']) : '';
        return $instance;
    }
}

function revivefit_registrar_widget() {
    register_widget('revivefit_Clases_Widget');
}
add_action('widgets_init', 'revivefit_registrar_widget');