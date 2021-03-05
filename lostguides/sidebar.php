<aside class="blog-sidebar">
    
    <!--
    <div class="widget mb-45">
        <form action="#" class="sidebar-search-form">
            <input type="text" placeholder="Search here">
            <button><i class="fas fa-search"></i></button>
        </form>
    </div>
    -->
    <!--
    <div class="widget mb-45">
        <div class="sidebar-about">
            <div class="sidebar-about-thumb">
                <img src="<?php // echo bloginfo('template_directory');?>/img/blog/sidebar_about.jpg" alt="">
            </div>
            <div class="sidebar-about-content">
                <h4>jeemex deo</h4>
                <p>Math by usig free-online game is Edaol math games provide fun focsed retition pract Download App Play.</p>
                <div class="sidebar-about-social">
                    <a href="#"><i class="fab fa-facebook-f"></i></a>
                    <a href="#"><i class="fab fa-twitter"></i></a>
                    <a href="#"><i class="fab fa-pinterest-p"></i></a>
                    <a href="#"><i class="fab fa-linkedin-in"></i></a>
                </div>
            </div>
        </div>
    </div>
    -->
    <!--
    <div class="widget widget-bg mb-45">
        <div class="sidebar-title mb-30">
            <h4>CATEGORIES</h4>
        </div>
        <div class="sidebar-cat">
            <ul>
                <li><a href="#">Skywarrior</a> <span>12</span></li>
                <li><a href="#">Pubg Mobile</a> <span>9</span></li>
                <li><a href="#">Dota 2</a> <span>3</span></li>
                <li><a href="#">hante warrior</a> <span>8</span></li>
            </ul>
        </div>
    </div>
    -->
    <!--
    <div class="widget widget-bg mb-45">
        <div class="sidebar-title mb-30">
            <h4>recent articles</h4>
        </div>
        <div class="rc-post">
            <ul>
                <li>
                    <div class="rc-post-thumb">
                        <a href="blog-details.html"><img src="<?php // echo bloginfo('template_directory');?>/img/blog/rc_post_thumb01.jpg" alt=""></a>
                    </div>
                    <div class="rc-post-content">
                        <h5><a href="blog-details.html">using free online math adventure</a></h5>
                        <span><i class="far fa-clock"></i> March 04, 2020</span>
                    </div>
                </li>
                <li>
                    <div class="rc-post-thumb">
                        <a href="blog-details.html"><img src="<?php // echo bloginfo('template_directory');?>/img/blog/rc_post_thumb02.jpg" alt=""></a>
                    </div>
                    <div class="rc-post-content">
                        <h5><a href="blog-details.html">Skyward Sword is an adventure</a></h5>
                        <span><i class="far fa-clock"></i> March 04, 2020</span>
                    </div>
                </li>
                <li>
                    <div class="rc-post-thumb">
                        <a href="blog-details.html"><img src="<?php // echo bloginfo('template_directory');?>/img/blog/rc_post_thumb03.jpg" alt=""></a>
                    </div>
                    <div class="rc-post-content">
                        <h5><a href="blog-details.html">Hill Climb Racing 2 is a free to racing</a></h5>
                        <span><i class="far fa-clock"></i> March 04, 2020</span>
                    </div>
                </li>
            </ul>
        </div>
    </div>
    -->
    <!--
    <div class="widget widget-bg mb-45">
        <div class="sidebar-title mb-30">
            <h4>trending games</h4>
        </div>
        <div class="sidebar-games">
            <ul>
                <li>
                    <div class="sidebar-game-item">
                        <a href="#">
                            <img src="<?php // echo bloginfo('template_directory');?>/img/blog/sidebar_game01.jpg" alt="" class="thumb">
                            <img src="<?php // echo bloginfo('template_directory');?>/img/blog/sidebar_game_shape.png" alt="" class="game-shape">
                        </a>
                    </div>
                </li>
                <li>
                    <div class="sidebar-game-item">
                        <a href="#">
                            <img src="<?php // echo bloginfo('template_directory');?>/img/blog/sidebar_game02.jpg" alt="" class="thumb">
                            <img src="<?php // echo bloginfo('template_directory');?>/img/blog/sidebar_game_shape.png" alt="" class="game-shape">
                        </a>
                    </div>
                </li>
                <li>
                    <div class="sidebar-game-item">
                        <a href="#">
                            <img src="<?php // echo bloginfo('template_directory');?>/img/blog/sidebar_game03.jpg" alt="" class="thumb">
                            <img src="<?php // echo bloginfo('template_directory');?>/img/blog/sidebar_game_shape.png" alt="" class="game-shape">
                        </a>
                    </div>
                </li>
                <li>
                    <div class="sidebar-game-item">
                        <a href="#">
                            <img src="<?php // echo bloginfo('template_directory');?>/img/blog/sidebar_game04.jpg" alt="" class="thumb">
                            <img src="<?php // echo bloginfo('template_directory');?>/img/blog/sidebar_game_shape.png" alt="" class="game-shape">
                        </a>
                    </div>
                </li>
            </ul>
        </div>
    </div>
    -->
    <!--
    <div class="widget widget-bg mb-45">
        <div class="sidebar-title mb-30">
            <h4>post tag</h4>
        </div>
        <div class="sidebar-tag">
            <ul>
                <li><a href="#">doto 2</a></li>
                <li><a href="#">Skyward</a></li>
                <li><a href="#">Pubg</a></li>
                <li><a href="#">The Legend</a></li>
                <li><a href="#">killer hunt</a></li>
                <li><a href="#">who</a></li>
            </ul>
        </div>
    </div>
    -->
    
