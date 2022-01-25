<!-- /modalCreateInstrumento-->
<div class="modal fade" id="instrumentosModal{{$cur->id_Curso}}" role="dialog" tabindex="-1" aria-labelledby="instrumentosLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header bg-success border-0">
                <h4 class="card-title" style="color:#ffffff">Instrumentos</h4>
            <button type="button"  class="close btn-danger" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">x</span>
            </button>
            </div>
            <div class="modal-body bg-light">
                <form action="{{route('Instrumentos.store')}}" method="POST" ><!--enctype="multipart/form-data", sirve para enviar imagen -->
                    @csrf
                    <input type="text" id="idCur" name = "idCur" class="form-control" value="{{$cur->id_Curso}}" hidden>
                    <div class="form-group">
                        <label>Nombre criterio</label>
                        <textarea class="form-control" id= "nombreEva" name= "nombreEva" ></textarea>
                    </div>
                    <div class="form-group ">
                        <label for="valor">Valor</label>
                        <input type="text" id="valorEva" name="valorEva" class="form-control">
                    </div>    
                    <div class="form-group">
                        <label>Instrumento de evaluación</label>
                        <textarea class="form-control" id="instrumentoEva" name="instrumentoEva" ></textarea>
                    </div>
                    <div class="form-group">
                        <label>Evidencia de evaluación</label>
                        <textarea class="form-control" id="evidenciaEva" name="evidenciaEva" ></textarea>
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
<!-- /modalCreateInstrumento-->