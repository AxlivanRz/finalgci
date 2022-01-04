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
                <img style="height: 150px;" class="profile-user-img img-fluid img-circle" src="../img/logoar.png" alt="Curso picture">
              </div>

              <h3 class="profile-username text-center">Arduino</h3>

              <p class="text-muted text-center">Curso</p>

              <ul class="list-group list-group-unbordered mb-3">
                <li class="list-group-item">
                  <b>Cantidad de horas</b> <a class="float-right">40</a>
                </li>
                <li class="list-group-item">
                  <b>Participantes registrados</b> <a class="float-right">10</a>
                </li>
              </ul>
              <a href="#" class="btn btn-primary btn-block"><b>Unirme</b></a>
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
              <strong><i class="fas fa-book mr-1"></i> Nombre</strong>

              <p class="text-muted">
                Ing. David Cobos Justo
              </p>

              <hr>

              <strong><i class="fas fa-book mr-1"></i>Profesión</strong>

              <p class="text-muted">Ingeniero Informático</p>
              <hr>

              <strong><i class="fas fa-book mr-1"></i>Cédula profesional</strong>

              <p class="text-muted">Aquí va una cédula...</p>

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
                <div class="card card-primary">
                  <div class="card-header">
                    <h3 class="card-title">Datos Generales del curso</h3>
                  </div>
                  <!-- /.card-header -->
                  <div class="card-body">
                    <strong><i class="fas fa-book mr-1"></i> Tipo de servicio</strong>
      
                    <p class="text-muted">
                      Curso de capacitación 
                    </p>
      
                    <hr>
      
                    <strong><i class="fas fa-book mr-1"></i>Objetivo</strong>
      
                    <p class="text-muted">Iniciar al docente en la arquitectura y el IDE de Arduino donde el objetivo
                      primordial es la obtención de datos mediante Bluetooth y el envío de datos.
                    </p>
                    <hr>
                    <div class="md-2">
                      <ul class="list-group list-group-unbordered mb-3">
                        <li class="list-group-item">
                          <strong><i class="fas fa-book mr-1"></i>Criterios a evaluar</strong>
                        </li>
                        <li class="list-group-item">
                          <b>Investigación</b> <a class="float-right">20</a>
                        </li>
                        <li class="list-group-item">
                          <b>Envío de datos</b> <a class="float-right">20</a>
                        </li>
                        <li class="list-group-item">
                          <b>Recepción de datos</b> <a class="float-right">20</a>
                        </li>
                        <li class="list-group-item">
                          <b>Propuesta de proyecto</b> <a class="float-right">40</a>
                        </li>
                      </ul>
                    </div>
                  </div>
                  <!-- /.card-body -->
                </div>
                <div class="card-footer bg-white">
                  <nav aria-label="Page navigation example">
                    <ul class="pagination justify-content-center">
                      <li class="page-item disabled">
                        <a class="page-link" href="#" tabindex="-1" aria-disabled="true">Previous</a>
                      </li>
                      <li class="page-item"><a class="page-link" href="#">1</a></li>
                      <li class="page-item disabled"><a class="page-link" href="#">2</a></li>
                      <li class="page-item disabled">
                        <a class="page-link" href="#">Next</a>
                      </li>
                    </ul>
                  </nav>
                </div>
              </div>
              <!-- /Cursos en proceso-->
              <!-- Cursos completados -->
              <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">
                <div class="card shadow-sm mb-3" style="max-width: 100%;">
                  <div class="row no-gutters">
                    <div class="col-md-4">
                      <img src="{{asset('img/python.jpg') }}" class="w-50" alt="...">
                    </div>
                    <div class="col-md-8">
                      <div class="card-body container-fluid">
                        <p class="mb-5"><span class="card-title float-left h5">Python</h5></span>
                        <span><a href="{{ asset('files/constanciaCisco.pdf') }}" class="btn btn-outline-success btn-sm float-right" download="contanciaCisco">Constancia</a></span><span><a href="#" class="btn btn-outline-primary btn-sm float-right ml-2">Ver más...</a></span></p>
                        <div class="progress">
                          <div class="progress-bar bg-success" role="progressbar" style="width: 100%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">100%</div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="card shadow-sm mb-3" style="max-width: 100%;">
                  <div class="row no-gutters">
                    <div class="col-md-4">
                      <img src="{{ asset('img/raspberry.jpg') }}" class="w-50" alt="...">
                    </div>
                    <div class="col-md-8">
                      <div class="card-body container-fluid">
                        <p class="mb-5"><span class="card-title float-left h5">Raspberry</h5></span>
                        <span><a href="{{ asset('files/constanciaCisco.pdf') }}" class="btn btn-outline-success btn-sm float-right" download="contanciaCisco">Constancia</a></span><span><a href="#" class="btn btn-outline-primary btn-sm float-right ml-2">Ver más...</a></span></p>
                        <div class="progress">
                          <div class="progress-bar bg-success" role="progressbar" style="width: 100%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">100%</div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="card shadow-sm mb-3" style="max-width: 100%;">
                  <div class="row no-gutters">
                    <div class="col-md-4">
                      <img src="{{asset('img/arduino.jpg') }}" class="mw-100" style="height: 120px" alt="...">
                    </div>
                    <div class="col-md-8">
                      <div class="card-body container-fluid">
                        <p class="mb-5"><span class="card-title float-left h5">Arduino</h5></span>
                        <span><a href="{{ asset('files/constanciaCisco.pdf') }}" class="btn btn-outline-success  btn-sm float-right" download="contanciaCisco">Constancia</a></span><span><a href="#" class="btn btn-outline-primary btn-sm float-right ml-2">Ver más...</a></span></p>
                        <div class="progress">
                          <div class="progress-bar bg-success" role="progressbar" style="width: 100%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">100%</div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="card shadow-sm mb-3" style="max-width: 100%;">
                  <div class="row no-gutters">
                    <div class="col-md-4">
                      <img src="{{asset('img/cisco.jpg') }}" class="mw-100" style="height: 120px" alt="...">
                    </div>
                    <div class="col-md-8">
                      <div class="card-body container-fluid">
                        <p class="mb-5"><span class="card-title float-left h5">Arduino</h5></span>
                        <span><a href="{{ asset('files/constanciaCisco.pdf') }}" class="btn btn-outline-success btn-sm float-right" download="contanciaCisco">Constancia</a></span><span><a href="#" class="btn btn-outline-primary btn-sm float-right ml-2">Ver más...</a></span></p>
                        <div class="progress">
                          <div class="progress-bar bg-success" role="progressbar" style="width: 100%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">100%</div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- Paginación -->  
                <div class="card-footer bg-white">
                  <nav aria-label="Page navigation example">
                    <ul class="pagination justify-content-center">
                      <li class="page-item disabled">
                        <a class="page-link" href="#" tabindex="-1" aria-disabled="true">Previous</a>
                      </li>
                      <li class="page-item"><a class="page-link" href="#">1</a></li>
                      <li class="page-item disabled">
                        <a class="page-link" href="#">Next</a>
                      </li>
                    </ul>
                  </nav>
                </div>
              </div>
              <!-- /Cursos completados -->
              <!-- Cursos no completados -->
              <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                <div class="card shadow-sm mb-3" style="max-width: 100%;">
                  <div class="row no-gutters">
                    <div class="col-md-4">
                      <img src="{{asset('img/python.jpg') }}" class="w-50" alt="...">
                    </div>
                    <div class="col-md-8">
                      <div class="card-body container-fluid">
                        <p class="mb-5"><span class="card-title float-left h5">Python</h5></span>
                        <span class="btn btn-outline-secondary btn-sm float-right">Fecha limite: 23/05/2021</span></p>
                        <div class="progress">
                          <div class="progress-bar bg-danger" role="progressbar" style="width: 100%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">100%</div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
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
                <!-- Paginación -->  
                <div class="card-footer bg-white">
                  <nav aria-label="Page navigation example">
                    <ul class="pagination justify-content-center">
                      <li class="page-item disabled">
                        <a class="page-link" href="#" tabindex="-1" aria-disabled="true">Previous</a>
                      </li>
                      <li class="page-item"><a class="page-link" href="#">1</a></li>
                      <li class="page-item disabled">
                        <a class="page-link" href="#">Next</a>
                      </li>
                    </ul>
                  </nav>
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