<div class="modal fade" id="createModal" role="dialog" tabindex="-1" aria-labelledby="editLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header bg-success text-align: center;">
          <h4 class = " text-align: center;" style="color:#ffffff;">Añadir Rol...</h4>
          <button type="button"  class="close btn-danger" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">x</span>
          </button>
        </div>
        <div class="modal-body bg-light">
            <form action="{{route('Roles.store')}}" method="POST" ><!--enctype="multipart/form-data", sirve para enviar imagen -->
                @csrf
                    <div class="form-group " >
                        <label for = "nombreR">Nombre del Rol</label>
                        <input class="form-control" id = "nombreR" name = "nombreR" required  >
                    </div>
                    <div class="form-group">
                        <label for="slugR">Slug</label>
                        <input type="text" id="slugR" name = "slugR" class="form-control" required >
                    </div>
                    <div class="form-group">
                        <label for = "permisosR">Permisos</label>
                        <input type="text" data-role="tagsinput" name = "permisosR" id="permisosR" class="form-control">
                    </div>
                </div>
        <div class="modal-footer bg-light border-0">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
        <input type="submit" value="Agregar"class="btn btn-success">
          </form>
          
          
        </div>
      </div>  
    </div>
  </div>

  
  <!-- /modalDeleteRol-->