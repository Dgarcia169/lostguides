        <!-- footer-area -->
        <footer>
            <div class="footer-top-area">
                <div class="container">
                    <div class="footer-menu-wrap pb-70">
                        <div class="row">
                            <div class="col-12">
                                <div class="footer-menu">
                                    <nav>
                                        <ul>
                                            <li class="menu-item"><a href="<?php echo get_option('Home'); ?>">Home</a></li>
                                            <li class="menu-item"><a href="<?php echo get_page_link( get_page_by_title('Blog')->ID ); ?>">Blog</a></li>
                                            <li class="menu-item"><a href="<?php echo get_page_link( get_page_by_title('Reviews')->ID ); ?>">Reviews</a></li>
                                            <li class="footer-logo"><a href="index.html"><img src="<?php echo bloginfo('template_directory');?>/img/logo/logo.png" alt=""></a></li>
                                            <li class="menu-item"><a href="<?php echo get_page_link( get_page_by_title('Archives')->ID ); ?>">Archives</a></li>
                                            <li class="menu-item"><a href="<?php echo get_page_link( get_page_by_title('Private Zone')->ID ); ?>">Private</a></li>
                                            <li class="menu-item"><a href="<?php echo get_page_link( get_page_by_title('Contact')->ID ); ?>">Contact</a></li>
                                        </ul>
                                    </nav>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-4 col-md-6">
                            <div class="footer-widget mb-50">
                                <div class="fw-title mb-30">
                                    <h6>Address office</h6>
                                </div>
                                <div class="footer-contact-info">
                                    <ul>
                                        <li><p>Park Street 223b Nwe York, CA 70413
                                        <li><i class="fas fa-headphones"></i> <span>Phone : </span>+24 1245 654 235</li>
                                        <li><i class="fas fa-envelope-open"></i><span>Email : </span><a href="https://themebeyond.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="6f060109002f0a170a021f030a410c0002">[email&#160;protected]</a></li>
                                    </ul>
                                    <div class="footer-social">
                                        <a href="https://www.facebook.com/"><i class="fab fa-facebook-f"></i></a>
                                        <a href="https://twitter.com/"><i class="fab fa-twitter"></i></a>
                                        <a href="https://pinterest.com/"><i class="fab fa-pinterest-p"></i></a>
                                        <a href="https://es.linkedin.com/"><i class="fab fa-linkedin-in"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6">
                            <div class="footer-widget mb-50">
                                <div class="fw-title mb-30">
                                    <h6>trend games</h6>
                                </div>
                                <div class="fw-link">
                                    <ul>
                                        <li><a href="https://store.steampowered.com/app/892970/Valheim/">Valheim</a></li>
                                        <li><a href="https://store.steampowered.com/app/895870/Project_Wingman/">Proyect Wingman</a></li>
                                        <li><a href="https://store.steampowered.com/app/236850/Europa_Universalis_IV/">Europa Universalis IV</a></li>
                                        <li><a href="https://store.steampowered.com/app/896160/Evil_Bank_Manager/">Evil Bank Manager</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-12">
                            <div class="footer-widget mb-50">
                                <div class="fw-title mb-30">
                                    <h6>Need Help?</h6>
                                </div>
                                <div class="fw-link">
                                    <ul>
                                        <li><a href="<?php echo get_page_link( get_page_by_title('Privacy policy')->ID ); ?>">Privacy Policy</a></li>
                                        <li><a href="#"></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="copyright-wrap">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-6 col-md-6">
                            <div class="copyright-text">
                                <p>Copyright © 2020 <a href="<?php echo get_page_link( get_page_by_title('Privacy policy')->ID ); ?>">Lostguides</a> All Rights Reserved.</p>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 d-none d-md-block">
                            <div class="payment-method-img text-right">
                                <img src="<?php echo bloginfo('template_directory');?>/img/images/card_img.png" alt="img">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <!-- footer-area-end -->

		<!-- JS here -->
        <!--
        <script data-cfasync="false" src="../../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script><script src="js/vendor/jquery-3.5.0.min.js"></script>
        <script src="js/popper.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/isotope.pkgd.min.js"></script>
        <script src="js/imagesloaded.pkgd.min.js"></script>
        <script src="js/jquery.magnific-popup.min.js"></script>
        <script src="js/owl.carousel.min.js"></script>
        <script src="js/jquery.odometer.min.js"></script>
        <script src="js/jquery.appear.js"></script>
        <script src="js/slick.min.js"></script>
        <script src="js/ajax-form.js"></script>
        <script src="js/wow.min.js"></script>
        <script src="js/aos.js"></script>
        <script src="js/plugins.js"></script>
        <script src="js/main.js"></script>
        -->
    </body>
    <?php
        wp_footer();
    ?>
</html>