<?php get_header(); ?>
</div>
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
                                            <a href="<%=request.getContextPath() %>/album_images?albumid=1">
                                                <img src="<%=request.getContextPath() %>/resources/front/assets/images/product-1.png" alt="" />
                                            </a>
                                        </div>
                                        <div class="text">
                                            <h2 class="title h4"><a href="<%=request.getContextPath() %>/album_images?albumid=1">Green corner Green corner Green corner</a></h2>
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

          <?php get_footer(); ?>