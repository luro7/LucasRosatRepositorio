
<header class="header-section">
    <div class="container-fluid">
        <div class="row" style="background: black">
            <div class="col-lg-5 logo" style="padding-top: 15px;padding-left: 50px;">
                <a href="./index.php">
                    <img src="img/JMLOGO.png" alt="">
                </a>
            </div>
            <div class="col-lg-7">
                <ul class="main-menu">
                    <li><a href="./index.php">Home</a></li>
                    <li><a href="./galeria.php">Galería</a></li>
                    <!-- <li><a href="./single-property.html">Single Property</a></li> -->
                    <!-- <li><a href="./blog.html">Blog</a></li> -->
                    <li><a href="contacto.php">Contacto</a></li>
                    <?php if ( isset( $_SESSION['nombre'] ) ) { ?>
                    <li id="submenu"><a href="#"><?php echo($_SESSION['nombre']);?></a>
                            <ul class="children">
                                <li><a href="perfil.php">Perfil</a></li>
                                <?php if(( $_SESSION['user_esadmin'])==0){ ?>
                                <li><a href="admin.php">Admin</a></li>
                                <?php } ?>
                                <li><a href="pedidos-view.php">Pedidos</a></li>
                                <li><a href="logout.php">Salir</a></li>
                            </ul>
                    </li>
                    <?php } else { ?>
                    <li><a href="" data-toggle="modal" data-target="#login-modal" id="log">Login</a></li>
                    <?php } ?>
                </ul>
                <div id="mobile-menu-wrap"></div>
            </div>
        </div>
    </div>
</header>
