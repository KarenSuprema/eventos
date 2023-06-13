<?php
    include "../../clases/Invitados.php";
    $Invitados = new Invitados();
    $items = $Invitados->mostrarInvitados();
?>

<table class="table table-sm table-hover" id="tabla_invitados_load">
    <thead>
        <tr>
           <th>Invitado</th> 
           <th>Email</th>
           <th>Evento</th> 
           <th>Fecha</th> 
           <th>Editar</th> 
           <th>Eliminar</th> 
        </tr>
    </thead>
    <tbody>
        <?php foreach ($items as $key): ?>   
        <tr>
            <th><?php echo $key['nombre'] ?></th> 
            <th><?php echo $key['email'] ?></th>
            <th><?php echo $key['nombreEvento'] ?></th> 
            <th><?php echo $key['fechaEvento'] ?></th> 
            <th>
            <span class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#modal_editar_invitado">
                <i class="fa-solid fa-user-pen"></i>
            </span>                
            </th> 
            <th>
            <span class="btn btn-danger" onclick="eliminarInvitado('<?php echo $key['idInvitado'] ?>')">
                <i class="fa-solid fa-trash"></i>
            </span>                
            </th> 
        </tr>
        <?php endforeach; ?>
    </tbody>
</table>

<script>
    $(document).ready(function(){
        $('#tabla_invitados_load').DataTable();
     });
</script>