
var dni = $('#user_dni').val();

//var ruta = 'http://localhost/PerroSoft/j&m/BACKEND/apis/pedidos/TraerPedidosxIdCliente.php?dni=36390858';
var ruta = 'http://'+window.location.host+'/PerroSoft';


$(document).ready(function () {
    completarTabla(dni);
    console.log(ruta+'/j&m/BACKEND/apis/pedidos/TraerPedidosxIdCliente.php');
});

function completarTabla(dni) {
    $.ajax({
        type: 'POST',
        url: ruta+'/j&m/BACKEND/apis/pedidos/TraerPedidosxIdCliente.php',
        dataType: 'json',
        data: {dni:dni},
        success: function (respuesta) {
            var htmlTags = '';
            if (respuesta.id_respuesta==1){
                var resp=respuesta.mensaje;
                for (var i = 0; i < resp.length; i++) {
                    htmlTags += '<tr style="white-space: nowrap;">' +
                        '<td>' + resp[i].servicio + '</td>' +
                        '<td>' + resp[i].cliente + '</td>' +
                        '<td>' + resp[i].localidad + '</td>' +
                        '<td>' + resp[i].localidad_hasta + '</td>' +
                        '<td>' + resp[i].domicilio_desde + '</td>' +
                        '<td>' + resp[i].domicilio_hasta + '</td>' +
                        '<td>' + resp[i].bulto_cantidad + '</td>' +
                        '<td>' + resp[i].bulto_tipo + '</td>' +
                        '<td>' + resp[i].estado + '</td>' +
                        '<td>' + resp[i].fecha + '</td>' +
                        '<td>' + resp[i].hora_ini + '</td>' +
                        '<td>' + resp[i].hora_fin + '</td>' +
                        '<td>' + resp[i].valor + '</td>' +
                        '<td><button type="button" class="btn btn-danger" onclick="cambiar_estado('+resp[i].id+',2);">Cancelar</button></td>' +
                        '</tr>';
                }
            }else{
                htmlTags='<tr><td style="text-align: center;" colspan="100%">No hay pedidos cargados</td></tr>'
            }
            $("#pedidos tbody").empty();
            $('#pedidos tbody').append(htmlTags);

        },
        error: function () {
            console.log("No se ha podido obtener la información");
        }
    });
}

function cambiar_estado(id,estado) {
    console.log(dni);
    $.ajax({
        method: 'POST',
        url: ruta+'/j&m/BACKEND/apis/estado/cambiarestado.php',
        data: {
            estado: estado,
            id_pedido:id
        },
        success: function (respuesta) {
            if (respuesta.id_respuesta==1) {
                completarTabla(dni);
            }
        },
        error: function () {
            console.log("No se ha podido obtener la información");
        }
    });
}