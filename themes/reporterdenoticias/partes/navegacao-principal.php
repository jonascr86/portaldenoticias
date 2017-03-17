<!-- navigation mobile version -->
<div id="mobile-nav-bar" class="mobile-nav-bar">
    <div class="container">
        <div class="row">
            <div class="visible-sm visible-xs col-sm-12">
                <div class="mobile-logo pull-left">
                    <a href="index.html"><img src="<?php echo get_template_directory_uri(); ?>/img/logo2.png" alt="logo"></a>
                </div>
                <a id="offcanvas-toggler" class="pull-right" href="#"><i class="fa fa-bars"></i></a>
            </div>
        </div>
    </div>
</div>

<!-- navigation -->
<nav id="navigation-bar" class="navigation hidden-sm hidden-xs">
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <ul class="list-inline megamenu-parent">
                    <?php
                    wp_nav_menu(
                            [
                                'theme-location' => 'menu',
                                'container' => '',
                                'container_id' => '',
                                'container_class' => '',
                                'menu_class' => 'list-inline megamenu-parent',
                                'walker' => new PortalDeNoticiasBootstrapNavWalker(),
                            ]
                    )
                    ?>
                </ul>
            </div> <!-- col-sm-12 -->
        </div> <!-- //row -->
    </div> <!-- //container -->
</nav> <!-- //navigation -->