@extends('nav.navTecGCD')
@section('content')
<br>
<div class = "col-md-12">
  <div class = "row">
    <div class = "col-md-1">
    </div>
    <div class = "col-md-10">
      <div class="card ">
        <div class="card-header border-transparent d-flex justify-content-between align-items-center"
        style="height: 60px; background-color: #ff4e00 ; background-image: linear-gradient(315deg, #ff4e00 10%, #ffbb00 74%);">
          <h3 class="card-title" style="color:#ffffff">Temas</h3>
          <div class="card-tools">
            @canany(['isAdmin', 'isTeacher'])
              <a type="submit" class="btn btn-success btn-tool"  href="{{ url('/Curso/create')}}">
                <i class="far fa-plus-square"></i>
              </a>
            @endcanany
            <button type="button" class="btn btn-light btn-tool btn-left" data-toggle="modal" data-target="#informacion">
              <i class="far fa-question-circle"></i>
            </button>
            <button type="button" class="btn btn-dark btn-tool" data-toggle="collapse" data-target="#collapseTemas" aria-expanded="true" aria-controls="collapseExample">
              <i class="fas fa-minus"></i>
            </button>
          </div>
        </div>
        <!-- /.card-header -->
      <div class="collapse show" id="collapseTemas">
        <div class="card-body p-0">
          <div class="table-responsive">
            <table class="table m-0">
              <thead>
              <tr>
                  <th>Nombre del tema</th>
                  <th>Tiempo programado</th>
                  <th>Actividades de aprendizaje</th>
                  <th>Editar</th>
              </tr>
              </thead>
              <tbody>
                @foreach ( $temas as $tema )
                <tr>
                  <td>{{$tema->nombre_TemaSub}}</td>
                  <td>{{$tema->tiempo_Programado}}</td>
                  <td>{{$tema->actividades_aprendizaje}}</td>
                  <td>
                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#temasEditModal{{$tema->id_Tcontenido}}">
                        <i class="far fa-edit"></i>
                    </button> 
                  </td>
                </tr>
                @include('Temas.edit')
                @endforeach
              </tbody>
            </table>
          </div>
          <!-- /.table-responsive -->
        </div>
        <!-- /.card-body -->
      </div>
    </div>
    </div>
  </div>
</div>
<br>
<div class = "col-md-12">
  <div class = "row">
    <div class = "col-md-1">
    </div>
    <div class = "col-md-10">
      <div class="card ">
        <div class="card-header border-transparent d-flex justify-content-between align-items-center"
        style="height: 60px; background-color: #ffbb00 ; background-image: linear-gradient(315deg, #ffbb00 10%, #ff4e00 74%);">
          <h3 class="card-title" style="color:#ffffff">Instrumentos de evaluación</h3>
          <div class="card-tools">
            @canany(['isAdmin', 'isTeacher'])
              <a type="submit" class="btn btn-success btn-tool"  href="{{ url('/Curso/create')}}">
                <i class="far fa-plus-square"></i>
              </a>
            @endcanany
            <button type="button" class="btn btn-light btn-tool btn-left" data-toggle="modal" data-target="#informacion">
              <i class="far fa-question-circle"></i>
            </button>
            <button type="button" class="btn btn-dark btn-tool" data-toggle="collapse" data-target="#collapseInstrumentos" aria-expanded="true" aria-controls="collapseExample">
              <i class="fas fa-minus"></i>
            </button>
          </div>
        </div>
        <!-- /.card-header -->
      <div class="collapse show" id="collapseInstrumentos">
        <div class="card-body p-0">
          <div class="table-responsive">
            <table class="table m-0">
              <thead>
              <tr>
                  <th>Nombre del Instrumento</th>
                  <th>Valor</th>
                  <th>Instrumento de evaluación</th>
                  <th>Evidencia de evaluación</th>
                  <th>Editar</th>
              </tr>
              </thead>
              <tbody>
                @foreach ( $instrumentos as $instrumento )
                <tr>
                  <td>{{$instrumento->nombre_Criterio}}</td>
                  <td>{{$instrumento->valor}}</td>
                  <td>{{$instrumento->instrumento_Evaluacion}}</td>
                  <td>{{$instrumento->evidencia_Evaluacion}}</td>
                  <td>
                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#instrumentosEditModal{{$instrumento->id_Criterio}}">
                        <i class="far fa-edit"></i>
                    </button> 
                  </td>
                </tr>
                @include('Instrumentos.edit')
                @endforeach
              </tbody>
            </table>
          </div>
          <!-- /.table-responsive -->
        </div>
        <!-- /.card-body -->
      </div>
    </div>
    </div>
  </div>
</div>

<!-- /modalInformacion-->
<div class="modal fade" id="informacion" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="informacionLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header bg-warning">
        <h5 class="modal-title" id="staticBackdropLabel">Informacion de ayuda</h5>
        <button type="button"  class="close btn-danger" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
       
          <div class="form-group">
            <label>Informacion</label>
           Aquí va la informacion relacionada con el llenado del curso y sobre la accion de los botones
          </div>
      </div>
      <div class="modal-footer bg-warning">
        <button type="button" class="btn btn-danger" data-dismiss="modal">Cancelar</button>
        <button type="button" class="btn btn-success" data-dismiss="modal">Aceptar</button>
      </div>
    </div>  
  </div>
</div>
<!-- /modalInstrumentos-->
<br>

@section('cont')
@endsection
@endsection