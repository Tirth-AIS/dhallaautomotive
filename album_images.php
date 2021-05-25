<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <!-- Mobile Web-app fullscreen -->
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="mobile-web-app-capable" content="yes">

    <!-- Meta tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="favicon.ico">

    <!--Title-->
    <title>Products grid | Mobel - Furniture Website Template</title>

    <!--CSS styles-->
    <link rel="stylesheet" media="all" href="<%=request.getContextPath() %>/resources/front/css/bootstrap.css" />
    <link rel="stylesheet" media="all" href="<%=request.getContextPath() %>/resources/front/css/animate.css" />
    <link rel="stylesheet" media="all" href="<%=request.getContextPath() %>/resources/front/css/font-awesome.css" />
    <link rel="stylesheet" media="all" href="<%=request.getContextPath() %>/resources/front/css/furniture-icons.css" />
    <link rel="stylesheet" media="all" href="<%=request.getContextPath() %>/resources/front/css/linear-icons.css" />
    <link rel="stylesheet" media="all" href="<%=request.getContextPath() %>/resources/front/css/magnific-popup.css" />
    <link rel="stylesheet" media="all" href="<%=request.getContextPath() %>/resources/front/css/owl.carousel.css" />
    <link rel="stylesheet" media="all" href="<%=request.getContextPath() %>/resources/front/css/ion-range-slider.css" />
    <link rel="stylesheet" media="all" href="<%=request.getContextPath() %>/resources/front/css/theme.css" />

    <!--Google fonts-->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,500,600&amp;subset=latin-ext" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500" rel="stylesheet">

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

    <div class="page-loader"></div>

    <div class="wrapper">

        <!--Use class "navbar-fixed" or "navbar-default" -->
        <!--If you use "navbar-fixed" it will be sticky menu on scroll (only for large screens)-->

        <!-- ======================== Navigation ======================== -->

        <nav class="navbar-fixed">

            <div class="container">

                <!-- ==========  Top navigation ========== -->

                <div class="navigation navigation-top clearfix">
                    <ul>
                        <!--add active class for current page-->

                        <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                        <li><a href="#"><i class="fa fa-youtube"></i></a></li>

                        <!--Currency selector-->

                        <!--<li class="nav-settings">
                            <a href="javascript:void(0);" class="nav-settings-value"> USD $</a>
                            <ul class="nav-settings-list">
                                <li>USD $</li>
                                <li>EUR €</li>
                                <li>CHF Fr.</li>
                                <li>GBP £</li>
                            </ul>
                        </li>

                        Language selector

                        <li class="nav-settings">
                            <a href="javascript:void(0);" class="nav-settings-value"> ENG</a>
                            <ul class="nav-settings-list">
                                <li>ENG</li>
                                <li>GER</li>
                                <li>لعربية</li>
                                <li>עִבְרִית</li>
                            </ul>
                        </li>-->
                        <li><a href="javascript:void(0);" class="open-login"><i class="icon icon-user"></i></a></li>
                        <li><a href="javascript:void(0);" class="open-search"><i class="icon icon-magnifier"></i></a></li>
                        <!--<li><a href="javascript:void(0);" class="open-cart"><i class="icon icon-cart"></i> <span>3</span></a></li>-->
                    </ul>
                </div> <!--/navigation-top-->

                <!-- ==========  Main navigation ========== -->

                <div class="navigation navigation-main">

                    <!-- Setup your logo here-->

                    <a href="<%=request.getContextPath() %>/" class="logo"><img src="<%=request.getContextPath() %>/resources/front/assets/images/logo-w.png" alt="" /></a>

                    <!-- Mobile toggle menu -->

                    <a href="#" class="open-menu"><i class="icon icon-menu"></i></a>

                    <!-- Convertible menu (mobile/desktop)-->

                    <div class="floating-menu">

                        <!-- Mobile toggle menu trigger-->

                        <div class="close-menu-wrapper">
                            <span class="close-menu"><i class="icon icon-cross"></i></span>
                        </div>

                        <ul>
                            <li><a href="<%=request.getContextPath() %>/">Home</a></li>
                            <li><a href="#">Products</a></li>
                            <li><a href="<%=request.getContextPath() %>/aboutus">About Us</a></li>
                            <li><a href="<%=request.getContextPath() %>/contactus">Contact Us</a></li>
                        </ul>
                    </div> <!--/floating-menu-->
                </div> <!--/navigation-main-->

                <!-- ==========  Search wrapper ========== -->

                <div class="search-wrapper">

                    <!-- Search form -->
                    <input class="form-control" placeholder="Search..." />
                    <button class="btn btn-main btn-search">Go!</button>

                    <!-- Search results - live search -->
                    <div class="search-results">
                        <div class="search-result-items">
                            <div class="title h4">Products <a href="#" class="btn btn-clean-dark btn-xs">View all</a></div>
                            <ul>
                                <li><a href="#"><span class="id">42563</span> <span class="name">Green corner</span> <span class="category">Sofa</span></a></li>
                                <li><a href="#"><span class="id">42563</span> <span class="name">Laura</span> <span class="category">Armchairs</span></a></li>
                                <li><a href="#"><span class="id">42563</span> <span class="name">Nude</span> <span class="category">Dining tables</span></a></li>
                                <li><a href="#"><span class="id">42563</span> <span class="name">Aurora</span> <span class="category">Nightstands</span></a></li>
                                <li><a href="#"><span class="id">42563</span> <span class="name">Dining set</span> <span class="category">Kitchen</span></a></li>
                                <li><a href="#"><span class="id">42563</span> <span class="name">Seat chair</span> <span class="category">Bar sets</span></a></li>
                            </ul>
                        </div> <!--/search-result-items-->
                        <div class="search-result-items">
                            <div class="title h4">Blog <a href="#" class="btn btn-clean-dark btn-xs">View all</a></div>
                            <ul>
                                <li><a href="#"><span class="id">01 Jan</span> <span class="name">Creating the Perfect Gallery Wall </span> <span class="category">Interior ideas</span></a></li>
                                <li><a href="#"><span class="id">12 Jan</span> <span class="name">Making the Most Out of Your Kids Old Bedroom</span> <span class="category">Interior ideas</span></a></li>
                                <li><a href="#"><span class="id">28 Dec</span> <span class="name">Have a look at our new projects!</span> <span class="category">Modern design</span></a></li>
                                <li><a href="#"><span class="id">31 Sep</span> <span class="name">Decorating When You're Starting Out or Starting Over</span> <span class="category">Best of 2017</span></a></li>
                                <li><a href="#"><span class="id">22 Sep</span> <span class="name">The 3 Tricks that Quickly Became Rules</span> <span class="category">Tips for you</span></a></li>
                            </ul>
                        </div> <!--/search-result-items-->
                    </div> <!--/search-results-->
                </div>

            </div> <!--/container-->
        </nav>

        <!-- ========================  Main header ======================== -->

        <section class="main-header main-header-blog" style="background-image:url(<%=request.getContextPath() %>/resources/front/assets/images/aboutus/main1.jpg)">
            <header>
                <div class="container text-center">
                    <h2 class="h2 title">Album List</h2>
                    <ol class="breadcrumb breadcrumb-inverted">
                        <li><a href="<%=request.getContextPath() %>/"><span class="icon icon-home"></span></a></li>
                        <li>Album List</li>
                    </ol>
                </div>
            </header>
        </section>

        <section class="products">
            <div class="container">

                <div class="row">


                    <div class="col-md-12 col-xs-12">
                        <div class="row">
                            <div class="col-md-4 col-xs-6">
                                <article>
                                    <div class="figure-grid">
                                        <!-- <span class="label label-info">Green corner</span> -->
                                        <div class="image">
                                            <a href="#productid1" class="mfp-open">
                                                <img src="<%=request.getContextPath() %>/resources/front/assets/images/product-1.png" alt="" />
                                            </a>
                                        </div>
                                        <div class="text">
                                            <h2 class="title h4"><a href="product.html">Green corner Green corner Green corner</a></h2>
                                        </div>
                                    </div>
                                </article>
                            </div>

                        </div><!--/row-->
                    </div>
                </div>
            </div><!--/container-->
        </section>

        <!-- ================== Footer  ================== -->

        <%@ include file="footer.jsp"%>

    </div> <!--/wrapper-->


    <!--JS files-->
    <script src="<%=request.getContextPath() %>/resources/front/js/jquery.min.js"></script>
    <script src="<%=request.getContextPath() %>/resources/front/js/jquery.bootstrap.js"></script>
    <script src="<%=request.getContextPath() %>/resources/front/js/jquery.magnific-popup.js"></script>
    <script src="<%=request.getContextPath() %>/resources/front/js/jquery.owl.carousel.js"></script>
    <script src="<%=request.getContextPath() %>/resources/front/js/jquery.ion.rangeSlider.js"></script>
    <script src="<%=request.getContextPath() %>/resources/front/js/jquery.isotope.pkgd.js"></script>
    <script src="<%=request.getContextPath() %>/resources/front/js/main.js"></script>
</body>
</html>