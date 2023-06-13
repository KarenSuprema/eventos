<form id="frmEditarEvento" onsubmit=" return actualizarEvento()">
<div class="modal fade" id="modal_editar_evento" tabindex="-1" aria-labelledby="modal_editar_eventoLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="modal_editar_eventoLabel">Editar evento</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <input type="text" name="id_evento" id="id_evento" hidden>
      <label for="nombre_eventou">Nombre del evento</label>
        <input type="text" class="form-control" name="nombre_eventou" id="nombre_eventou" require>
        <label for="hora_iniciou">Hora inicio</label>
        <input type="time" class="form-control" name="hora_iniciou" id="hora_iniciou" require>
        <label for="hora_finu">Hora fin</label>
        <input type="time" class="form-control" name="hora_finu" id="hora_finu" require>
        <label for="fechau">Fecha</label>
        <input type="date" class="form-control" name="fechau" id="fechau" require>
      </div>
      <div class="modal-footer"> 
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
        <button class="btn btn-warning">Actualizar</button>
      </div>
    </div>
  </div>
</div> 
</form>