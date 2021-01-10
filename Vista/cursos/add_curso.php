<!-- script js en cabezera y el include -->
<div class="modal fade" id="addCursoModal">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Añadir Curso</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form method="post" id="Agregar_curso">
      <div class="modal-body">

         <div class="form-group">
        <label>Descripcion</label>
        <textarea class="form-control" placeholder="Ingrese la descripcion del curso" id="descripcion_curso"></textarea>
        </div>

        <div class="form-group">
        <label>Siglas</label>
        <input type="text" class="form-control" name="txtapellido" id="siglas_curso"  placeholder="Ingrese la siglas del curso">
        </div>
         <div id="message_curso" class="text text-danger"></div>
      </div>


      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary" id="agregar_curso">Agregar</button>
      </div>
    </form>

    </div>
  </div>
</div>
