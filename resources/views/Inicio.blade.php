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
                <img style="height: 150px;" class="profile-user-img img-fluid img-circle" src="{{asset('storage').'/'.auth()->user()->imagen_usuario}}" alt="User profile picture">
              </div>

              <h3 class="profile-username text-center">{{auth()->user()->nombre_usuario}} {{auth()->user()->apellido_paterno_usuario}}</h3>
              <p class="text-muted text-center">Ingeniería Informática</p>

              <ul class="list-group list-group-unbordered mb-3">
                <li class="list-group-item">
                  <b>Máximo grado de estudios</b> <a class="float-right">Licenciatura</a>
                </li>
              </ul>
              <a href="{{ route('edit',auth()->user()->id_Usuario)}}" class="btn btn-primary btn-block"><b>Editar</b></a>
            </div>
            <!-- /.card-body -->
          </div>
          <!-- /.card -->

          <!-- About Me Box -->
          <div class="card card-primary">
            <div class="card-header">
              <h3 class="card-title">Datos</h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
              <strong><i class="fas fa-book mr-1"></i> Correo Electronico </strong>
              <p class="text-muted">
                {{auth()->user()->correo_electronico}}
              </p>
              <hr>
              <strong><i class="fas fa-book mr-1"></i> CURP </strong>
              <p class="text-muted">
                {{auth()->user()->curp_usuario}}
              </p>
            </div>
            <!-- /.card-body -->
          </div>
          <!-- /.card -->
        </div>
        <!-- /.col -->
        <div class="col-md-9">
          <div class="card">
        </div>
        <div class="card text-center mt-3">
          <div class="card-header">
            <ul class="nav nav-tabs card-header-tabs">
              <li class="nav-item" role="presentation">
                <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Cursos disponibles</a>
              </li>
              <li class="nav-item" role="presentation">
                <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Cursos en progreso</a>
              </li>
            </ul>
          </div>
          <div class="card-body">
            <!-- Cursos en proceso -->
            <div class="tab-content" id="myTabContent">
              <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                @if ($curso->isNotEmpty())
                  @foreach ( $curso as $cur )
                    <div class="card shadow-sm mb-3" style="max-width: 100%;">
                      <div class="row no-gutters">
                        <div class="col-md-3">
                          <br>
                          <img src="{{asset('img/logoa.png') }}" style="height: 150px;">
                        </div>                        
                        <div class="col-md-8">
                          <div class="card-body container-fluid">
                              <p class="mb-5"><span class="card-title float-left h5">{{$cur->nombre_curso}}</h5></span>
                                <a href="{{ route('Curso.info',$cur->id_Curso)}}" class="btn btn-outline-primary btn-sm float-right">Ver más...</a>
                              </p>
                              <div class="text">
                                <p class="text-left">Objetivo General: {{$cur->objetivo_General}}</p>
                                <p class="text-left">Modalidad: {{$cur->tipo_modalidad_curso}}</p>
                                <p class="text-left">Fecha: {{$cur->fecha_inicio_curso}} - {{$cur->fecha_finalizacion_curso}}</p>                          
                              </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  @endforeach
                @else
                  <div class="card shadow-sm mb-3" style="max-width: 100%;">
                    <div class="row no-gutters">
                      <div class="col-md-3">
                        <br>
                        <img src="{{asset('img/logoa.png') }}" style="height: 150px;">
                      </div>                        
                      <div class="col-md-8">
                        <div class="card-body container-fluid">
                            <p class="mb-5"><span class="card-title float-left h5">Aún no hay cursos...</h5></span>
                            </p>
                        </div>
                      </div>
                    </div>
                  </div>
                @endif
                
              </div>
              <!-- /Cursos en proceso-->
              <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                <div class="card shadow-sm mb-3" style="max-width: 100%;">
                  <div class="row no-gutters">
                    <div class="col-md-4">
                      <img src="{{asset('img/arduino.jpg') }}" class="w-50" alt="...">
                    </div>
                    <div class="col-md-8">
                      <div class="card-body container-fluid">
                        <p class="mb-5"><span class="card-title float-left h5">Arduino</h5></span>
                        <span class="btn btn-outline-secondary btn-sm float-right">Fecha limite: 17/05/2021</span></p>
                        <div class="progress">
                          <div class="progress-bar bg-danger" role="progressbar" style="width: 100%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">100%</div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>                              
              </div>
              <!-- /Cursos no completados -->  
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