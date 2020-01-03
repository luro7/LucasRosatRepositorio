<?php

session_start();
if ( isset( $_SESSION['nombre'] ) ) {
} else {
    //                var_dump($_SESSION['user_nombre']);
    echo('echo\'<script type="text/javascript">
        alert("Inicie sesión para ver este contenido");
        window.location.href="index.php";
        </script>\';');
}
?>
<!DOCTYPE html>
<html lang="en">

<?php include "cabecera.php"; ?>

<style>
    .modal-backdrop {
        position: inherit;
    }

    .contenedor{
        background-color: #fff;
        padding: 2%;
        border-radius: 15px;
        box-shadow: 2px 2px 6px 2px #ff670e;
        margin: 20px;
        width: 1300px;
        border: 1px;
        margin-bottom: 100px;
        overflow: auto;
        margin-left: auto;
        margin-right: auto;
    }
    .col-md-12{
        display: flex;
    }
    .services-section {
        padding-top: 0px;
        padding-bottom: 0px;
    }
    @media only screen and (min-width: 992px) and (max-width: 1199px) {
        .contenedor{
            margin-left: 15px;
            margin-right: 15px;
            width: auto;
            height: auto;
        }
        .col-md-12{
            display: flex;
        }
        .services-section {
            padding-top: 0px;
            padding-bottom: 0px;
        }
    }
    @media only screen and (min-width: 768px) and (max-width: 991px) {
        .contenedor{
            margin-left: 15px;
            margin-right: 15px;
            width: auto;
            height: auto;
        }
        .col-md-12{
            display: flex;
        }
        .services-section {
            padding-top: 0px;
            padding-bottom: 0px;
        }
    }
    @media only screen and (max-width: 767px) {
        .contenedor{
            margin-left: 15px;
            margin-right: 15px;
            width: auto;
            height: auto;
            display: block;
        }
        .col-md-12{
            display: block;
        }
        .services-section {
            padding-top: 0px;
            padding-bottom: 0px;
        }
    }
    @media only screen and (max-width: 479px) {
        .contenedor{
            margin-left: 15px;
            margin-right: 15px;
            width: auto;
            height: auto;
            display: block;
        }
        .col-md-12{
            display: block;
        }
        .services-section {
            padding-top: 0px;
            padding-bottom: 0px;
        }
    }
</style>
<body>
<!-- Page Preloder -->
<div id="preloder">
    <div class="loader"></div>
</div>
<!-- Header Section Begin -->

<?php include "menu.php"; ?>

<!-- Hero Section Begin -->

<section class="hero-section home-page set-bg" data-setbg="img/bg.jpg" style="height: 200px">
    <div class="container hero-text text-white">

    </div>
    <div class="filter-search">
        <div class="container" >
            <div class="row">
                <div class="col-lg-10">

                </div>
            </div>
        </div>
    </div>
</section>
    <div class="contenedor">
        <h2 align="center" style="color: #ff6a00;">Pedidos Aceptados</h2>
        <div class="container" style="margin-left: -33px;">
            <div class="row" style="width: 1300px;margin-left: -9px;margin-right: 5px;">
                <div class="table-responsive table-hover table-striped">
                    <table class="table" id="pedidos_admin">
                        <thead class="thead-dark">
                        <tr style="white-space: nowrap;">
                            <th>Servicio</th>
                            <th>Cliente</th>
                            <th>Localidad</th>
                            <th>Cantidad</th>
                            <th>Tamaño</th>
                            <th>Estado</th>
                            <th>Fecha</th>
                            <th>Hora inicio</th>
                            <th>Hora Fin</th>
                            <th>Valor</th>
                            <th>Cancelar</th>
                        </tr>
                        </thead>
                        <tbody>
                        </tbody>
                    </table>
                </div>

            </div>
        </div>
    </div>

