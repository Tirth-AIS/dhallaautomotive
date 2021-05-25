<!DOCTYPE html>
<!--[if IE 8 ]><html class="ie" xmlns="http://www.w3.org/1999/xhtml" xml:lang="en-US" lang="en-US"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en-US" lang="en-US"><!--<![endif]-->
<head>
    <!-- Basic Page Needs -->
    <meta charset="utf-8">
    <!--[if IE]><meta http-equiv='X-UA-Compatible' content='IE=edge,chrome=1'><![endif]-->
    <title>DHALLA AUTOMOTIVE PTY LTD | Service Details</title>

    <meta name="author" content="themesflat.com">

    <!-- Mobile Specific Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <!-- Bootstrap  -->
    <link rel="stylesheet" type="text/css" href="<%=request.getContextPath() %>/resources/front/stylesheets/bootstrap.css" >
 
    <!-- Theme Style -->
    <link rel="stylesheet" type="text/css" href="<%=request.getContextPath() %>/resources/front/stylesheets/style.css">

    <!-- Responsive -->
    <link rel="stylesheet" type="text/css" href="<%=request.getContextPath() %>/resources/front/stylesheets/responsive.css">

    <!-- Colors -->
    <link rel="stylesheet" type="text/css" href="<%=request.getContextPath() %>/resources/front/stylesheets/colors/color1.css" id="colors">
    
    <!-- Favicon and touch icons  -->
    <link href="<%=request.getContextPath() %>/resources/front/icon/apple-touch-icon-48-precomposed.png" rel="apple-touch-icon-precomposed" sizes="48x48">
    <link href="<%=request.getContextPath() %>/resources/front/icon/apple-touch-icon-32-precomposed.png" rel="apple-touch-icon-precomposed">
    <link href="<%=request.getContextPath() %>/resources/front/icon/favicon.png" rel="shortcut icon">

    <script src="<%=request.getContextPath() %>/resources/front/javascript/html5shiv.js"></script>
    <script src="<%=request.getContextPath() %>/resources/front/javascript/respond.min.js"></script>
    <script src="<%=request.getContextPath()%>/resources/admin/js/angular.min.js"></script>
        <script src="<%=request.getContextPath()%>/resources/admin/js/jquery-3.3.1.min.js"></script>
        <script src="<%=request.getContextPath()%>/resources/admin/js/controller/conf.js"></script>
		<script src="<%=request.getContextPath()%>/resources/admin/js/controller/home.js"></script>
</head>                                 
<body class="header-sticky" ng-app="UIS" ng-controller="homeCtrl"  ng-init="getServiceDetailsById(<%=request.getParameter("serviceid")%>)">
    <section class="loading-overlay">
        <div class="Loading-Page">
            <h2 class="loader">Loading...</h2>
        </div>
    </section> 
    <div id="site-wrapper">

        <!-- Site-header -->
        <div id="site-header">
            

                        
            <%@ include file="header.jsp" %>

            <!-- Page title -->
            <div class="flat-row page-title  parallax parallax1">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">                    
                            <div class="page-title-heading">
                                <h1 class="title">{{getServiceDetails.title}}</h1>
                                <p class="subtitle"></p>
                            </div><!-- /.page-title-captions --> 
                            <div class="breadcrumbs">
                                <p>You are here:</p>
                                <ul>
                                    <li><a href="<%=request.getContextPath() %>/">Home</a></li>
                                    <li><a href="<%=request.getContextPath() %>/ourservices">Our Services</a></li>
                                    <li class="active">{{getServiceDetails.title}}</li>
                                </ul>                   
                            </div><!-- /.breadcrumbs --> 
                        </div><!-- /.col-md-12 -->  
                    </div><!-- /.row -->  
                </div><!-- /.container -->                      
            </div><!-- /.page-title --> 
        </div><!--  /.site-header -->
        
        <div id="site-content">
            <div class="flat-row flat-products popup pad-top0px">
                <div class="container">
                    <div class="row">
                        <div class="">
                            <div class="products-content-wrap">
                                <div class="products-content-inner">
                                    <div class="single-products">
                                        <!-- <span class="onsale">Sale!</span> -->
                                        <div class="single-img">
                                            <a class="popup-gallery" href="{{getServiceDetails.image}}">
                                                <img src="{{getServiceDetails.image}}" alt="images">
                                            </a>
                                        </div>

                                        <div class="summary">
                                            <h1 class="product_title">{{getServiceDetails.title}}</h1>
                                            <div>
                                                <p class="price"><ins><span class="amount">{{getServiceDetails.subtitle}}</span></ins></p>
                                            </div>
                                            <div class="descriptions">
                                                <p ng-bind-html="getServiceDetails.description | to_trusted"></p>
                                            </div>
                                        </div>
                                    </div><!-- /.single-products -->
                                </div><!-- /.products-content-inner -->
                            </div><!-- /.products-content-wrap -->
                        </div><!-- /.products-content -->
                    </div><!-- /.row -->
                </div><!-- /.container -->
            </div><!-- /.flat-row -->
        </div><!--/.site-content -->

        <%@include file="footer.jsp" %>
        
    </div>  <!-- /.site-wrapper -->
   
    <!-- Javascript -->
    <script type="text/javascript" src="<%=request.getContextPath() %>/resources/front/javascript/jquery.min.js"></script>
    <script type="text/javascript" src="<%=request.getContextPath() %>/resources/front/javascript/bootstrap.min.js"></script>
    <script type="text/javascript" src="<%=request.getContextPath() %>/resources/front/javascript/jquery.magnific-popup.min.js"></script>
    <script type="text/javascript" src="<%=request.getContextPath() %>/resources/front/javascript/jquery.sticky.js"></script>
    <script type="text/javascript" src="<%=request.getContextPath() %>/resources/front/javascript/jquery.easing.js"></script>
    <script type="text/javascript" src="<%=request.getContextPath() %>/resources/front/javascript/parallax.js"></script>
    <script type="text/javascript" src="<%=request.getContextPath() %>/resources/front/javascript/jquery-waypoints.js"></script>
    <script type="text/javascript" src="<%=request.getContextPath() %>/resources/front/javascript/jquery.cookie.js"></script>
    <script type="text/javascript" src="<%=request.getContextPath() %>/resources/front/javascript/main.js"></script>

</body>
</html>