<?php
get_header();

$num_columns = array(
    "1" => "12",
    "2" => "6",
    "3" => "4",
    );
    
    $catsid = wp_get_post_categories($post->ID);
    $mypostid = $post->ID;
?>

<?php get_template_part('nav'); ?>

<!-- main-area -->
<main>

    <!-- breadcrumb-area --> <!-- "<?php // echo bloginfo('template_directory');?>/img/bg/breadcrumb_bg.jpg" -->
    <section class="breadcrumb-area breadcrumb-bg" data-background="
        <?php
        
        // ACTUALIZAMOS EL NUMERO DE VISITAS
        
        $num_visits = get_num_visits($mypostid, 1);
        
        the_post();
        
        if(has_post_thumbnail()) {
            $postImg = get_the_post_thumbnail_url();
        } else {
            $postImg = get_template_directory_uri() . "/img/bg/default.jpg";
        }
        echo $postImg;
        ?>">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="breadcrumb-content text-center">
                        <!-- Titulo del post -->
                        <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Review Details</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- breadcrumb-area-end -->

    

    <!-- blog-details-area -->
    <section class="blog-details-area blog-bg pt-120 pb-120" data-background="<?php echo bloginfo('template_directory');?>/img/bg/blog_bg.jpg">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="blog-post-item">
                        <div class="blog-post-content">

                            <div class="review-info">
                                <div class="row center">
                                    <div class="col-md-3">
                                        <p class="ptitle"><b>Release</b></p>
                                        <p><?php echo get_post_meta( $post->ID, 'release', true ); ?></p>
                                    </div>
                                    <div class="col-md-3">
                                        <p class="ptitle"><b>PEGI</b></p>
                                        <?php  // get_post_meta( $post->ID, 'pegi', true ); ?>
                                        <?php
                                        if(get_post_meta($post->ID, 'pegi', true)) {
                                            if(get_post_meta($post->ID, 'pegi', true) == 3) {
                                                echo "<img class='pegiimg' src='".plugins_url()."/reviews/assets/imgs/pegi3.png'>";
                                            } else if(get_post_meta($post->ID, 'pegi', true) == 7) {
                                                echo "<img class='pegiimg' src='".plugins_url()."/reviews/assets/imgs/pegi7.png'>";
                                            } else if(get_post_meta($post->ID, 'pegi', true) == 12) {
                                                echo "<img class='pegiimg' src='".plugins_url()."/reviews/assets/imgs/pegi12.png'>";
                                            } else if(get_post_meta($post->ID, 'pegi', true) == 16) {
                                                echo "<img class='pegiimg' src='".plugins_url()."/reviews/assets/imgs/pegi16.png'>";
                                            }else if(get_post_meta($post->ID, 'pegi', true) == 18) {
                                                echo "<img class='pegiimg' src='".plugins_url()."/reviews/assets/imgs/pegi18.png'>";
                                            }
                                        }
                                        ?>
                                    </div>
                                    <div class="col-md-3">
                                        <p class="ptitle"><b>Categories</b></p>
                                        <p>
                                            <?php
                                                $categories = array();
                                                if(get_post_meta( $post->ID, 'pc', true )) array_push($categories, "PC");
                                                if(get_post_meta( $post->ID, 'ps4', true )) array_push($categories, "PS4");
                                                if(get_post_meta( $post->ID, 'ps5', true )) array_push($categories, "PS5");
                                                if(get_post_meta( $post->ID, 'xboxone', true )) array_push($categories, "Xbox One");
                                                if(get_post_meta( $post->ID, 'xboxseriesx', true )) array_push($categories, "Xbox Series X");
                                                if(get_post_meta( $post->ID, 'switch', true )) array_push($categories, "Nintendo Switch");
                                                $cats = implode(", ", $categories);
                                                echo $cats;
                                            ?>
                                        </p>
                                    </div>
                                    <div class="col-md-3">
                                        <p class="ptitle"><b>Genres</b></p>
                                        <p>
                                            <?php
                                                $genres = array();
                                                if(get_post_meta( $post->ID, 'my_action', true )) array_push($genres, "Action");
                                                if(get_post_meta( $post->ID, 'my_adventure', true )) array_push($genres, "Adventure");
                                                if(get_post_meta( $post->ID, 'my_rpg', true )) array_push($genres, "RPG");
                                                if(get_post_meta( $post->ID, 'my_strategy', true )) array_push($genres, "Strategy");
                                                if(get_post_meta( $post->ID, 'my_platforms', true )) array_push($genres, "Platforms");
                                                if(get_post_meta( $post->ID, 'my_puzzle', true )) array_push($genres, "Puzzle");
                                                $genresimplode = implode(", ", $genres);
                                                echo $genresimplode;
                                            ?>
                                        </p>
                                    </div>

                                    <div class="col-md-3">
                                        <p class="ptitle"><b>Developer</b></p>
                                        <p><?php echo get_post_meta( $post->ID, 'developer', true ); ?></p>
                                    </div>
                                    <div class="col-md-3">
                                        <p class="ptitle"><b>Editor</b></p>
                                        <p><?php echo get_post_meta( $post->ID, 'editor', true ); ?></p>
                                    </div>
                                    <div class="col-md-3">
                                        <p class="ptitle"><b>Text</b></p>
                                        <p>
                                            <?php
                                                $text = array();
                                                if(get_post_meta( $post->ID, 'my_textspanish', true )) array_push($text, "Spanish");
                                                if(get_post_meta( $post->ID, 'my_textenglish', true )) array_push($text, "English");
                                                $textimplode = implode(", ", $text);
                                                echo $textimplode;
                                            ?>
                                        </p>
                                    </div>
                                    <div class="col-md-3">
                                        <p class="ptitle"><b>Voices</b></p>
                                        <p>
                                            <?php
                                                $voices = array();
                                                if(get_post_meta( $post->ID, 'my_voicesspanish', true )) array_push($voices, "Spanish");
                                                if(get_post_meta( $post->ID, 'my_voicesenglish', true )) array_push($voices, "English");
                                                $voicesimplode = implode(", ", $voices);
                                                echo $voicesimplode;
                                            ?>
                                        </p>
                                    </div>
                                </div>
                            </div>

                            <div class="game-features-tag">
                            </div>
                            <p>
                            <?php
                            // get_template_part('templates/content', get_post_format());
                                the_content();
                            ?>
                            </p>
                            <div class="blog-details-bottom">
                            <div class="blog-post-meta">

                            

                                <ul>
                                    <li><i class="far fa-eye"></i><?php echo $num_visits; ?></li>
                                    <li><i class="far fa-user"></i> By <?php the_author_posts_link();  ?></li>
                                    <li><i class="far fa-clock"></i><?php the_time('F d, Y'); ?></li>
                                    <li><i class="fas fa-gamepad"></i><a href="#"><?php the_category(', '); ?></a></li>
                                    
                                    <!-- AÑADIR LAS CATEGORIAS AQUI !!!!!!!!!!!!!!!!!!!!!!!!-->
                                </ul>
                            </div>
                                    <div class="sidebar-cat">
                                        <ul>
                                            <li class="tagsTitle">tags:</li>
                                            <?php
                                                $mytags = wp_get_post_tags($post->ID);
                                                foreach($mytags as $tag) {
                                                    echo '<a class="tags" href="' . get_tag_link($tag->term_id) . '">' . $tag->name . '</a>';
                                                }
                                                
                                            ?>
                                            
                                            
                                        </ul>
                                    </div>
                                    <div class="blog-post-share" style="margin-left: auto; margin-bottom: auto;">
                                        <ul>
                                            <li><a href="https://facebook.com"><i class="fab fa-facebook-f"></i></a></li>
                                            <li><a href="https://twitter.com"><i class="fab fa-twitter"></i></a></li>
                                            <li><a href="https://pinterest.com"><i class="fab fa-pinterest-p"></i></a></li>
                                            <li><a href="https://linkedin.com"><i class="fab fa-linkedin-in"></i></a></li>
                                        </ul>
                                    </div>
                            </div>
                            
                            
        
                                            
                                            <div class="row justify-content-center mt-100">
                                        
                                        <!-- ································································· -->
                                        <?php
                                        $args = array(
                                            'posts_per_page' => '2',
                                            'category__in' => $catsid,
                                            'post__not_in' => array($mypostid),
                                            // Excluir los formatos de posts especificados de la consulta para que no salgan como post destacado
                                            'tax_query' => array( // accedemos a la consulta de taxonomia
                                                array(
                                                    'taxonomy' => 'post_format', // Especificamos que concepto vamos a buscar
                                                    'field' => 'slug', // Basandonos en este campo
                                                    'terms' => array( // Buscaremos los siguientes términos
                                                        'post-format-gallery',
                                                        'post-format-link',
                                                        'post-format-video',
                                                        'post-format-audio',
                                                        'post-format-quote',
                                                        'post-format-image',
                                                    ),
                                                    'operator' => 'NOT IN' // Para excluirlos
                                                ),
                                            )
                                            );
                                        
                                        $the_query = new WP_Query($args);
                                        if($the_query->have_posts()) : 
                                            
                                            $cols = $num_columns[$the_query->post_count];
                                            
                                            while($the_query->have_posts()) : 
                                                $the_query->the_post();
                                                    if(has_post_thumbnail()) {
                                                        $postImg = get_the_post_thumbnail_url();
                                                    } else {
                                                        $postImg = get_template_directory_uri() . "/img/bg/default.jpg";
                                                    }
                                        ?>
                                        <div class="col-md-<?php echo $cols; ?>">
                                            <div class="game-features-item mb-30">
                                                <div class="game-features-thumb">
                                                    <img src="<?php echo $postImg; ?>" alt="">
                                                </div>
                                                <div class="game-features-content relative">
                                                    <div class="game-features-tag">
                                                        <a class="no-hover" href="<?php the_permalink(); ?>">Games</a>
                                                    </div>
                                                    <div class="published">Published by <span class="postauthor"><?php the_author_posts_link(); ?></span> on <span class="posttime"><?php the_time('Y-m-j'); ?></span></div>
                                                    <h6 class="mt-15"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h6>
                                                    <div class="btn-container">
                                                        <a href="<?php the_permalink(); ?>" class="btn btn-smaller">Read more</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <?php endwhile; ?>
                                                <?php else: ?>
                                                    <div class="blog-post-item mb-50">
                                                        <article class="post">
                                                            <h3>We haven´t published anything yet but keep in touch.</h3>
                                                        </article>
                                                    </div>
                                                <?php
                                                endif;
                                                wp_reset_postdata(); // wp_reset_query();
                                                ?>
                                    </div>
                        </div>
                    </div>
                </div>
                
                <div class="col-lg-4 col-md-7 col-sm-8">
                    <?php get_sidebar(); ?>
                </div>
            </div>
        </div>
    </section>
    <!-- blog-details-area-end -->

</main>
<!-- main-area-end -->

<?php get_footer(); ?>