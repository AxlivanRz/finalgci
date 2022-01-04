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
        style="background-color: #09c6f9 ; background-image: linear-gradient(315deg, #09c6f9 10%, #045de9 74%);">
          <h3 class="card-title" style="color:#ffffff">Cursos</h3>
          <div class="card-tools">
            <a type="submit" class="btn btn-success btn-tool"  href="{{ url('/Curso/create')}}">
              <i class="far fa-plus-square"></i>
            </a>
            <button type="button" class="btn btn-warning btn-tool btn-left" data-toggle="modal" data-target="#informacion">
              <i class="far fa-question-circle"></i>
            </button>
            <button type="button" class="btn btn-dark btn-tool" data-toggle="collapse" data-target="#collapseExample" aria-expanded="true" aria-controls="collapseExample">
              <i class="fas fa-minus"></i>
            </button>
          </div>
        </div>
        <!-- /.card-header -->
      <div class="collapse show
      " id="collapseExample">
        <div class="card-body p-0">
          <div class="table-responsive">
            <table class="table m-0">
              <thead>
              <tr>
                  <th>Nombre</th>
                  <th>Tipo de servicio</th>
                  <th>Objetivo general</th>
                  <th>Duracion (Hrs)</th>
                  <th>Competencias a desarrollar</th>
                  <th>Editar</th>
                  <th >Temas</th>
                  <th >Instrumentos de evaluación</th>
                  <th>Instructor</th>
              </tr>
              </thead>
              <tbody>
                @foreach ( $cursos as $cur )
                <tr>
                  <td>{{$cur->nombre_Curso}}</td>
                  <td>{{$cur->nombre_Servicio}}</td>
                  <td>{{$cur->objetivo_General}}</td>
                  <td>{{$cur->duracion_HCurso}}</td>
                  <td>{{$cur->competencias_Desarrollar}}</td>  
                  <td>
                    <a type="submit" href="{{ route('Curso.edit',$cur->id_Curso)}}"  class="btn btn-primary float-right"><i class="far fa-edit"></i></a>
                  </td>
                  <td>
                    <a type="button" class="btn btn-info" data-toggle="modal" data-target="#temas"><i class="far fa-plus-square"></i></a>
                  </td>
                  <td >
                    <center><a type="button" class="btn btn-success" data-toggle="modal" data-target="#instrumentos" ><i class="far fa-plus-square"></i></a></center>  
                  </td>
                  <td>
                    <a type="submit" href="{{ route('curso.instructor',$cur->id_Curso)}}"  class="btn btn-primary float-right"><i class="far fa-edit"></i></a> 
                  </td>
                </tr>
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
<!-- /modalTemas-->
<div class="modal fade" id="temas" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="temasLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header bg-success">
        <h5 class="modal-title" id="staticBackdropLabel">Contenido Curso</h5>
        <button type="button"  class="close btn-danger" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
       
          <div class="form-group " >
              <label >Nombre del Tema/Subtema</label>
              <textarea class="form-control" id = "nombreInst" name = "nombreInst" placeholder="Enter ..."></textarea>
          </div>
          <div class="form-group">
              <label for="NomCurso">Tiempo programado</label>
              <input type="text" id="tiempoInst" name = "nombreInst" class="form-control">
          </div>
          <div class="form-group">
              <label>Actividades de aprendizaje</label>
              <textarea class="form-control" id = "actividadesInst" name = "actividadesInst" placeholder="Enter ..."></textarea>
          </div>

      </div>
      <div class="modal-footer bg-success">
        <button type="button" class="btn btn-danger" data-dismiss="modal">Cancelar</button>
        <button type="button" class="btn btn-info">Agregar</button>
      </div>
    </div>  
  </div>
</div>
<!-- /modalTemas-->



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