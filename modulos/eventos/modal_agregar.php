<form id="frmAgregarEvento" onsubmit="return agregarEvento()">
<div class="modal fade" id="modal_agregar_evento" tabindex="-1" aria-labelledby="modal_agregar_eventoLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="modal_agregar_eventoLabel">Agregar evento</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <label for="nombre_evento">Nombre del evento</label>
        <input type="text" class="form-control" name="nombre_evento" id="nombre_evento" require>
        <label for="hora_inicio">Hora inicio</label>
        <input type="time" class="form-control" name="hora_inicio" id="hora_inicio" require>
        <label for="hora_fin">Hora fin</label>
        <input type="time" class="form-control" name="hora_fin" id="hora_fin" require>
        <label for="fecha">Fecha</label>
        <input type="date" class="form-control" name="fecha" id="fecha" require>
      </div>
      <div class="modal-footer"> 
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
        <button class="btn btn-purple">Guardar</button>
      </div>
    </div>
  </div>
</div>  
</form>