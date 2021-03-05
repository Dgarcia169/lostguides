<?php

/**
 * 
 * @package reviews
 * 
*/

/**
 * Plugin Name: Reviews-Lostguides
 * Plugin URI: https://informatica.ieszaidinvergeles.org:9049/wp
 * Description: A plugin that add reviews to the theme
 * Version: 1.0.0
 * Author: Mozgaash
*/

/*
This program is free software; you can redistribute it and/or
modify it under the terms of the GNU General Public License
as published by the Free Software Foundation; either version 2
of the License, or (at your option) any later version.

This program is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
GNU General Public License for more details.

You should have received a copy of the GNU General Public License
along with this program; if not, write to the Free Software
Foundation, Inc., 51 Franklin Street, Fifth Floor, Boston, MA  02110-1301, USA.

Copyright 2005-2015 Automattic, Inc.
*/


// Evitar que alguien ejecute el plugin poniendo su url en el campo dirección del navegador
defined('ABSPATH') or die('HEY, WHAT ARE YOU DOING HERE MORON ?');

// Declaramos la clase que vamos a usar para encapsular la funcionalidad del plugin
class Reviews {
    
    function __construct() {
        
    }
    
    function register() {
        // Poner en al cola nuestros archivos css y js
        // Para el back-end
        add_action('admin_enqueue_scripts', array($this, 'put_in_queue'));
        // Para el front-end
        add_action('wp_enqueue_scripts', array($this, 'put_in_queue'));
        // Generar nuestro custom post type
        add_action('init', array($this, 'custom_post_type'));

        // Añadir una metabox a nuestro custom post type backend
        add_action('add_meta_boxes', array($this, 'reviews_meta_box'));
        // Guardar los cambios que hagamos en los custom post type backend
        add_action('save_post', array($this, 'save_review'));

        // Crear un enlace para los settings del plugin en el admin area
        add_action('admin_menu', array($this, 'add_admin_pages'));
    }
    /**
     * Funcion que pone en la cola archivos js y css
    */
    function put_in_queue() {
        wp_enqueue_script('reviewsjs', plugins_url('/assets/js/reviews.js', __FILE__));
        wp_enqueue_style('reviewscss', plugins_url('/assets/css/reviews.css', __FILE__));
    }
    /**
     * Funcion que añade una pagina en el admin area para los settings del plugin
    */
    function add_admin_pages() {
        add_menu_page('Lostguides reviews', 'Reviews Settigs', 'manage_options', 'manage_reviews', array($this, 'admin_reviews_index'), 'dashicons-editor-kitchensink', 20);
    }
    /**
     * Funcion que añade una pagina en el admin area para los settings del plugin
    */
    function admin_reviews_index() {
        require_once(plugin_dir_path(__FILE__).'assets/templates/admin.php');
    }

    
    // Al activar el plugin
    function activate() {
        
        // actualizar las reglas de escritura para que observen la nueva taxonomia
        flush_rewrite_rules();
    }
    
    // Al desactivar el plugin
    function deactivate() {
        // actualizar las reglas de escritura para que observen la nueva taxonomia
        flush_rewrite_rules();
    }
    
    // Al desinstalar el plugin
    public static function uninstall() {
        // tenemos que borrar el custom post type
        // Es conveniente borrar todos los datos que ha generado el plugin en la BBDD
    }
    
