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
            $('#frmAgregarEvento')[0].rest();
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

function eliminarEvento(id_evento) {
    Swal.fire({
        title: '?Estas seguro de eliminar¿',
        text: "Una vez eliminado, no podra ser recuperado",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: '!Eliminar!'
      }).then((result) => {
        if (result.isConfirmed) {
            $.ajax({
                type:"POST",
                data:'id_evento=' + id_evento,
                url:"../servidor/eventos/eliminar.php",
                success:function(respuesta) {
                    if (respuesta == 1) {
                        $('#tablaEventos').load('eventos/tabla_eventos.php');
                        Swal.fire({
                            title: 'Exito!',
                            text: 'Eliminado',
                            icon: 'success'
                        })
                    } else {
                        Swal.fire({
                            title: 'Error!',
                            text: 'Fallo con ' + respuesta,
                            icon: 'error'
                        })
                    }
                }
            });
        }
      })
}
        