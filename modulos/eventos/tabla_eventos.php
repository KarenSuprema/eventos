<?php session_start();
    include "../../clases/Eventos.php";
    $Eventos = new Eventos();
    $items = $Eventos->mostrarEventos($_SESSION['id_usuario']);
?>

<table class="table table-sm table-hover" id="tabla_eventos_load">
    <thead>
        <tr>
           <th>Nombre</th> 
           <th>Hora inicio</th> 
           <th>Hora Fin</th> 
           <th>Fecha</th> 
           <th>Editar</th> 
           <th>Eliminar</th> 
        </tr>
    </thead>
    <tbody>
        <?php foreach ($items as $key) : ?>
        <tr>
            <th><?php echo $key['evento'] ?></th> 
            <th><?php echo $key['hora_inicio'] ?></th> 
            <th><?php echo $key['hora_fin'] ?></th> 
            <th><?php echo $key['fecha'] ?></th> 
            <th>
                <span class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#modal_editar_evento"
                onclick="editarEvento('<?php echo $key['id_evento'] ?>')">
                    <i class="fa-solid fa-pen-to-square"></i>
                </span>
            </th> 
            <th>
                <span class="btn btn-danger" onclick="eliminarEvento('<?php echo $key['id_evento'] ?>')">
                    <i class="fa-solid fa-trash"></i>
                </span>
            </th> 
        </tr>
        <?php endforeach; ?>
    </tbody>
</table>

<script>
    $(document).ready(function(){
        $('#tabla_eventos_load').DataTable({
          "language": {
            "url": "../public/librerias/datatables/spanish.json"
        
           }

         });
        
    });
</script>