<!-- BUSQUEDA -->
<?php get_search_form(); ?>

<!-- NUBE DE TAGS -->

<div class="widget widget-bg mb-45">
    <div class="sidebar-title mb-30">
        <h4>Tag Cloud</h4>
    </div>
    <div class="sidebar-tag">
        <!-- Habilitamos una zona de widgets -->
        
        <?php if (!function_exists('dynamic_sidebar') || !dynamic_sidebar('Sidebar Widgets')) : ?>
        <div class="warning">Sorry, no widgets installed for this theme. Go to the admin area and drag your widgets into the sidebar :D</div>
        <?php endif ?>
    </div>
</div>

<!-- LISTADO DE CATEGORIAS -->

<div class="widget widget-bg mb-45">
    <div class="sidebar-title mb-30">
        <h4>Categories</h4>
    </div>
    <div class="sidebar-cat">
        <ul>
            <?php
                $args = array(
                    'show_count' => 1,
                    'title_li' => "",
                    'echo' => 0,
                    );
                $categories = wp_list_categories($args);
                $categories = str_replace('</a> (', '</a> <span>', $categories);
                $categories = str_replace(')', '</span>', $categories);
                echo $categories;
            ?>
        </ul>
    </div>
</div>

<!-- LISTADO DE LOS ULTIMOS 5 (3) POSTS -->

<div class="widget widget-bg mb-45">
    <div class="sidebar-title mb-30">
        <h4>Last Entries</h4>
    </div>
    <div class="rc-post archives">
        <ul>
            <?php
                $args = array(
                    'type' => 'postbypost', // indica que la funcion devuelva solo posts
                    'limit' => 3,
                    );
                    $archives = wp_get_archives($args);
                    $archives = str_replace("<li class='cat-item'>", "<li><div class='rc_post-content'><h5>", $archives);
                    $archives = str_replace("</li>", "</h5></div></li>", $archives);
                    echo $archives;
            ?>
        </ul>
    </div>
</div>

<!-- LISTADO DE LOS POSTS ORDENADOS POR FECHA DE PUBLICACION -->

<div class="widget widget-bg mb-45">
    <div class="sidebar-title mb-30">
        <h4>Posts by date</h4>
    </div>
        <div class="sidebar-section">
            <ul class="bydate">
                <?php
                    global $wpdb;
                    $limit = 0;
                    $year_prev = null;
                    $months = $wpdb->get_results("SELECT DISTINCT MONTH( post_date ) AS month ,	YEAR( post_date ) AS year, COUNT( id ) as post_count FROM $wpdb->posts WHERE post_status = 'publish' and post_date <= now( ) and post_type = 'post' GROUP BY month , year ORDER BY post_date DESC");
                    foreach($months as $month) :
                        $year_current = $month->year;
                        if ($year_current != $year_prev){
                            if ($year_prev != null){?>
                            <?php } ?>
                        <li class="archive-year"><a href="<?php bloginfo('url') ?>/<?php echo $month->year; ?>/"><?php echo $month->year; ?></a></li>
                        <?php } ?>
                        <ul class="shop-sidebar pl25 alingleft ml-20"><li><a href="<?php bloginfo('url') ?>/<?php echo $month->year; ?>/<?php echo date("m", mktime(0, 0, 0, $month->month, 1, $month->year)) ?>"><span class="archive-month"><?php echo date_i18n("F", mktime(0, 0, 0, $month->month, 1, $month->year)) ?></span><span class="datenumber"> (<?php echo $month->post_count; ?>) </span></a></li></ul>
                        <?php $year_prev = $year_current;
                        if(++$limit >= 18) { break; }
                    endforeach; 
                ?>
            </ul>
        </div>
</div>

<!-- LISTADO DE AUTORES -->

<div class="widget widget-bg mb-45">
    <div class="sidebar-title mb-30">
        <h4>Authors</h4>
    </div>
    <div class="rc-post">
        <?php
        $args = array(
            'hide_empty' => false, // Hace que se listen tambien los autores que no tienen posts publicados
            'optioncount' => true, // Visualiza el numero de post publicados por cada autor
            );
        wp_list_authors($args); // Lista los autores del blog, tambien puede recibir un array de argumentos. ?>
    </div>
</div>

<!-- LISTADO DE PÁGINAS DEL SITIO -->

<div class="widget widget-bg mb-45">
    <div class="sidebar-title mb-30">
        <h4>Pages</h4>
    </div>
    <div class="sidebar-cat">
        <ul>
            <?php wp_list_pages("title_li="); ?>
        </ul>
    </div>
</div>


</aside>
