<!DOCTYPE html>
<!--[if IE 8 ]><html class="ie" xmlns="http://www.w3.org/1999/xhtml" xml:lang="en-US" lang="en-US"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en-US" lang="en-US"><!--<![endif]-->
<head>
    <!-- Basic Page Needs -->
    <meta charset="utf-8">
    <!--[if IE]><meta http-equiv='X-UA-Compatible' content='IE=edge,chrome=1'><![endif]-->
    <title>DHALLA AUTOMOTIVE PTY LTD | Gallery</title>

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
<body class="header-sticky" ng-app="UIS" ng-controller="homeCtrl" ng-init="getAllGallery()">
    <section class="loading-overlay">
        <div class="Loading-Page">
            <h2 class="loader">Loading...</h2>
        </div>
    </section>  
    <div id="site-wrapper">

        <!-- Site-header -->
        <div id="site-header">
            <%@include file="header.jsp" %>

            <!-- Page title -->
            <div class="flat-row page-title  parallax parallax1">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">                    
                            <div class="page-title-heading">
                                <h1 class="title">Gallery</h1>
                            </div><!-- /.page-title-captions --> 
                            <div class="breadcrumbs">
                                <p>You are here:</p>
                                <ul>
                                    <li><a href="<%=request.getContextPath() %>/">Home</a></li>
                                    <li class="active">Gallery</li>
                                </ul>                   
                            </div><!-- /.breadcrumbs --> 
                        </div><!-- /.col-md-12 -->  
                    </div><!-- /.row -->  
                </div><!-- /.container -->                      
            </div><!-- /.page-title --> 
        </div><!--  /.site-header -->
        
        <div id="site-content">
            <!-- Services -->
            <section class="services">
                <div class="container">
                    <div class="row">
                       <div class="three-columns">
                            <div class="images-single object" ng-repeat="g in getgallery">
                                <div class="thumb">
                                    <a class="img-post" href="<%=request.getContextPath() %>/gallery_photos?albumid={{g.albumId}}">
                                        <img src="{{g.image}}" alt="image">
                                    </a>
                                </div><!-- /.thumb-->
                                <div class="desc-img">
                                    <h4 class="title">{{g.title}} ({{g.categoryTitle}})</h4>
                                </div>
                            </div>
                       </div> <!-- /.three-columns -->
                        
                    </div><!-- /.row -->
                </div><!-- /.container -->   
            </section>
        </div><!--/.site-content -->

        <%@include file="footer.jsp" %>
        
    </div>  <!-- /.site-wrapper -->
   
    <!-- Javascript -->
    <script type="text/javascript" src="<%=request.getContextPath() %>/resources/front/javascript/jquery.min.js"></script>
    <script type="text/javascript" src="<%=request.getContextPath() %>/resources/front/javascript/bootstrap.min.js"></script>
    <script type="text/javascript" src="<%=request.getContextPath() %>/resources/front/javascript/jquery.sticky.js"></script>
    <script type="text/javascript" src="<%=request.getContextPath() %>/resources/front/javascript/jquery.easing.js"></script>
    <script type="text/javascript" src="<%=request.getContextPath() %>/resources/front/javascript/parallax.js"></script>
    <script type="text/javascript" src="<%=request.getContextPath() %>/resources/front/javascript/jquery-waypoints.js"></script>
    <script type="text/javascript" src="<%=request.getContextPath() %>/resources/front/javascript/jquery.cookie.js"></script>
    <script type="text/javascript" src="<%=request.getContextPath() %>/resources/front/javascript/main.js"></script>

</body>
</html>