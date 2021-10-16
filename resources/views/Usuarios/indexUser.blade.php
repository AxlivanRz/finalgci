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
          <h3 class="card-title" style="color:#ffffff">Usuarios</h3>
          <div class="card-tools">
            <a type="submit" class="btn btn-success btn-tool"  href="{{ url('/User/create')}}">
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
      <div class="collapse show" id="collapseExample">
        <div class="card-body p-0">
          <div class="table-responsive">
            <table class="table m-0">
              <thead>
              <tr>
                  <th>Nombre</th>
                  <th>Primer Apellido</th>
                  <th>Segundo Apellido</th>
                  <th>Correo electrónico</th>
                  <th>Roles</th>
                  <th>Permisos</th>
                  <th>Acciones</th>
              </tr>
              </thead>
              <tbody>
                @foreach ( $user as $us )
                <tr>
                  <td>{{$us->nombre}}</td>
                  <td>{{$us->primer_Apellido}}</td>
                  <td>{{$us->segundo_Apellido}}</td>
                  <td>{{$us->correo_electronico}}</td>
                  <td>
                    @if ( $us->roles->isNotEmpty())
                      @foreach ( $us->roles as $rol )
                      <span class="badge badge-success">
                        {{$rol->nombre_Rol}}
                      </span>
                      @endforeach
                    @else
                    <span class="badge badge-danger">Sin rol</span>
                    @endif
                  </td> 
                  <td>@if ( $us->permisos->isNotEmpty())
                    @foreach ( $us->permisos as $per )
                    <span class="badge badge-info">
                      {{$per->nombre_Permiso}}
                    </span>
                    @endforeach
                  @else
                  <span class="badge badge-danger">Sin permisos</span>
                  @endif</td>  
                  <td>
                    <a type="submit" class="btn btn-primary" href="{{ route('User.edit',$us->id_Usuario)}}">
                        <i class="far fa-edit"></i>
                    </a>
                      <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#deleteModal{{$us->id_Usuario}}">
                        <i class="far fa-trash-alt"></i>
                      </button>
                  </td>
                </tr>
                @include('usuarios.destroyUser')
                
                
                @endforeach
              </tbody>
            </table>
          </div>
          <!-- /.table-responsive  -->
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