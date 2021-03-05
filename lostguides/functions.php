<?php
    ini_set('display_errors', 1);
    error_reporting(E_ALL);
    /* 
    *    
    *   Theme Supports
    *
    */
    
    add_theme_support('post-thumbnails');
    add_theme_support('post-formats', array('audio', 'video', 'gallery', 'image', 'quote', 'link'));


    function add_theme_scripts() {
        
        wp_enqueue_style('style', get_stylesheet_uri() );
        //                @handle     @url
        
        wp_register_script('jquery', get_template_directory_uri() . '/js/vendor/jquery-3.5.0.min.js', array(), null, false);
        wp_enqueue_script('jquery');
        
        wp_register_script('popper', get_template_directory_uri() . '/js/popper.min.js', array('jquery'), null, true);
        wp_enqueue_script('popper');
        
        wp_register_script('bootstrap', get_template_directory_uri() . '/js/bootstrap.min.js', array('jquery'), null, true);
        wp_enqueue_script('bootstrap');
        
        wp_register_script('isotope', get_template_directory_uri() . '/js/isotope.pkgd.min.js', array('jquery'), null, true);
        wp_enqueue_script('isotope');
        
        wp_register_script('imagesloaded', get_template_directory_uri() . '/js/imagesloaded.pkgd.min.js', array('jquery'), null, true);
        wp_enqueue_script('imagesloaded');
        
        wp_register_script('jquerypopup', get_template_directory_uri() . '/js/jquery.magnific-popup.min.js', array('jquery'), null, true);
        wp_enqueue_script('jquerypopup');
        
        wp_register_script('owlcarousel', get_template_directory_uri() . '/js/owl.carousel.min.js', array('jquery'), null, true);
        wp_enqueue_script('owlcarousel');
        
        wp_register_script('jqueryodometer', get_template_directory_uri() . '/js/jquery.odometer.min.js', array('jquery'), null, true);
        wp_enqueue_script('jqueryodometer');
        
        wp_register_script('jqueryappear', get_template_directory_uri() . '/js/jquery.appear.js', array('jquery'), null, true);
        wp_enqueue_script('jqueryappear');
        
        wp_register_script('slick', get_template_directory_uri() . '/js/slick.min.js', array('jquery'), null, true);
        wp_enqueue_script('slick');
        
        wp_register_script('ajaxform', get_template_directory_uri() . '/js/ajax-form.js', array('jquery'), null, true);
        wp_enqueue_script('ajaxform');

        wp_register_script('wow', get_template_directory_uri() . '/js/wow.min.js', array('jquery'), null, true);
        wp_enqueue_script('wow');
        
        wp_register_script('aos', get_template_directory_uri() . '/js/aos.js', array('jquery'), null, true);
        wp_enqueue_script('aos');
        
        wp_register_script('plugins', get_template_directory_uri() . '/js/plugins.js', array('jquery'), null, true);
        wp_enqueue_script('plugins');
        
        wp_register_script('main', get_template_directory_uri() . '/js/main.js', array('jquery'), null, true);
        wp_enqueue_script('main');
        
        wp_register_script('masonry', get_template_directory_uri() . '/js/masonry.js', array('jquery'), null, true);
        wp_enqueue_script('masonry');
        
    }
    
    add_action('wp_enqueue_scripts', 'add_theme_scripts');
    
    
    
    function generaltheme_widgets_init() {
        register_sidebar(array(
                'name' => 'Sidebar Widgets',
                'id' => 'sidebar',
                'description' => 'Sidebar Widget Area',
                'before_widget' => '<div class="widget %2$s">',
                'after_widget' => '</div>',
            ));
    }
    add_action('widgets_init', 'generaltheme_widgets_init');
    
    
    /* REGISTRAR NUMERO VISITAS DE UN POST */
    
    function get_num_visits($post_id, $verify) {
        // Checkear si existe ya el contador de visitas y si no existe lo creamos
        $numvisits = 1;
        $sufix = " Visit";
        
        if(!add_post_meta($post_id, 'numvisits', $numvisits, true)) {
            if($verify == 1) {
                $numvisits = get_post_meta($post_id, 'numvisits', true) + 1;
            } else {
                $numvisits = get_post_meta($post_id, 'numvisits', true);
            }
            $sufix = " Visits";
            update_post_meta($post_id, 'numvisits', $numvisits);
        }
        return $numvisits.$sufix;
    }
    
    
    /**************************************************************************/
    
    /* EXCLUIR PAGINAS DEL SEARCH DE WORDPRESS */
    
    if (!is_admin()) {
    function wp_search_filter($query) {
    if ($query->is_search) {
    $query->set('post_type', 'post');
    }
    return $query;
    }
    add_filter('pre_get_posts','wp_search_filter');
    }
    
    /**************************************************************************/
    
    /* AUTORES */
    
    /**
     *  Add Social media fields to user profile
     *  @param array    User profile fields
     *  @return array   User profile fields
     */
    function add_social_media($user_methods) {
        
        $user_methods['facebook'] = 'Facebook account:';
        $user_methods['instagram'] = 'Instagram account:';
        $user_methods['twitter'] = 'Twitter account:';
        
        $user_methods['profilepic'] = 'Profile pic:';
        
        return $user_methods;
    }
    add_filter('user_contactmethods', 'add_social_media');
    
    /* ---------------------------------------------------------------------- */
    
    /**
     *  Add skills fields in user profile
     *  @param $user user object
     */
    function add_skills_fields($user) {
        ?>
        <!-- Descripcion del panel donde vamos a colocar los nuevos campos -->
        <h3>User skills information</h3>
        <!-- Crear una tabla con los nuevos campos de las skills -->
        <table>
            <tr>
                <th><label for="skill1"></label></th>
                <td>
                    <span class="description">Please, enter your first skill description</span>
                    <input type="text" name="skill1" id="skill1" class="regular-text" value="<?php echo esc_attr(get_the_author_meta('skill1', $user->ID)); ?>">
                </td>
                <th><label for="skill1V"></label></th>
                <td>
                    <span class="description">Please, enter your first skill value</span>
                    <input type="text" name="skill1V" id="skill1V" class="regular-text" value="<?php echo esc_attr(get_the_author_meta('skill1V', $user->ID)); ?>">
                </td>
            </tr>
            <tr>
                <th><label for="skill2"></label></th>
                <td>
                    <span class="description">Please, enter your second skill description</span>
                    <input type="text" name="skill2" id="skill2" class="regular-text" value="<?php echo esc_attr(get_the_author_meta('skill2', $user->ID)); ?>">
                </td>
                <th><label for="skill2V"></label></th>
                <td>
                    <span class="description">Please, enter your second skill value</span>
                    <input type="text" name="skill2V" id="skill2V" class="regular-text" value="<?php echo esc_attr(get_the_author_meta('skill2V', $user->ID)); ?>">
                </td>
            </tr>
            <tr>
                <th><label for="skill3"></label></th>
                <td>
                    <span class="description">Please, enter your third skill description</span>
                    <input type="text" name="skill3" id="skill3" class="regular-text" value="<?php echo esc_attr(get_the_author_meta('skill3', $user->ID)); ?>">
                </td>
                <th><label for="skill3V"></label></th>
                <td>
                    <span class="description">Please, enter your third skill value</span>
                    <input type="text" name="skill3V" id="skill3V" class="regular-text" value="<?php echo esc_attr(get_the_author_meta('skill3V', $user->ID)); ?>">
                </td>
            </tr>
            <tr>
                <th><label for="skill4"></label></th>
                <td>
                    <span class="description">Please, enter your fourth skill description</span>
                    <input type="text" name="skill4" id="skill4" class="regular-text" value="<?php echo esc_attr(get_the_author_meta('skill4', $user->ID)); ?>">
                </td>
                <th><label for="skill4V"></label></th>
                <td>
                    <span class="description">Please, enter your fourth skill value</span>
                    <input type="text" name="skill4V" id="skill4V" class="regular-text" value="<?php echo esc_attr(get_the_author_meta('skill4V', $user->ID)); ?>">
                </td>
            </tr>
        </table>
        <?php
    }
    add_action('show_user_profile', 'add_skills_fields');
    add_action('edit_user_profile', 'add_skills_fields');
    
    /* ---------------------------------------------------------------------- */
    
    /**
     *  Add additional profile skills fields
     *  @param   int $user_id Current user ID
     */
     
    function save_skills_fields($user_id) {
        // id del user nombre del campo valor del campo
        update_user_meta($user_id, 'skill1', $_POST['skill1']);
        update_user_meta($user_id, 'skill1V', $_POST['skill1V']);
        
        update_user_meta($user_id, 'skill2', $_POST['skill2']);
        update_user_meta($user_id, 'skill2V', $_POST['skill2V']);
        
        update_user_meta($user_id, 'skill3', $_POST['skill3']);
        update_user_meta($user_id, 'skill3V', $_POST['skill3V']);
        
        update_user_meta($user_id, 'skill4', $_POST['skill4']);
        update_user_meta($user_id, 'skill4V', $_POST['skill4V']);
        
    }
    add_action('personal_options_update', 'save_skills_fields');
    add_action('edit_user_profile_update', 'save_skills_fields');
    
    /**
     *  Get the autor of an ID role
     *  @param int $author_id author id
     */
     
    function get_author_role($author_id) {
        $user_info = get_userdata($author_id);
        return implode(', ', $user_info->roles);
    }
    
    
    /**************************************************************************/
    
    /**************************************************************************/
    
    /* COMENTARIOS */
    
    
    /**
    * Primera Función: 
    * Borra el campo url del formulario de comentarios
    * @parametro array $fields que tiene la lista de campos del comentario
    */
    
    function remove_comment_fields($fields) {
        unset($fields['url']);
        return $fields;
    }
    add_filter('comment_form_default_fields', 'remove_comment_fields');
    
    /* ---------------------------------------------------------------------- */
    
    
    
    /**
    * Segunda Función: 
    * Añadir checkbox de consentimiento para la RGPD
    * @parametro array $fields que tiene la lista de campos del comentario
    */
    
    function add_RGPD_consent_checkbox($fields) {
        $fields['consent'] = '<p class="comment-form-public">
                            <input type ="checkbox" name="consent" id="consent">
                            <label for="consent">Check this box to give us permission to publicly post your review
                            (Accept our <a href="'.get_page_link( get_page_by_title('Privacy policy')->ID ).'">privacy policy</a>)</label>
                            </p>';
        return $fields;
    }
    add_filter('comment_form_default_fields', 'add_RGPD_consent_checkbox');
    
    /**
    * Reordenar los campos del formulario de comentarios
    * @parametro array $fields que tiene la lista de campos del comentario
    */
    
    function reorder_comment_form_fields($fields) {
        if(!is_user_logged_in()) {
        $aux_fields = array();
        array_push($aux_fields, $fields['author']);
        array_push($aux_fields, $fields['email']);
        array_push($aux_fields, $fields['comment']);
        array_push($aux_fields, $fields['cookies']);
        array_push($aux_fields, $fields['consent']);
        
        return $aux_fields;
        } else {
        return $fields;
        }
    }
    add_action('comment_form_fields', 'reorder_comment_form_fields');
    
    /* ---------------------------------------------------------------------- */
    
    /**
    * Guardar la privacidad aprobada en la BBDD
    * @parametro array $fields que tiene la lista de campos del comentario
    */
    
    function save_comment_consent($comment_id) {
        $consent_value = $_POST['consent'];
        if($consent_value == true) {
            $valor = "Checkbox is checked. I Accept the privacy policy";
        } else {
            $valor = "Checkbox not checked. I do not accept the privacy policy";
        }
        add_comment_meta($comment_id, 'consent', $valor, true);
    }
    add_action('comment_post', 'save_comment_consent');
    
    /* ---------------------------------------------------------------------- */
    
    /**
    * Crear una nueva columna "Consent" en el area de los comentarios del backend
    * @parametro array $columns Comment Area Columns
    */
    
    function create_consent_column($columns) {
        $columns = array(
            'cb' => '<input type="checkbox"/>', // Hay q investigar el id y el name que le pone wordpress a este checkbox
            'author' => 'Author',
            'comment' => 'Comment',
            'consent' => 'Consent Privacy Policy',
            'response' => 'In response to',
            'date' => 'Submitted on',
        );
        return $columns;
    }
    add_filter('manage_edit-comments_columns', 'create_consent_column');
    
    /* ---------------------------------------------------------------------- */
    
    /**
    * Mostrar el consent en la nueva columna Consent en el area de comentarios del backend
    * @parametro int $columns comment area columns number
    * * @parametro int $comment_id Comment id
    */
    
    function show_comment_consent($column, $comment_id) {
        if($column == 'consent') {
            echo get_comment_meta($comment_id, 'consent', true);
        }
    }
    add_action('manage_comments_custom_column', 'show_comment_consent', 1, 10);  // el 10 es la prioridad y el 2 es el numero de argumentos que permite la funcion.
    
    /* FIN COMENTARIOS */
    
    /**************************************************************************/
    
    /* LISTA DE TAGS */

    function list_tags($limit) {
        $args = array(
            'orderby' => 'count', // Ordena segun numero de posts q tenga cada tag
            'order' => 'DESC', // Ordena de mayor a menor
            'number' => $limit, // Devuelve numero de tags establecido en $limit
        );
        $tags = get_tags($args);
        foreach($tags as $tag) {
            echo "<li><a href='".get_tag_link($tag->term_id)."' rel='tag'>".$tag->name." </a><span class='gray'>(".$tag->count.")</span></li>";
        }
    }
    
/* CAMBIAR LOGIN DE WORDPRESS */
function custom_login_logo() {
    ?>  
    <style type="text/css">
        #login h1 a, .login h1 a {
            background-image: url("<?php echo get_stylesheet_directory_uri(); ?>/img/logo/logo.png");
        }
    </style>
    <?php
}
add_action('login_enqueue_scripts', 'custom_login_logo');

function my_logo_url() {
    return home_url();
}
add_filter('logo_headerurl', 'my_logo_url');


/* FUNCION PARA COMPROBAR QUE TIPO DE POST ES EL POST ACTUAL */
function is_post_type($type){
    global $wp_query;
    if($type == get_post_type($wp_query->post->ID)) 
        return true;
    return false;
}

/*
function add_custom_post_type_to_query($query) {
    if(is_archive()) {
        $query->set('post_type', array('post', 'lostguides-reviews'));
    }

}
*/