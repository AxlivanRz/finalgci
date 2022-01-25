<!-- /modalCreateTema-->
<div class="modal fade" id="temasModal{{$cur->id_Curso}}" role="dialog" tabindex="-1" aria-labelledby="temasLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header bg-success border-0">
                <h4 class="card-title" style="color:#ffffff">Contenido del curso</h4>
            <button type="button"  class="close btn-danger" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">x</span>
            </button>
            </div>
            <div class="modal-body bg-light">
                <form action="{{route('Temas.store')}}" method="POST">
                    @csrf
                    <input type="text" id="idCur" name = "idCur" class="form-control" value="{{$cur->id_Curso}}">
                    <div class="form-group " >
                        <label >Nombre del Tema/Subtema</label>
                        <input type="text" class="form-control" id = "nombreInst" name = "nombreInst" >
                    </div>
                    <div class="form-group">
                        <label for="NomCurso">Tiempo programado</label>
                        <input type="text" id="tiempoInst" name = "tiempoInst" class="form-control">
                    </div>
                    <div class="form-group " >  
                        <label >Actividades de aprendizaje</label>
                        <textarea class="form-control" id = "actividades" name = "actividades" placeholder="Enter ...">
                        </textarea>
                    </div>
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