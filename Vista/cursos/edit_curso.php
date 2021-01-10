<!-- script js en cabezera y el include -->
<div class="modal fade" id="EditCursoModal">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Editar Curso</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form method="post" id="Agregar_curso">
      <div class="modal-body">

          <div class="form-group">
        <label>Id_curso</label>
        <input type="text" class="form-control" name="id" id="curso_id"  placeholder="Ingrese la siglas del curso" readonly>
        </div>


         <div class="form-group">
        <label>Descripcion</label>
        <textarea class="form-control" placeholder="Ingrese la descripcion del curso" name="descripcion" id="descripcion_edit"></textarea>
        </div>

        <div class="form-group">
        <label>Siglas</label>
        <input type="text" class="form-control" name="txtapellido" id="siglas_edit"  placeholder="Ingrese la siglas del curso">
        </div>




         <div id="message_edit_curso" class="text text-danger"></div>
      </div>


      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary" id="update_curso">Actualizar</button>
      </div>
    </form>

    </div>
  </div>
</div>
