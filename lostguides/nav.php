<?php
    
?>

<!-- header-area -->
        <header class="header-bg">
            <div class="header-top-wrap">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-6 width50">
                            <div class="header-top-social">
                                <ul>
                                    <li><a href="https://twitter.com/"><i class="fab fa-twitter"></i></a></li>
                                    <li><a href="https://www.facebook.com/"><i class="fab fa-facebook-f"></i></a></li>
                                    <li><a href="https://vimeo.com/"><i class="fab fa-vimeo-v"></i></a></li>
                                    <li><a href="https://www.youtube.com/"><i class="fab fa-youtube"></i></a></li>
                                </ul>
                            </div>
                        </div>
                        <?php if(is_user_logged_in()) {
                            ?>

                            <div class="col-sm-6 col-xs-6 width50">
                            <div class="header-top-login">
                                <ul>
                                    <li><a href="private"><i class="fa fa-user"></i>Profile</a></li>
                                </ul>
                            </div>
                        </div>

                            <?php
                        } else { ?>
                        <div class="col-sm-6 col-xs-6 width50">
                            <div class="header-top-login">
                                <ul>
                                    <li><a href="private"><i class="far fa-edit"></i>Register</a></li>
                                    <li class="or">or</li>
                                    <li><a href="private"><i class="far fa-edit"></i>sign in</a></li>
                                </ul>
                            </div>
                        </div>

                        <?php } ?>
                    </div>
                </div>
            </div>
            <div id="sticky-header" class="main-header menu-area">
                <div class="container width100in768">
                    <div class="row">
                        <div class="col-12">
                            <div class="menu-wrap">
                                <nav class="menu-nav show">
                                    <div class="logo displaynone"><a href="home"><img src="<?php echo bloginfo('template_directory');?>/img/logo/logo.png" alt=""></a></div>
                                    <div class="navbar-wrap main-menu d-lg-flex">
                                        <ul class="navigation marginrightauto">
                                            <li class="<?php if(is_front_page()) {echo "active";} ?>"><a href="<?php echo get_option('Home'); ?>">Home</a></li>
                                            
                                            <li class="<?php if(is_home()) {echo "active";} ?>"><a href="<?php echo get_page_link( get_page_by_title('Blog')->ID ); ?>">Blog</a></li>
                                            
                                            <li class="<?php if(basename( __FILE__ ) == "reviews"){echo "active";} ?>">
                                                <a href="<?php echo get_page_link( get_page_by_title('Reviews')->ID ); ?>">Reviews</a>
                                            </li>
                                            
                                            <li class="<?php if(basename( __FILE__ ) == "Archives"){echo "active";} ?>">
                                                <a href="<?php echo get_page_link( get_page_by_title('Archives')->ID ); ?>">Archives</a>
                                            </li>

                                            <li class=""><a href="<?php echo get_page_link( get_page_by_title('Private Zone')->ID ); ?>">Private</a>
                                            </li>
                                            <!--
                                            <li class="dropdown"><a href="#">Blog</a>
                                                <ul class="submenu">
                                                    <li><a href="blog.html">Our Blog</a></li>
                                                    <li><a href="blog-details.html">Blog Details</a></li>
                                                </ul>
                                            </li>
                                            -->
                                            <li><a href="<?php echo get_page_link( get_page_by_title('Contact')->ID ); ?>">contact</a></li>
                                        </ul>
                                    </div>
                                    <!-- 
                                    <div class="header-action d-none d-md-block">
                                        <ul>
                                            <li class="header-shop-cart"><a href="#"><i class="fas fa-shopping-basket"></i><span>0</span></a>
                                                <ul class="minicart">
                                                    <li class="d-flex align-items-start">
                                                        <div class="cart-img">
                                                            <a href="#">
                                                                <img src="<?php // echo bloginfo('template_directory');?>/img/product/cart_p01.jpg" alt="">
                                                            </a>
                                                        </div>
                                                        <div class="cart-content">
                                                            <h4>
                                                                <a href="#">Xbox One Contr -oller</a>
                                                            </h4>
                                                            <div class="cart-price">
                                                                <span class="new">$229.9</span>
                                                                <span>
                                                                    <del>$229.9</del>
                                                                </span>
                                                            </div>
                                                        </div>
                                                        <div class="del-icon">
                                                            <a href="#">
                                                                <i class="far fa-trash-alt"></i>
                                                            </a>
                                                        </div>
                                                    </li>
                                                    <li class="d-flex align-items-start">
                                                        <div class="cart-img">
                                                            <a href="#">
                                                                <img src="<?php // echo bloginfo('template_directory');?>/img/product/cart_p02.jpg" alt="">
                                                            </a>
                                                        </div>
                                                        <div class="cart-content">
                                                            <h4>
                                                                <a href="#">rtx 2030 graphic card</a>
                                                            </h4>
                                                            <div class="cart-price">
                                                                <span class="new">$499.9</span>
                                                                <span>
                                                                    <del>$599.9</del>
                                                                </span>
                                                            </div>
                                                        </div>
                                                        <div class="del-icon">
                                                            <a href="#">
                                                                <i class="far fa-trash-alt"></i>
                                                            </a>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="total-price">
                                                            <span class="f-left">Total:</span>
                                                            <span class="f-right">$239.9</span>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="checkout-link">
                                                            <a href="cart.html">Shopping Cart</a>
                                                            <a class="red-color" href="checkout.html">Checkout</a>
                                                        </div>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li class="header-search"><a href="#" data-toggle="modal" data-target="#search-modal"><i class="fas fa-search"></i></a></li>
                                        </ul>
                                    </div>
                                    -->
                                </nav>
                            </div>
                            <!-- Modal Search -->
                            <!-- 
                            <div class="modal fade" id="search-modal" tabindex="-1" role="dialog" aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <form>
                                            <input type="text" placeholder="Search here...">
                                            <button><i class="fa fa-search"></i></button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            -->
                            <!-- Modal Search-End -->
                            <!-- Mobile Menu  -->
                            <!--
                            <div class="mobile-menu">
                                <div class="menu-backdrop"></div>
                                <div class="close-btn"><i class="fas fa-times"></i></div>

                                <nav class="menu-box">
                                    <div class="nav-logo"><a href="index.html"><img src="<?php echo bloginfo('template_directory');?>/img/logo/logo.png" alt="" title=""></a>
                                    </div>
                                    <div class="menu-outer">
                                    </div>
                                    <div class="social-links">
                                        <ul class="clearfix">
                                            <li><a href="https://twitter.com/"><span class="fab fa-twitter"></span></a></li>
                                            <li><a href="https://www.facebook.com/"><span class="fab fa-facebook-square"></span></a></li>
                                            <li><a href="https://www.pinterest.es/"><span class="fab fa-pinterest-p"></span></a></li>
                                            <li><a href="https://www.instagram.com/"><span class="fab fa-instagram"></span></a></li>
                                            <li><a href="https://www.youtube.com/"><span class="fab fa-youtube"></span></a></li>
                                        </ul>
                                    </div>
                                </nav>
                            </div>
                            -->
                            <!-- End Mobile Menu -->
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <!-- header-area-end -->

        <!-- preloader -->
        <div class="preloader">
            <div class="loading">
                <div class="line"></div>
                <div class="line"></div>
                <div class="line"></div>
                <div class="line"></div>
                <div class="line"></div>
                <div class="line"></div>
                <div class="line"></div>
                <div class="line"></div>
            </div>
        </div>
        <!-- preloader-end -->