<!-- script js en cabezera y el include -->
<div class="modal fade" id="editPersona">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Añadir Curso</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form>
      <div class="modal-body">

        <div>
    <label>Paterno</label>
    <input type="text" class="form-control" id="paterno" class="paterno_edit">
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

    </form>

    </div>
  </div>
</div>
