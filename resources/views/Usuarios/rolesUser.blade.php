@extends('nav.navTecGCD')
@section('content')
<div class="container">
  <div class="row justify-content-center">
    <div class="col-md-10  ">
        <div class="card">
            <div class="card-header " style=" height: 60px;background-color: #ff4e00 ;">
                <h5 class="card-title" style=" text-align: center; color:#ffffff">Crear Usuario</h5>
            </div>

            <div class="card-body">
                <form action="{{route('User.update',$user->id_Usuario)}}" method="POST" ><!--enctype="multipart/form-data", sirve para enviar imagen -->
                    @csrf 
                    @method('PUT')
                    <div class="form-group row">
                        <div class="form-group col-md-2">  
                            <label for="nombre">Nombre</label>
                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                <span class="input-group-text"><i class="far fa-address-card"></i></span>
                                </div>
                                <input id="nombre" type="text" class="form-control" name="nombre" value="{{ $user->nombre_usuario }}" disabled>
                            </div>
                        </div>
                        <div class="form-goup col-md-3">
                            <label for="primer_Apellido">Primer Apellido</label>
                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                <span class="input-group-text"><i class="far fa-address-card"></i></span>
                                </div>
                                <input id="primer_Apellido" type="text" class="form-control" name="primer_Apellido" value="{{ $user->apellido_paterno_usuario }}" disabled>
                            </div>
                        </div>
                        <div class="form-group col-md-3">
                            <label for="segundo_Apellido" >Segundo Apellido</label>
                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                <span class="input-group-text"><i class="far fa-address-card"></i></span>
                                </div>
                                <input id="segundo_Apellido" type="text" class="form-control" name="segundo_Apellido" value="{{ $user->apellido_materno_usuario }}" disabled>
                            </div>
                        </div>
                        <div class="form-group col-md-4">
                            <label for="rfc" >RFC</label>
                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                <span class="input-group-text"><i class="far fa-address-card"></i></span>
                                </div>
                                <input id="rfc" type="text" class="form-control" name="rfc" value="{{ $user->rfc_usuario }}" disabled>
                            </div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="form-group col-md-5">
                          <label for="correo_electronico" >Correo Electronico</label>
                          <div class="input-group mb-3">
                              <div class="input-group-prepend">
                              <span class="input-group-text"><i class="fas fa-envelope"></i></span>
                              </div>
                              <input id="correo_electronico" type="email" class="form-control" name="correo_electronico" value="{{$user->correo_electronico}}" disabled>
                          </div>
                        </div>
                        <div class="form-group col-md-4">
                            <label for="rol">Rol de Usuario</label>
                            <div class = "input-group mb-3">
                                <div class="input-group-prepend ">
                                <span class="input-group-text "><i class="fas fa-user-tag"></i></span>
                                </div>
                                  <select class = "rol form-control" name="rol" id="rol">
                                      <option value="0" >Seleccione un valor</option>
                                      @foreach ($roles as $rol)
                                      <option data-rol-id="{{$rol->id_Rol}}" data-rol-slug="{{$rol->slug}}"
                                      value="{{$rol->id_Rol}}" {{ $user->roles->isEmpty() || $rol->nombre_Rol != $userRol->nombre_Rol ? "" : "selected" }} > {{$rol->nombre_Rol}}</option>  
                                      @endforeach
                                  </select>
                            </div>
                        </div> 
                    </div>
                    <div class="form-group row">
                        <div class="col-md-2">
                        </div>
                        <div id="permisosbox" class="form-group col-md-4" >
                            <label for="rol" >Permisos nuevos</label>             
                            <div id="permisos_checkbox_list" >
                            </div>
                        </div> 
                        @if ($user->permisos->isNotEmpty())
                          @if ($rolPermiso !=null)
                            <div id="userpermisosbox" class="form-group col-md-4">
                                <label for="rol" >Permisos</label>             
                                <div id="userpermisos_checkbox_list" >
                                  @foreach ( $rolPermiso as $permiso )
                                    <div class = "custom-control custom-checkbox" > 
                                      <input class="custom-control-input" type="checkbox" name="permisos[]" id = "{{$permiso->slug}}"
                                      value = "{{$permiso->id_Permiso}}" {{ in_array($permiso->id_Permiso, $userPermisos->pluck('id_Permiso')->toArray() ) ? 'checked="checked"' : ''}} disabled> 
                                      <label class = "custom-control-label"  for="{{$permiso->slug}}"> {{$permiso->nombre_Permiso}} </label>
                                  </div>
                                  @endforeach
                                </div>
                            </div>  
                          @endif
                        @endif
                    </div>
                    <div class="form-group row">
                        <div class="col-md-1">
                          <a href="#" class="btn btn-dark">
                            cancelar
                          </a>
                        </div>
                        <div class="col-md-2 offset-md-9">
                            <button type="submit" class="btn btn-primary">
                              Editar
                            </button>
                        </div> 
                      </div>    
                </form>
                @section('js_user_page')
                    <script>
                        $(document).ready(function(){
                            var permisosbox = $('#permisosbox');
                            var permisos_checkbox_list = $('#permisos_checkbox_list');
                            var userpermisos_checkbox_list = $('#userpermisos_checkbox_list');
                            var userpermisosbox = $('#userpermisosbox');
                            permisosbox.hide(); 
                            $('#rol').on('change', function(){
                                var rol  = $(this).find(':selected');
                                var rol_id = rol.data('rol-id');
                                var rol_slug = rol.data('rol-slug'); 
                                userpermisos_checkbox_list.empty();
                                permisos_checkbox_list.empty();
                                userpermisosbox.hide();
                                $.ajax({
                                    url: "/User/create",
                                    method: 'get',
                                    dataType: 'json', 
                                    data: { 
                                        id_Rol:  rol_id, 
                                        slug: rol_slug,
                                    } 
                                }).done(function(data){
                                    console.log(data);
                                    permisosbox.show(); 

                                    $.each(data, function(index, element){
                                        $(permisos_checkbox_list).append(
                                        '<div >' + 
                                            '<input class="form-control" type="hidden" name="permisos[]" id = "'+ element.slug +'" value = "'+ element.id_Permiso +'">' + 
                                            '<label class = "badge badge-success"  for="'+ element.slug +'">' + element.nombre_Permiso + '</label>' +
                                        '</div>'
                                        );
                                    }); 
                                });
                            }); 
                        });
                    </script>
                @endsection
              </div>
        </div>
    </div>
  </div>
</div>
<br> 

@section('cont')
@endsection
@endsection
