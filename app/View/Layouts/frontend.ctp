<?php
  /**
   *
   * PHP 5
   *
   * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
   * Copyright 2005-2011, Cake Software Foundation, Inc. (http://cakefoundation.org)
   *
   * Licensed under The MIT License
   * Redistributions of files must retain the above copyright notice.
   *
   * @copyright     Copyright 2005-2011, Cake Software Foundation, Inc. (http://cakefoundation.org)
   * @link          http://cakephp.org CakePHP(tm) Project
   * @package       Cake.View.Layouts
   * @since         CakePHP(tm) v 0.10.0.1076
   * @license       MIT License (http://www.opensource.org/licenses/mit-license.php)
   */
  $cakeDescription = __d('cake_dev', 'Home');
  header("Cache-Control: no-cache,no-store,must-revalidate");
  header("Expires: -1");
?>
<!DOCTYPE html>
<html>
    <head>
        <!-- Mainly scripts -->
        <?php echo $this->Html->charset(); ?>
        <title>
            <?php echo $title_for_layout; ?>
        </title>
        <?php echo $this->Html->meta('icon'); ?>
        <title>Simple - Multipurpose Template</title>
        <meta name="description" content="Multipurpose and creative template">

        <!--[if IE]> <meta http-equiv="X-UA-Compatible" content="IE=edge"> <![endif]-->
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <!-- Google Fonts -->
        <link href="http://fonts.googleapis.com/css?family=Montserrat:400,700%7COpen+Sans:300,300i,400,400i,600,600i,700,800" rel="stylesheet">

        <link rel="stylesheet" href="/frontend/css/plugins.min.css">
        <link rel="stylesheet" href="/frontend/css/settings.css">
        <link rel="stylesheet" href="/frontend/css/layers.css">
        <link rel="stylesheet" href="/frontend/css/navigation.css">
        <link rel="stylesheet" href="/frontend/css/style.css">

        <!-- Favicon -->
        <link rel="icon" type="image/png" href="/frontend/images/icons/favicon.png">

        <!-- Modernizr -->
        <script src="/frontend/js/modernizr.js"></script>
        <?php
          if (isset($cssIncludes)) {
              foreach ($cssIncludes as $css) {
                  echo $this->Html->css($css) . "\n";
              }
          }
          if (isset($jsIncludes)) {
              foreach ($jsIncludes as $js) {
                  echo $this->Javascript->link($js) . "\n";
              }
          }
        ?>
    </head>
    <body>
        <div id="wrapper">
            <header class="header sticky-header">
                <div class="header-top">
                    <div class="container">
                        <div class="dropdown header-dropdown pull-right">
                            <a href="#" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Languages</a>

                            <ul class="dropdown-menu">
                                <li><a href="#">English</a></li>
                                <li><a href="#">Turkish</a></li>
                                <li><a href="#">Chinese</a></li>
                                <li><a href="#">French</a></li>
                                <li><a href="#">Spanish</a></li>
                            </ul>
                        </div><!-- End .header-dropdown -->

                        <div class="dropdown header-dropdown pull-right">
                            <a href="#" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Currency</a>

                            <ul class="dropdown-menu">
                                <li><a href="#">Dollar</a></li>
                                <li><a href="#">Euro</a></li>
                                <li><a href="#">Pound</a></li>
                                <li><a href="#">Yen</a></li>
                            </ul>
                        </div><!-- End .header-dropdown -->

                        <ul class="top-menu pull-right">
                            <li class="active"><a href="#">Home</a></li>
                            <li><a href="#">About</a></li>
                            <li><a href="#">Services</a></li>
                            <li><a href="#">Portfolio</a></li>
                            <li><a href="#">Blog</a></li>
                            <li><a href="#">Contact</a></li>
                        </ul>

                        <div class="top-text pull-left hidden-sm hidden-xs">
                            We create the best templates for you. Join us Now!
                        </div><!-- End .top-text -->

                        <div class="top-links pull-left">
                            <a href="/login">Login</a>
                            <a href="/register">Register</a>
                        </div><!-- End .top-links -->
                    </div><!-- End .container -->
                </div><!-- End .header-top -->

                <div class="header-inner">
                    <div class="container">
                        <a href="/" class="site-logo" title="Simple - Multipurpose Template">
                            <img src="/frontend/images/logo.png" alt="Simple Logo">
                            <span class="sr-only">Simple</span>
                        </a>

                        <div class="dropdown header-dropdown cart-dropdown">
                            <a href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span>
                                    <i class="fa fa-shopping-bag"></i>
                                    <span class="dcart-total-count">2</span>
                                </span>
                            </a>

                            <div class="dropdown-menu">
                                <p>2 item(s) in your cart - <span>$279.00</span></p>
                                <div class="dcart-products">
                                    <div class="product">
                                        <figure>
                                            <a href="#">
                                                <img src="/frontend/images/products/thumbs/product1.jpg" alt="Product">
                                            </a>
                                        </figure>
                                        <div class="product-meta">
                                            <h5 class="product-title">
                                                <a href="#">Oluptate cumque quo archi deleni.</a>
                                            </h5>
                                            <div class="product-price-container">
                                                <span class="product-price">$180.00</span>
                                            </div><!-- End .product-price-container -->
                                            <span class="product-quantity">x 1</span>
                                        </div><!-- End .product-meta -->
                                        <a href="#" class="delete-btn" title="Delete Product"><i class="fa fa-trash"></i></a>
                                    </div><!-- End .product -->
                                    <div class="product">
                                        <figure>
                                            <a href="#">
                                                <img src="/frontend/images/products/thumbs/product2.jpg" alt="Product">
                                            </a>
                                        </figure>
                                        <div class="product-meta">
                                            <h5 class="product-title">
                                                <a href="#">Lorem ipsum dolor sit amet consect.</a>
                                            </h5>
                                            <div class="product-price-container">
                                                <span class="old-price">$140.00</span>
                                                <span class="product-price">$99.00</span>
                                            </div><!-- End .product-price-container -->
                                            <span class="product-quantity">x 2</span>
                                        </div><!-- End .product-meta -->
                                        <a href="#" class="delete-btn" title="Delete Product"><i class="fa fa-trash"></i></a>
                                    </div><!-- End .product -->
                                </div><!-- End .dcart-products -->

                                <div class="dcart-action-container">
                                    <div class="dcart-action-info">
                                        <p>Shipping: <span>$12.00</span></p>
                                        <p>Tax: <span>Free</span></p>
                                        <p>Total: <span>$390.00</span></p>
                                    </div><!-- End .dcart-action-info -->

                                    <div class="dcart-action">
                                        <a href="#" class="btn btn-gray btn-sm">View Cart</a>
                                        <a href="#" class="btn btn-custom btn-sm">Checkout</a>
                                    </div><!-- End .dcart-action -->
                                </div><!-- End .dcart-action-container -->
                            </div><!-- End .dropdown-menu -->
                        </div><!-- End .cartdropdown -->

                        <div class="header-info-boxes">
                            <div class="header-info-box">
                                <i class="fa fa-truck"></i>
                                <div class="info-box-title">Free Delivery</div>
                                <p>No charge for shipping</p>
                            </div><!-- End .header-info-box -->

                            <div class="header-info-box">
                                <i class="fa fa-support"></i>
                                <div class="info-box-title">24/7 Free Support</div>
                                <p>We provide live chat support</p>
                            </div><!-- End .header-info-box -->

                            <div class="header-info-box">
                                <i class="fa fa-phone"></i>
                                <div class="info-box-title">Call US</div>
                                <p>+90 0277 22 33</p>
                            </div><!-- End .header-info-box -->
                        </div><!-- End header-info-boxes -->
                    </div><!-- End .container -->
                </div><!-- End .header-inner -->

                <div class="header-bottom">
                    <div class="container">
                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#main-nav-container" aria-expanded="false">
                            <span class="toggle-text">Menu</span>
                            <span class="toggle-wrapper">
                                <span class="sr-only">Toggle navigation</span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </span>
                        </button>
                        <div class="collapse navbar-collapse" id="main-nav-container">
                            <ul class="nav navbar-nav">
                                <li class="active">
                                    <a href="/" aria-expanded="false">Home</a>
                                </li>
                                <li>
                                    <a href="/profile" aria-expanded="false">Profile</a>
                                </li>
                                <li>
                                    <a href="/blog" aria-expanded="false">Blog</a>
                                </li>
                                <li>
                                    <a href="/contact" aria-expanded="false">Contact Us</a>
                                </li>
                            </ul>
                        </div><!-- /.navbar-collapse -->
                    </div><!-- End .container -->
                </div><!-- End .header-bottom -->
            </header><!-- End .header -->
            <?php echo $content_for_layout; ?>
            <footer class="footer">
                <div class="container">
                    <div class="row">
                        <div class="col-md-5">
                            <div class="widget about-widget">
                                <img src="/frontend/images/footer-logo.png" alt="Simple Footer Logo">
                                <hr>
                                <p>We create themes and templates with bootstrap framework.<br> We are professional and creative team.</p>
                                <address>
                                    <label>Visit Us:</label>
                                    221B Baker St, Marylebone, London UK
                                </address>
                                <label>Call Us:</label> +1 (355) 800 08 80 - +1 (450) 900 09 90<br>
                                <label>Write Us:</label> <a href="mailto:#">madeup@gmail.com</a>
                                <div class="social-icons">
                                    <label>Find Us:</label>
                                    <a href="#" class="social-icon" title="Facebook"><i class="fa fa-facebook"></i></a>
                                    <a href="#" class="social-icon" title="Twitter"><i class="fa fa-twitter"></i></a>
                                    <a href="#" class="social-icon" title="Github"><i class="fa fa-github"></i></a>
                                    <a href="#" class="social-icon" title="Linkedin"><i class="fa fa-linkedin"></i></a>
                                    <a href="#" class="social-icon" title="Tumblr"><i class="fa fa-tumblr"></i></a>
                                    <a href="#" class="social-icon" title="Flickr"><i class="fa fa-flickr"></i></a>
                                </div><!-- End .social-icons -->
                            </div><!-- End .widget -->
                        </div><!-- End .col-md-5 -->
                        <div class="col-md-6 col-md-offset-1">
                            <div class="row">
                                <div class="col-sm-4">
                                    <div class="widget">
                                        <h4 class="widget-title">Pages</h4>
                                        <ul class="fa-ul">
                                            <li><a href="#"><i class="fa-li fa fa-chain"></i>About us</a></li>
                                            <li><a href="#"><i class="fa-li fa fa-chain"></i>Services</a></li>
                                            <li><a href="#"><i class="fa-li fa fa-chain"></i>Features</a></li>
                                            <li><a href="#"><i class="fa-li fa fa-chain"></i>Portfolio</a></li>
                                            <li><a href="#"><i class="fa-li fa fa-chain"></i>Blog</a></li>
                                            <li><a href="#"><i class="fa-li fa fa-chain"></i>Support</a></li>
                                            <li><a href="#"><i class="fa-li fa fa-chain"></i>Contact Us</a></li>
                                        </ul>
                                    </div><!-- End .widget -->
                                </div><!-- End .col-sm-4 -->
                                <div class="col-sm-4">
                                    <div class="widget">
                                        <h4 class="widget-title">Pages</h4>
                                        <ul class="fa-ul">
                                            <li><a href="#"><i class="fa-li fa fa-chain"></i>About us</a></li>
                                            <li><a href="#"><i class="fa-li fa fa-chain"></i>Services</a></li>
                                            <li><a href="#"><i class="fa-li fa fa-chain"></i>Features</a></li>
                                            <li><a href="#"><i class="fa-li fa fa-chain"></i>Portfolio</a></li>
                                            <li><a href="#"><i class="fa-li fa fa-chain"></i>Blog</a></li>
                                            <li><a href="#"><i class="fa-li fa fa-chain"></i>Support</a></li>
                                            <li><a href="#"><i class="fa-li fa fa-chain"></i>Contact Us</a></li>
                                        </ul>
                                    </div><!-- End .widget -->
                                </div><!-- End .col-sm-4 -->
                                <div class="col-sm-4">
                                    <div class="widget">
                                        <h4 class="widget-title">Pages</h4>
                                        <ul class="fa-ul">
                                            <li><a href="#"><i class="fa-li fa fa-chain"></i>About us</a></li>
                                            <li><a href="#"><i class="fa-li fa fa-chain"></i>Services</a></li>
                                            <li><a href="#"><i class="fa-li fa fa-chain"></i>Features</a></li>
                                            <li><a href="#"><i class="fa-li fa fa-chain"></i>Portfolio</a></li>
                                            <li><a href="#"><i class="fa-li fa fa-chain"></i>Blog</a></li>
                                            <li><a href="#"><i class="fa-li fa fa-chain"></i>Support</a></li>
                                            <li><a href="#"><i class="fa-li fa fa-chain"></i>Contact Us</a></li>
                                        </ul>
                                    </div><!-- End .widget -->
                                </div><!-- End .col-sm-4 -->
                            </div><!-- End .row -->
                        </div><!-- End .col-md-6 -->
                    </div><!-- End .row -->
                </div><!-- End .container -->

                <div class="footer-bottom">
                    <div class="container">
                        <div class="footer-right">
                            <ul class="footer-menu">
                                <li class="active"><a href="#">Home</a></li>
                                <li><a href="#">Services</a></li>
                                <li><a href="#">Features</a></li>
                                <li><a href="#">FaQS</a></li>
                                <li><a href="#">Support</a></li>
                                <li><a href="#">Contact Us</a></li>
                            </ul>
                        </div><!-- End .footer-right -->

                        <p class="copyright">Simple template - All rights reserved - 2016 &copy; Made by <a href="http://eonythemes.com" target="_blank" title="eonythemes">eonythemes</a>.</p>
                    </div><!-- End .container -->
                </div><!-- End .footer-bottom -->
            </footer><!-- End .footer -->
            <?php echo $this->element('sql_dump'); ?>
        </div><!-- End #wrapper -->

        <a id="scroll-top" href="#top" title="Scroll top"><i class="fa fa-angle-up"></i></a>

        <!-- End -->
        <script src="/frontend/js/plugins.min.js"></script>
        <script src="/frontend/js/main.js"></script>

        <!-- REVOLUTION JS FILES -->
        <script type="text/javascript" src="/frontend/js/jquery.themepunch.tools.min.js"></script>
        <script type="text/javascript" src="/frontend/js/jquery.themepunch.revolution.min.js"></script>

        <!-- SLIDER REVOLUTION 5.0 EXTENSIONS  
        (Load Extensions only on Local File Systems !  
        The following part can be removed on Server for On Demand Loading) -->  
        <script type="text/javascript" src="/frontend/js/extensions/revolution.extension.actions.min.js"></script>
        <script type="text/javascript" src="/frontend/js/extensions/revolution.extension.carousel.min.js"></script>
        <script type="text/javascript" src="/frontend/js/extensions/revolution.extension.kenburn.min.js"></script>
        <script type="text/javascript" src="/frontend/js/extensions/revolution.extension.layeranimation.min.js"></script>
        <script type="text/javascript" src="/frontend/js/extensions/revolution.extension.migration.min.js"></script>
        <script type="text/javascript" src="/frontend/js/extensions/revolution.extension.navigation.min.js"></script>
        <script type="text/javascript" src="/frontend/js/extensions/revolution.extension.parallax.min.js"></script>
        <script type="text/javascript" src="/frontend/js/extensions/revolution.extension.slideanims.min.js"></script>
        <script type="text/javascript" src="/frontend/js/extensions/revolution.extension.video.min.js"></script>

        <script type="text/javascript">
            jQuery(document).ready(function () {
                "use strict";

                var revapi;
                if ($("#rev_slider").revolution == undefined) {
                    revslider_showDoubleJqueryError("#rev_slider");
                } else {
                    revapi = $("#rev_slider").show().revolution({
                        sliderType: "standard",
                        jsFileLocation: "assets/js/",
                        sliderLayout: "auto",
                        dottedOverlay: "none",
                        delay: 15000,
                        navigation: {
                            mouseScrollNavigation: "off",
                            onHoverStop: "off",
                            touch: {
                                touchenabled: "on"
                            },
                            arrows: {
                                style: "custom",
                                enable: true,
                                hide_onmobile: false,
                                hide_under: 768,
                                hide_onleave: false,
                                tmp: '',
                                left: {
                                    h_align: "left",
                                    v_align: "center",
                                    h_offset: 0,
                                    v_offset: 0
                                },
                                right: {
                                    h_align: "right",
                                    v_align: "center",
                                    h_offset: 0,
                                    v_offset: 0
                                }
                            },
                            bullets: {
                                enable: true,
                                style: "hades",
                                hide_onmobile: false,
                                hide_onleave: false,
                                hide_under: 768,
                                direction: "horizontal",
                                h_align: "center",
                                v_align: "bottom",
                                h_offset: 0,
                                v_offset: 15,
                                space: 5,
                                tmp: '<span class="tp-bullet-image"></span>'
                            }
                        },
                        responsiveLevels: [1200, 992, 768, 480],
                        gridwidth: [1140, 970, 750, 480],
                        gridheight: [520, 440, 360, 300],
                        lazyType: "smart",
                        spinner: "spinner2",
                        parallax: {
                            type: "off",
                            origo: "slidercenter",
                            speed: 2000,
                            levels: [2, 3, 4, 5, 6, 7, 12, 16, 10, 50],
                            disable_onmobile: "on"
                        },
                        debugMode: false
                    });
                }
            });
        </script>
    </body>
</html>