    function custom_post_type() {
        // registramos nuestro custom post type
        $supports = array(
            'title',
            'editor',
            // 'excerpt',
            // 'custom-fields',
            'author',
            'thumbnail',
        );

        $labels = array(
            'name' => _x('Reviews', 'plural'),
            'singular_name' => _x('Review', 'singular'),
            'name_admin_bar' => _x('All Reviews', 'admin bar'),
            'menu_name' => _x('Reviews', 'admin menu'),
            'add new' => _x('Add new', 'add new'),
            'add_new_item' => __('Add new Review'),
            'all_items' => __('All Reviews'),
            'new_item' => __('Add New Review'),
            'search_items' => __('Search Reviews'),
            'not_found' => __('No reviews found'),
            'view_item' => __('View Review'),
        );

        $args = array(
            'supports' => $supports,
            'labels' => $labels,
            'public' => true,
            'label' => 'Reviews', // Las reviews son visibles para todos tanto en el backend como en el frontend
            'query_var' => true, // Nuestro custom post type estará presente en la queryvar general de wp
            'rewrite' => array('slug' => 'lostguides-reviews'), // Establecer el slug para nuestro custom post type
            'has_archive' => true, // Permitir usar la plantilla archive-{custom-post-type}.php
            'hierarchical' => false, // Indica que nuestro custom-post-type no tiene hijos
            'menu_position' => 7, // Posicion en el menu
            'show_in_menu' => true, // Para hacer que me funcione el menu position
            'menu_icon' => 'dashicons-games',
            // 'show_in_rest' => true, // Habilita el editor gutemberg para tu custom post type
        );
            
        register_post_type('lostguides-reviews', $args);
        register_taxonomy_for_object_type('category', 'lostguides-reviews'); // Habilitamos las categorias para nuestro CPT
        register_taxonomy_for_object_type('post_tag', 'lostguides-reviews'); // Habilitamos los tags para nuestro CPT
    }

