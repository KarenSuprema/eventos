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

function editarEvento(id_evento){
    $.ajax({
        type:"POST",
        url:"../servidor/eventos/editar.php",
        data:"id_evento=" + id_evento,
        success : function(respuesta){
            respuesta = jQuery.parseJSON( respuesta );
            $('#nombre_eventou').val(respuesta[0].evento);
            $('#hora_iniciou').val(respuesta[0].hora_inicio);
            $('#hora_finu').val(respuesta[0].hora_fin);
            $('#fechau').val(respuesta[0].fecha);
            $('#id_evento').val(respuesta[0].id_evento);
        }
    });

}

function actualizarEvento() {
    $.ajax({
        type:"POST",
        data: $('#frmEditarEvento').serialize(),
        url: "../servidor/eventos/actualizar.php",
        success : function(respuesta){
            if (respuesta == 1) {
                $('#tablaEventos').load('eventos/tabla_eventos.php');
                Swal.fire({
                    title: 'Exito!',
                    text: 'Actualizado',
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
    return false;
}
        