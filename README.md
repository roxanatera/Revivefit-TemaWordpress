# Tema WordPress: ReviveFit

Este es un tema personalizado de WordPress desarrollado para el gimnasio **ReviveFit**. El tema está diseñado para ser ligero, responsive y fácil de personalizar. A continuación, se detallan las características y cómo configurar el tema.

## Características

- **Imágenes destacadas**: Soporte para imágenes destacadas en entradas y páginas.
- **Títulos SEO**: Soporte para etiquetas de título SEO.
- **Menús personalizados**: Incluye un menú principal personalizable.
- **Estilos y scripts**: Normalize.css para resetear estilos y un archivo de scripts personalizado.
- **Responsive**: Diseño adaptable a dispositivos móviles y tablets.

## Estructura del Tema

- **`functions.php`**: Contiene las funciones principales del tema, como la habilitación de imágenes destacadas, menús, y la carga de estilos y scripts.
- **`header.php`**: Archivo de cabecera que incluye el menú principal y el logo.
- **`style.css`**: Hoja de estilos principal del tema.
- **`js/scripts.js`**: Archivo JavaScript para funcionalidades adicionales.
- **`img/logo.png`**: Logo del gimnasio.

## Configuración

### 1. Habilitar imágenes destacadas
El tema soporta imágenes destacadas en entradas y páginas. Para habilitarlas, asegúrate de que la función `add_theme_support('post-thumbnails');` esté activa en `functions.php`.

### 2. Menú Principal
El menú principal se registra en `functions.php` y se muestra en el archivo `header.php`. Para configurar el menú:

1. Ve a **Apariencia > Menús** en el panel de administración de WordPress.
2. Crea un nuevo menú y asígnalo a la ubicación **Menu Principal**.

### 3. Estilos y Scripts
El tema utiliza Normalize.css para resetear los estilos predeterminados del navegador. Los estilos personalizados se encuentran en `style.css`, y los scripts en `js/scripts.js`.

Para cargar los estilos y scripts, se utiliza la función `wp_enqueue_style` y `wp_enqueue_script` en `functions.php`.

### 4. Logo
El logo del gimnasio se encuentra en la carpeta `img/logo.png`. Puedes cambiarlo reemplazando el archivo `logo.png` con tu propio logo.

## Personalización

### Cambiar el logo
1. Reemplaza el archivo `logo.png` en la carpeta `img` con tu propio logo.
2. Asegúrate de que el nombre del archivo sea `logo.png` o actualiza la ruta en `header.php`.

### Cambiar estilos
1. Edita el archivo `style.css` para personalizar los estilos del tema.
2. Si deseas añadir más estilos, puedes crear un archivo CSS adicional y cargarlo en `functions.php`.

### Añadir funcionalidades JavaScript
1. Edita el archivo `js/scripts.js` para añadir funcionalidades adicionales.
2. Si necesitas más scripts, puedes registrarlos y cargarlos en `functions.php`.

## Requisitos

- WordPress 5.0 o superior.
- PHP 7.0 o superior.

## Instalación

1. Descarga o clona este repositorio.
2. Copia la carpeta del tema en la carpeta `wp-content/themes/` de tu instalación de WordPress.
3. Activa el tema desde **Apariencia > Temas** en el panel de administración de WordPress.

## Soporte

Si encuentras algún problema o tienes alguna pregunta, por favor abre un issue en este repositorio o contáctame a través de [juliarnaterach@gmail.com](mailto:juliarnaterach@gmail.com).

---

**Desarrollado por Julia R. Natera**  
[GitHub](https://github.com/roxanatera) | [LinkedIn](https://www.linkedin.com/in/juliaroxana-natera-917b62172/)