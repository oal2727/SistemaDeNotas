<!-- script js en cabezera y el include -->
<div class="modal fade" id="addNotaMatricula">
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
      		<label>Id:</label>
      		<input type="text" class="form-control" id="id_matricula" readonly>
      	</div>

      	<div class="form-group">
        <label>Nota 1</label>
        <input type="text" class="form-control" id="nota1">
        </div>

        <div class="form-group">
        <label>Nota 2</label>
        <input type="text" class="form-control" id="nota2">
        </div>

          <div class="form-group">
        <label>Nota 3</label>
        <input type="text" class="form-control" id="nota3">
        </div>

          <div class="form-group">
        <label>Nota 4</label>
        <input type="text" class="form-control" id="nota4">
        </div>
         <div id="message_nota" class="text text-danger"></div>
         
      </div>


      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary" id="agregar_nota">Agregar</button>
      </div>
    </form>

    </div>
  </div>
</div>
