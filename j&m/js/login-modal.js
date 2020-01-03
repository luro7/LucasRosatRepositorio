
var ruta = 'http://'+window.location.host+'/PerroSoft/';

$(document).ready(function() {
    $("#btn-registro1").click(function () {
        $("#contenido_login").css('display','none');
        $("#contenido_registro").css('display','block');
    });
    $("#btn-registro_depedido").click(function () {
        $("#contenido_login_reg").css('display','none');
        $("#contenido_registro_reg").css('display','block');
    });
    $("#volver_log").click(function () {
        $("#contenido_login").css('display','block');
        $("#contenido_registro").css('display','none');
    });
    $("#volver_log1").click(function () {
        $("#contenido_login_reg").css('display','block');
        $("#contenido_registro_reg").css('display','none');
    });

    $("#formlogin").submit(function (e) {
        e.preventDefault();
        var tel = $('#dni_login').val();
        var pass = $('#pass_login').val();
        if (tel == "" || pass == "") {
            $('#resp_login1').html("<div class='contError' style='display: inline-block;margin-top: 15px;'>Complete todos los campos</div>");
        } else {
            $.ajax({
                type: 'POST',
                url: ruta + "j&m/BACKEND/apis/usuarios/login_user.php",
                dataType: 'json',
                data: {telefono: tel, password: pass},
                success: function (respuesta) {
                    console.log(respuesta);
                    if (respuesta.id_respuesta == 1) {
                        $('#resp_login1').html("<div class='contOk' style='display: inline-block;margin-top: 15px;'>Bienvenido "+respuesta.mensaje.usuario_nombre+"</div>");
                        /*setTimeout(function() {
                            window.location = ruta+'/admin/index.php';
                        },900);*/
                        refresh();
                    } else {
                        $('#resp_login1').html("<div class='contError' style='display: inline-block;margin-top: 15px;'>"+respuesta.mensaje+"</div>");

                    }
                },
                error: function (e) {
                    console.log("No se ha podido obtener la información",e);
                }
            })
        }
    });

    $("#ingresar_login_dePedido").click(function (e) {
        e.preventDefault();
        var tel = $('#dni_login_dePedido').val();
        var pass = $('#pass_login_dePedido').val();
        if (tel == "" || pass == "") {
            $('#resp_login_dePedido').html("<div class='contError' style='display: inline-block;margin-top: 15px;'>Complete todos los campos</div>");
        } else {
            $.ajax({
                type: 'POST',
                url: ruta + "j&m/BACKEND/apis/usuarios/login_user.php",
                dataType: 'json',
                data: {telefono: tel, password: pass},
                success: function (respuesta) {
                    console.log(respuesta);
                    if (respuesta.id_respuesta == 1) {
                        $('#resp_login_dePedido').html("<div class='contOk' style='display: inline-block;margin-top: 15px;'>Bienvenido "+respuesta.mensaje.usuario_nombre+"</div>");
                        setTimeout(function() {
                            $('#contenido_login_reg').css('display','none');
                            $('#contenido_registro_reg').css('display','none');
                        },900);
                        cargar_sesion(respuesta.mensaje.id);
                        $('#rta_nombre_cliente').text(respuesta.mensaje.usuario_nombre+" ahora puede confirmar su pedido.");
                        $("#id_usuario").val(respuesta.mensaje.id);
                        $("#btnGuardar_pedido").css('display','block');
                        $("#abrir_login").css('display','none');
                        $("#contenido_horarios").css('display','block');
                    } else {
                        $('#resp_login_dePedido').html("<div class='contError' style='display: inline-block;margin-top: 15px;'>"+respuesta.mensaje+"</div>");
                    }
                },
                error: function (e) {
                    console.log("No se ha podido obtener la información",e);
                }
            })
        }
    });

    $("#registro_cli").click(function (e) {
        e.preventDefault();
        var nom = $('#nombre_registro').val();
        var ape = $('#apellido_registro').val();
        var dni = $('#dni_registro').val();
        var tel = $('#tel_registro').val();
        var mail = $('#mail_registro').val();
        var domicilio = $('#dom_registro').val();
        var pass = $('#pass_registro').val();
        var conf_pass = $('#pass_conf_registro').val();
        //console.log(nom,ape,dni,pass);
        if(pass==conf_pass) {
            if (dni == "" || pass == "") {
                $('#resp_registro').html("<div class='contError'  style='display: inline-block;margin-top: 15px;'>Complete todos los campos</div>");
            } else {
                $.ajax({
                    type: 'POST',
                    url: ruta + "j&m/BACKEND/apis/usuarios/RegistroUsuario.php",
                    dataType: 'json',
                    data: {
                        usuario_nombre: nom,
                        apellido: ape,
                        dni: dni,
                        telefono: tel,
                        email: mail,
                        id_domicilio: domicilio,
                        password: pass,
                        es_admin: 2
                    },
                    success: function (respuesta) {
                        console.log(respuesta);
                        if (respuesta.id_respuesta == 1) {
                            $('#resp_registro').html("<div class='contOk' style='display: inline-block;margin-top: 15px;'>" + respuesta.mensaje + "</div>");
                            /*setTimeout(function() {
                                window.location = ruta+'/admin/index.php';
                            },900);*/

                        } else {
                            $('#resp_registro').html("<div class='contError' style='display: inline-block;margin-top: 15px;'>" + respuesta.mensaje + "</div>");

                        }
                    },
                    error: function (data) {
                        console.log("No se ha podido obtener la información");
                    }
                })
            }
        }else{
            $('#resp_registro').html("<div class='contError' style='display: inline-block;margin-top: 15px;'>Las conotraseñas no coinciden</div>");
        }
    });

    $("#registro_cli_dePedido").click(function (e) {
        e.preventDefault();
        var nom = $('#nombre_registro1').val();
        var ape = $('#apellido_registro1').val();
        var dni = $('#dni_registro1').val();
        var tel = $('#tel_registro1').val();
        var mail = $('#mail_registro1').val();
        var domicilio = $('#dom_registro1').val();
        var pass = $('#pass_registro1').val();
        var conf_pass = $('#pass_conf_registro1').val();
        //console.log(nom,ape,dni,pass);
        if(pass==conf_pass) {
            if (dni == "" || pass == "") {
                $('#resp_registro1').html("<div class='contError'  style='display: inline-block;margin-top: 15px;'>Complete todos los campos</div>");
            } else {
                $.ajax({
                    type: 'POST',
                    url: ruta + "j&m/BACKEND/apis/usuarios/RegistroUsuario.php",
                    dataType: 'json',
                    data: {
                        usuario_nombre: nom,
                        apellido: ape,
                        dni: dni,
                        telefono: tel,
                        email: mail,
                        id_domicilio: domicilio,
                        password: pass,
                        es_admin: 2
                    },
                    success: function (respuesta) {
                        console.log(respuesta);
                        if (respuesta.id_respuesta == 1) {
                            $('#resp_registro1').html("<div class='contOk' style='display: inline-block;margin-top: 15px;'>" + respuesta.mensaje + "</div>");
                            setTimeout(function() {
                                $('#contenido_login_reg').css('display','none');
                                $('#contenido_registro_reg').css('display','none');
                            },900);
                            $('#rta_nombre_cliente').text(nom+" ahora puede confirmar su pedido.");
                            loguearse_deRegistro(tel,pass);
                        } else {
                            $('#resp_registro1').html("<div class='contError' style='display: inline-block;margin-top: 15px;'>" + respuesta.mensaje + "</div>");

                        }
                    },
                    error: function (data) {
                        console.log("No se ha podido obtener la información");
                    }
                })
            }
        }else{
            $('#resp_registro1').html("<div class='contError' style='display: inline-block;margin-top: 15px;'>Las conotraseñas no coinciden</div>");
        }
    });
});

