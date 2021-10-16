<div class="modal fade" id="editModal{{$rl->id_Rol}}" role="dialog" tabindex="-1" aria-labelledby="editLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header bg-light text-align: center;">
          <h4 class = "color: dark; text-align: center;">Editar Rol...</h4>
          <button type="button"  class="close btn-danger" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">x</span>
          </button>
        </div>
        <div class="modal-body bg-light">
            <form action="{{route('Roles.update',$rl->id_Rol)}}" method="POST" ><!--enctype="multipart/form-data", sirve para enviar imagen -->
                @csrf
                @method('PUT')
                    <div class="form-group " >
                        <label for = "nombreR">Nombre del Rol</label>
                        <input class="form-control" id = "nombreR" name = "nombreR" required value="{{$rl->nombre_Rol}}" >
                    </div>
                    <div class="form-group">
                        <label for="slugR">Slug</label>
                        <input type="text" id="slugR" name = "slugR" class="form-control" required value="{{$rl->slug}}">
                    </div>
                    <div class="form-group">
                        <label for = "permisosR">Permisos</label>
                        <input type="text" data-role="tagsinput" name = "permisosR" id="permisosR" class="form-control">
                    </div>
                </div>
        <div class="modal-footer bg-light border-0">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
        <input type="submit" value="Guardar"class="btn btn-success">
          </form>
          
          
        </div>
      </div>  
    </div>
  </div>
  <!-- /modalDeleteRol-->