    /**
     * Funcion que añade una metabox a la pagina de edicion de nuestro custom post type
    */
    function reviews_meta_box($screens) {
        // Crear una metabox para que contenga los custom fields de mi custom post type
        $screens = array('lostguides-reviews');
        foreach($screens as $screen) {
            //          id atribute         titulo                      funcion de callback               WP_screen   contexto
            add_meta_box('reviews_metabox', 'My reviews Details', array($this, 'reviews_metabox_callback'), $screen, 'advanced', 'default');
        }
    }
    /**
     * Funcion de callback que crea los campos en la metabox
    */
    function reviews_metabox_callback($post) {
        // Crear un campo nonce para la metabox - se usa para comprobar que las peticiones al server proceden del sitio web y no de un sitio externo
        wp_nonce_field(basename(__FILE__), 'review_metabox_nonce');
        // Recoger los valores de los campos, si los tuviese
        
        // RELEASE
        $release = get_post_meta($post->ID, 'release', true); // Date

        // DEVELOPER
        $developer = get_post_meta($post->ID, 'developer', true); // Text

        // points
        $points = get_post_meta($post->ID, 'points', true); // Text


        $text = get_post_meta($post->ID, 'text', true); // Checkbox
        $voices = get_post_meta($post->ID, 'voices', true); // Checkbox

        // PEGI
        $pegi = get_post_meta($post->ID, 'pegi', true); // Radio

        // CATEGORIES
        $pc = get_post_meta($post->ID, 'pc', true);
        $ps4 = get_post_meta($post->ID, 'ps4', true);
        $ps5 = get_post_meta($post->ID, 'ps5', true);
        $xboxone = get_post_meta($post->ID, 'xboxone', true);
        $xboxseriesx = get_post_meta($post->ID, 'xboxseriesx', true);
        $switch = get_post_meta($post->ID, 'switch', true);

        // GENRES
        $action = get_post_meta($post->ID, 'my_action', true);
        $adventure = get_post_meta($post->ID, 'my_adventure', true);
        $rpg = get_post_meta($post->ID, 'my_rpg', true);
        $strategy = get_post_meta($post->ID, 'my_strategy', true);
        $platforms = get_post_meta($post->ID, 'my_platforms', true);
        $puzzle = get_post_meta($post->ID, 'my_puzzle', true);

        // TEXT
        $textspanish = get_post_meta($post->ID, 'my_textspanish', true);
        $textenglish = get_post_meta($post->ID, 'my_textenglish', true);

        // VOICES
        $voicesspanish = get_post_meta($post->ID, 'my_voicesspanish', true);
        $voicesenglish = get_post_meta($post->ID, 'my_voicesenglish', true);

        // Dibujamos los campos con etiquetas HTML
        ?>
        <div class="review_details">
            <!-- RELEASE -->
            <label for="release">RELEASE:</label><br>
            <input type="date" name="release" id="release" value="<?php echo $release; ?>"><br><br>
            <!-- PEGI -->
            <label for="my_app_pegi">PEGI:</label><br>
            <select id="my_app_pegi" name="my_app_pegi">
                <option value="3" <?php if ($pegi=='3') echo 'selected';?>>3</option>
                <option value="7" <?php if ($pegi=='7') echo 'selected';?>>7</option>
                <option value="12" <?php if ($pegi=='12') echo 'selected';?>>12</option>
                <option value="16" <?php if ($pegi=='16') echo 'selected';?>>16</option>
                <option value="18" <?php if ($pegi=='18') echo 'selected';?>>18</option>
            </select><br><br>
            <!-- CATEGORIES -->
            <label>CATEGORIES:</label><br>
            <label><input type="checkbox" value="1" <?php checked($pc, true, true); ?> name="pc" />PC</label><br>
            <label><input type="checkbox" value="1" <?php checked($ps4, true, true); ?> name="ps4" />PS4</label><br>
            <label><input type="checkbox" value="1" <?php checked($ps5, true, true); ?> name="ps5" />PS5</label><br>
            <label><input type="checkbox" value="1" <?php checked($xboxone, true, true); ?> name="xboxone" />Xbox One</label><br>
            <label><input type="checkbox" value="1" <?php checked($xboxseriesx, true, true); ?> name="xboxseriesx" />Xbox Series X</label><br>
            <label><input type="checkbox" value="1" <?php checked($switch, true, true); ?> name="switch" />Nintendo Switch</label><br><br>

            <!-- GENRES -->
            <label>GENRES:</label><br>
            <label><input type="checkbox" value="1" <?php checked($action, true, true); ?> name="my_action" />Action</label><br>
            <label><input type="checkbox" value="1" <?php checked($adventure, true, true); ?> name="my_adventure" />Adventure</label><br>
            <label><input type="checkbox" value="1" <?php checked($rpg, true, true); ?> name="my_rpg" />RPG</label><br>
            <label><input type="checkbox" value="1" <?php checked($strategy, true, true); ?> name="my_strategy" />Strategy</label><br>
            <label><input type="checkbox" value="1" <?php checked($platforms, true, true); ?> name="my_platforms" />Platforms</label><br>
            <label><input type="checkbox" value="1" <?php checked($puzzle, true, true); ?> name="my_puzzle" />Puzzle</label><br><br>

            <!-- DEVELOPER -->
            <label for="developer">DEVELOPER:</label><br>
            <input type="text" placeholder="E.g. Activision" name="developer" id="developer" value="<?php echo $developer; ?>"><br><br>

            <!-- EDITOR -->
            <label for="points">Note:</label><br>
            <input type="number" max="10" min="0" placeholder="0-10" name="points" id="points" value="<?php echo $points; ?>"><br><br>

            <!-- TEXT -->
            <label>TEXT:</label><br>
            <label><input type="checkbox" value="1" <?php checked($textspanish, true, true); ?> name="my_textspanish" />Spanish</label><br>
            <label><input type="checkbox" value="1" <?php checked($textenglish, true, true); ?> name="my_textenglish" />English</label><br><br>

            <!-- VOICES -->
            <label>VOICES:</label><br>
            <label><input type="checkbox" value="1" <?php checked($voicesspanish, true, true); ?> name="my_voicesspanish" />Spanish</label><br>
            <label><input type="checkbox" value="1" <?php checked($voicesenglish, true, true); ?> name="my_voicesenglish" />English</label><br>
        </div>
        
        <?php
    }

