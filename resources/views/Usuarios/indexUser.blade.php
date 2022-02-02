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
                  <th>RFC</th>
                  <th>Correo electrónico</th>
                  <th>Roles</th>
                  <th>Permisos</th>
                  <th>Editar</th>
                  <th>Eliminar</th>
              </tr>
              </thead>
              <tbody>
                @foreach ( $user as $us )
                <tr {{Auth::user()->id_Usuario == $us->id_Usuario ? 'bgcolor=#ddd' : ''}}>
                  <td>{{$us->nombre_usuario}}</td>
                  <td>{{$us->apellido_paterno_usuario}}</td>
                  <td>{{$us->apellido_materno_usuario}}</td>
                  <td>{{$us->rfc_usuario}}</td>
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
                  @endif
                  </td> 
                  <td>
                    <a type="submit" class="btn btn-primary" href="{{ route('User.edit',$us->id_Usuario)}}"><i class="far fa-edit"></i></a>
                  </td>
                  <td>
                    <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#deleteModal{{$us->id_Usuario}}"><i class="far fa-trash-alt"></i></button>
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

<br>
@section('cont')
@endsection
@endsection