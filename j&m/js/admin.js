
var ruta = 'http://'+window.location.host+'/PerroSoft';

$(document).ready(function () {
    completarTabla_confirmados();
    completarTabla_pendientes();
    completarTabla_cancelados();
});

function completarTabla_confirmados() {
    $.ajax({
        type: 'GET',
        url: ruta+'/j&m/BACKEND/apis/pedidos/pedidosconfirmados.php',
        dataType: 'json',
        data: {},
        success: function (respuesta) {
            var htmlTags = '';
            if (respuesta.id_respuesta==1){
                var resp=respuesta.mensaje;
                for (var i = 0; i < resp.length; i++) {
                    htmlTags += '<tr style="white-space: nowrap;">' +
                        '<td>' + resp[i].servicio + '</td>' +
                        '<td>' + resp[i].cliente + '</td>' +
                        '<td>' + resp[i].localidad + '</td>' +
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
            $("#pedidos_admin tbody").empty();
            $('#pedidos_admin tbody').append(htmlTags);

        },
        error: function () {
            console.log("No se ha podido obtener la información");
        }
    });
}

function completarTabla_pendientes() {
    $.ajax({
        type: 'GET',
        url: ruta+'/j&m/BACKEND/apis/pedidos/pedidospendientes.php',
        dataType: 'json',
        data: {},
        success: function (respuesta) {
            var htmlTags = '';
            if (respuesta.id_respuesta==1){
                var resp=respuesta.mensaje;
                var conf="Confirmado";
                for (var i = 0; i < resp.length; i++) {
                    htmlTags += '<tr style="white-space: nowrap;">' +
                        '<td>' + resp[i].servicio + '</td>' +
                        '<td>' + resp[i].cliente + '</td>' +
                        '<td>' + resp[i].localidad + '</td>' +
                        '<td>' + resp[i].bulto_cantidad + '</td>' +
                        '<td>' + resp[i].bulto_tipo + '</td>' +
                        '<td>' + resp[i].estado + '</td>' +
                        '<td>' + resp[i].fecha + '</td>' +
                        '<td>' + resp[i].hora_ini + '</td>' +
                        '<td>' + resp[i].hora_fin + '</td>' +
                        '<td>' + resp[i].valor + '</td>' +
                        '<td><button type="button" class="btn btn-success" onclick="cambiar_estado('+resp[i].id+',1);">Aceptar</button></td>' +
                        '<td><button type="button" class="btn btn-danger" onclick="cambiar_estado('+resp[i].id+',2);">Rechazar</button></td>' +
                        '</tr>';
                }
            }else{
                htmlTags='<tr><td style="text-align: center;" colspan="100%">No hay pedidos cargados</td></tr>'
            }
            $("#pedidos_admin_pend tbody").empty();
            $('#pedidos_admin_pend tbody').append(htmlTags);

        },
        error: function () {
            console.log("No se ha podido obtener la información");
        }
    });
}

function completarTabla_cancelados() {
    $.ajax({
        type: 'GET',
        url: ruta+'/j&m/BACKEND/apis/pedidos/pedidoscancelados.php',
        dataType: 'json',
        data: {},
        success: function (respuesta) {
            var htmlTags = '';
            if (respuesta.id_respuesta==1){
                var resp=respuesta.mensaje;
                for (var i = 0; i < resp.length; i++) {
                    htmlTags += '<tr style="white-space: nowrap;">' +
                        '<td>' + resp[i].servicio + '</td>' +
                        '<td>' + resp[i].cliente + '</td>' +
                        '<td>' + resp[i].localidad + '</td>' +
                        '<td>' + resp[i].bulto_cantidad + '</td>' +
                        '<td>' + resp[i].bulto_tipo + '</td>' +
                        '<td>' + resp[i].estado + '</td>' +
                        '<td>' + resp[i].fecha + '</td>' +
                        '<td>' + resp[i].hora_ini + '</td>' +
                        '<td>' + resp[i].hora_fin + '</td>' +
                        '<td>' + resp[i].valor + '</td>' +
                        '<td><button type="button" class="btn btn-success" onclick="cambiar_estado('+resp[i].id+',3);">Activar</button></td>' +
                        '</tr>';
                }
            }else{
                htmlTags='<tr><td style="text-align: center;" colspan="100%">No hay pedidos cargados</td></tr>'
            }
            $("#pedidos_admin_canc tbody").empty();
            $('#pedidos_admin_canc tbody').append(htmlTags);

        },
        error: function () {
            console.log("No se ha podido obtener la información");
        }
    });
}

function cambiar_estado(id,estado) {
    $.ajax({
        method: 'POST',
        url: ruta+'/j&m/BACKEND/apis/estado/cambiarestado.php',
        data: {
            estado: estado,
            id_pedido:id
        },
        success: function (respuesta) {
            if (respuesta.id_respuesta) {
                completarTabla_confirmados();
                completarTabla_pendientes();
                completarTabla_cancelados();
            }
        },
        error: function () {
            console.log("No se ha podido obtener la información");
        }
    });
}