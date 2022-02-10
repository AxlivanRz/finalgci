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
        style="height: 60px; background-color: #ffbb00 ; background-image: linear-gradient(315deg, #ffbb00 10%, #ff4e00 74%);">
          <h3 class="card-title" style="color:#ffffff">Cursos</h3>
          <div class="card-tools">
            @canany(['isAdmin', 'isTeacher'])
              <a type="submit" class="btn btn-success btn-tool"  href="{{ url('/Curso/create')}}">
                <i class="far fa-plus-square"></i>
              </a>
            @endcanany
            <button type="button" class="btn btn-light btn-tool btn-left" data-toggle="modal" data-target="#informacion">
              <i class="far fa-question-circle"></i>
            </button>
            <button type="button" class="btn btn-dark btn-tool" data-toggle="collapse" data-target="#collapseExample" aria-expanded="true" aria-controls="collapseExample">
              <i class="fas fa-minus"></i>
            </button>
          </div>
        </div>
        <!-- /.card-header -->
      <div class="collapse show" id="collapseExample">
        <div class="card-body p-0">
          <div class="table-responsive">
            <table class="table m-0">
              <thead>
              <tr>
                  <th>Nombre</th>
                  <th>Modalidad</th>
                  <th>Objetivo general</th>
                  <th>Duracion (Hrs)</th>
                  <th>Competencias a desarrollar</th>
                  <th>Editar</th>
                  <th >Temas</th>
                  <th >Instrumentos de evaluación</th>
              </tr>
              </thead>
              <tbody>
                @foreach ( $curso as $cur )
                <tr>
                  <td>{{$cur->nombre_curso}}</td>
                  <td>{{$cur->tipo_servicio_curso}}</td>
                  <td>{{$cur->objetivo_General}}</td> 
                  <td>{{$cur->duracion_horas_curso}}</td>
                  <td>{{$cur->competencias_Desarrollar}}</td>
                  <td>
                    <a type="submit" href="{{ route('Curso.edit',$cur->id_Curso)}}"  class="btn btn-primary float-right"><i class="far fa-edit"></i></a>
                  </td>
                  <td>
                    <button type="button" class="btn btn-success" data-toggle="modal" data-target="#temasModal{{$cur->id_Curso}}">
                      <i class="far fa-plus-square"></i>
                    </button> 
                  </td>
                  <td>
                    <button type="button" class="btn btn-success" data-toggle="modal" data-target="#instrumentosModal{{$cur->id_Curso}}">
                      <i class="far fa-plus-square"></i>
                    </button>
                    <a type="submit" href="{{ route('Instrumentos.show',$cur->id_Curso)}}"  class="btn btn-info"><i class="fa fa-eye"></i></a>
                  </td>
                  <td>
                    <a type="submit" href="{{ route('select.instructor',$cur->id_Curso)}}"  class="btn btn-primary float-right"><i class="far fa-edit"></i></a>
                  </td>
                </tr>
                @include('Temas.create')
                @include('Instrumentos.create')
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