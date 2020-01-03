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

<?php include "cabecera.php";?>
<style>
    .modal-backdrop {
        position: inherit;
    }
</style>
<body>
<!-- Page Preloder -->
<div id="preloder">
    <div class="loader"></div>
</div>
<!-- Header Section Begin -->

<?php include "menu.php";?>

<!-- Hero Section Begin -->
<section style="    height: 350px;" class="hero-section home-page set-bg" data-setbg="img/bg.jpg">
    <div class="container hero-text text-white">
        <h2>Encomiendas de <?php echo($_SESSION['nombre']);?></h2>
        <input id="user_dni" value="<?php echo($_SESSION['dni']);?>" type="hidden">
    </div>
</section>

<section class="services-section" >
    <div class="container" >
        <div class="row">
            <div class="table-responsive table-hover table-striped">
                <table class="table" id="pedidos">
                    <thead class="thead-dark">
                    <tr style="white-space: nowrap;">
                        <th>Servicio</th>
                        <th>Cliente</th>
                        <th>Loc Desde</th>
                        <th>Loc Hasta</th>
                        <th>Dom Desde</th>
                        <th>Dom Hasta</th>
                        <th>Cantidad</th>
                        <th>Tamaño</th>
                        <th>Estado</th>
                        <th>Fecha</th>
                        <th>Hora Desde</th>
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
</section>
<footer class="footer-section">
    <!-- Rooms Pic Section Begin-->
    <div class="room-pic">
        <div class="container-fluid">
        </div>
    </div>
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
<div class="modal fade" id="modalCRUD" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered modal-resize" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel"></h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="abrir-form">
                <form id="formDatos" class="registro" method="post">
                    <div class="form_registro_body">
                        <div class="step active" id="step-1">
                            <div class="modal-body">
                                <div id="div_dni">
                                    <h4 class="text-center text-black-50">Ingrese su DNI para buscar su usuario</h4>
                                    <div class="alinearDni col-md-8">
                                        <label for="dni_buscar" class="col-form-label">DNI (Ej: 40XXXXXX)</label>
                                        <input type="text" id="dni_buscar" class="BuscarDni" placeholder="Introduce el DNI" required>
                                        <button type="button" id="btnBuscar" class="btn btn-success">Buscar</button>
                                    </div>
                                    <div class="form-group col-md-10 text-center">
                                        <h6 id="mensaje" style="color: darkgreen; margin-top: 10px;"></h6>
                                    </div>
                                    <div class="col-md-8" style="margin-top:30px; ">
                                        <p id="registrarme">¿Realiza su primer pedido? <a href="#">Registrate ahora >></a></p>
                                    </div>
                                </div>

                                <div id="div_datos_cli" style="display: none;">
                                    <input type="hidden" id="id_cliente">
                                    <input type="hidden" id="nombre_oculto">
                                    <input type="hidden" id="apellido_oculto">
                                    <input type="hidden" id="dni_oculto">
                                    <input type="hidden" id="telefono_oculto">
                                    <input type="hidden" id="domicilio_oculto">
                                    <div class="form-group col-md-5 ubicacion">
                                        <label for="nombre" class="col-form-label">Nombre</label>
                                        <input type="text" class="form-control" name="nombre" id="nombre" required>
                                    </div>
                                    <div class="form-group col-md-5 ubicacion">
                                        <label for="apellido" class="col-form-label">Apellido</label>
                                        <input type="text" class="form-control" id="apellido" name="apellido" required>
                                    </div>
                                    <div class="form-group col-md-5 ubicacion">
                                        <label for="dni" class="col-form-label">DNI</label>
                                        <input type="text" class="form-control" id="dni" name="dni" required>
                                    </div>
                                    <div class="form-group col-md-5 ubicacion">
                                        <label for="telefono" class="col-form-label">Telefono</label>
                                        <input type="text" class="form-control" id="telefono" name="telefono" required>
                                    </div>
                                    <div class="form-group col-md-5 ubicacion">
                                        <label for="domicilio" class="col-form-label">Domicilio</label>
                                        <input type="text" class="form-control" id="domicilio" name="domicilio" required>
                                    </div>

                                    <div class="form-group col-md-10 text-center">
                                        <h6 id="mensaje_campos" style="color: #ff2a2a; margin-top: 10px;"></h6>
                                    </div>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" id="volver_elegir" style="display: none;" class="btn btn-secondary">Volver</button>
                                <button type="button"  class="btn btn-secondary" data-dismiss="modal">Salir</button>
                                <button type="button" data-to_step="2" data-step="1" id="btnClienteCargado" class="btn btn-success">Continuar</button>
                            </div>
                        </div>
                        <div class="step" id="step-2">
                            <div class="modal-body">
                                <div class="form-group col-md-5 ubicacion">
                                    <label for="" class="col-form-label">Ubicación del envío</label>
                                    <input type="text" class="form-control" id="" placeholder="Ingrese calle y altura">
                                    <input type="text" class="form-control" id="lugar_envio_desde" value="" disabled>
                                </div>
                                <div class="form-group col-md-5 ubicacion" >
                                    <label for="" class="col-form-label">Ubicación de recepción</label>
                                    <input type="text" class="form-control" id="" placeholder="Ingrese calle y altura">
                                    <input type="text" class="form-control" id="lugar_envio_hasta" value="" disabled>
                                </div>
                                <div class="form-group col-md-5 ubicacion">
                                    <label for="tamaño" class="col-form-label">Tamaño del paquete que desea enviar.</label><br>
                                    <input type="radio" name="tamaño" id="grande">
                                    <label for="grande">Grande</label>
                                    <input type="radio" name="tamaño" id="mediano">
                                    <label for="mediano">Mediano</label>
                                    <input type="radio" name="tamaño" id="chico">
                                    <label for="chico">Chico</label>
                                </div>
                                <div class="form-group col-md-5 ubicacion">
                                    <label for="" class="col-form-label">Cantidad de bultos</label>
                                    <input type="text" class="form-control" id="">
                                </div>
                                <div class="form-group col-md-5">
                                    <label for="costo" class="col-form-label">Costo de la encomienda</label>
                                    <input type="text" class="form-control" id="costo" disabled="">
                                </div>
                                <!-- <div class="form-group form-registro-progreso col-md-10">
                                     <ul class="progressbar">
                                         <li class="progressbar__option active">En espera</li>
                                         <li class="progressbar__option ">Aceptado</li>
                                         <li class="progressbar__option ">Entregado</li>
                                     </ul>
                                 </div>-->
                            </div>
                            <div class="modal-footer">
                                <button type="button" data-to_step="1" data-step="2" class="btn btn-secondary clase_volver" >Volver</button>
                                <button type="button" id="btnGuardar" data-to_step="3" data-step="2" class="btn btn-success clase_siguiente">Continuar</button>
                            </div>
                        </div>
                        <div class="step" id="step-3">
                            <div class="modal-body">
                                <h3> Detalles del envio.</h3>
                                <p>
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ad adipisci aliquam aperiam, atque consequuntur deleniti dolor dolorem,
                                    ea et ex excepturi illum ipsa minus natus officia quae qui repellat veniam.
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ad adipisci aliquam aperiam, atque consequuntur deleniti dolor dolorem,
                                    ea et ex excepturi illum ipsa minus natus officia quae qui repellat veniam.
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ad adipisci aliquam aperiam, atque consequuntur deleniti dolor dolorem,
                                    ea et ex excepturi illum ipsa minus natus officia quae qui repellat veniam.
                                </p>
                            </div>
                            <div class="modal-footer">
                                <button type="button" data-to_step="2" data-step="3" class="btn btn-secondary clase_volver">Volver</button>
                                <button type="submit" id="btnGuardar" data-to_step="3" data-step="2" class="btn btn-success">Aceptar</button>
                            </div>
                        </div>

                    </div>
                </form>
            </div>
        </div>
    </div>
</div>



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
<script src="js/hacer_pedido.js"></script>
<script src="js/login-modal.js"></script>
<script type="text/javascript"></script>
<script  src="js/dropdownindex.js"></script>

<script src="js/vue.js"></script>
<script  src="js/pedidos-controller.js"></script>

<!--<script src="js/vue-axios.min.js"></script>-->







</body>

</html>