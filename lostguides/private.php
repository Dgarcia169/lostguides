<?php
    /*
    Template Name: Private Zone
    */
    get_header();
    get_template_part('nav');

    // Comprobar si esta logueado
    if(is_user_logged_in()) {
        // tenemos un usuario logueado
        $user = wp_get_current_user(); // Objeto usuario
        $rol = get_author_role($user->ID); // Rol del usuario
        $user_name = $user->display_name;
        $saludo = 'Hello <span class="orange">'.$user_name.'!</span> You are logged in as <span class="orange">'.$rol.'</span>';
    } else {
        // NO HAY USUARIO LOGUEADO
        $saludo = 'You must log in ...';
    }
?>
<section class="blog-area blog-bg pt-120 pb-120" data-background="<?php echo bloginfo('template_directory');?>/img/bg/blog_bg.jpg">
    <h2 class="center">LOSTGUIDES</h2><br />
    <h4 class="center mb-80"><?php echo $saludo ?></h4>


    <?php
        if(is_user_logged_in()) {
            // Tenemos que mostrar un link al admin area
            switch($rol) {
                case 'administrator':
                    $info = "Custom info for the group <span class='orange'>Administrators</span>";
                    break;
                case 'author':
                    $info = "Custom info for the group <span class='orange'>Authors</span>";
                    break;
                case 'editor':
                    $info = "Custom info for the group <span class='orange'>Editors</span>";
                    break;
                case 'contributer':
                    $info = "Custom info for the group <span class='orange'>Contributers</span>";
                    break;
                case 'subscriber':
                    $info = "Custom info for the group <span class='orange'>Subscribers</span>";
                    break;
            }
            // tenemos que mostrar un link para que haga log out
            // Tenemos que mostrar informacion particular para ese usuario (en realidad, para todos los usuarios con ese rol)
?>
            
    <!-- game-boost-area -->
    <section class="game-boost-area">
        <div class="container">
            <div class="row">
                <div class="col-12 mb-50">
                    <div class="mb-15 center">
                        <h3><?php echo $rol ?> <span class="orange"><?php echo $user_name ?></span></h3><br>
                        <div class="privatelinks center">
                            <?php wp_register('', ''); ?>
                            <?php wp_loginout(home_url()) ?>
                        </div>
                    </div>
                </div>
                <div class="col-12 mb-20">
                    <p class="center"><?php echo $info ?></p>
                </div>
                
            </div>
        </div>
    </section>
    <!-- game-boost-area-end -->
<?php
        } else {
            // Mostrar el formulario de login
            $args = array(
                'echo' => true,
                'remember' => true,
                'form_id' => "loginform",
                'id_username' => "iduser",
                'id_password' => "idpassword",
                'id_remember' => "idremember",
                'id_submit' => "idsubmit",
                //'redirect' =>, $url, // Url absoluta donde redireccionar el form
                'label_username' => "User: ",
                'label_password' => "Password: ",
                'label_remember' => "Remember Me",
                'label_log_in' => "SUBMIT", // Value del boton submit
            );
            wp_login_form($args);
            ?>
            <div class="col-12">
                <div class="game-boost-item center2">
                    Or register here:
                    <?php wp_register(); ?>
                </div>
            </div><?php
            // Si queremos activamos el link del registro tambien
        }
    ?>


</section>

<?php 
    get_footer();
?>