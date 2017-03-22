<?php get_header(); ?>
<!--==================================
=            START MAIN WRAPPER      =
===================================-->
<section class="main-wrapper">
    <div class="container">
        <div class="row">
            <div class="col-sm-9">
                <!-- Latest News -->
                <div class="newedge-latest-news">
                    <div class="section-title">
                        <h3> <span class="cat-icon"><i class="fa fa-bell-o"></i></span>Destaques</h3>
                    </div> <!-- //section-title -->

                    <div class="row">
                        <div class="col-md-8">
                            <!-- article-slider -->
                            <?php get_template_part('partes/loop', 'slide_index'); ?>
                        </div> <!-- //col-md-8 -->

                        <?php get_template_part('partes/loop', 'destaque_lateral'); ?>
                    </div> <!-- //row -->
                </div>

                <!-- Sports Category -->
                <?php get_template_part('partes/loop', 'esportes_principal'); ?>

                <?php get_template_part('partes/loop', 'regionais_principal'); ?>

                <?php get_template_part('partes/loop', 'politica_principal'); ?>

                <?php get_template_part('partes/loop', 'policia_principal'); ?>

                <?php get_template_part('partes/loop', 'videos_principal'); ?>

                <!-- Advertisement one -->
                <div class="advertisement mtb30">
                    <div class="row">
                        <div class="col-sm-12">
                            <img src="<?php echo get_template_directory_uri(); ?>/img/large-ad1.jpg" alt="advertisement">
                        </div>
                    </div>
                </div> <!-- //Advertisement one -->

                <!-- Article By Category -->
                <div class="article-by-category">
                    <div class="row">
                        <!-- technology category -->
                        <div class="col-sm-4">
                            <div class="gradient-color08">
                                <div class="section-title">
                                    <h3 class="pull-left"> <span class="cat-icon cat-icon-color06">T</span>Technology</h3>
                                    <div class="pull-right see-all">
                                        <a href="#">See all</a>
                                    </div>
                                </div> <!-- //section-title -->

                                <div class="row">
                                    <div class="col-sm-12">
                                        <article>
                                            <div class="article-inner">
                                                <div class="overlay"></div>
                                                <div class="img-wrapper"><img class="img-100p latest-post-image" src="<?php echo get_template_directory_uri(); ?>/img/article-img/thumbnail09.jpg" alt="img"></div>
                                                <div class="post-share-social">
                                                    <a href="#" class="fa fa-facebook"></a>
                                                    <a href="#" class="fa fa-twitter"></a>
                                                    <a href="#" class="fa fa-google-plus"></a>
                                                    <a href="#" class="fa fa-pinterest"></a>
                                                    <a href="#" class="fa fa-linkedin"></a>
                                                    <div class="share-icon"><i class="fa fa-share-alt"></i></div>
                                                </div> <!-- //post-share-social -->
                                                <div class="article-info">
                                                    <h4 class="entry-title">
                                                        <a href="single-article.html">Vestibulum eget felis nec purus commodo convallis</a>
                                                    </h4>
                                                </div>
                                            </div>
                                        </article>
                                    </div>
                                    <div class="col-sm-12">
                                        <article>
                                            <div class="article-inner">
                                                <div class="overlay"></div>
                                                <div class="img-wrapper"><img class="img-100p latest-post-image" src="<?php echo get_template_directory_uri(); ?>/img/article-img/thumbnail07.jpg" alt="img"></div>
                                                <div class="post-share-social">
                                                    <a href="#" class="fa fa-facebook"></a>
                                                    <a href="#" class="fa fa-twitter"></a>
                                                    <a href="#" class="fa fa-google-plus"></a>
                                                    <a href="#" class="fa fa-pinterest"></a>
                                                    <a href="#" class="fa fa-linkedin"></a>
                                                    <div class="share-icon"><i class="fa fa-share-alt"></i></div>
                                                </div> <!-- //post-share-social -->
                                                <div class="article-info">
                                                    <h4 class="entry-title">
                                                        <a href="single-article.html">Praesent accumsan odio in ante ullamcorper</a>
                                                    </h4>
                                                </div>
                                            </div>
                                        </article>
                                    </div>
                                </div> <!-- //row -->
                            </div>
                        </div> <!-- //Technology category -->

                        <!-- Entertainment category -->
                        <div class="col-sm-4">
                            <div class="gradient-color09">
                                <div class="section-title">
                                    <h3 class="pull-left"> <span class="cat-icon cat-icon-color08">E</span>Entertainment</h3>
                                    <div class="pull-right see-all">
                                        <a href="#">See all</a>
                                    </div>
                                </div> <!-- //section-title -->

                                <div class="row">
                                    <div class="col-sm-12">
                                        <article>
                                            <div class="article-inner">
                                                <div class="overlay"></div>
                                                <div class="img-wrapper"><img class="img-100p latest-post-image" src="<?php echo get_template_directory_uri(); ?>/img/article-img/thumbnail06.jpg" alt="img"></div>
                                                <div class="post-share-social">
                                                    <a href="#" class="fa fa-facebook"></a>
                                                    <a href="#" class="fa fa-twitter"></a>
                                                    <a href="#" class="fa fa-google-plus"></a>
                                                    <a href="#" class="fa fa-pinterest"></a>
                                                    <a href="#" class="fa fa-linkedin"></a>
                                                    <div class="share-icon"><i class="fa fa-share-alt"></i></div>
                                                </div> <!-- //post-share-social -->
                                                <div class="article-info">
                                                    <h4 class="entry-title">
                                                        <a href="single-article.html">Aliquam sed felis ligula. Duis non nulla magna</a>
                                                    </h4>
                                                </div>
                                            </div>
                                        </article>
                                    </div>
                                    <div class="col-sm-12">
                                        <article>
                                            <div class="article-inner">
                                                <div class="overlay"></div>
                                                <div class="img-wrapper"><img class="img-100p latest-post-image" src="<?php echo get_template_directory_uri(); ?>/img/article-img/thumbnail05.jpg" alt="img"></div>
                                                <div class="post-share-social">
                                                    <a href="#" class="fa fa-facebook"></a>
                                                    <a href="#" class="fa fa-twitter"></a>
                                                    <a href="#" class="fa fa-google-plus"></a>
                                                    <a href="#" class="fa fa-pinterest"></a>
                                                    <a href="#" class="fa fa-linkedin"></a>
                                                    <div class="share-icon"><i class="fa fa-share-alt"></i></div>
                                                </div> <!-- //post-share-social -->
                                                <div class="article-info">
                                                    <h4 class="entry-title">
                                                        <a href="single-article.html">Praesent accumsan odio in ante ullamcorper</a>
                                                    </h4>
                                                </div>
                                            </div>
                                        </article>
                                    </div>
                                </div> <!-- //row -->
                            </div>
                        </div> <!-- //Entertainment category -->

                        <!-- Fashion category -->
                        <div class="col-sm-4">
                            <div class="gradient-color10">
                                <div class="section-title">
                                    <h3 class="pull-left"> <span class="cat-icon cat-icon-color09">F</span>Fashion</h3>
                                    <div class="pull-right see-all">
                                        <a href="#">See all</a>
                                    </div>
                                </div> <!-- //section-title -->

                                <div class="row">
                                    <div class="col-sm-12">
                                        <article>
                                            <div class="article-inner">
                                                <div class="overlay"></div>
                                                <div class="img-wrapper"><img class="img-100p latest-post-image" src="<?php echo get_template_directory_uri(); ?>/img/article-img/thumbnail04.jpg" alt="img"></div>
                                                <div class="post-share-social">
                                                    <a href="#" class="fa fa-facebook"></a>
                                                    <a href="#" class="fa fa-twitter"></a>
                                                    <a href="#" class="fa fa-google-plus"></a>
                                                    <a href="#" class="fa fa-pinterest"></a>
                                                    <a href="#" class="fa fa-linkedin"></a>
                                                    <div class="share-icon"><i class="fa fa-share-alt"></i></div>
                                                </div> <!-- //post-share-social -->
                                                <div class="article-info">
                                                    <h4 class="entry-title">
                                                        <a href="single-article.html">Aliquam sed felis ligula. Duis non nulla magna</a>
                                                    </h4>
                                                </div>
                                            </div>
                                        </article>
                                    </div>
                                    <div class="col-sm-12">
                                        <article>
                                            <div class="article-inner">
                                                <div class="overlay"></div>
                                                <div class="img-wrapper"><img class="img-100p latest-post-image" src="<?php echo get_template_directory_uri(); ?>/img/article-img/thumbnail03.jpg" alt="img"></div>
                                                <div class="post-share-social">
                                                    <a href="#" class="fa fa-facebook"></a>
                                                    <a href="#" class="fa fa-twitter"></a>
                                                    <a href="#" class="fa fa-google-plus"></a>
                                                    <a href="#" class="fa fa-pinterest"></a>
                                                    <a href="#" class="fa fa-linkedin"></a>
                                                    <div class="share-icon"><i class="fa fa-share-alt"></i></div>
                                                </div> <!-- //post-share-social -->
                                                <div class="article-info">
                                                    <h4 class="entry-title">
                                                        <a href="single-article.html">Vestibulum eget felis nec purus commodo convallis</a>
                                                    </h4>
                                                </div>
                                            </div>
                                        </article>
                                    </div>
                                </div> <!-- //row -->
                            </div>
                        </div> <!-- //Fashion category -->
                    </div>
                </div> 
                <!-- //Article By Category -->

                <!-- Thumb Gallery -->
                <div class="thumb-gallery">
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="section-title">
                                <h3> <span class="cat-icon"><i class="fa fa-image"></i></span>News Gallery</h3>
                            </div>
                            <div id="img_thumb" class="flexslider tg-slider">
                                <ul class="slides">
                                    <li><img src="<?php echo get_template_directory_uri(); ?>/img/article-img/large01.jpg" alt="img"></li>
                                    <li><img src="<?php echo get_template_directory_uri(); ?>/img/article-img/large02.jpg" alt="img"></li>
                                    <li><img src="<?php echo get_template_directory_uri(); ?>/img/article-img/large03.jpg" alt="img"></li>
                                    <li><img src="<?php echo get_template_directory_uri(); ?>/img/article-img/large04.jpg" alt="img"></li>
                                    <li><img src="<?php echo get_template_directory_uri(); ?>/img/article-img/large05.jpg" alt="img"></li>
                                    <li><img src="<?php echo get_template_directory_uri(); ?>/img/article-img/large06.jpg" alt="img"></li>
                                    <li><img src="<?php echo get_template_directory_uri(); ?>/img/article-img/large07.jpg" alt="img"></li>
                                    <li><img src="<?php echo get_template_directory_uri(); ?>/img/article-img/large08.jpg" alt="img"></li>
                                </ul>
                            </div>
                            <div id="img_galley" class="flexslider">
                                <ul class="slides">
                                    <li><img src="<?php echo get_template_directory_uri(); ?>/img/article-img/small01.jpg" alt="img"></li>
                                    <li><img src="<?php echo get_template_directory_uri(); ?>/img/article-img/small02.jpg" alt="img"></li>
                                    <li><img src="<?php echo get_template_directory_uri(); ?>/img/article-img/small03.jpg" alt="img"></li>
                                    <li><img src="<?php echo get_template_directory_uri(); ?>/img/article-img/small04.jpg" alt="img"></li>
                                    <li><img src="<?php echo get_template_directory_uri(); ?>/img/article-img/small05.jpg" alt="img"></li>
                                    <li><img src="<?php echo get_template_directory_uri(); ?>/img/article-img/small06.jpg" alt="img"></li>
                                    <li><img src="<?php echo get_template_directory_uri(); ?>/img/article-img/small07.jpg" alt="img"></li>
                                    <li><img src="<?php echo get_template_directory_uri(); ?>/img/article-img/small08.jpg" alt="img"></li>
                                </ul>
                            </div>
                        </div>
                    </div> <!-- //row -->
                </div> 
                <!-- //Thumb Gallery -->

                <!-- Advertisement two -->
                <div class="advertisement mtt30">
                    <div class="row">
                        <div class="col-sm-12">
                            <img src="<?php echo get_template_directory_uri(); ?>/img/large-ad2.jpg" class="img-100p" alt="advertisement">
                        </div>
                    </div>
                </div> <!-- //Advertisement two -->
            </div> <!-- //col-sm-9 -->	
            <?php get_sidebar(); ?>
        </div> <!-- //row -->
    </div> <!-- //container -->
</section>
<!--====  End of MAIN WRAPPER  ====-->
<?php get_footer(); ?>


