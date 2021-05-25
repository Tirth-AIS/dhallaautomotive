<!DOCTYPE html>
<!--[if IE 8 ]><html class="ie" xmlns="http://www.w3.org/1999/xhtml" xml:lang="en-US" lang="en-US"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en-US" lang="en-US"><!--<![endif]-->
<head>
    <!-- Basic Page Needs -->
    <meta charset="utf-8">
    <!--[if IE]><meta http-equiv='X-UA-Compatible' content='IE=edge,chrome=1'><![endif]-->
    <title>DHALLA AUTOMOTIVE PTY LTD</title>

    <meta name="author" content="themesflat.com">

    <!-- Mobile Specific Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <!--<?php wp_head();?>-->
    <!-- Bootstrap  -->
    <link rel="stylesheet" type="text/css" href="<?php echo esc_url(get_template_directory_uri());?>/stylesheets/bootstrap.css" >
 
    <!-- Theme Style -->
    <link rel="stylesheet" type="text/css" href="<?php echo esc_url(get_template_directory_uri());?>/stylesheets/style.css">

    <!-- Responsive -->
    <link rel="stylesheet" type="text/css" href="<?php echo esc_url(get_template_directory_uri());?>/stylesheets/responsive.css">

    <!-- Colors -->
    <link rel="stylesheet" type="text/css" href="<?php echo esc_url(get_template_directory_uri());?>/stylesheets/colors/color1.css" id="colors">
    
    <!-- Favicon and touch icons  -->
    <link href="<?php echo esc_url(get_template_directory_uri());?>/icon/apple-touch-icon-48-precomposed.png" rel="apple-touch-icon-precomposed" sizes="48x48">
    <link href="<?php echo esc_url(get_template_directory_uri());?>/icon/apple-touch-icon-32-precomposed.png" rel="apple-touch-icon-precomposed">
    <link href="<?php echo esc_url(get_template_directory_uri());?>/icon/favicon.png" rel="shortcut icon">
    
        <script src="<?php echo esc_url(get_template_directory_uri());?>/javascript/html5shiv.js"></script>
        <script src="<?php echo esc_url(get_template_directory_uri());?>/javascript/respond.min.js"></script>
    
        

</head>
    <style>
        /*.title-slide{
            font-size: 45px !important;
        }*/
    </style>
<body class="header-sticky">
    <section class="loading-overlay">
        <div class="Loading-Page">
            <h2 class="loader">Loading...</h2>
        </div>
    </section>

    <div id="site-wrapper">

        <!-- Site-header -->
        <div id="site-header">
            <!-- <div id="headerbar">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="custom-info">
                                <i class="fa fa-clock-o">
                                </i>We'are Open: Monday - Saturday, 8:00 Am - 18:00 Pm
                            </div>

                            <div class="social-links">
                                <a href="#">
                                    <i class="fa fa-twitter"></i>
                                </a>
                                <a href="#">
                                    <i class="fa fa-facebook"></i>
                                </a>
                                <a href="#">
                                    <i class="fa fa-behance"></i>
                                </a>
                                <a href="#">
                                    <i class="fa fa-spotify"></i>
                                </a>
                                <a href="#">
                                    <i class="fa fa-rss"></i>
                                </a>
                            </div>
                            <nav id="site-navigator" class="top-navigator">
                                <ul id="menu-top-menu" class="menu">
                                    <li class="menu-item-has-children"><a href="#">Extra Pages</a>
                                        <ul class="sub-menu">
                                            <li ><a href="maintenance-mode.html">Maintenance Mode</a></li>
                                            <li ><a href="coming-soon.html">Coming Soon</a></li>
                                            <li><a href="404.html">404 Page</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="#">Elements</a></li>
                                    <li><a href="#">My Account</a></li>
                                    <li><a href="#">Checkout</a></li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
            </div> -->

            <!-- Header -->            
            <header id="header" class="header clearfix">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="header-wrap clearfix">
                                <div id="logo" class="logo">
                                    <a href="/" rel="home">
                                        <img src="<?php bloginfo('template_directory'); ?>/images/Dhalla Logo 2.png" alt="image">
                                    </a>
                                </div><!-- /.logo -->
                                <div class="nav-wrap">
                                    <div class="btn-menu"></div><!-- //mobile menu button -->
                                    <nav id="mainnav" class="mainnav">
                                        
                                        <?php
                                        wp_nav_menu(
                                            array(
                                                'theme_location' => 'top-menu',
                                                'container' => 'ul',
                                                'menu_class' => 'menu',
                                            )
                                        );?>
                                        
                                        
                                        
                                        
                                        <!--<ul class="menu"> 
                                            <li class="home">
                                                <a href="index.html">Home</a>
                                                
                                            </li> 
                                            <li><a href="#">Blog</a></li>
                                            <li><a href="#">Gallery</a></li>
                                             <li><a href="shop.html">Shop </a></li> 
                                            <li><a href="#">Contact</a></li>
                                        </ul>-->
                                    </nav>
                                    <!-- <ul class="menu-extra">
                                        <li class="shopping-cart">
                                            <a href="#">
                                                <i class="fa fa-shopping-cart"></i>
                                                <span class="shopping-cart-items-count">2</span>
                                            </a>
                                            <div class="submenu">
                                                <div class="widget_shopping_cart_content">
                                                    <ul class="cart_list product_list_widget ">
                                                        <li>
                                                            <a href="#" class="box-img">
                                                                <img src="images/shop/1-180x180.jpg" alt="images">
                                                            </a>
                                                            <div class="content-box">
                                                                <a href="#">Aztec Print Socks
                                                                </a>
                                                                <span class="quantity">
                                                                    2 × £20.00
                                                                </span>
                                                            </div>
                                                            <a href="#" class="delete-product">
                                                                x
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="#" class="box-img">
                                                                <img src="images/shop/2-180x180.jpg" alt="images">
                                                            </a>
                                                            <div class="content-box">
                                                                <a href="#">Embroidered Belt 
                                                                </a>
                                                                <span class="quantity">
                                                                    2 × £35.00
                                                                </span>
                                                            </div>
                                                            <a href="#" class="delete-product">
                                                                x
                                                            </a>
                                                        </li>
                                                    </ul>
                                                    <p class="total">
                                                        <strong>Subtotal:</strong> 
                                                        <span class="amount">£110.00</span>
                                                    </p>
                                                    <div class="wrap-buttons">
                                                        <a class="button b1">View cart</a>
                                                        <a class="button b2">Checkout</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <li id ="s" class="search-box">
                                            <a href="#search" class="flat-search"><i class="fa fa-search"></i></a>
                                            <div class="submenu top-search">
                                                <div class="widget widget_search">
                                                    <form class="search-form">
                                                        <input type="search" class="search-field" placeholder="Search …">
                                                        <input type="submit" class="search-submit">
                                                    </form>
                                                </div>
                                            </div>
                                        </li>
                                    </ul> -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </header>