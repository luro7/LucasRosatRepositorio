<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="Homes Template">
    <meta name="keywords" content="Homes, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>J&M Express</title>

    <!-- Google Font -->

    <link rel="stylesheet" type="text/css" href="datatable/datatables.min.css">
    <link rel="stylesheet" type="text/css" href="datatable/DataTables/css/dataTables.bootstrap4.min.css">


    <!-- Css Styles -->
    <link rel="stylesheet" href="css/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="css/font-awesome.min.css" type="text/css">
    <link rel="stylesheet" href="css/nice-select.css" type="text/css">
    <link rel="stylesheet" href="css/owl.carousel.min.css" type="text/css">
    <link rel="stylesheet" href="css/jquery-ui.min.css" type="text/css">
    <link rel="stylesheet" href="css/slicknav.min.css" type="text/css">
    <link rel="stylesheet" href="css/flaticon.css" type="text/css">
    <link rel="stylesheet" href="css/style.css" type="text/css">
</head>
<style>
    .modal-backdrop {
        position: inherit;
    }
</style>
<div>
<!-- Page Preloder -->
<div id="preloder">
    <div class="loader"></div>
</div>
<!-- Header Section Begin -->
<?php include "menu.php";
?>
<!-- Header Section End -->
<!-- Hero Section Begin -->
<section class="hero-section home-page set-bg" data-setbg="img/bg.jpg">
    <div class="container hero-text text-white">
        <h2>Envía tu encomienda</h2>
        <h1>ahora mismo.</h1>
    </div>
    <div class="filter-search">
        <div class="container" >
            <div class="row">
                <div class="col-lg-10">
                    <form class="formulario" >
                        <div class="col-md-5 colocacion" style="float: left;">
                            <input type="hidden" id="id_usuario" value="<?php echo $_SESSION['user_id']; ?>">
                            <label for="">Desde</label>
                            <select type="text" class="form-control" id="lugar_desde">
                            </select>
                        </div>
                        <div class="col-md-5 colocacion" style="float: left; margin-bottom: 20px; ">
                            <label for="">Hasta</label>
                            <select type="text" class="form-control" id="lugar_hasta">
                            </select>
                        </div>
                        <div class="search-btn">
                            <!--<button type="submit"><i class="flaticon-search"></i>Search</button>-->
                            <button id="modalCompletar1" type="button" data-toggle="modal"><i class="flaticon-search"></i>Nuevo</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Newslatter Section End -->
<!-- Servies Section Begin -->
<section class="services-section">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="left-side">
                    <h2><span>Porque enviar sus encomiendas con nosotros?</span><br><br>Porque brindamos un servicio <br> con la mejor calidad.</h2>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="right-side">
                    <ul>
                        <li><img src="img/check.png" alt="">Ofrecemos nuestros servicios a un menor precio.</li>
                        <li><img src="img/check.png" alt="">Servicio puerta a puerta.</li>
                        <li><img src="img/check.png" alt="">Rapidez en el retiro de la encomienda.</li>
                        <li><img src="img/check.png" alt="">Entrega del envio en manos del receptor.</li>
                        <li><img src="img/check.png" alt="">Fuerte compromiso con nuestros clientes.</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>

