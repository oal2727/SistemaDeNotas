<!-- script js en cabezera y el include -->
<div class="modal fade" id="addPersona">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Añadir Curso</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form method="post" id="Agregar_Persona">
      <div class="modal-body">

        <div class="box_id">
    <label>Id</label>
    <input type="text" class="form-control" id="id_persona" readonly>
  </div>

        <div>
    <label>Paterno</label>
    <input type="text" class="form-control" id="paterno">
  </div>
  <div>
    <label>Materno</label>
    <input type="text" class="form-control" id="materno">
  </div>
  <div>
    <label>Nombre</label>
    <input type="text" class="form-control" id="nombre">
  </div>


  <div>
    <label>Documento</label>
    <select id="documento" class="form-control"></select>
  </div>

  
  <div class="item_box_doc" id="sg_documento">
    <label id="num_doc"></label>
    <input type="text" class="form-control" id="numero_doc">
  </div>

  <div>
    <label>Genero:</label>
    <select class="form-control" id="genero">
      <option>Seleccione</option>
      <option value="1">Femenino</option>
      <option value="2">Masculino</option>
    </select>
  </div>
  <div>
    <label>Correo:</label>
    <input type="email" id="correo" class="form-control">
  </div>


  <div class="text text-danger" id="message_person"></div>
  <br>



      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary" id="agregar_persona">Agregar</button>
      </div>
    </form>

    </div>
  </div>
</div>