<div class="contenedor">
    <h2 align="center" style="color: #ff6a00;">Pedidos Pendientes</h2>
    <div class="container" style="margin-left: -33px;">
        <div class="row" style="width: 1300px;margin-left: -9px;margin-right: 5px;">
            <div class="table-responsive table-hover table-striped">
                <table class="table" id="pedidos_admin_pend">
                    <thead class="thead-dark">
                    <tr style="white-space: nowrap;">
                        <th>Servicio</th>
                        <th>Cliente</th>
                        <th>Localidad</th>
                        <th>Cantidad</th>
                        <th>Tamaño</th>
                        <th>Estado</th>
                        <th>Fecha</th>
                        <th>Hora inicio</th>
                        <th>Hora Fin</th>
                        <th>Valor</th>
                        <th>Aceptar</th>
                        <th>Rechazar</th>
                    </tr>
                    </thead>
                    <tbody>
                    </tbody>
                </table>
            </div>

        </div>
    </div>
</div>
<div class="contenedor">
    <h2 align="center" style="color: #ff6a00;">Pedidos Cancelados</h2>
    <div class="container" style="margin-left: -33px;">
        <div class="row" style="width: 1300px;margin-left: -9px;margin-right: 5px;">
            <div class="table-responsive table-hover table-striped">
                <table class="table" id="pedidos_admin_canc">
                    <thead class="thead-dark">
                    <tr style="white-space: nowrap;">
                        <th>Servicio</th>
                        <th>Cliente</th>
                        <th>Localidad</th>
                        <th>Cantidad</th>
                        <th>Tamaño</th>
                        <th>Estado</th>
                        <th>Fecha</th>
                        <th>Hora inicio</th>
                        <th>Hora Fin</th>
                        <th>Valor</th>
                        <th>Activar</th>
                    </tr>
                    </thead>
                    <tbody>
                    </tbody>
                </table>
            </div>

        </div>
    </div>
</div>

<footer class="footer-section">
    <!-- Rooms Pic Section End -->
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center sp-60">
                <!-- <img src="img/only-logo.png" alt=""> -->
            </div>
        </div>
        <div class="row p-37">
            <div class="col-lg-4">
                <div class="about-footer">
                    <h5>Acerca de Nosotros</h5>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec eleifend tristique venenatis.
                        Maecenas a rutrum tellus nam vel semper nibh.</p>
                    <div class="footer-social">
                        <a href="#"><i class="fa fa-pinterest"></i></a>
                        <a href="#"><i class="fa fa-facebook"></i></a>
                        <a href="#"><i class="fa fa-twitter"></i></a>
                        <a href="#"><i class="fa fa-dribbble"></i></a>
                        <a href="#"><i class="fa fa-behance"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="footer-address">
                    <h5>Contáctenos</h5>
                    <ul>
                        <li><i class="flaticon-placeholder"></i><span>Calle Nº111, Buenos Aires, Argentina</span>
                        </li>
                        <li><i class="flaticon-envelope"></i><span>mail@mail.com</span></li>
                        <li><i class="flaticon-smartphone"></i><span>214-805-4428</span></li>
                    </ul>
                    <p>Lunes – Viernes: 9 am – 5 pm</p>
                    <p>Sabados: 9 am – 1pm</p>
                </div>
            </div>
        </div>

        <div class="row p-20">
            <div class="col-lg-12 text-center">
                <div class="copyright">
                    © 2019 Diseño y Desarollo por  <a class="iddeadevs" href="http://www.iddeadevs.com" >IddeaDevs</a>

                </div>
            </div>
        </div>
    </div>
</footer>
<!-- Footer Section End -->

<!--Modal para CRUD-->



<!-- Js Plugins -->
<link rel="stylesheet" type="text/css" href="alertify/css/alertify.min.css" >
<link rel="stylesheet" type="text/css" href="alertify/css/themes/default.css" >
<link rel="stylesheet" type="text/css" href="css/dropdownindex.css" >

<script src="js/jquery-3.3.1.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/jquery.nice-select.min.js"></script>
<script src="js/owl.carousel.min.js"></script>
<script src="js/jquery-ui.min.js"></script>
<script src="js/jquery.slicknav.js"></script>
<script src="js/notiflt.min.js"></script>
<script src="js/main.js"></script>
<script src="js/modal.js"></script>
<script src="alertify/alertify.js"></script>
<script src="js/login-modal.js"></script>
<script type="text/javascript"></script>
<script  src="js/dropdownindex.js"></script>
<script src="js/admin.js"></script>
<script src="js/vue.js"></script>

<!--<script src="js/vue-axios.min.js"></script>-->







</body>

</html>