<footer class="footer-section">
    <!-- Rooms Pic Section Begin-->
    <div class="room-pic">
        <div class="container-fluid">
            <!-- <div class="row sp-40">
                <img src="img/room-pic/1.jpg" alt="">
                <img src="img/room-pic/2.jpg" alt="">
                <img src="img/room-pic/3.jpg" alt="">
                <img src="img/room-pic/4.jpg" alt="">
                <img src="img/room-pic/5.jpg" alt="">
            </div> -->
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
            <div class="modal-header" style="background: #ff6600;">
                <h5 class="modal-title" id="exampleModalLabel" style="color:white;">REALICE SU PEDIDO</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="abrir-form">
                <form id="formDatos" class="registro" method="post">
                    <div class="form_registro_body">
                        <div class="step active" id="step-1">
                            <div class="modal-body">
                                <div class="form-group col-md-12 ubicacion" style="display:flex;">
                                    <div class="form-group col-md-6">
                                        <label for="" class="col-form-label">Ubicación del envío</label>
                                        <input type="text" class="form-control" id="dom_desde" placeholder="Ingrese calle y altura">
                                        <input type="text" class="form-control" id="lugar_envio_desde" value="" disabled>
                                    </div>
                                    <div class="form-group col-md-6" >
                                        <label for="" class="col-form-label">Ubicación de recepción</label>
                                        <input type="text" class="form-control" id="dom_hasta" placeholder="Ingrese calle y altura">
                                        <input type="text" class="form-control" id="lugar_envio_hasta" value="" disabled>
                                    </div>
                                </div>
                                <div class="form-group col-md-12 ubicacion" style="display:flex;">
                                    <div class="form-group col-md-6">
                                        <label for="tamaño" class="col-form-label">Tamaño del paquete que desea enviar. *</label><br>
                                        <input type="radio" name="tamaño" id="grande" value="1">
                                        <label for="grande" id="grande1">Grande</label>
                                        <input type="radio" name="tamaño" id="mediano" value="2">
                                        <label for="mediano" id="mediano1">Mediano</label>
                                        <input type="radio" name="tamaño" id="chico" value="3">
                                        <label for="chico" id="chico1">Chico</label>
                                    </div>
                                    <div class="form-group col-md-3">
                                        <label for="cant_bulto" class="col-form-label">Cant de bultos *</label>
                                        <input type="number" class="form-control" id="cant_bulto">
                                    </div>
                                    <div class="form-group col-md-2">
                                        <label for="btn_agregar" class="col-form-label">Agregar</label><br>
                                        <button type="button" class="btn btn-success" id="btn_agregar">+</button>
                                    </div>
                                </div>
                                <div class="form-group col-md-12 ubicacion" id="rta_cantidad" align="center">

                                </div>
                                <div class="form-group col-md-12 ubicacion" style="display:flex;">
                                    <div class="form-group col-md-6">
                                        <textarea name="textarea" id="textarea" cols="30" rows="3" class="form-control" style="font-size: 14px;" disabled>Grande: Por ej, Una heladera, Placard, etc.&#10Mediano: Mesa de luz, Guitarra, etc.&#10Chico: Cuadros, Sobres, etc.</textarea>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="costo" class="col-form-label">Costo Total</label>
                                        <input type="text" class="form-control" id="costo" disabled="">
                                    </div>
                                </div>
                                <div id="tabla_pedidos" class="col-md-12 ubicacion" style="display: none">
                                    <div class="table-responsive col-md-8" style="margin-left: auto; margin-right: auto">
                                        <table class="table table-bordered" class="form-control" id="cargar">
                                            <thead>
                                            <tr>
                                                <th scope="col">Categoria del producto</th>
                                                <th scope="col">Cantidad</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <!--<button type="button" data-to_step="1" data-step="2" class="btn btn-secondary clase_volver" >Volver</button>-->
                                <button type="button" data-to_step="2" data-step="1" class="btn btn-success" id="continuar">Continuar</button>
                            </div>
                        </div>
                        <div class="step" id="step-2">
                            <div class="modal-body">
                                <div id="contenido_horarios">
                                    <h5 align="center">Seleccione un horario para buscar su pedido</h5>
                                    <div class="form-group col-md-12 ubicacion" style="display:flex; justify-content: center; margin-top: 15px" align="center">
                                        <div class="form-group col-md-3">
                                            <label for="desde">Desde</label>
                                            <select name="desde" id="desde_hora" class="form-control">
                                                <option value="8:00">8:00</option>
                                                <option value="9:00">9:00</option>
                                                <option value="10:00">10:00</option>
                                                <option value="11:00">11:00</option>
                                                <option value="12:00">12:00</option>
                                                <option value="13:00">13:00</option>
                                                <option value="14:00">14:00</option>
                                                <option value="15:00">15:00</option>
                                                <option value="16:00">16:00</option>
                                            </select>
                                        </div>
                                        <div class="form-group col-md-3">
                                            <label for="hasta">Hasta</label>
                                            <select name="hasta" id="hasta_hora" class="form-control">
                                                <option value="8:00">8:00</option>
                                                <option value="9:00">9:00</option>
                                                <option value="10:00">10:00</option>
                                                <option value="11:00">11:00</option>
                                                <option value="12:00">12:00</option>
                                                <option value="13:00">13:00</option>
                                                <option value="14:00">14:00</option>
                                                <option value="15:00">15:00</option>
                                                <option value="16:00">16:00</option>
                                            </select>
                                        </div>
                                    </div>
                                    <h4> Detalles del envio.</h4>
                                    <p>
                                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ad adipisci aliquam aperiam, atque consequuntur deleniti dolor dolorem,
                                        ea et ex excepturi illum ipsa minus natus officia quae qui repellat veniam.
                                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ad adipisci aliquam aperiam, atque consequuntur deleniti dolor dolorem,
                                        ea et ex excepturi illum ipsa minus natus officia quae qui repellat veniam.
                                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ad adipisci aliquam aperiam, atque consequuntur deleniti dolor dolorem,
                                        ea et ex excepturi illum ipsa minus natus officia quae qui repellat veniam.
                                    </p>
                                    <p id="rta_nombre_cliente" style="color: "></p>
                                </div>
                                <div id="contenido_login_reg" style="display:none;">
                                    <h5 align="center">Debe iniciar sesion o registrarse para completar el pedido</h5>
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header" style="background: #28a745;">
                                                <h5 class="modal-title" style="color:#FFF; margin-left: auto;margin-bottom: 5px;margin-left: auto;margin-right: auto;" >INGRESAR</h5>
                                            </div>
                                            <div class="modal-body" align="center">
                                                <form id="formlogin_dePedido" method="post">
                                                    <div class="form-group" >
                                                        <label for="dni_login_dePedido">Ingrese su E-mail o telefono</label>
                                                        <input class="form-control" type="text" id="dni_login_dePedido" name="dni_login_dePedido" placeholder="Ingrese su dni">
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="pass_login_dePedido">Ingrese su contraseña</label>
                                                        <input class="form-control" type="password" id="pass_login_dePedido" name="pass_login_dePedido" placeholder="Ingrese su contraseña">
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" id="ingresar_login_dePedido" class="btn btn-success" style="width: 100%;">Ingresar</button>
                                                    </div>
                                                    <div style="margin-left: auto;width: 66%;">
                                                        <button id="btn-registro_depedido" type="button" data-toggle="modal" style="color:dodgerblue;font-size: 14px;" class="btn">No estas Registrado?</button>
                                                    </div>
                                                    <div id="resp_login_dePedido"</div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                </div>
                            <div id="contenido_registro_reg" style="display: none;" >
                                <h5 align="center">Debe iniciar sesion o registrarse para completar el pedido</h5>
                                <div class="modal-dialog modal-lg" role="document" style="margin-left: auto;margin-right: auto;">
                                    <div class="modal-content">
                                        <div class="modal-header" style="background: #28a745;">
                                            <h5 class="modal-title" style="color:#FFF; margin-left: auto;margin-bottom: 5px; margin-left: auto;margin-right: auto;" >REGISTRO</h5>
                                        </div>
                                        <div class="modal-body" align="center">
                                            <form id="formRegistro1" method="post">
                                                <div class="form-group col-md-5 ubicacion">
                                                    <label for="nombre_registro1">Nombre</label>
                                                    <input class="form-control" type="text" id="nombre_registro1" name="nombre_registro1" placeholder="Ingrese su nombre">
                                                </div>
                                                <div class="form-group col-md-5 ubicacion">
                                                    <label for="apellido_registro1">Apellido</label>
                                                    <input class="form-control" type="text" id="apellido_registro1" name="apellido_registro1" placeholder="Ingrese su apellido">
                                                </div>
                                                <div class="form-group col-md-5 ubicacion">
                                                    <label for="dni_registro1">Dni</label>
                                                    <input class="form-control" type="text" id="dni_registro1" name="dni_registro1" placeholder="Ingrese su dni">
                                                </div>
                                                <div class="form-group col-md-5 ubicacion">
                                                    <label for="tel_registro1">Telefono</label>
                                                    <input class="form-control" type="text" id="tel_registro1" name="tel_registro1" placeholder="Ingrese su telefono">
                                                </div>
                                                <div class="form-group col-md-5 ubicacion">
                                                    <label for="mail_registro1">E-mail</label>
                                                    <input class="form-control" type="email" id="mail_registro1" name="mail_registro1" placeholder="Ingrese su E-mail">
                                                </div>
                                                <div class="form-group col-md-5 ubicacion">
                                                    <label for="dom_registro1">Domicilio</label>
                                                    <input class="form-control" type="text" id="dom_registro1" name="dom_registro1" placeholder="Ingrese su domicilio">
                                                </div>
                                                <div class="form-group col-md-5 ubicacion">
                                                    <label for="pass_registro1">Contraseña</label>
                                                    <input class="form-control" type="password" id="pass_registro1" name="pass_registro1" placeholder="Ingrese su contraseña">
                                                </div>
                                                <div class="form-group col-md-5 ubicacion">
                                                    <label for="pass_conf_registro1">Ingrese nuevamente su contraseña</label>
                                                    <input class="form-control" type="password" id="pass_conf_registro1" name="pass_conf_registro1" placeholder="Ingrese su contraseña">
                                                </div>
                                                <div class="modal-footer col-md-12">
                                                    <input type="button" id="volver_log1" class="btn btn-success" value="Volver">
                                                    <input type="button" id="registro_cli_dePedido" class="btn btn-success" value="Registrarme">
                                                </div>
                                                <div id="resp_registro1"</div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            </div>
                            </div>
                            <div id="rta_pedido" class="col-md-12" align="center"></div>
                            <div class="modal-footer">
                                <button type="button" data-to_step="1" data-step="2" class="btn btn-secondary clase_volver">Volver</button>
                                <button type="submit" id="btnGuardar_pedido" data-to_step="2" data-step="2" class="btn btn-success" style="display:none;">Aceptar</button>
                                <?php if(isset($_SESSION['user_id'])){?>
                                <button type="submit" id="btnGuardar" data-to_step="2" data-step="2" class="btn btn-success">Aceptar</button>
                                <?php }else{ ?>
                                <button type="button" id="abrir_login" class="btn btn-success">Aceptar</button>
                                <?php } ?>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
