@extends('nav.navTecGCD')
@section('content')
<section class="content-header">
    <div class="container-fluid">
    <div class="row mb-2">
    </div>
    </div><!-- /.container-fluid -->
</section>
    <!-- Main content -->

<section class="content">
    <div class="row ">
        <div class = "col-md-1">
        </div>
     <div class="col-md-10">
        <div class="card ">
            <div class="card-header " style="height: 60px; background-color: #09c6f9 ; background-image: linear-gradient(315deg, #09c6f9 10%, #045de9 74%);">
                <h4 class="card-title" style="text-align: center;color:#ffffff">Alta curso</h4>
            </div>
            <br>
            <div class = "col-md-12">
                <form action="{{route('Curso.store')}}" method="POST" ><!--enctype="multipart/form-data", sirve para enviar imagen -->
                    @csrf
                    
                    <div class="form-row">
                        <div class="form-group col-md-3">
                            <label for="nombreCurso">Nombre del curso</label>
                            <input type="text" id="nombreCur" name="nombreCur"class="form-control" required>
                        </div>
                        <div class="form-group col-md-3">
                            <label for="servicioC">Tipo de servicio</label>
                            <input type="text" id="servicioCur" name="servicioCur" class="form-control" required>
                        </div>
                        <div class="form-group col-md-3">
                            <label>Introducción</label>
                            <textarea type="text" class="form-control" id = "introduccionCur" name="introduccionCur"  required></textarea>
                        </div>
                        <div class="form-group col-md-3">
                            <label>Justificación</label>
                            <textarea type="text" class="form-control" id= "justificacionCur" name= "justificacionCur" required></textarea>
                        </div>
                    </div>

                    <div class="form-row">
                        <div class="form-group col-md-3">
                            <label>Objetivo general</label>
                            <textarea type="text" class="form-control" id="objetivoCur" name="objetivoCur" required></textarea>
                        </div>
                        <div class="form-group col-md-3">
                            <label for="especificacion">Especificacion del servicio</label>
                            <input type="text" id="especificacionCur" name="especificacionCur" class="form-control"required>
                        </div>
                        <div class="form-group col-md-3">
                            <label for="duracion">Duración del curso</label>
                            <input type="number" id="duracionCur" name="duracionCur" class="form-control"inputmode="numeric" required>
                        </div>
                        <div class="form-group col-md-3">
                            <label for="fechaI">Fecha de inicio</label>
                            <input type="date" class="form-control" id="fechaI" name="fechaI" data-inputmask-alias="date" data-inputmask-inputformat="dd/mm/yyyy" data-mask="" inputmode="numeric">
                        </div>
                    </div>

                    <div class="form-row">
                        <div class="form-group col-md-4">
                            <label for="horaE">Hora de entrada</label>
                            <input type="time" class="form-control" id="horaE" name="horaE" required>
                        </div>
                        <div class="form-group col-md-4">
                            <label for="horaS">Hora de salida</label>
                            <input type="time" id="horaS" name="horaS" class="form-control"inputmode="numeric" required>
                        </div> 
                        <div class="form-group col-md-4">
                            <label for="fechaF">Fecha final de curso</label>
                            <input type="date" class="form-control" id="fechaF" name="fechaF" data-inputmask-alias="date" data-inputmask-inputformat="dd/mm/yyyy" data-mask="" inputmode="numeric">
                        </div>
                    </div>
                   
                    <div class="form-row">
                        <div class="form-group col-md-5">
                            <label>Elementos didácticos para el desarollo del curso</label>
                            <textarea type="text" class="form-control" id ="elementosCur" name="elementosCur" required></textarea>
                        </div>
                        <div class="form-group col-md-4">
                            <label>Competencias a desarrollar</label>
                            <textarea class="form-control" id="competenciasCur" name="competenciasCur" placeholder="Enter ..."required></textarea>
                        </div>
                        <div class="form-group col-md-3 ">
                            <label>Fuentes de información</label>
                            <textarea class="form-control" id="fuentesCur" name="fuentesCur" placeholder="Enter ..."required></textarea>
                        </div>
                    </div>
            </div>
            <div class="card-footer" style="height: 70px; background-color: #045de9; background-image: linear-gradient(315deg, #045de9 10%, #09c6f9 74%);">
                <a  href="{{ url('/Curso')}}" class="btn btn-secondary ">Cancelar</a>
                <input type="submit" value="Siguiente" class="btn btn-success float-right">       
            </div>
        </form>
        </div>
        <!-- /.card-body -->
     </div>
        <!-- /.card -->
    </div>
    <div class="row"></div>
    <nav aria-label="...">
        <ul class="pagination justify-content-center" >
        <li class="page-item active"  aria-current="page">
            <span class="page-link" >1</span>
        </li>
        <li class="page-item "><a class="page-link " href="{{ url('Curso/Temas/create')}}">2</a></li>
        <li class="page-item disable"><a class="page-link ">3</a></li> 
        </ul>
    </nav>
    </div>
</section>  

@section('cont')
@endsection
@endsection