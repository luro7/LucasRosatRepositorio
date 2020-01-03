$(document).ready(function(){
    $("#modalCompletar1").click(function(){
        $("#formDatos").trigger("reset");
        var desde=$("#lugar_desde option:selected").text();
        var hasta=$("#lugar_hasta option:selected").text();
        console.log(desde, hasta);
        $("#lugar_envio_desde").val(desde);
        $("#lugar_envio_hasta").val(hasta);
        $("#modalCRUD").modal("show");
    });

let form = document.querySelector('.registro');
form.addEventListener('click', function(e){
        let element = e.target;
        let botonSiguiente = element.classList.contains('clase_siguiente');
        let botonAtras = element.classList.contains('clase_volver');
        if (botonSiguiente || botonAtras) {
            let PasoActual = document.getElementById('step-' + element.dataset.step);
            let SaltarPaso = document.getElementById('step-' + element.dataset.to_step);

            PasoActual.addEventListener('animationend', function callbacks() {
                PasoActual.classList.remove('active');
                SaltarPaso.classList.add('active');
                if (botonSiguiente) {
                    PasoActual.classList.add('to-left');
                } else {
                    SaltarPaso.classList.remove('to-left');
                }
                PasoActual.removeEventListener('animationend', callbacks);
            });

            PasoActual.classList.add('inactive');
            SaltarPaso.classList.remove('inactive');
        }
})


});