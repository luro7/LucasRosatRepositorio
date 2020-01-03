
$(document).ready(function() {
    $("#btnClienteCargado").click(function (e) {
        e.preventDefault();
        console.log($("#nombre").val());
        $.ajax({
            method: 'POST',
            url: '/../BACKEND/apis/clientes/RegistroCliente.php',
            dataType: 'json',
            data: {
                nombre: $("#nombre").val(),
                apellido: $("#apellido").val(),
                dni: $("#dni").val(),
                telefono: $("#telefono").val(),
                domicilio: $("#domicilio").val()
            },
            success: function (respuesta) {
                alertify.alert('Correcto', respuesta.mensaje, function () {
                    alertify.success('Guardado!');
                });
                //alertify.alert(respuesta.mensaje);
            },
            error: function () {
                console.log("No se ha podido obtener la información");
            }
        });
    });

    $("#btnBuscar").click(function (e) {
        e.preventDefault();
        $.ajax({
            method: 'POST',
            url: 'BACKEND/apis/clientes/BuscarCliente.php',
            dataType: 'json',
            data: {
                dni: $("#dni_buscar").val()
            },
            success: function (respuesta) {
                alertify.alert('Correcto', respuesta, function () {
                    alertify.success('Guardado!');
                });
            },
            error: function () {
                console.log("No se ha podido obtener la información");
            }
        });
    });
});
