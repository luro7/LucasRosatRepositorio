var ruta = 'http://'+window.location.host+'/PerroSoft/';


$(document).ready(function() {
    $('#lugar_desde').select2();
    $('#lugar_hasta').select2();
    select_localidades();
});

function select_localidades() {
        $.ajax({
            method: 'GET',
            url: ruta+"j&m/BACKEND/apis/localidades/Traer_Localidades.php",
            dataType: 'json',
            data: {},
            success: function (respuesta) {
                var opciones='';
                for (var i=0; i<respuesta.mensaje.length; i++){
                    opciones+='<option value="'+respuesta.mensaje[i].id+'">'+respuesta.mensaje[i].nombre+'</option>';
                }
                $('#lugar_desde').append(opciones);
                $('#lugar_hasta').append(opciones);
            },
            error: function () {
                console.log("No se ha podido obtener la información");
            }
        });
}