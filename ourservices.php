<!DOCTYPE html>
<!--[if IE 8 ]><html class="ie" xmlns="http://www.w3.org/1999/xhtml" xml:lang="en-US" lang="en-US"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en-US" lang="en-US"><!--<![endif]-->
<head>
    <!-- Basic Page Needs -->
    <meta charset="utf-8">
    <!--[if IE]><meta http-equiv='X-UA-Compatible' content='IE=edge,chrome=1'><![endif]-->
    <title>DHALLA AUTOMOTIVE PTY LTD | Our Services</title>

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
<body class="header-sticky" ng-app="UIS" ng-controller="homeCtrl">
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
                                <h1 class="title">OUR SERVICES</h1>
                                <p class="subtitle">We've got a wide range of services.</p>
                            </div><!-- /.page-title-captions --> 
                            <div class="breadcrumbs">
                                <p>You are here:</p>
                                <ul>
                                    <li><a href="<%=request.getContextPath() %>/">Home</a></li>
                                    <li class="active">SERVICES</li>
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
                       <div class="title-section">
                            <h2 class="title">IT'S PASSION, NOT ONLY WORK!</h2>
                            <p class="desc-title">Using our expertise to create solutions for clients today and in the future</p>
                       </div>
                       <div class="three-columns">
                            <div class="images-single object" ng-repeat="s in getServices">
                                <div class="thumb">
                                    <a class="img-post" href="<%=request.getContextPath() %>/service_details?serviceid={{s.serviceId}}">
                                        <img src="{{s.image}}" alt="image">
                                    </a>
                                </div><!-- /.thumb-->
                                <div class="desc-img">
                                    <h4 class="title">{{s.title}}</h4>
                                    <div class="content" ng-bind-html="s.description | to_trusted"></div>
                                </div>
                            </div>
                       </div> <!-- /.three-columns -->
                        
                    </div><!-- /.row -->
                </div><!-- /.container -->   
            </section>
            <section class="section-iconbox">
                <div class="container">
                    <div class="row">
                        <div class="title-section">
                            <h2 class="title">WE PROVIDE</h2>
                            <p class="desc-title">Don't miss out on these limited time savings to keep your car healthy.</p>
                        </div>
                        <div class="two-columns">
                            <div class="flat-iconbox object">
                                <div class="icon">
                                    <i class="fa fa-user-secret"></i>
                                </div>
                                <div class="content">
                                    <h4>EXPERT TECHNICIANS</h4>
                                    <p>
                                        Nunc lobortis duime neque, quis accumsan dolor. Aenean aliquet dignissim semper. Maecenas ullamcorper est vitae sem ornare interdum nascetur ridiculus mus.
                                        
                                    </p>
                                </div>
                            </div> <!-- /.flat-iconbox -->

                            <div class="flat-iconbox object">
                                <div class="icon">
                                    <i class="fa fa-clock-o"></i>
                                </div>
                                <div class="content">
                                    <h4>LIFETIME GUARANTEED AUTO WORK</h4>
                                    <p>
                                        Nunc lobortis duime neque, quis accumsan dolor. Aenean aliquet dignissim semper. Maecenas ullamcorper est vitae sem ornare interdum nascetur ridiculus mus.
                                        
                                    </p>
                                </div>
                            </div> <!-- /.flat-iconbox -->

                            <div class="flat-iconbox object">
                                <div class="icon">
                                    <i class="fa fa-thumbs-up"></i>
                                </div>
                                <div class="content">
                                    <h5>EXCELLENT REVIEWS FROM CUSTOMERS</h5>
                                    <p>
                                        Nunc lobortis duime neque, quis accumsan dolor. Aenean aliquet dignissim semper. Maecenas ullamcorper est vitae sem ornare interdum nascetur ridiculus mus.
                                        
                                    </p>
                                </div>
                            </div> <!-- /.flat-iconbox -->

                            <div class="flat-iconbox object">
                                <div class="icon">
                                    <i class="fa fa-diamond"></i>
                                </div>
                                <div class="content">
                                    <h5>WE PROVIDE NEW OFFERS WHOLE YEAR</h5>
                                    <p>
                                        Nunc lobortis duime neque, quis accumsan dolor. Aenean aliquet dignissim semper. Maecenas ullamcorper est vitae sem ornare interdum nascetur ridiculus mus.
                                        
                                    </p>
                                </div>
                            </div> <!-- /.flat-iconbox -->
                        </div> <!-- /.two-columns -->                        
                    </div><!-- /.row -->
                </div><!-- /.container -->   
            </section>

            <section class="flat-row contact-now parallax parallax2">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <h3>SAVE YOUR MONEY</h3>
                            <h2>WITH <strong>DISCOUNT SPECIALS </strong> AND AUTO SERVICE <strong> COUPONS</strong></h2>
                            <a href="contact.html" class="button outline">Contact Now!</a>
                        </div>
                    </div>
                </div>
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