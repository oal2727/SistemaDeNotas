<!-- script js en cabezera y el include -->
<div class="modal fade" id="addMatricula">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Añadir Matricula</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form method="post" id="Agregar_curso">
      <div class="modal-body">

         <div class="form-group">

          <label>Cursos</label>
            <select id="curso_item" class="form-control"></select>

        </div>

        <div class="form-group">
        <label>N° Documento</label>
        <input type="text" class="form-control" id="documento_matricula">
        </div>

         <div id="message_matricula" class="text text-danger"></div>
      </div>


      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary" id="agregar_matricula">Agregar</button>
      </div>
    </form>

    </div>
  </div>
</div>
