<?php
    /*
    Template Name: Contact
    */
    get_header();
    get_template_part('nav');
?>



		<!-- Scroll-top -->
        <button class="scroll-top scroll-to-target" data-target="html">
            <i class="fas fa-angle-up"></i>
        </button>
        <!-- Scroll-top-end-->


        <!-- main-area -->
        <main>

            <!-- breadcrumb-area -->
            <section class="breadcrumb-area breadcrumb-bg" data-background="<?php echo bloginfo('template_directory');?>/img/bg/breadcrumb_bg.jpg">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <div class="breadcrumb-content text-center">
                                <h2>CONTACT <span>US</span></h2>
                                <nav aria-label="breadcrumb">
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                                        <li class="breadcrumb-item active" aria-current="page">contact</li>
                                    </ol>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- breadcrumb-area-end -->

            <!-- contact-area -->
            <section class="contact-area contact-bg pt-120 pb-120" data-background="<?php echo bloginfo('template_directory');?>/img/bg/contact_bg.jpg">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-4 col-md-6 col-sm-8">
                            <div class="contact-info-box mb-50">
                                <img class="bg-shape" src="<?php echo bloginfo('template_directory');?>/img/bg/contact_info_box_bg.png" alt="">
                                <img class="blur-shape" src="<?php echo bloginfo('template_directory');?>/img/images/features_blur_shape.png" alt="">
                                <div class="contact-info-content">
                                    <div class="icon"><i class="fas fa-map-marker-alt"></i></div>
                                    <div class="content">
                                        <h4>Our Location</h4>
                                        <p>Visit us 92 Parkland St. New York, NY 7013, USA</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-8">
                            <div class="contact-info-box mb-50">
                                <img class="bg-shape" src="<?php echo bloginfo('template_directory');?>/img/bg/contact_info_box_bg.png" alt="">
                                <img class="blur-shape" src="<?php echo bloginfo('template_directory');?>/img/images/features_blur_shape.png" alt="">
                                <div class="contact-info-content">
                                    <div class="icon"><i class="fas fa-envelope-open-text"></i></div>
                                    <div class="content">
                                        <h4>Mail us</h4>
                                        <p><a href="https://themebeyond.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="bef9dfd3db90dad1d0dffed3dfd7d290ddd1d3">[email&#160;protected]</a></p>
                                        <p><a href="https://themebeyond.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="d4bdbab2bb94b9b5bdb8fab7bbb9">[email&#160;protected]</a></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-8">
                            <div class="contact-info-box mb-50">
                                <img class="bg-shape" src="<?php echo bloginfo('template_directory');?>/img/bg/contact_info_box_bg.png" alt="">
                                <img class="blur-shape" src="<?php echo bloginfo('template_directory');?>/img/images/features_blur_shape.png" alt="">
                                <div class="contact-info-content">
                                    <div class="icon"><i class="fas fa-headphones"></i></div>
                                    <div class="content">
                                        <h4>Call us</h4>
                                        <p>+1 (990) 555 353 845</p>
                                        <p>+1 (990) 444 353 846</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="contact-form-wrap pt-60">
                        <div class="row justify-content-center">
                            <div class="col-xl-8 col-lg-9">
                                <div class="section-title text-center mb-65">
                                    <h2 class="title">get <span>in</span> touch with us</h2>
                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been
                                        the industry's standard dummy text ever since the when</p>
                                </div>
                            </div>
                        </div>
                        <form action="#" class="contact-form">
                            <div class="row">
                                <div class="col-md-6">
                                    <input type="text" placeholder="Your Name *">
                                </div>
                                <div class="col-md-6">
                                    <input type="email" placeholder="Your Email *">
                                </div>
                                <div class="col-md-6">
                                    <input type="text" placeholder="Subject *">
                                </div>
                                <div class="col-md-6">
                                    <input type="text" placeholder="Website">
                                </div>
                            </div>
                            <textarea name="message" id="message" placeholder="Massage..."></textarea>
                            <button class="btn">submit</button>
                        </form>
                    </div>
                </div>
            </section>
            <!-- contact-area-end -->

<?php
    get_footer();
?>