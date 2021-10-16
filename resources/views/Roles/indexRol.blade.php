@extends('nav.navTecGCD')
@section('content')
<br>
<div class = "col-md-12">
  <div class = "row">
    <div class = "col-md-2">
    </div>
    <div class = "col-md-8">
      <div class="card ">
        <div class="card-header border-transparent d-flex justify-content-between align-items-center"
        style="background-color: #09c6f9 ; background-image: linear-gradient(315deg, #09c6f9 10%, #045de9 74%);">
          <h3 class="card-title" style="color:#ffffff">Roles</h3>
          <div class="card-tools">
            @include('roles.createRol')
            <button type="button" class="btn btn-success" data-toggle="modal" data-target="#createModal">
              <i class="far fa-plus-square"></i>
            </button>
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
                  <th>ID</th>
                  <th>Nombre</th>
                  <th>Slug</th>
                  <th>Permisos</th>
                  <th>Herramientas</th>
              </tr>
              </thead>
              <tbody>
                @foreach ( $rol as $rl )
                <tr>
                  <td>{{$rl->id_Rol}}</td>
                  <td>{{$rl->nombre_Rol}}</td>
                  <td>{{$rl->slug}}</td>
                  <td>
                    @if ($rl->permisos != null)
                    @foreach ( $rl->permisos as $permiso )
                    <span class="badge badge-success">
                      {{$permiso->nombre_Permiso}}  
                    </span>   
                    @endforeach                     
                    @endif
                  </td>
                    
                  <td>
                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#editModal{{$rl->id_Rol}}">
                      <i class="far fa-edit"></i>
                    </button>
                    <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#deleteModal{{$rl->id_Rol}}">
                      <i class="far fa-trash-alt"></i>
                    </button>
                  </td>
                </tr>
                @include('roles.editRol')
                @include('roles.destroyRol')
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

@section('css')
<link rel="stylesheet" href="../css/bootstrap-tagsinput.css">  

@endsection

@section('js')
<script src="../js/bootstrap-tagsinput.js"></script>
@endsection
<br>
@section('cont')
@endsection
@endsection