    /**
     * Funcion de callback que crea los campos en la metabox
    */
    function save_review($post_id) {
        // Comprobar que el post no esté en autosave
        $is_autosave = wp_is_post_autosave($post_id);
        // Comprobar que el post no esté en revision
        $is_revision = wp_is_post_revision($post_id);
        // Comprobar el campo nonce - verificamos si es correcto y si no ha expirado
        $is_valid_nonce = (isset($_POST['review_metabox_nonce']) && wp_verify_nonce($_POST['my_app_metabox_nonce'], basename(__FILE__))) ? 'true' : 'false';
        // Comprobar que tenemos permiso
        if($is_autosave || $is_revision || !$is_valid_nonce) {
            return;
        }

        if (!current_user_can('edit_post', $post_id)) {
            return;
        }

        // Saneamos los campos para evitar inyecciones de codigo
        if(isset($_POST['release'])) {
            $release = sanitize_text_field($_POST['release']);

            $pegi = sanitize_text_field( $_POST['my_app_pegi']);

            $pc = sanitize_text_field( $_POST['pc']);
            $ps4 = sanitize_text_field( $_POST['ps4']);
            $ps5 = sanitize_text_field( $_POST['ps5']);
            $xboxone = sanitize_text_field( $_POST['xboxone']);
            $xboxseriesx = sanitize_text_field( $_POST['xboxseriesx']);
            $switch = sanitize_text_field( $_POST['switch']);

            $action = sanitize_text_field( $_POST['my_action']);
            $adventure = sanitize_text_field( $_POST['my_adventure']);
            $rpg = sanitize_text_field( $_POST['my_rpg']);
            $strategy = sanitize_text_field( $_POST['my_strategy']);
            $platforms = sanitize_text_field( $_POST['my_platforms']);
            $puzzle = sanitize_text_field( $_POST['my_puzzle']);

            $developer = sanitize_text_field( $_POST['developer']);

            $points = sanitize_text_field( $_POST['points']);

            $textspanish = sanitize_text_field( $_POST['my_textspanish']);
            $textenglish = sanitize_text_field( $_POST['my_textenglish']);
            
            $voicesspanish = sanitize_text_field( $_POST['my_voicesspanish']);
            $voicesenglish = sanitize_text_field( $_POST['my_voicesenglish']);

            // GRABAMOS EN LA BASE DE DATOS
            update_post_meta($post_id, 'release', $release);
            update_post_meta($post_id, 'pegi', $pegi);

            update_post_meta($post_id, 'pc', $pc);
            update_post_meta($post_id, 'ps4', $ps4);
            update_post_meta($post_id, 'ps5', $ps5);
            update_post_meta($post_id, 'xboxone', $xboxone);
            update_post_meta($post_id, 'xboxseriesx', $xboxseriesx);
            update_post_meta($post_id, 'switch', $switch);

            update_post_meta($post_id, 'my_action', $action);
            update_post_meta($post_id, 'my_adventure', $adventure);
            update_post_meta($post_id, 'my_rpg', $rpg);
            update_post_meta($post_id, 'my_strategy', $strategy);
            update_post_meta($post_id, 'my_platforms', $platforms);
            update_post_meta($post_id, 'my_puzzle', $puzzle);

            update_post_meta($post_id, 'developer', $developer);

            update_post_meta($post_id, 'points', $points);

            update_post_meta($post_id, 'my_textspanish', $textspanish);
            update_post_meta($post_id, 'my_textenglish', $textenglish);

            update_post_meta($post_id, 'my_voicesspanish', $voicesspanish);
            update_post_meta($post_id, 'my_voicesenglish', $voicesenglish);
        }
    }
    
}

if(class_exists('Reviews')) {
    $reviews = new Reviews();
    $reviews->register();
    
}

register_activation_hook(__FILE__, array($reviews, 'activate'));
register_deactivation_hook(__FILE__, array($reviews, 'deactivate'));

//register_uninstall_hook(__FILE__, array('Reviews', 'uninstall'));

// PARA PODER ACCEDER A UNINSTALL AUNQUE NO HAYA UN METODO DE LA CLASE, QUE ES CUANDO ESTA DESACTIVADO EL PLUGIN