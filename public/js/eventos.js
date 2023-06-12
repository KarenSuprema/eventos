$(document).ready(function(){
    $('#tablaEventos').load('eventos/tabla_eventos.php');
});

function agregarEvento(){
    $.ajax({
        type:"POST",
        data:$('#frmAgregarEvento').serialize(),
        url:"../servidor/eventos/agregar.php",
        success:function(respuesta){
            $('#tablaEventos').load('eventos/tabla_eventos.php');
            $('#configform')[0].rest();
            if(respuesta == 1){
                Swal.fire({
                    title: 'Exito!',
                    text: 'Agregado Correctamente',
                    icon: 'success'
                  })
            } else {
                Swal.fire({
                    title: 'Error!',
                    text: 'Fallo con ' + respuesta,
                    icon: 'error',
                  })
            }
        }

    });

    return false;
}