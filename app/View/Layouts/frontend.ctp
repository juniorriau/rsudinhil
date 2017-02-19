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
                            <a href="#">Login</a>
                            <a href="#">Register</a>
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
                                <li class="dropdown active">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Home<span class="angle"></span></a>
                                    <ul class="dropdown-menu" role="menu">
                                        <li class="dropdown">
                                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Business<span class="angle"></span></a>
                                            <ul class="dropdown-menu" role="menu">
                                                <li><a href="index.html">Business - Version 1</a></li>
                                                <li><a href="index2.html">Business - Version 2</a></li>
                                                <li><a href="index3.html">Business - Version 3</a></li>
                                                <li><a href="index4.html">Business - Version 4</a></li>
                                                <li><a href="index5.html">Business - Version 5</a></li>
                                                <li><a href="index6.html">Business - Version 6</a></li>
                                                <li><a href="index7.html">Business - Version 7</a></li>
                                                <li><a href="index8.html">Business - Version 8</a></li>
                                                <li><a href="index9.html">Business - Version 9</a></li>
                                                <li><a href="index10.html">Business - Version 10</a></li>
                                            </ul>
                                        </li>
                                        <li class="dropdown">
                                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><span>Agency<span class="tip new">New</span></span><span class="angle"></span></a>
                                            <ul class="dropdown-menu" role="menu">
                                                <li><a href="index-agency.html">Agency - Version 1</a></li>
                                                <li><a href="index-agency2.html">Agency - Version 2</a></li>
                                                <li><a href="index-agency3.html"><span>Agency - Version 3<span class="tip hot">Hot</span></span></a></li>
                                                <li><a href="index-agency4.html">Agency - Version 4</a></li>
                                                <li><a href="index-agency5.html">Agency - Version 5</a></li>
                                                <li><a href="index-agency6.html">Agency - Version 6</a></li>
                                            </ul>
                                        </li>
                                        <li class="dropdown">
                                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Creative<span class="angle"></span></a>
                                            <ul class="dropdown-menu" role="menu">
                                                <li><a href="index-creative.html">Creative - Version 1</a></li>
                                                <li><a href="index-creative2.html">Creative - Version 2</a></li>
                                                <li><a href="index-creative3.html">Creative - Version 3</a></li>
                                                <li><a href="index-creative4.html">Creative - Version 4</a></li>
                                            </ul>
                                        </li>
                                        <li class="dropdown">
                                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Shop<span class="angle"></span></a>
                                            <ul class="dropdown-menu" role="menu">
                                                <li><a href="index-shop.html">Shop - Version 1</a></li>
                                                <li><a href="index-shop2.html">Shop - Version 2</a></li>
                                                <li><a href="index-shop3.html">Shop - Version 3</a></li>
                                                <li><a href="index-shop4.html">Shop - Version 4</a></li>
                                            </ul>
                                        </li>
                                        <li class="dropdown">
                                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Restaurant &amp; Cafe<span class="angle"></span></a>
                                            <ul class="dropdown-menu" role="menu">
                                                <li><a href="index-restaurant.html">Restaurant - Version 1</a></li>
                                                <li><a href="index-restaurant2.html">Restaurant - Version 2</a></li>
                                                <li><a href="index-cafe.html">Cafe - Version 1</a></li>
                                                <li><a href="index-cafe2.html">Cafe - Version 2</a></li>
                                            </ul>
                                        </li>
                                        <li class="dropdown">
                                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Construction<span class="angle"></span></a>
                                            <ul class="dropdown-menu" role="menu">
                                                <li><a href="index-construction.html">Construction - Version 1</a></li>
                                                <li><a href="index-construction2.html">Construction - Version 2</a></li>
                                                <li><a href="index-construction3.html">Construction - Version 3</a></li>
                                            </ul>
                                        </li>
                                        <li class="dropdown">
                                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Health &amp; Medical<span class="angle"></span></a>
                                            <ul class="dropdown-menu" role="menu">
                                                <li><a href="index-medical.html">Medical - Version 1</a></li>
                                                <li><a href="index-medical2.html">Medical - Version 2</a></li>
                                                <li><a href="index-dentist.html">Dentist - Version 1</a></li>
                                                <li><a href="index-veterinary.html">Veterinary - Version 1</a></li>
                                            </ul>
                                        </li>
                                        <li class="dropdown">
                                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Events &amp; Charity<span class="angle"></span></a>
                                            <ul class="dropdown-menu" role="menu">
                                                <li><a href="index-event.html">Events - Version 1</a></li>
                                                <li><a href="index-event2.html">Events - Version 2</a></li>
                                                <li><a href="index-charity.html">Charity - Version 1</a></li>
                                                <li><a href="index-charity2.html">Charity - Version 2</a></li>
                                            </ul>
                                        </li>
                                        <li class="dropdown">
                                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Blog<span class="angle"></span></a>
                                            <ul class="dropdown-menu" role="menu">
                                                <li><a href="index-blog.html">Blog - Version 1</a></li>
                                                <li><a href="index-blog2.html">Blog - Version 2</a></li>
                                            </ul>
                                        </li>
                                        <li class="dropdown">
                                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Portfolio &amp; Photography<span class="angle"></span></a>
                                            <ul class="dropdown-menu" role="menu">
                                                <li><a href="index-portfolio.html">Portfolio - Version 1</a></li>
                                                <li><a href="index-portfolio2.html">Portfolio - Version 2</a></li>
                                                <li><a href="index-portfolio3.html">Portfolio - Version 3</a></li>
                                                <li><a href="index-portfolio4.html">Portfolio - Version 4</a></li>
                                                <li><a href="index-photography.html">Photography - Version 1</a></li>
                                                <li><a href="index-photography2.html">Photography - Version 2</a></li>
                                                <li><a href="index-photography3.html">Photography - Version 3</a></li>
                                            </ul>
                                        </li>
                                        <li class="dropdown">
                                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Onepages<span class="angle"></span></a>
                                            <ul class="dropdown-menu" role="menu">
                                                <li><a href="index-onepage.html">Onepage - Version 1</a></li>
                                                <li><a href="index-onepage2.html">Onepage - Version 2</a></li>
                                                <li><a href="index-onepage3.html">Onepage - Version 3</a></li>
                                                <li><a href="index-onepage4.html">Onepage - Version 4</a></li>
                                                <li><a href="index-landing.html">Landing - Version 1</a></li>
                                                <li><a href="index-landing2.html">Landing - Version 2</a></li>
                                                <li><a href="index-landing3.html">Landing - Version 3</a></li>
                                            </ul>
                                        </li>
                                        <li class="dropdown">
                                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">More<span class="angle"></span></a>
                                            <ul class="dropdown-menu" role="menu">
                                                <li><a href="index-hotel.html">Hotel - Version 1</a></li>
                                                <li><a href="index-lawyer.html">Lawyer - Version 2</a></li>
                                                <li><a href="index-architect.html">Architect - Version 3</a></li>
                                                <li><a href="index-gym.html">Gym - Version 1</a></li>
                                                <li><a href="index-gym2.html">Gym - Version 2</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="#"><span>New Versions<span class="tip soon">Soon</span></span></a></li>
                                    </ul>
                                </li>
                                <li class="dropdown">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Pages<span class="tip hot">Hot</span><span class="angle"></span></a>
                                    <ul class="dropdown-menu" role="menu">
                                        <li class="dropdown">
                                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">About Pages<span class="angle"></span></a>
                                            <ul class="dropdown-menu" role="menu">
                                                <li><a href="about.html">About Us</a></li>
                                                <li><a href="about2.html">About Us 2</a></li>
                                                <li><a href="about3.html">About Us 3</a></li>
                                                <li><a href="aboutme.html">About Me</a></li>
                                            </ul>
                                        </li>
                                        <li class="dropdown">
                                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Services<span class="angle"></span></a>
                                            <ul class="dropdown-menu" role="menu">
                                                <li><a href="services.html">Services</a></li>
                                                <li><a href="services2.html">Services 2</a></li>
                                                <li><a href="services3.html">Services 3</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="pricing.html">Pricing Page</a></li>
                                        <li class="dropdown">
                                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">FaQs Pages<span class="angle"></span></a>
                                            <ul class="dropdown-menu" role="menu">
                                                <li><a href="faqs.html">FaQs Page</a></li>
                                                <li><a href="faqs2.html">FaQs Page 2</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="404.html">404 Page</a></li>
                                        <li class="dropdown">
                                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Coming Soon<span class="angle"></span></a>
                                            <ul class="dropdown-menu" role="menu">
                                                <li><a href="coming-soon.html">Coming Soon</a></li>
                                                <li><a href="coming-soon2.html">Coming Soon 2</a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                </li>
                                <li class="dropdown megamenu-container">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Mega<span class="angle"></span></a>
                                    <div class="dropdown-menu megamenu" role="menu">
                                        <div class="container">
                                            <div class="row">
                                                <div class="col-sm-3">
                                                    <ul>
                                                        <li><a href="#">Tops &amp; Blouses</a></li>
                                                        <li><a href="#"><span>Athletic Apparel<span class="tip new">New</span></span></a></li>
                                                        <li><a href="#">Coats &amp; Jackets</a></li>
                                                        <li><a href="#">Dresses</a></li>
                                                        <li><a href="#">Hosiery &amp; Socks</a></li>
                                                        <li><a href="#">Intimates &amp; Sleep</a></li>
                                                        <li><a href="#">Jeans</a></li>
                                                        <li><a href="#">Jumpsuits &amp; Rompers</a></li>
                                                        <li><a href="#"><span>Leggings<span class="tip hot">Hot</span></span></a></li>
                                                        <li><a href="#">Skirts</a></li>
                                                        <li><a href="#">Suits &amp; Blazers</a></li>
                                                        <li><a href="#">Sweaters</a></li>
                                                    </ul>
                                                </div><!-- End .col-sm-3 -->
                                                <div class="col-sm-3">
                                                    <ul>
                                                        <li><a href="#">Sweats &amp; Hoodies</a></li>
                                                        <li><a href="#">Hosiery &amp; Socks</a></li>
                                                        <li><a href="#">Intimates &amp; Sleep</a></li>
                                                        <li><a href="#">T-Shirts</a></li>
                                                        <li><a href="#">Suits &amp; Blazers</a></li>
                                                        <li><a href="#"><span>Skirts<span class="tip">Popular</span></span></a></li>
                                                        <li><a href="#">Tops &amp; Blouses</a></li>
                                                        <li><a href="#">Jumpsuits &amp; Rompers</a></li>
                                                        <li><a href="#">Coats &amp; Jackets</a></li>
                                                        <li><a href="#">Dresses</a></li>
                                                        <li><a href="#">Hosiery &amp; Socks</a></li>
                                                        <li><a href="#">Intimates &amp; Sleep</a></li>
                                                    </ul>
                                                </div><!-- End .col-sm-3 -->
                                                <div class="col-sm-3">
                                                    <ul>
                                                        <li><a href="#">Jumpsuits &amp; Rompers</a></li>
                                                        <li><a href="#">Coats &amp; Jackets</a></li>
                                                        <li><a href="#">Suits &amp; Blazers</a></li>
                                                        <li><a href="#"><span>Tops &amp; Blouses<span class="tip hot">Hot</span></span></a></li>
                                                        <li><a href="#">Sweats &amp; Hoodies</a></li>
                                                        <li><a href="#">Hosiery &amp; Socks</a></li>
                                                        <li><a href="#">Intimates &amp; Sleep</a></li>
                                                        <li><a href="#">T-Shirts</a></li>
                                                        <li><a href="#">Athletic Apparel</a></li>
                                                        <li><a href="#">Sweaters</a></li>
                                                        <li><a href="#"><span>Dresses<span class="tip new">New</span></span></a></li>
                                                        <li><a href="#">Suits &amp; Blazers</a></li>
                                                    </ul>
                                                </div><!-- End .col-sm-3 -->
                                                <div class="col-sm-3">
                                                    <ul>
                                                        <li><a href="#">Hosiery &amp; Socks</a></li>
                                                        <li><a href="#">Intimates &amp; Sleep</a></li>
                                                        <li><a href="#">Jumpsuits &amp; Rompers</a></li>
                                                        <li><a href="#">Coats &amp; Jackets</a></li>
                                                        <li><a href="#">Dresses</a></li>
                                                        <li><a href="#"><span>T-Shirts<span class="tip hot">Hot</span></span></a></li>
                                                        <li><a href="#">Suits &amp; Blazers</a></li>
                                                    </ul>
                                                </div><!-- End .col-sm-3 -->
                                            </div><!-- End .row -->
                                        </div><!-- End .container -->
                                    </div><!-- End .megamenu -->
                                </li>
                                <li class="dropdown">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Shop<span class="tip new">New</span><span class="angle"></span></a>
                                    <ul class="dropdown-menu" role="menu">
                                        <li class="dropdown">
                                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Category<span class="angle"></span></a>
                                            <ul class="dropdown-menu" role="menu">
                                                <li class="dropdown">
                                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Right  Sidebar<span class="angle"></span></a>
                                                    <ul class="dropdown-menu" role="menu">
                                                        <li><a href="category.html">Four Columns</a></li>
                                                        <li><a href="category-3col.html">Three Columns</a></li>
                                                        <li><a href="category-5col.html">Five Columns</a></li>
                                                        <li><a href="category-2col.html">Two Columns</a></li>
                                                    </ul>
                                                </li>
                                                <li class="dropdown">
                                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Left  Sidebar<span class="angle"></span></a>
                                                    <ul class="dropdown-menu" role="menu">
                                                        <li><a href="category-left-sidebar.html">Four Columns</a></li>
                                                        <li><a href="category-left-sidebar-3col.html">Three Columns</a></li>
                                                        <li><a href="category-left-sidebar-5col.html">Five Columns</a></li>
                                                        <li><a href="category-left-sidebar-2col.html">Two Columns</a></li>
                                                    </ul>
                                                </li>
                                                <li class="dropdown">
                                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">No Sidebar<span class="angle"></span></a>
                                                    <ul class="dropdown-menu" role="menu">
                                                        <li><a href="category-fullwidth-5col.html">Five Columns</a></li>
                                                        <li><a href="category-fullwidth-4col.html">Four Columns</a></li>
                                                        <li><a href="category-fullwidth-3col.html">Three Columns</a></li>
                                                        <li><a href="category-fullwidth-2col.html">Two Columns</a></li>
                                                    </ul>
                                                </li>
                                            </ul>
                                        </li>
                                        <li class="dropdown">
                                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Category List<span class="angle"></span></a>
                                            <ul class="dropdown-menu" role="menu">
                                                <li><a href="category-list.html">Right Sidebar</a></li>
                                                <li><a href="category-list-left-sidebar.html">Left Sidebar</a></li>
                                                <li><a href="category-list-fullwidth.html">Fullwidth</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="product.html">Product Page</a></li>
                                        <li><a href="product2.html">Product Page 2</a></li>
                                        <li><a href="cart.html">Shopping Cart</a></li>
                                        <li><a href="checkout.html">Checkout Page</a></li>
                                        <li><a href="compare.html">Compare Products</a></li>
                                        <li><a href="login.html">Login Page</a></li>
                                        <li><a href="register.html">Register Page</a></li>
                                    </ul>
                                </li>
                                <li class="dropdown">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Portfolio<span class="angle"></span></a>
                                    <ul class="dropdown-menu" role="menu">
                                        <li class="dropdown">
                                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Boxed<span class="angle"></span></a>
                                            <ul class="dropdown-menu" role="menu">
                                                <li class="dropdown">
                                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Grid<span class="angle"></span></a>
                                                    <ul class="dropdown-menu" role="menu">
                                                        <li><a href="portfolio-grid-4col.html">Four Columns</a></li>
                                                        <li><a href="portfolio-grid-3col.html">Three Columns</a></li>
                                                        <li><a href="portfolio-grid-2col.html">Two Columns</a></li>
                                                        <li><a href="portfolio-grid-5col.html">Five Columns</a></li>
                                                        <li><a href="portfolio-grid-6col.html">Six Columns</a></li>
                                                    </ul>
                                                </li>
                                                <li class="dropdown">
                                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Masonry<span class="angle"></span></a>
                                                    <ul class="dropdown-menu" role="menu">
                                                        <li><a href="portfolio-masonry-4col.html">Four Columns</a></li>
                                                        <li><a href="portfolio-masonry-3col.html">Three Columns</a></li>
                                                        <li><a href="portfolio-masonry-2col.html">Two Columns</a></li>
                                                        <li><a href="portfolio-masonry-5col.html">Five Columns</a></li>
                                                        <li><a href="portfolio-masonry-6col.html">Six Columns</a></li>
                                                    </ul>
                                                </li>
                                            </ul>
                                        </li>
                                        <li class="dropdown">
                                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Fullwidth<span class="angle"></span></a>
                                            <ul class="dropdown-menu" role="menu">
                                                <li class="dropdown">
                                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Grid<span class="angle"></span></a>
                                                    <ul class="dropdown-menu" role="menu">
                                                        <li><a href="portfolio-grid-fullwidth-4col.html">Four Columns</a></li>
                                                        <li><a href="portfolio-grid-fullwidth-3col.html">Three Columns</a></li>
                                                        <li><a href="portfolio-grid-fullwidth-2col.html">Two Columns</a></li>
                                                        <li><a href="portfolio-grid-fullwidth-5col.html">Five Columns</a></li>
                                                        <li><a href="portfolio-grid-fullwidth-6col.html">Six Columns</a></li>
                                                    </ul>
                                                </li>
                                                <li class="dropdown">
                                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Masonry<span class="angle"></span></a>
                                                    <ul class="dropdown-menu" role="menu">
                                                        <li><a href="portfolio-masonry-fullwidth-4col.html">Four Columns</a></li>
                                                        <li><a href="portfolio-masonry-fullwidth-3col.html">Three Columns</a></li>
                                                        <li><a href="portfolio-masonry-fullwidth-2col.html">Two Columns</a></li>
                                                        <li><a href="portfolio-masonry-fullwidth-5col.html">Five Columns</a></li>
                                                        <li><a href="portfolio-masonry-fullwidth-6col.html">Six Columns</a></li>
                                                    </ul>
                                                </li>
                                            </ul>
                                        </li>
                                        <li class="dropdown">
                                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Boxed - Nogap<span class="angle"></span></a>
                                            <ul class="dropdown-menu" role="menu">
                                                <li class="dropdown">
                                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Grid<span class="angle"></span></a>
                                                    <ul class="dropdown-menu" role="menu">
                                                        <li><a href="portfolio-nogap-grid-4col.html">Four Columns</a></li>
                                                        <li><a href="portfolio-nogap-grid-3col.html">Three Columns</a></li>
                                                        <li><a href="portfolio-nogap-grid-2col.html">Two Columns</a></li>
                                                        <li><a href="portfolio-nogap-grid-5col.html">Five Columns</a></li>
                                                        <li><a href="portfolio-nogap-grid-6col.html">Six Columns</a></li>
                                                    </ul>
                                                </li>
                                                <li class="dropdown">
                                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Masonry<span class="angle"></span></a>
                                                    <ul class="dropdown-menu" role="menu">
                                                        <li><a href="portfolio-nogap-masonry-4col.html">Four Columns</a></li>
                                                        <li><a href="portfolio-nogap-masonry-3col.html">Three Columns</a></li>
                                                        <li><a href="portfolio-nogap-masonry-2col.html">Two Columns</a></li>
                                                        <li><a href="portfolio-nogap-masonry-5col.html">Five Columns</a></li>
                                                        <li><a href="portfolio-nogap-masonry-6col.html">Six Columns</a></li>
                                                    </ul>
                                                </li>
                                            </ul>
                                        </li>
                                        <li class="dropdown">
                                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Fullwidth - Nogap<span class="angle"></span></a>
                                            <ul class="dropdown-menu" role="menu">
                                                <li class="dropdown">
                                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Grid<span class="angle"></span></a>
                                                    <ul class="dropdown-menu" role="menu">
                                                        <li><a href="portfolio-nogap-grid-fullwidth-4col.html">Four Columns</a></li>
                                                        <li><a href="portfolio-nogap-grid-fullwidth-3col.html">Three Columns</a></li>
                                                        <li><a href="portfolio-nogap-grid-fullwidth-2col.html">Two Columns</a></li>
                                                        <li><a href="portfolio-nogap-grid-fullwidth-5col.html">Five Columns</a></li>
                                                        <li><a href="portfolio-nogap-grid-fullwidth-6col.html">Six Columns</a></li>
                                                    </ul>
                                                </li>
                                                <li class="dropdown">
                                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Masonry<span class="angle"></span></a>
                                                    <ul class="dropdown-menu" role="menu">
                                                        <li><a href="portfolio-nogap-masonry-fullwidth-4col.html">Four Columns</a></li>
                                                        <li><a href="portfolio-nogap-masonry-fullwidth-3col.html">Three Columns</a></li>
                                                        <li><a href="portfolio-nogap-masonry-fullwidth-2col.html">Two Columns</a></li>
                                                        <li><a href="portfolio-nogap-masonry-fullwidth-5col.html">Five Columns</a></li>
                                                        <li><a href="portfolio-nogap-masonry-fullwidth-6col.html">Six Columns</a></li>
                                                    </ul>
                                                </li>
                                            </ul>
                                        </li>
                                        <li class="dropdown">
                                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Portfolio Post<span class="angle"></span></a>
                                            <ul class="dropdown-menu" role="menu">
                                                <li><a href="single-portfolio.html">Image Post</a></li>
                                                <li><a href="single-portfolio-gallery.html">Gallery Post</a></li>
                                                <li><a href="single-portfolio-video.html">Video Post</a></li>
                                                <li><a href="single-portfolio-audio.html">Audio Post</a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                </li>
                                <li class="dropdown">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Blog<span class="angle"></span></a>
                                    <ul class="dropdown-menu" role="menu">
                                        <li class="dropdown">
                                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Classic<span class="angle"></span></a>
                                            <ul class="dropdown-menu" role="menu">
                                                <li><a href="blog.html">Right Sidebar</a></li>
                                                <li><a href="blog-left-sidebar.html">Left Sidebar</a></li>
                                                <li><a href="blog-both-sidebar.html">Both Sidebar</a></li>
                                                <li><a href="blog-fullwidth.html">Fullwidth</a></li>
                                            </ul>
                                        </li>
                                        <li class="dropdown">
                                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Masonry - Boxed<span class="angle"></span></a>
                                            <ul class="dropdown-menu" role="menu">
                                                <li><a href="blog-masonry-2col.html">Two Columns</a></li>
                                                <li><a href="blog-masonry-2col-left-sidebar.html">Two Col Left Sidebar</a></li>
                                                <li><a href="blog-masonry-2col-right-sidebar.html">Two Col Right Sidebar</a></li>
                                                <li><a href="blog-masonry-3col.html">Three Columns</a></li>
                                                <li><a href="blog-masonry-4col.html">Four Columns</a></li>
                                            </ul>
                                        </li>
                                        <li class="dropdown">
                                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Masonry - Fullwidth<span class="angle"></span></a>
                                            <ul class="dropdown-menu" role="menu">
                                                <li><a href="blog-masonry-fullwidth-3col.html">Three Columns</a></li>
                                                <li><a href="blog-masonry-fullwidth-4col.html">Four Columns</a></li>
                                                <li><a href="blog-masonry-fullwidth-5col.html">Five Columns</a></li>
                                                <li><a href="blog-masonry-fullwidth-6col.html">Six Columns</a></li>
                                            </ul>
                                        </li>
                                        <li class="dropdown">
                                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Blog List<span class="angle"></span></a>
                                            <ul class="dropdown-menu" role="menu">
                                                <li><a href="blog-list-left-sidebar.html">Left Sidebar</a></li>
                                                <li><a href="blog-list-right-sidebar.html">Right Sidebar</a></li>
                                                <li><a href="blog-list.html">Fullwidth</a></li>
                                            </ul>
                                        </li>
                                        <li class="dropdown">
                                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Blog Post<span class="angle"></span></a>
                                            <ul class="dropdown-menu" role="menu">
                                                <li><a href="single.html">Blog Post</a></li>
                                                <li><a href="single-left-sidebar.html">Left Sidebar</a></li>
                                                <li><a href="single-right-sidebar.html">Right Sidebar</a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                </li>
                                <li class="dropdown">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Elements<span class="angle"></span></a>
                                    <ul class="dropdown-menu" role="menu">
                                        <li class="dropdown">
                                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Elements - Headers<span class="angle"></span></a>
                                            <ul class="dropdown-menu" role="menu">
                                                <li><a href="header.html">Header Version 1</a></li>
                                                <li><a href="header2.html">Header Version 2</a></li>
                                                <li><a href="header3.html">Header Version 3</a></li>
                                                <li><a href="header4.html">Header Version 4</a></li>
                                                <li><a href="header5.html">Header Version 5</a></li>
                                                <li><a href="header6.html">Header Version 6</a></li>
                                                <li><a href="header7.html">Header Version 7</a></li>
                                            </ul>
                                        </li>
                                        <li class="dropdown">
                                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Elements - Headers<span class="angle"></span></a>
                                            <ul class="dropdown-menu" role="menu">
                                                <li><a href="header8.html">Header Version 8</a></li>
                                                <li><a href="header9.html">Header Version 9</a></li>
                                                <li><a href="header10.html">Header Version 10</a></li>
                                                <li><a href="header11.html">Header Version 11</a></li>
                                                <li><a href="header12.html">Header Version 12</a></li>
                                                <li><a href="header13.html">Header Version 13</a></li>
                                                <li><a href="header14.html">Header Version 14</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="elements-footers.html">Elements - Footers</a></li>
                                        <li class="dropdown">
                                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Elements<span class="angle"></span></a>
                                            <ul class="dropdown-menu" role="menu">
                                                <li><a href="elements-pageheaders.html">Elements - Page Headers</a></li>
                                                <li><a href="elements-typography.html">Elements - Typography</a></li>
                                                <li><a href="elements-titles.html">Elements - Titles</a></li>
                                                <li><a href="elements-buttons.html">Elements - Buttons</a></li>
                                                <li><a href="elements-services.html">Elements - Services</a></li>
                                                <li><a href="elements-forms.html">Elements - Forms</a></li>
                                                <li><a href="elements-counters.html">Elements - Counters</a></li>
                                                <li><a href="elements-collapses.html">Elements - Collapses</a></li>
                                            </ul>
                                        </li>
                                        <li class="dropdown">
                                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Elements<span class="angle"></span></a>
                                            <ul class="dropdown-menu" role="menu">
                                                <li><a href="elements-callouts.html">Elements - Callouts</a></li>
                                                <li><a href="elements-text-blocks.html">Elements - Blocks</a></li>
                                                <li><a href="elements-tabs.html">Elements - Tabs</a></li>
                                                <li><a href="elements-progressbars.html">Elements - Progress bars</a></li>
                                                <li><a href="elements-tables.html">Elements - Tables</a></li>
                                                <li><a href="elements-alerts.html">Elements - Alerts</a></li>
                                                <li><a href="elements-media.html">Elements - Media</a></li>
                                                <li><a href="elements-more.html">Elements - More</a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                </li>
                                <li class="dropdown">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Contact<span class="angle"></span></a>
                                    <ul class="dropdown-menu" role="menu">
                                        <li><a href="contact.html">Contact Page 1</a></li>
                                        <li><a href="contact2.html">Contact Page 2</a></li>
                                        <li><a href="contact3.html">Contact Page 3</a></li>
                                        <li><a href="contact4.html">Contact Page 4</a></li>
                                    </ul>
                                </li>
                                <li class="dropdown search-dropdown pull-right">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><span class="visible-inline-xs">Search</span><i class="fa fa-search"></i></a>
                                    <div class="dropdown-menu " role="menu">
                                        <form action="#">
                                            <input type="search" class="form-control" placeholder="Search..." required>
                                            <button type="submit" class="btn btn-custom"><i class="fa fa-search"></i></button>
                                        </form>
                                    </div>
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