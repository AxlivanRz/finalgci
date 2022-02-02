<!-- /modalCreateParticipante-->
<div class="modal fade" id="createModal{{$vercurso->id_Curso}}" role="dialog" tabindex="-1" aria-labelledby="createLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header bg-light border-0">
            <button type="button"  class="close btn-danger" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">x</span>
            </button>
            </div>
            <div class="modal-body bg-light">
                <form action="{{route('Participante.store')}}" method="POST">
                    @csrf
                    <input type="text" id="idC" name = "idC" class="form-control" hidden value="{{$vercurso->id_Curso}}">
                    <input type="text" id="idU" name = "idU" class="form-control" hidden value="{{auth()->user()->id_Usuario}}">
                    <div class = "row">
                        <div class="col-md-12">
                            <div class="mx-auto d-block" style="text-align: center">
                             <i class="fas fa-exclamation-circle fa-9x" style = "color: red;"></i>
                            </div>
                        </div>
                        </div>
                        <br>
                     <h5 style="color: dark; text-align: center;">{{auth()->user()->nombre_usuario}} ¿Quieres de participar en el curso {{$vercurso->nombre_curso}}?</h5>
            </div>
            <div class="modal-footer bg-light border-0">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">No</button>  
                <input type="submit" value="Si" class="btn btn-success">
            </div>
            </form>
        </div>  
    </div>
</div>
<!-- /modalCreateTema-->