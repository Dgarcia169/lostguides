<?php
    get_header();
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

            <!-- section-wrap -->
            <div class="section-bg-wrap">
                <div class="section-bg-img"></div>

                <!-- slider-area -->
                <section class="slider-area">
                    <div class="container">
                        <div class="slider-active">
                            <div class="single-slider slider-bg-1">
                                <div class="row justify-content-end">
                                    <div class="col-xl-6 col-lg-7">
                                        <div class="slider-content">
                                            <h6 data-animation="fadeInUp" data-delay=".3s">READ AND <span>game</span></h6>
                                            <h2 data-animation="fadeInUp" data-delay=".6s">LOSTGUIDES</h2>
                                            <p data-animation="fadeInUp" data-delay=".9s">Largest and most trusted top-up news and reviews of games.</p>
                                            <a href="blog" class="btn" data-animation="fadeInUp" data-delay="1.2s">See the blog</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- slider-area-end -->

                <!-- game-boost-area -->
                <section class="game-boost-area">
                    <div class="container">
                        <div class="row">
                            <div class="col-12">
                                <div class="side-title mb-15">
                                    <h3><i class="fas fa-play"></i>OTHER GAMES <span>BOOST</span></h3>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="game-boost-wrap">
                                    <div class="game-boost-item">
                                        <div class="icon">
                                            <i class="flaticon-video-game"></i>
                                        </div>
                                        <div class="content">
                                            <h4>PlayStation</h4>
                                            <span>PS4 AND PS5</span>
                                        </div>
                                    </div>
                                    <div class="game-boost-item">
                                        <div class="icon">
                                            <i class="flaticon-nintendo-switch"></i>
                                        </div>
                                        <div class="content">
                                            <h4>nintendo</h4>
                                            <span>nintendo switch</span>
                                        </div>
                                    </div>
                                    <div class="game-boost-item">
                                        <div class="icon">
                                            <i class="flaticon-xbox"></i>
                                        </div>
                                        <div class="content">
                                            <h4>XBOX</h4>
                                            <span>ONE AND SERIES X</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- game-boost-area-end -->

                <!-- popular-game -->
                <section class="popular-game-area pb-80">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="side-title mb-45">
                                    <h3><i class="fas fa-play"></i>POPULAR TEAMS <span>IN DIFFERENT GAMES</span></h3>
                                </div>
                            </div>
                        </div>
                        <div class="row justify-content-center">
                            <div class="col-xl-3 col-lg-4 col-md-6 col-sm-8">
                                <div class="popular-game-item mb-40">
                                    <div class="popular-game-thumb">
                                        <a href=""><img src="<?php echo bloginfo('template_directory');?>/img/games/popular_games01.jpg" alt=""></a>
                                    </div>
                                    <div class="popular-game-content">
                                        <h5><i class="fas fa-star"></i>Eagle <span>Gaming</span></h5>
                                    </div>
                                    <div class="popular-game-overlay">
                                        <h6 class="cursornormal"><span>destiny</span></h6>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-lg-4 col-md-6 col-sm-8">
                                <div class="popular-game-item mb-40">
                                    <div class="popular-game-thumb">
                                        <a href=""><img src="<?php echo bloginfo('template_directory');?>/img/games/popular_games02.jpg" alt=""></a>
                                    </div>
                                    <div class="popular-game-content">
                                        <h5><i class="fas fa-star"></i>klck <span>CS</span></h5>
                                    </div>
                                    <div class="popular-game-overlay">
                                        <h6 class="cursornormal"><span>Counter Strike</span></h6>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-lg-4 col-md-6 col-sm-8">
                                <div class="popular-game-item mb-40">
                                    <div class="popular-game-thumb">
                                        <a href=""><img src="<?php echo bloginfo('template_directory');?>/img/games/popular_games03.jpg" alt=""></a>
                                    </div>
                                    <div class="popular-game-content">
                                        <h5><i class="fas fa-star"></i>Battle <span>gaming</span></h5>
                                    </div>
                                    <div class="popular-game-overlay">
                                        <h6 class="cursornormal"><span>pubg</span></h6>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-lg-4 col-md-6 col-sm-8">
                                <div class="popular-game-item mb-40">
                                    <div class="popular-game-thumb">
                                        <a href=""><img src="<?php echo bloginfo('template_directory');?>/img/games/popular_games04.jpg" alt=""></a>
                                    </div>
                                    <div class="popular-game-content">
                                        <h5><i class="fas fa-star"></i>Rize <span>Gaming</span></h5>
                                    </div>
                                    <div class="popular-game-overlay">
                                        <h6 class="cursornormal"><span>destiny II</span></h6>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-lg-4 col-md-6 col-sm-8">
                                <div class="popular-game-item mb-40">
                                    <div class="popular-game-thumb">
                                        <a href=""><img src="<?php echo bloginfo('template_directory');?>/img/games/popular_games05.jpg" alt=""></a>
                                    </div>
                                    <div class="popular-game-content">
                                        <h5><i class="fas fa-star"></i>Tricked<span>Sports</span></h5>
                                    </div>
                                    <div class="popular-game-overlay">
                                        <h6 class="cursornormal">Call of <span>Duty</span></h6>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-lg-4 col-md-6 col-sm-8">
                                <div class="popular-game-item mb-40">
                                    <div class="popular-game-thumb">
                                        <a href=""><img src="<?php echo bloginfo('template_directory');?>/img/games/popular_games06.jpg" alt=""></a>
                                    </div>
                                    <div class="popular-game-content">
                                        <h5><i class="fas fa-star"></i>Virtus <span>Pro</span></h5>
                                    </div>
                                    <div class="popular-game-overlay">
                                        <h6 class="cursornormal"><span>Valorant</span></h6>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-lg-4 col-md-6 col-sm-8">
                                <div class="popular-game-item mb-40">
                                    <div class="popular-game-thumb">
                                        <a href=""><img src="<?php echo bloginfo('template_directory');?>/img/games/popular_games07.jpg" alt=""></a>
                                    </div>
                                    <div class="popular-game-content">
                                        <h5><i class="fas fa-star"></i>Super<span>massive</span></h5>
                                    </div>
                                    <div class="popular-game-overlay">
                                        <h6 class="cursornormal">Clash of <span>clans</span></h6>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-lg-4 col-md-6 col-sm-8">
                                <div class="popular-game-item mb-40">
                                    <div class="popular-game-thumb">
                                        <a href=""><img src="<?php echo bloginfo('template_directory');?>/img/games/popular_games08.jpg" alt=""></a>
                                    </div>
                                    <div class="popular-game-content">
                                        <h5><i class="fas fa-star"></i>ROX <span>gaming</span></h5>
                                    </div>
                                    <div class="popular-game-overlay">
                                        <h6 class="cursornormal">PUGB <span>Mobile</span></h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- popular-game-end -->

            </div>
            <!-- section-wrap-end -->

            <!-- game-features-area -->
            <section class="game-features-area game-features-bg pt-110 pb-90">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-xl-8 col-lg-9">
                            <div class="section-title text-center mb-65">
                                <h2 class="title">OUR <span>LATEST</span> BLOG POSTS</h2>
                                <p>Read an abstract of the last notices or click in one and read it completed.</p>
                            </div>
                        </div>
                    </div>
                    <div class="row justify-content-center">
                        
                        <!-- ································································· -->
                        <?php
                        $args = array(
                            'post_type' => 'post',
                            'posts_per_page' => '3',
                            );
                        
                        $the_query = new WP_Query($args);
                        if($the_query->have_posts()) : 
                            while($the_query->have_posts()) : 
                                $the_query->the_post();
                                    if(has_post_thumbnail()) {
                                        $postImg = get_the_post_thumbnail_url();
                                    } else {
                                        $postImg = get_template_directory_uri() . "/img/bg/default.jpg";
                                    }
                                    ?>
                        <div class="col-lg-4 col-md-6 col-sm-12">
                            <div class="game-features-item mb-30">
                                <div class="game-features-thumb">
                                    <img src="<?php echo $postImg; ?>" alt="">
                                </div>
                                <div class="game-features-content relative">
                                    <div class="game-features-tag">
                                        <a href="<?php the_permalink(); ?>">Games</a>
                                    </div>
                                    <div class="published">Published by <span class="postauthor"><?php the_author_posts_link(); ?></span> on <span class="posttime"><?php the_time('Y-m-j'); ?></span></div>
                                    <h6 class="mt-15"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h6>
                                    <div class="text-container"><?php the_excerpt(); ?></div>
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
            </section>
            <!-- game-features-area-end -->

            <!-- video-area -->
            <section class="video-area video-bg pt-120 pb-120">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-lg-6 order-0 order-lg-2">
                            <div class="video-img">
                                <img src="<?php echo bloginfo('template_directory');?>/img/images/video_img.png" alt="">
                                <a href="https://www.youtube.com/watch?v=K-5EdHZ0hBs" class="popup-video"><i class="flaticon-play-button"></i></a>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="video-content">
                                <div class="section-title mb-40">
                                    <span class="sub-title">online gaming</span>
                                    <h2 class="title">JUST THE <span>BEST</span> game videos and photos</h2>
                                    <p>The best images and videos filmed in game on the last released games.</p>
                                </div>
                                <a href="blog" class="btn">Read the blog</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="video-top-shape"><img src="<?php echo bloginfo('template_directory');?>/img/images/video_top_shape.png" alt=""></div>
            </section>
            <!-- video-area-end -->

            <!-- gallery-area -->
            <div class="gallery-area theme-bg">
                <div class="container-fluid p-0 fix">
                    <div class="row custom-gallery-row gallery-active">
                        <div class="col-lg-3 col-sm-6 grid-item">
                            <div class="gallery-img-item">
                                <a href="<?php echo bloginfo('template_directory');?>/img/gallery/gallery_img01.jpg" class="popup-image">
                                    <img src="<?php echo bloginfo('template_directory');?>/img/gallery/gallery_img01.jpg" class="gallery-img" alt="">
                                    <img src="<?php echo bloginfo('template_directory');?>/img/gallery/gallery_hover.png" class="gallery-hover-icon" alt="">
                                </a>
                            </div>
                        </div>
                        <div class="col-lg-3 col-sm-6 grid-item">
                            <div class="gallery-img-item">
                                <a href="<?php echo bloginfo('template_directory');?>/img/gallery/gallery_img02.jpg" class="popup-image">
                                    <img src="<?php echo bloginfo('template_directory');?>/img/gallery/gallery_img02.jpg" class="gallery-img" alt="">
                                    <img src="<?php echo bloginfo('template_directory');?>/img/gallery/gallery_hover.png" class="gallery-hover-icon" alt="">
                                </a>
                            </div>
                        </div>
                        <div class="col-lg-6 col-sm-6 grid-item">
                            <div class="gallery-img-item">
                                <a href="<?php echo bloginfo('template_directory');?>/img/gallery/gallery_img03.jpg" class="popup-image">
                                    <img src="<?php echo bloginfo('template_directory');?>/img/gallery/gallery_img03.jpg" class="gallery-img" alt="">
                                    <img src="<?php echo bloginfo('template_directory');?>/img/gallery/gallery_hover.png" class="gallery-hover-icon" alt="">
                                </a>
                            </div>
                        </div>
                        <div class="col-lg-6 col-sm-6 grid-item">
                            <div class="gallery-img-item">
                                <a href="<?php echo bloginfo('template_directory');?>/img/gallery/gallery_img04.jpg" class="popup-image">
                                    <img src="<?php echo bloginfo('template_directory');?>/img/gallery/gallery_img04.jpg" class="gallery-img" alt="">
                                    <img src="<?php echo bloginfo('template_directory');?>/img/gallery/gallery_hover.png" class="gallery-hover-icon" alt="">
                                </a>
                            </div>
                        </div>
                        <div class="col-lg-3 col-sm-6 grid-item">
                            <div class="gallery-img-item">
                                <a href="<?php echo bloginfo('template_directory');?>/img/gallery/gallery_img05.jpg" class="popup-image">
                                    <img src="<?php echo bloginfo('template_directory');?>/img/gallery/gallery_img05.jpg" class="gallery-img" alt="">
                                    <img src="<?php echo bloginfo('template_directory');?>/img/gallery/gallery_hover.png" class="gallery-hover-icon" alt="">
                                </a>
                            </div>
                        </div>
                        <div class="col-lg-3 col-sm-6 grid-item">
                            <div class="gallery-img-item">
                                <a href="<?php echo bloginfo('template_directory');?>/img/gallery/gallery_img06.jpg" class="popup-image">
                                    <img src="<?php echo bloginfo('template_directory');?>/img/gallery/gallery_img06.jpg" class="gallery-img" alt="">
                                    <img src="<?php echo bloginfo('template_directory');?>/img/gallery/gallery_hover.png" class="gallery-hover-icon" alt="">
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- gallery-area-end -->

        </main>
        <!-- main-area-end -->

<?php
    get_footer();
?>