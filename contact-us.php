<?php get_header(); /**
/* Template Name: Contact
 *
 * Displays Only Contact template
 *
 * @package WordPress
 * @subpackage theme 
 */?>

<!-- Page title -->
            <div class="flat-row page-title  parallax parallax1">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="page-title-heading">
                                <h1 class="title">Contact us</h1>
                                <!--<p class="subtitle">Repair ofit since 1988</p>-->
                            </div><!-- /.page-title-captions -->
                            <div class="breadcrumbs">
                                <p>You are here:</p>
                                <ul>
                                    <li><a href="<%=request.getContextPath() %>/">Home</a></li>
                                    <li>Contact us</li>
                                </ul>
                            </div><!-- /.breadcrumbs -->
                        </div><!-- /.col-md-12 -->
                    </div><!-- /.row -->
                </div><!-- /.container -->
            </div><!-- /.page-title -->
        </div><!--  /.site-header -->
        
        <div id="site-content">
            

            <section class="flat-row pad-top0px pad-bottom0px">
                <div class="container">
                    <div class="row">
                        <div class="col-md-8 col-md-offset-2">
                            <form class="flat-contact-form" method="post" action="./contact/contact-process.php">
                                <div class="quick-appoinment">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <input type="text" id="name" name="name" class="input-text-name" placeholder="Name" required="required">
                                        </div><!-- /.col-md-6 -->
                                        <div class="col-md-6">
                                            <input type="text" id="email" name="email" class="input-text-email" placeholder="Email" required="required">
                                        </div><!-- /.col-md-6 -->
                                    </div><!-- /.row -->

                                    <div class="flat-divider d30px"></div>

                                    <div class="row">
                                        <div class="col-md-6">
                                            <input type="text" id="phone" name="phone" class="input-text-phone" placeholder="Phone" required="required">
                                        </div><!-- /.col-md-6 -->
                                        <div class="col-md-6">
                                            <input type="text" id="subject" name="subject" class="input-text-subject" placeholder="Subject" required="required">
                                        </div><!-- /.col-md-6 -->
                                    </div><!-- /.row -->

                                    <div class="flat-divider d30px"></div>

                                    <div class="row">
                                        <div class="col-md-12">
                                            <textarea class="textarea-question" id="message" name="message" placeholder="Message" required="required"></textarea>
                                        </div><!-- /.col-md-12 -->
                                    </div><!-- /.row -->

                                    <div class="flat-divider d26px"></div>

                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="submit-wrap">
                                                <button class="flat-button bg-theme">Send Your Message</button>
                                            </div>
                                        </div><!-- /.col-md-12 -->
                                    </div><!-- /.row -->
                                </div>
                            </form>
                        </div><!-- /.col-md-8 -->                        
                    </div><!-- /.row -->
                </div><!-- /.container -->
            </section><!-- /.flat-row -->
            
        </div><!--/.site-content -->

<?php get_footer(); ?>
<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCIm1AxfRgiI_w36PonGqb_uNNMsVGndKo&v=3.7"></script>