<!--==================================
    =            START PAGE TITLE        =
    ===================================-->
<?php 
    $categoria = obterCategoria($post);
?>
<section id="page-title">
    <div class="row">
        <div class="col-sm-12">
            <div class="page-title-wrapper">
                <div class="container">
                    <h2 class="pull-left title"> <span class="cat-icon"><?php echo obterPrimeiraLetra($categoria); ?> </span> <?php echo $categoria; ?> </h2>
                    <!-- breadcrumb -->
                    <?php // get_template_part('partes/breadcrumb'); Verificar posteriormente ?>
                    
                </div> <!-- //container -->
            </div> <!-- //page-title-wrapper -->
        </div>
    </div> <!-- //row -->
</section>
<!--====  End of PAGE TITLE  ====-->



<!--==================================
=            START MAIN WRAPPER      =
===================================-->
<section class="main-wrapper single-category">
    <div class="container">
        <div class="row">
            <div class="col-sm-9">  
                <div class="row">
                    <div class="col-sm-12">
                        <?php if(has_post_thumbnail()) the_post_thumbnail(); ?>
                        <!--<img src="<?php // echo get_template_directory_uri(); ?>/img/post-details/post-image01.jpg" class="img-100p" alt="img">-->
                        <h2 class="main-entry-title"><?php the_title(); ?></h2>
                        <div class="resumo-noticia">
                            <p>
                                <?php the_excerpt(); ?>
                            </p>
                        </div>
                        <?php // get_template_part('partes/autor_views_social'); Verificar utilização mais tarde ?>
                        <?php get_template_part('partes/content', 'post_meta_info'); ?>
                        <div class="entry-summary">
                            <?php the_content(); ?>
                        </div> <!-- //entry-summary -->
                    </div> <!-- //col-sm-12 -->

                </div> 


                <!-- Advertisement two -->
                <div class="advertisement">
                    <div class="row">
                        <div class="col-sm-12 mtt50 mtb60">
                            <img src="<?php echo get_template_directory_uri(); ?>/img/large-ad2.jpg" alt="advertisement">
                        </div>
                    </div>
                </div> <!-- //Advertisement two -->

                <?php // get_template_part('partes/content', 'noticias_relacionadas'); Verificar necessidade posteriormente ?>
                
                <?php get_template_part('partes/content', 'comments'); ?>
                
                <?php get_template_part('partes/content', 'comment_form'); ?>
                    
                </div> <!-- //row -->
            </div> <!-- //col-sm-9 -->  



            <div class="col-sm-3">
                <!-- Social counter -->
                <div class="social-counter">
                    <div class="section-title">
                        <h3> <span class="cat-icon"><i class="fa fa-share-alt"></i></span>Stay Connected</h3>
                    </div> <!-- //section-title -->

                    <div class="clearfix">
                        <div class="col-sm-6 col-xs-6 social-common-bar">
                            <div class="social-icon"><a href="#" target="_blank"><i class="twitter-icon fa fa-twitter"></i></a></div>
                            <div class="social-total-count">
                                <p class="follow-button">4570<span class="social-text">Followers</span></p>
                            </div>
                        </div>
                        <div class="col-sm-6 col-xs-6 social-common-bar">
                            <div class="social-icon"><a href="#" target="_blank"><i class="facebook-icon fa fa-facebook"></i></a></div>
                            <div class="social-total-count">
                                <p class="follow-button">5423<span class="social-text">Likes</span></p>
                            </div>
                        </div>
                        <div class="col-sm-6 col-xs-6 social-common-bar">
                            <div class="social-icon"><a href="#" target="_blank"><i class="dribbble-icon fa fa-dribbble"></i></a></div>
                            <div class="social-total-count">
                                <p class="follow-button">7902<span class="social-text">Followers</span></p>
                            </div>
                        </div>
                        <div class="col-sm-6 col-xs-6 social-common-bar">
                            <div class="social-icon"><a href="#" target="_blank"><i class="rss-icon fa fa-rss"></i></a></div>
                            <div class="social-total-count">
                                <p class="follow-button">1261<span class="social-text">RSS</span></p>
                            </div>
                        </div> 
                    </div><!-- //row -->
                </div> <!-- //social counter -->

                <!-- Advertisement sidebar 01 -->
                <div class="advertisement mtb30 mtt10">
                    <div class="row">
                        <div class="col-sm-12">
                            <img src="<?php echo get_template_directory_uri(); ?>/img/right-ad1.jpg" alt="advertisement">
                        </div>
                    </div>
                </div> <!-- //Advertisement sidebar 01-->

                <!-- market-data -->
                <div class="market-data mtt30 mtb30">
                    <div class="row">
                        <div class="col-sm-12">
                            <img src="<?php echo get_template_directory_uri(); ?>/img/market-data.jpg" alt="market-data">
                        </div>
                    </div>
                </div> <!-- //market-data -->

                <!-- Advertisement sidebar 02 -->
                <div class="advertisement mtb30 mtt10">
                    <div class="row">
                        <div class="col-sm-12">
                            <img src="<?php echo get_template_directory_uri(); ?>/img/right-ad2.jpg" alt="advertisement">
                        </div>
                    </div>
                </div> <!-- //Advertisement sidebar 02-->

                <!-- Advertisement sidebar 03 -->
                <div class="advertisement mtb30 mtt30">
                    <div class="row">
                        <div class="col-sm-12">
                            <img src="<?php echo get_template_directory_uri(); ?>/img/right-ad5.png" alt="advertisement">
                        </div>
                    </div>
                </div> <!-- //Advertisement sidebar 03-->


                <!-- Latest Comments -->
                <div class="latest-comments mtt30">
                    <div class="section-title">
                        <h3> <span class="cat-icon"><i class="fa fa-comment-o"></i></span>Recent Comments</h3>
                    </div> <!-- //section-title -->

                    <div class="latest-comment">
                        <p>"Salami rump boudin filet mignon doner beef ribs pork tenderloin"</p>
                        <div class="media">
                            <div class="latest-comments-image media-left">
                                <img src="<?php echo get_template_directory_uri(); ?>/img/comm-user.jpg" alt="comment">
                            </div>
                            <div class="latest-comment-wrap media-body">
                                <span class="latest-comments-user">admin</span><span class="latest-comments-date">October 30 2015</span>,<span class="latest-comments-category"> <a href="#" class="social-color">Social</a></span>
                            </div>
                        </div>
                    </div>
                    <div class="latest-comment">
                        <p>"Salami rump boudin filet mignon doner beef ribs pork tenderloin"</p>
                        <div class="media">
                            <div class="latest-comments-image media-left">
                                <img src="<?php echo get_template_directory_uri(); ?>/img/comm-user.jpg" alt="comment">
                            </div>
                            <div class="latest-comment-wrap media-body">
                                <span class="latest-comments-user">admin</span><span class="latest-comments-date">October 30 2015</span>,<span class="latest-comments-category"> <a href="#" class="technology-color">Technology</a></span>
                            </div>
                        </div>
                    </div>
                    <div class="latest-comment">
                        <p>"Salami rump boudin filet mignon doner beef ribs pork tenderloin"</p>
                        <div class="media">
                            <div class="latest-comments-image media-left">
                                <img src="<?php echo get_template_directory_uri(); ?>/img/comm-user.jpg" alt="comment">
                            </div>
                            <div class="latest-comment-wrap media-body">
                                <span class="latest-comments-user">admin</span><span class="latest-comments-date">October 30 2015</span>,<span class="latest-comments-category"> <a href="#" class="fashion-color">Fashion</a></span>
                            </div>
                        </div>
                    </div>
                </div> <!-- //Latest Comments -->

                <!-- newedge-newsletter -->
                <div class="newedge-newsletter mtt30">
                    <form action="#">
                        <div class="introtext">
                            <h2 class="news-letter-title">Newsletter</h2>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                        </div>
                        <div class="form">
                            <input class="form-control" type="text" placeholder="E-mail" title="E-mail">
                            <input class="btn btn-primary" type="submit" value="Subscribe" name="Submit">
                        </div>
                    </form>
                </div> <!-- //newedge-newsletter -->          
            </div> <!-- //col-sm-3 -->
        </div> <!-- //row -->
    </div> <!-- //container -->
</section>
<!--====  End of MAIN WRAPPER  ====-->
