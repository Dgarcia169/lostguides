<?php
    get_header();
    
    if(have_posts()) {
        $total_results = $wp_the_query->found_posts;
        
        if($total_results > 1) {
            $results = $total_results." POSTS";
        } else {
            $results = $total_results." POST";
        }
        
        // Como tengo posts debo saber que es lo que estoy listando
        if(is_category()) {
            $word = single_cat_title("", false) . " category ";
        } elseif (is_tag()) {
            $word = single_tag_title("", false) . " tag ";
        } elseif (is_day()) {
            $word = get_the_date();
        } elseif (is_month()) {
            $word = get_the_date('F Y');
        } elseif (is_year()) {
            $word = 'year '.get_the_date('Y');
        }
    } else {
        $results = "NO POSTS";
    }
    
    
?>

		<!-- Scroll-top -->
        <button class="scroll-top scroll-to-target" data-target="html">
            <i class="fas fa-angle-up"></i>
        </button>

        
        <!-- Scroll-top-end-->

        <!-- AQUI IRIA EL NAV -->
        <?php get_template_part('nav'); ?>
        
        <!-- main-area -->
        <main>

            <!-- breadcrumb-area -->
            <section class="breadcrumb-area breadcrumb-bg" data-background="<?php echo bloginfo('template_directory');?>/img/bg/breadcrumb_bg.jpg">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <div class="breadcrumb-content text-center">
                                <h2>Archive for: <span><?php echo $word; ?></span></h2>
                                <h2><?php echo "total results: <span>".$results."</span>"; ?></h2>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- breadcrumb-area-end -->
            
            <!-- blog-area -->
            <section class="blog-area blog-bg pt-120 pb-120" data-background="<?php echo bloginfo('template_directory');?>/img/bg/blog_bg.jpg">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-8 col-md-8">
                            
                            
                            
                            <!-- LOOP DE LOS POSTS -->
                            <?php
                                if(have_posts()): ?>
                                    <table class="table">
                                        <thead>
                                            <tr class="table-tr">
                                                <th>#</th>
                                                <th>PUBLISHED ON</th>
                                                <th>POST TITLE</th>
                                                <th>AUTHOR</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php while(have_posts()):
                                                the_post();
                                                
                                                // Hay que visualizar los datos que devuelve cada tupla de forma tabulada
                                                
                                                get_template_part('content', 'list');
                                                
                                            endwhile;
                                            ?>
                                        </tbody>
                                    </table>
                                    <?php 
                                    
                                    else:
                                    ?>
                                    <div class="blog-post-item mb-50">
                                        <article class="post">
                                            We haven´t published anything yet but keep in touch.
                                        </article>
                                    </div>
                                <?php
                                endif;
                                ?>
                                    
                                    <div class="pagination-wrap mt-30">
                                        <ul class="pagination-ul">
                                        <?php
                                        the_posts_pagination(array( // Si no usamos paged en nuestro loop, solo funcionara con el loop por defecto de WP
                                            'mid_size' => 2,
                                            'prev_text' => '<i class="fas fa-angle-double-left"></i>',
                                            'next_text' => '<i class="fas fa-angle-double-right"></i>',
                                            'screen_reader_text' => 'Pages:',
                                        ));
                                        ?>
                                        </ul>
                                    </div>
                            
                            
                        </div>
                        
                        <!-- AQUI VA EL SIDEBAR -->
                        <div class="col-lg-4 col-md-4">
                            <?php get_sidebar(); ?>
                        </div>
                        
                    </div>
                </div>
            </section>
            <!-- blog-area-end -->
<?php
    get_footer();
?>