</div>



<!-- Modal Login -->
<div class="modal fade" id="login-modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div id="contenido_login">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header" style="background: #28a745;">
                    <h5 class="modal-title" style="color:#FFF; margin-left: auto;margin-bottom: 5px;" >INGRESAR</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body" align="center">
                    <form id="formlogin" method="post">
                       <div class="form-group" >
                           <label for="dni_login">Ingrese su E-mail o telefono</label>
                           <input class="form-control" type="text" id="dni_login" name="dni_login" placeholder="Ingrese su dni">
                       </div>
                       <div class="form-group">
                           <label for="pass_login">Ingrese su contraseña</label>
                           <input class="form-control" type="password" id="pass_login" name="pass_login" placeholder="Ingrese su contraseña">
                       </div>
                        <div class="modal-footer">
                            <button type="submit" id="ingresar_login" class="btn btn-success" style="width: 100%;">Ingresar</button>
                        </div>
                        <div style="margin-left: auto;width: 66%;">
                            <button id="btn-registro1" type="button" data-toggle="modal" style="color:dodgerblue;font-size: 14px;" class="btn">No estas Registrado?</button>
                        </div>
                        <div id="resp_login1"</div>
                    </form>
                </div>
            </div>
        </div>
      </div>
    </div>
    <div id="contenido_registro" style="display: none" >
        <div class="modal-dialog modal-lg" role="document" style="margin-left: auto;margin-right: auto;">
            <div class="modal-content">
                <div class="modal-header" style="background: #28a745;">
                    <h5 class="modal-title" style="color:#FFF; margin-left: auto;margin-bottom: 5px;" >REGISTRO</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body" align="center">
                    <form id="formRegistro" method="post">
                        <div class="form-group col-md-5 ubicacion">
                            <label for="nombre_registro">Nombre</label>
                            <input class="form-control" type="text" id="nombre_registro" name="nombre_registro" placeholder="Ingrese su nombre">
                        </div>
                        <div class="form-group col-md-5 ubicacion">
                            <label for="apellido_registro">Apellido</label>
                            <input class="form-control" type="text" id="apellido_registro" name="apellido_registro" placeholder="Ingrese su apellido">
                        </div>
                        <div class="form-group col-md-5 ubicacion">
                            <label for="dni_registro">Dni</label>
                            <input class="form-control" type="text" id="dni_registro" name="dni_registro" placeholder="Ingrese su dni">
                        </div>
                        <div class="form-group col-md-5 ubicacion">
                            <label for="tel_registro">Telefono</label>
                            <input class="form-control" type="text" id="tel_registro" name="tel_registro" placeholder="Ingrese su telefono">
                        </div>
                        <div class="form-group col-md-5 ubicacion">
                            <label for="mail_registro">E-mail</label>
                            <input class="form-control" type="email" id="mail_registro" name="mail_registro" placeholder="Ingrese su E-mail">
                        </div>
                        <div class="form-group col-md-5 ubicacion">
                            <label for="dom_registro">Domicilio</label>
                            <input class="form-control" type="text" id="dom_registro" name="dom_registro" placeholder="Ingrese su domicilio">
                        </div>
                        <div class="form-group col-md-5 ubicacion">
                            <label for="pass_registro">Contraseña</label>
                            <input class="form-control" type="password" id="pass_registro" name="pass_registro" placeholder="Ingrese su contraseña">
                        </div>
                        <div class="form-group col-md-5 ubicacion">
                            <label for="pass_conf_registro">Ingrese nuevamente su contraseña</label>
                            <input class="form-control" type="password" id="pass_conf_registro" name="pass_conf_registro" placeholder="Ingrese su contraseña">
                        </div>
                        <div class="modal-footer col-md-12">
                            <input type="button" id="volver_log" class="btn btn-success" value="Volver">
                            <input type="button" id="registro_cli" class="btn btn-success" value="Registrarme">
                        </div>
                        <div id="resp_registro"</div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>



<!-- Js Plugins -->
<link rel="stylesheet" type="text/css" href="alertify/css/alertify.min.css" >
<link rel="stylesheet" type="text/css" href="alertify/css/themes/default.css" >
<link rel="stylesheet" type="text/css" href="css/dropdownindex.css" >
<link rel="stylesheet" type="text/css" href="css/select2.css">

<script src="js/jquery-3.3.1.min.js"></script>
<script src="js/select2.js"></script>
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
<script src="js/combos_localid.js"></script>


</body>

</html>