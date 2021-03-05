<?php
get_header();
?>

		<!-- Scroll-top -->
        <button class="scroll-top scroll-to-target" data-target="html">
            <i class="fas fa-angle-up"></i>
        </button>
        <!-- Scroll-top-end-->

        <?php
            get_template_part('nav');
        ?>


        <!-- main-area -->
        <main>

            <!-- breadcrumb-area -->
            <!-- <section class="breadcrumb-area breadcrumb-bg" data-background="<?php // echo bloginfo('template_directory');?>/img/bg/breadcrumb_bg.jpg">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <div class="breadcrumb-content text-center">
                                <h2>latest <span>News</span> update</h2>
                                <nav aria-label="breadcrumb">
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                                        <li class="breadcrumb-item active" aria-current="page">Blog</li>
                                    </ol>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </section> -->
            <!-- breadcrumb-area-end -->
            
            <!------------------------------------------------------------------ POST DESTACADO -->
            
            
            <!-- breadcrumb-area -->
            <?php
            
            $args = array(
                'posts_per_page' => 1,
                'post_type' => array('post'),
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
            
            $customquery = new WP_Query($args);
            if($customquery->have_posts()) :
                $customquery->the_post();
                $post_destacado_id = $post->ID;
                if(has_post_thumbnail()) {
                    $postImg = get_the_post_thumbnail_url();
                } else {
                    $postImg = get_template_directory_uri() . "/img/bg/default.jpg";
                }
            
            ?>
            <section class="breadcrumb-area breadcrumb-bg" data-background="<?php echo $postImg; ?>">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <div class="breadcrumb-content text-center">
                                <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                                <nav aria-label="breadcrumb">
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item active orange"><a href="<?php the_permalink(); ?>"><?php the_author_posts_link(); ?></a></li>
                                        <li class="breadcrumb-item active"><?php the_time('Y-m-j'); ?></li>
                                    </ol>
                                </nav>
                                <span class="orange"><?php the_excerpt(); ?></span>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- breadcrumb-area-end -->
            
            <?php
            else :
                echo "No posts published yet ...";
            endif;
            wp_reset_postdata();
            ?>

            <!-- blog-area -->
            <section class="blog-area blog-bg pt-120 pb-120" data-background="<?php echo bloginfo('template_directory');?>/img/bg/blog_bg.jpg">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-8 col-md-8">
                            
                            <!-- LOOP DE LOS POSTS -->
                            <?php
                            $paged = get_query_var('paged') > 1 ? get_query_var('paged') : 1; // el identificador del get_query_var es page si no es index (se usa page cuando es contenido estatico)
                            $args = array(
                                'paged' => $paged,
                                'post_per_page' => 4,
                                'orderby' => 'date',
                                // 'post_type' => array('post', 'lostguides-reviews'),
                                'post_type' => array('post'),
                                'post__not_in' => array($post_destacado_id),
                                );
                            $myquery = new WP_Query($args);
                                if($myquery->have_posts()):
                                    while($myquery->have_posts()):
                                        $myquery->the_post();
                                        
                                        if(has_post_thumbnail()) {
                                            $postImg = get_the_post_thumbnail_url();
                                        } else {
                                            $postImg = get_template_directory_uri() . "/img/bg/default.jpg";
                                        }
                                        
                                        ?>
                                        
                                        <div class="blog-post-item mb-50">
                                            <div class="blog-post-thumb">
                                                <a href=""><img alt="" src='<?php echo $postImg; ?>'></a>
                                            </div>
                                            <div class="blog-post-content">
                                                
                                                <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                                                <p><?php the_excerpt(); ?></p>
                                                <div class="blog-post-bottom">
                                                    <div class="blog-post-meta">
                                                        <ul>
                                                            <li><i class="far fa-user"></i> By <?php the_author_posts_link(); ?></a></li>
                                                            <li><i class="far fa-clock"></i><?php the_time('Y-m-j'); ?></li>
                                                            <li><i class="far fa-comments"></i>0 Comment</li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        
                                    <?php
                                    endwhile;
                                    else:
                                    ?>
                                    <div class="blog-post-item mb-50">
                                        <article class="post">
                                            We haven´t published anything yet but keep in touch.
                                        </article>
                                    </div>
                                <?php
                                endif;
                                wp_reset_postdata();
                                ?>
                                    
                            
                            
                            <div class="pagination-wrap mt-30">
                                    <ul class="pagination-ul indexpagination">
                                    <?php
                                    the_posts_pagination(array( // Si no usamos paged en nuestro loop, solo funcionara con el loop por defecto de WP
                                        'mid_size' => 2,
                                        'prev_text' => '<i class="fas fa-angle-double-left"></i>',
                                        'next_text' => '<i class="fas fa-angle-double-right"></i>',
                                        'screen_reader_text' => 'Pages:',
                                    ));
                                    ?>
                                    </ul>
                                    <!--
                                    <ul>
                                        <li><a href="#"><i class="fas fa-angle-double-left"></i></a></li>
                                        <li class="active"><a href="#">1</a></li>
                                        <li><a href="#">2</a></li>
                                        <li><a href="#">..</a></li>
                                        <li><a href="#">4</a></li>
                                        <li><a href="#"><i class="fas fa-angle-double-right"></i></a></li>
                                    </ul>
                                    -->
                            </div>
                        </div>
                        
                        <!-- AQUI VA EL SIDEBAR -->
                        <div class="col-lg-4 col-md-4 col-sm-8">
                            <?php get_sidebar(); ?>
                        </div>
                        
                    </div>
                </div>
            </section>
            <!-- blog-area-end -->

        </main>
        <!-- main-area-end -->
<?php
get_footer();
?>