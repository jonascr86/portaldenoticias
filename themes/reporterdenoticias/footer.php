<footer>
    <div class="footer-wrapper">
        <div class="container">
            <div class="row">
                <div id="bottom1" class="col-sm-6 col-md-3">
                    <p class="footer-logo"><img src="<?php echo get_template_directory_uri(); ?>/img/bottom-logo.png" alt="logo"></p>
                    <p class="footer-info">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et aliqua.</p>
                    <div class="footer-contact">
                        <p>
                            <span>Email:</span>
                            info@yourcompnay.com
                        </p>
                        <p>
                            <span>Fax:</span>
                            +0123 4567 8910
                        </p>
                    </div>
                </div> <!-- //bottom1 -->

                <div id="bottom2" class="col-sm-6 col-md-3">
                    <div class="bottom-menu">
                        <h3 class="title">Quick Link</h3>
                        <div class="pull-left">
                            <ul class="menu">
                                <li><a href="#">Home</a></li>
                                <li><a href="about.html">About</a></li>
                                <li><a href="advertisement.html">Advertisement</a></li>
                                <li><a href="article-categories.html">Category</a></li>
                                <li><a href="#">Forums</a></li>
                            </ul>
                        </div>
                        <div class="pull-right">
                            <ul class="menu">
                                <li><a href="contact.html">Contact</a></li>
                                <li><a href="#">Privacy Policy</a></li>
                                <li><a href="#">Terms of Use</a></li>
                                <li><a href="comingsoon.html">Coming Soon</a></li>
                                <li><a href="404.html">404 Page</a></li>
                            </ul>
                        </div>
                    </div>
                </div> <!-- //bottom2 -->

                <div id="bottom3" class="col-sm-6 col-md-3">
                    <div class="">
                        <h3 class="title">Tag Cloud</h3>
                        <div class="tags">
                            <a class="tag-name" href="#">World</a>
                            <a class="tag-name" href="#">Sports</a>
                            <a class="tag-name" href="#">Politics</a>
                            <a class="tag-name" href="#">Media</a>
                            <a class="tag-name" href="#">Logic</a>
                            <a class="tag-name" href="#">Fashion</a>
                            <a class="tag-name" href="#">Culture</a>
                            <a class="tag-name" href="#">Business</a>
                            <a class="tag-name" href="#">Art</a>
                        </div>
                    </div>
                </div> <!-- //bottom3 -->

                <div id="bottom4" class="col-sm-6 col-md-3">
                    <div class="social-wrapper">
                        <h3 class="title">Social Link</h3>
                        <ul class="social-icons">
                            <li><a target="_blank" href="#"><i class="fa fa-facebook"></i> Facebook</a></li>
                            <li><a target="_blank" href="#"><i class="fa fa-twitter"></i> Twitter</a></li>
                            <li><a target="_blank" href="#"><i class="fa fa-google-plus"></i> Google Plus</a></li>
                            <li><a target="_blank" href="#"><i class="fa fa-pinterest"></i> Pinterest</a></li>
                            <li><a target="_blank" href="#"><i class="fa fa-linkedin"></i> Linkedin</a></li>
                        </ul>
                    </div>
                </div> <!-- //bottom4 -->
            </div> <!-- //row -->
        </div>  <!-- //container -->
    </div> <!-- //footer-wrapper --> 

    <div class="copyright-wrapper">
        <div class="container">
            <div class="row">
                <div class="col-sm-6 col-md-6">
                    <p class="copyright"> Copyright © 2015 <a href="http://joomshaper.com">New Edge.</a> All rights reserved.</p>
                </div>
                <div class="col-sm-6 col-md-6">
                    <p class="pull-right">Design &amp; Devleopment by&nbsp;<a href="http://www.joomshaper.com/">JOOMSHAPER</a></p>
                </div>
            </div>  <!-- //row -->
        </div> <!-- //container -->
    </div> <!-- //copyright-wrapper -->
</footer>

<!--====  End of FOOTER  ====-->

<!-- Offcanvas Start-->
<div class="offcanvas-overlay"></div>
<div class="offcanvas-menu visible-sm visible-xs">
    <a href="#" class="close-offcanvas"><i class="fa fa-remove"></i></a>
    <div class="offcanvas-inner">
        <ul>
            <?php
                    getMenu();
            ?>
        </ul>
    </div>
</div>
<!-- end Offcanvas -->
</div>
<?php wp_footer(); ?>
</body>
</html>