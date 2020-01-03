var ruta = 'http://'+window.location.host+'/PerroSoft';

$(document).ready(function () {
    traer_cliente();

    $("#registro_cli").click(function () {
        var id_cli = $("#id_usuario").val();
        var nom = $("#nombre_perfil").val();
        var ape = $("#apellido_perfil").val();
        var dni = $("#dni_perfil").val();
        var tel = $("#tel_perfil").val();
        var mail = $("#mail_perfil").val();
        var dom = $("#dom_perfil").val();
        $.ajax({
            method: 'POST',
            url: ruta+'/j&m/BACKEND/apis/usuarios/editar_user.php',
            dataType: 'json',
            data: {
                id:id_cli,
                usuario_nombre:nom,
                apellido:ape,
                dni:dni,
                telefono:tel,
                email:mail,
                domicilio:dom
            },
            success: function (respuesta) {
                if (respuesta.id_respuesta==1) {
                    $('#rta_edicion').html("<div class='contOk' style='display: inline-block;margin-top: 15px;' align='center'>" + respuesta.mensaje + "</div>");
                    setTimeout(function() {
                        $('#rta_edicion').empty();
                    },3000);
                }else{
                    $('#rta_edicion').html("<div class='contError' style='display: inline-block;margin-top: 15px;' align='center'>" + respuesta.mensaje + "</div>");
                    setTimeout(function() {
                        $('#rta_edicion').empty();
                    },3000);
                }
            },
            error: function () {
                console.log("No se ha podido obtener la información");
            }
        });
    });

});

function traer_cliente() {
    var id_cli = $("#id_usuario").val();
    $.ajax({
        type: 'POST',
        url: ruta+'/j&m/BACKEND/apis/usuarios/Traer_User_Id.php',
        dataType: 'json',
        data: {id:id_cli},
        success: function (respuesta) {
            console.log(respuesta);
            var resp=respuesta.mensaje;
            $("#nombre_perfil").val(resp.usuario_nombre);
            $("#apellido_perfil").val(resp.apellido);
            $("#dni_perfil").val(resp.dni);
            $("#tel_perfil").val(resp.telefono);
            $("#mail_perfil").val(resp.email);
            $("#dom_perfil").val(resp.id_domicilio);
        },
        error: function () {
            console.log(id_cli);
            console.log("No se ha podido obtener la información");
        }
    });
}