<!-- /modalEditInstrumento-->
<div class="modal fade" id="instrumentosEditModal{{$instrumento->id_Criterio}}" role="dialog" tabindex="-1" aria-labelledby="instrumentosLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header bg-success border-0">
                <h4 class="card-title" style="color:#ffffff">Instrumentos</h4>
            <button type="button"  class="close btn-danger" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">x</span>
            </button>
            </div>
            <div class="modal-body bg-light">
                <form action="{{route('Instrumentos.update',$instrumento->id_Criterio)}}" method="POST" ><!--enctype="multipart/form-data", sirve para enviar imagen -->
                    @csrf
                    @method('PUT')
                    <input type="text" id="idCur" name = "idCur" class="form-control" value="{{$instrumento->id_Curso}}" hidden>
                    <div class="form-group">
                        <label>Nombre criterio</label>
                        <textarea class="form-control" id= "nombreEva" name= "nombreEva" >{{$instrumento->nombre_Criterio}}</textarea>
                    </div>
                    <div class="form-group ">
                        <label for="valor">Valor</label>
                        <input type="text" id="valorEva" name="valorEva" class="form-control" value="{{$instrumento->valor}}">
                    </div>    
                    <div class="form-group">
                        <label>Instrumento de evaluación</label>
                        <textarea class="form-control" id="instrumentoEva" name="instrumentoEva" >{{$instrumento->instrumento_Evaluacion}}</textarea>
                    </div>
                    <div class="form-group">
                        <label>Evidencia de evaluación</label>
                        <textarea class="form-control" id="evidenciaEva" name="evidenciaEva" >{{$instrumento->evidencia_Evaluacion}}</textarea>
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
<!-- /modalEditInstrumento-->