<!--nav class="navbar navbar-default principal">
    <div class="container-fluid">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
            <ul class="nav navbar-nav nav-principal">
                <li class="active"><a href="#">Inicial</a></li>
                <li><a href="#">Regionais</a></li>
                <li><a href="#">Esportes</a></li>
                <li><a href="#">Polícia</a></li>
                <li><a href="#">Política</a></li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Quadros<span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="#">Minuto da Ave Maria</a></li>
                        <li><a href="#">Quadro 01</a></li>
                        <li><a href="#">Quadro 02</a></li>
                        <li><a href="#">Quadro 02</a></li>
                    </ul>
                </li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Notícias<span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="#">Esportes</a></li>
                        <li><a href="#">Polícia</a></li>
                        <li><a href="#">Regionais</a></li>
                        <li><a href="#">Política</a></li>
                        <li><a href="#">Geral</a></li>
                        <li><a href="#">Quadros</a></li>
                    </ul>
                </li>
                <li><a href="#">Contatos</a></li>

            </ul>

        </div>
</div>
</nav -->

<nav class="navbar navbar-default principal">
    <div class="container-fluid">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
            <?php
            wp_nav_menu(
                    [
                        'theme-location' => 'menu-principal',
                        'container_id' => 'navbar',
                        'container_class' => 'navbar-collapse collapse',
                        'menu_class' => 'nav navbar-nav nav-principal',
                        'walker' => new PortalDeNoticiasBootstrapNavWalker(),
                    ]
            )
            ?>
        </div>
    </div>
</nav>