function cargar_sesion(id){
    console.log("entro id "+id);
    $.ajax({
        url: ruta+'j&m/ajax/cargar_sesion.php',
        type: 'POST',
        dataType: 'JSON',
        data: {id:id},
        success: function (resp) {
            console.log(resp);
        },
    });
}

function loguearse_deRegistro(tel,pass) {
    $.ajax({
        type: 'POST',
        url: ruta + "j&m/BACKEND/apis/usuarios/login_user.php",
        dataType: 'json',
        data: {telefono: tel, password: pass},
        success: function (respuesta) {
            console.log(respuesta);
            if (respuesta.id_respuesta == 1) {
                $('#resp_login_dePedido').html("<div class='contOk' style='display: inline-block;margin-top: 15px;'>Bienvenido "+respuesta.mensaje.usuario_nombre+"</div>");
                setTimeout(function() {
                    $('#contenido_login_reg').css('display','none');
                    $('#contenido_registro_reg').css('display','none');
                },900);
                cargar_sesion(respuesta.mensaje.id);
                $('#rta_nombre_cliente').text(respuesta.mensaje.usuario_nombre+" ahora puede confirmar su pedido.");
                $("#id_usuario").val(respuesta.mensaje.id);
                $("#btnGuardar_pedido").css('display','block');
                $("#abrir_login").css('display','none');
                $("#contenido_horarios").css('display','block');
            } else {
                $('#resp_login_dePedido').html("<div class='contError' style='display: inline-block;margin-top: 15px;'>"+respuesta.mensaje+"</div>");
            }
        },
        error: function (e) {
            console.log("No se ha podido obtener la información",e);
        }
    })
}


    function refresh(){

        setTimeout(location.reload.bind(location), 2500);
    }
