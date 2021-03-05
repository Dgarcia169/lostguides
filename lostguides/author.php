<?php
    get_header();
    $curauth = (get_query_var('author_name')) ? get_user_by('slug', get_query_var('author_name')) : get_userdata(get_query_var('author'));
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
                                <h2 class="orange"><?php echo get_the_author(); ?></h2>
                                <h3><?php echo get_author_role($curauth->ID); ?></h3>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- breadcrumb-area-end -->
            
            <section class="blog-details-area blog-bg pt-120 pb-120" data-background="<?php echo bloginfo('template_directory');?>/img/bg/blog_bg.jpg">
                <div class="container">
                    <div class="row mb-50 mt-100">
                        <div class="col-md-12 center">
                            <h2>SKILLS</h2><br>
                        </div>
                    </div>
                    
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-2 col-md-6 col-sm-6 mb-80">
                                <h6 class="center"><?php echo get_the_author_meta('skill1'); ?></h6><br>
                                <div class="ldBar label-center mcenter" data-value="<?php echo get_the_author_meta('skill1V'); ?>" data-preset="circle"></div>      
                            </div>
                            
                            <div class="col-lg-3 col-md-6 col-sm-6 mb-80">
                                <h6 class="center"><?php echo get_the_author_meta('skill2'); ?></h6><br>
                                <div class="ldBar label-center mcenter" data-value="<?php echo get_the_author_meta('skill2V'); ?>" data-preset="circle"></div>      
                            </div>
                            
                            <div class="col-lg-2 col-md-6 col-sm-6 mb-50">
                                <h6 class="center">Profile img</h6><br>
                                <img src="<?php echo bloginfo('template_directory') . get_the_author_meta('profilepic'); ?>"><br><br>
                            </div>

                            <div class="col-lg-3 col-md-6 col-sm-6 mb-80">
                                <h6 class="center"><?php echo get_the_author_meta('skill3'); ?></h6><br>
                                <div class="ldBar label-center mcenter" data-value="<?php echo get_the_author_meta('skill3V'); ?>" data-preset="circle"></div>      
                            </div>
                            
                            <div class="col-lg-2 col-md-6 col-sm-6 mb-80">
                                <h6 class="center"><?php echo get_the_author_meta('skill4'); ?></h6><br>
                                <div class="ldBar label-center mcenter" data-value="<?php echo get_the_author_meta('skill4V'); ?>" data-preset="circle"></div>      
                            </div>
                        </div>
                    </div>

                    
                    <div class="row center mb-100">
                        <div class="col-lg-4 col-md-4 col-sm-4 mb-50">
                            <h4><a href="<?php echo get_the_author_meta('facebook'); ?>">Facebook</a></h4>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-4 mb-50">
                            <h4><a href="<?php echo get_the_author_meta('instagram'); ?>">Instagram</a></h4>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-4 mb-50">
                            <h4><a href="<?php echo get_the_author_meta('twitter'); ?>">Twitter</a></h4>
                        </div>
                    </div>
                    
                </div>
            </section>
<?php
    get_footer();
?>