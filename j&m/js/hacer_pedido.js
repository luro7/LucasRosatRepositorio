var ruta = 'https://'+window.location.host;


$(document).ready(function() {
    var array_tam = [];
    var array_cant = [];
    $('#registrarme').on('click', function() {
        $("#div_datos_cli").show();
        $("#div_dni").hide();
        $("#volver_elegir").css('display', 'block');
        $('#btnClienteCargado').removeClass('clase_siguiente');
    });
    $("#volver_elegir").click(function(){
        $('#div_datos_cli').hide();
        $("#div_dni").show();
        $("#volver_elegir").css('display', 'none');
    });
    $('#abrir_login').click( function () {
       $('#contenido_login_reg').css('display','block');
       $('#contenido_horarios').css('display','none');
    });

    $('#btn_agregar').click(function () {
        var tam = $('input[name="tamaño"]:checked').val();
        var cant = $('#cant_bulto').val();
        console.log(tam);
        var che = (!$("input[name='tamaño']").is(':checked'));
        console.log(che);
        console.log(cant);
        if (((che==false)&&(cant != ''))||((array_cant.length > 2))) {
            $('#tabla_pedidos').css('display', 'block');
            var t = "";
            if (tam == 1) {
                t = "Grande";
                $('#rta_cantidad').css('display', 'none');
            } else {
                if (tam == 2) {
                    t = "Mediano";
                    $('#rta_cantidad').css('display', 'none');
                } else {
                    if (tam == 3) {
                        t = "Chico";
                        $('#rta_cantidad').css('display', 'none');
                    } else {
                        if ((array_cant.length > 2)){
                            $('#rta_cantidad').css('display', 'block');
                            $('#rta_cantidad').html("<div class='contError' style='display: inline-block;margin-top: 15px;'>Solo puede seleccionar 3 tamaños distintos</div>");
                        }else {
                            $('#rta_cantidad').css('display', 'block');
                            $('#rta_cantidad').html("<div class='contError' style='display: inline-block;margin-top: 15px;'>Debe seleccionar tamaño y cantidad</div>");
                        }
                    }
                }
            }
            console.log(array_cant.length);
            if (array_cant.length <= 2) {
                array_tam.push(t);
                array_cant.push(cant);
                if (tam == 1) {
                    $('#grande').css('display', 'none');
                    $('#grande1').css('display', 'none');
                    $('#cant_bulto').val('');
                    $('input:radio[name="tamaño"]').prop('checked', false);
                } else {
                    if (tam == 2) {
                        $('#mediano').css('display', 'none');
                        $('#mediano1').css('display', 'none');
                        $('#cant_bulto').val('');
                        $('input:radio[name="tamaño"]').prop('checked', false);
                    } else {
                        if (tam == 3) {
                            $('#chico').css('display', 'none');
                            $('#chico1').css('display', 'none');
                            $('#cant_bulto').val('');
                            $('input:radio[name="tamaño"]').prop('checked', false);
                        }
                    }
                }
                agregar_tabla(array_tam, array_cant);
                console.log("entro");
                //console.log(array_tam);
                //console.log(array_cant);
            }
        } else {
            $('#rta_cantidad').css('display', 'block');
            $('#rta_cantidad').html("<div class='contError' style='display: inline-block;margin-top: 15px;' align='center'>Debe seleccionar tamaño y cantidad</div>");
        }
    });

    $("#continuar").click(function(){
        var ub_desde=$('#dom_desde').val();
        var ub_hasta=$('#dom_hasta').val();
        if (ub_desde!='' && ub_hasta!=''){
            $('#continuar').addClass('clase_siguiente');
        }else{
            alert("Complete todos los campos");
        }
    });

    function agregar_tabla(tam,cant) {
        console.log(tam);
        console.log(cant);
        var htmlTags = '';
        for (var i = 0; i < tam.length; i++) {
            for (var i = 0; i < cant.length; i++) {
                htmlTags += '<tr style="white-space: nowrap;">' +
                    '<td>' + tam[i] + '</td>' +
                    '<td>' + cant[i] + '</td>' +
                    '</tr>';
            }
        }
        $('#cargar tbody').empty();
        $('#cargar tbody').append(htmlTags);

    }

    var nombre, apellido,tel,dni,dom;


    $("#btnClienteCargado").click(function (e) {
            e.preventDefault();
            $.ajax({
                method: 'POST',
                url: 'BACKEND/apis/clientes/RegistroCliente.php',
                dataType: 'json',
                data: {
                    nombre: $("#nombre").val(),
                    apellido: $("#apellido").val(),
                    dni: $("#dni").val(),
                    telefono: $("#telefono").val(),
                    domicilio: $("#domicilio").val()
                },
                success: function (respuesta) {
                    console.log(respuesta);
                    if (respuesta.codigo==1) {
                        //document.getElementById("mensaje_campos").innerHTML = respuesta.mensaje;
                        $('#btnClienteCargado').addClass('clase_siguiente');
                    }else{

                        document.getElementById("mensaje_campos").innerHTML = respuesta.mensaje;
                    }
                },
                error: function () {
                    console.log("No se ha podido obtener la información");
                }
            });
    });

    $('#formDatos').submit( function (e) {
        e.preventDefault();
        e.stopImmediatePropagation();
        var id_servicio=1;
        var id_usuario=$('#id_usuario').val();
        var id_localidad_desde=$('#lugar_desde').val();
        var id_localidad_hasta=$('#lugar_hasta').val();
        var dom_desde =$('#dom_desde').val();
        var dom_hasta =$('#dom_hasta').val();
        var id_estado=3;
        var hora_inicial=$('#desde_hora').val();
        var hora_final=$('#hasta_hora').val();
        var tipo=array_tam;
        var cantidad=array_cant;

        var objeto={
            id_servicio:id_servicio,
            id_usuario:id_usuario,
            id_localidad:id_localidad_desde,
            id_localidad_hasta:id_localidad_hasta,
            domicilio_desde:dom_desde,
            domicilio_hasta:dom_hasta,
            id_estado:id_estado,
            hora_ini:hora_inicial,
            hora_fin:hora_final,
            tipo:tipo,
            cantidad:cantidad,
            valor:1
        };
        var objeto_json=JSON.stringify(objeto);
        console.log(objeto_json);
        var ruta_alta=ruta+"j&m/BACKEND/apis/pedidos/altapedido.php";
        $.ajax({
            type: 'POST',
            url: ruta_alta,
            dataType: 'JSON',
            contentType: 'application/json',
            data: JSON.stringify(objeto),
            success: function (respuesta) {
                console.log(respuesta);
                if (respuesta.id_respuesta=1) {
                    $('#rta_pedido').html("<div class='contOk' style='display: inline-block;margin-top: 15px;'>"+respuesta.mensaje+"</div>");
                }else{
                    $('#rta_pedido').html("<div class='contError' style='display: inline-block;margin-top: 15px;'>"+respuesta.mensaje+"</div>");
                }
                setTimeout(function() {
                    $("#modalCRUD").modal("hide");
                    window.location = ruta+'/j&m/index.php';
                },900);

            },
            error: function () {
                $('#rta_pedido').html("<div class='contError' style='display: inline-block;margin-top: 15px;'>No se ha podido guardar la información</div>");
                console.log("No se ha podido guardar la información");
            }
        });
    });

});
