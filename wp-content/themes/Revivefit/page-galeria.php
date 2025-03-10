<?php 
/**
 * Template Name: Galería
 */
get_header(); ?>

<main class="contenedor seccion">
    <?php
    while (have_posts()): the_post();
        the_title('<h1 class="text-center text-primary">', '</h1>');

        // Obtener la galería de imágenes
        $galeria = get_post_gallery(get_the_ID(), false);

        // Verificar si la galería tiene imágenes
        if (isset($galeria['ids']) && !empty($galeria['ids'])) {
            // Extraer los IDs de las imágenes
            $galeria_imagenes_ID = explode(',', $galeria['ids']);
            ?>
            <ul class="galeria-imagenes">
                <?php
                foreach ($galeria_imagenes_ID as $id) {
                    $imagen_grande = wp_get_attachment_image_src($id, 'large')[0];
                    $imagen_full = wp_get_attachment_image_src($id, 'full')[0];
                    ?>
                    <li>
                        <a href="<?php echo $imagen_full; ?>" data-lightbox="galeria">
                            <img src="<?php echo $imagen_grande; ?>" alt="imagen galeria">
                        </a>
                    </li>
                    <?php
                }
                ?>
            </ul>
            <?php
        } else {
            echo "<p>No hay imágenes en la galería.</p>";
        }
    endwhile;
    ?>
</main>

<?php get_footer(); ?>