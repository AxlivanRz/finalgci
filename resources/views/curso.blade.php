@extends('nav.navTecGCD')
@section('content')
<section class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-3">
          <!-- Profile Image -->
          <div class="card card-primary card-outline">
            <div class="card-body box-profile">
              <div class="text-center">
                <img style="height: 150px;" class="profile-user-img img-fluid img-circle" src="{{asset('img/logoa.png') }}" alt="Curso picture">
              </div>
      
              <h3 class="profile-username text-center">{{$vercurso->nombre_curso}}</h3>
              <p class="text-muted text-center">{{$vercurso->tipo_modalidad_curso}}</p>
              <ul class="list-group list-group-unbordered mb-3">
                <li class="list-group-item">
                  <b>Cantidad de horas</b> <a class="float-right">{{$vercurso->duracion_horas_curso}}</a>
                </li>
               @if ($lista->isNotEmpty())
                <li class="list-group-item">
                  <b>Participantes registrados</b> <a href="{{route ('Participante.lista',$vercurso->id_Curso)}}" class="float-right">{{count($lista)}}</a>
                </li>
               @else
                <li class="list-group-item">
                  <b>Participantes registrados</b> <a class="float-right">0</a>
                </li>
               @endif
                
              </ul>
              <button type="button" class="btn btn-danger btn-block" data-toggle="modal" data-target="#createModal{{$vercurso->id_Curso}}">
                <b>Unirme</b>
              </button> 
              @include('Participantes.create')
            </div>
            <!-- /.card-body -->
          </div>
          <!-- /.card -->
          <!-- About Me Box -->
          <div class="card card-primary">
            <div class="card-header">
              <h3 class="card-title">Datos Instructor</h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
              <strong><i class="fas fa-book mr-1"  style = "color: rgb(21, 101, 250);"></i>Nombre</strong>
              <p class="text-muted">
                <a href="{{route('instructor.perfil', $vercurso->id_Usuario)}}">Ing. David Cobos Justo</a>
              </p>
              <hr>
              <strong><i class="fas fa-book mr-1"  style = "color: rgb(21, 101, 250);"></i>Profesión</strong>
              <p class="text-muted">{{$academico->nivel_academico}}</p>
              <hr>
              <strong><i class="fas fa-book mr-1"  style = "color: rgb(21, 101, 250);"></i>Cédula profesional</strong>
              <p class="text-muted">{{$academico->cedula_profesional}}</p>
            </div>
            <!-- /.card-body -->
          </div>
          <!-- /.card -->
        </div>
        <!-- /.col -->
        <div class="col-md-9">
          <div class="card">
        </div>
        <div class="card">
          <div class="card-body">
            <!-- Cursos en proceso -->
            <div class="tab-content" id="myTabContent">
              <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                <div class="card card-primary">
                  <div class="card-header">
                    <h3 class="card-title text-center">Datos Generales del curso</h3>
                  </div>
                  <!-- /.card-header -->
                  <div class="card-body">
                    <h5><strong><i class="fas fa-angle-right fa-1x" style = "color: red;"></i> Introducción</strong></h5>
                    <h6><p class="text-muted">{{$vercurso->introduccion}}</p></h5>      
                    <hr>
                    <h5><strong><i class="fas fa-angle-right fa-1x" style = "color: red;"></i> Objetivo</strong></h5>
                    <h6><p class="text-muted">{{$vercurso->objetivo_General}}</p></h6>
                    <hr>
                    <h5><strong><i class="fas fa-angle-right fa-1x" style = "color: red;"></i> Requerimientos para el desarrollo del curso</strong></h5>
                    <h6><p class="text-muted">{{$vercurso->elementos_Desarrollo_Curso}}</p></h6>
                    <hr>
                    <div class="form-group row">
                      @foreach ($temas as $tema )
                        <div class="form-group col-md-4">
                          <ul class="list-group list-group-unbordered mb-1">
                            <li class="list-group-item">
                              <strong><i class="fas fa-book mr-1" style = "color: rgb(21, 101, 250);"></i>Tema: {{$tema->nombre_TemaSub}}</strong>
                            </li>
                            <li class="list-group-item">
                              <a >Tiempo programado: {{$tema->tiempo_Programado}}</a>
                              <p>Actividades: {{$tema->actividades_aprendizaje}}</p>
                            </li>
                          </ul>
                        </div>                      
                      @endforeach
                    </div>
                    <div class="form-group row">
                      @foreach ($instrumentos as $instrumento )
                        <div class="form-group col-md-4">
                          <ul class="list-group list-group-unbordered mb-3">
                            <li class="list-group-item">
                              <strong><i class="fas fa-book mr-1" style = "color: rgb(21, 101, 250);"></i>Criterios a evaluar</strong>
                            </li>
                            <li class="list-group-item">
                              <b>{{$instrumento->nombre_Criterio}}</b> <a class="float-right">Valor: {{$instrumento->valor}}</a>
                            </li>
                          </ul>
                        </div>
                      @endforeach
                    </div>
                  </div>
                  <!-- /.card-body -->
                </div>
              </div>
              <!-- /Cursos en proceso-->
            </div>
          </div>
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </div><!-- /.container-fluid -->
  </section>
  <br>
@section('cont')
@endsection
@endsection