<div class="modal fade" id="deleteModal{{$us->id_Usuario}}" role="dialog" tabindex="-1" aria-labelledby="deleteLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header bg-light border-0">
          
          <button type="button"  class="close btn-danger" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">x</span>
          </button>
        </div>
        <div class="modal-body bg-light">
            <div class = "row">
            <div class="col-md-12">
                <div class="mx-auto d-block" style="text-align: center">
                 <i class="fas fa-exclamation-circle fa-9x" style = "color: red;"></i>
                </div>
            </div>
            </div>
            <br>
         <h5 style="color: dark; text-align: center;">¿Esta seguro de eliminar al usuario {{$us->nombre}}?</h5>
        </div>
        <div class="modal-footer bg-light border-0">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">No</button>
          <form action="{{route('User.destroy',$us->id_Usuario)}}" method="POST">
            @csrf
            @method('DELETE')
            <input type="submit" value="Si" class="btn btn-success">
            
          </form>
          
          
        </div>
      </div>  
    </div>
  </div>
  <!-- /modalDeleteRol-->