@extends('blade.navTecGCD')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header " style=" height: 60px;background-color: #ff4e00 ;">
                    <h5 class="card-title" style=" text-align: center; color:#ffffff">Registrar un instructor externo a un curso</h5>
                </div>

                <div class="card-body">
                    <form action=" method="POST" ><!--enctype="multipart/form-data", sirve para enviar imagen -->
                        @csrf 
                        <div class="form-group">
                            <div class="form-group">
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="far fa-address-book">Curso</i></span>
                                    </div>
                                    <input id="nombre" type="text" class="form-control" name="nombre" value="{{ old('curso') }}" required autocomplete="nombre" disabled autofocus>
                                </div>
                                <hr>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="form-group col-md-4">  
                                <label for="nombre">Nombre</label>
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="far fa-address-book"></i></span>
                                    </div>
                                    <input id="nombre" type="text" class="form-control" name="nombre" value="{{ old('nombre') }}" required autocomplete="nombre" autofocus>
                                </div>
                            </div>
                            <div class="form-goup col-md-4">
                                <label for="primer_Apellido">Primer Apellido</label>
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="far fa-address-book"></i></span>
                                    </div>
                                    <input id="primer_Apellido" type="text" class="form-control" name="primer_Apellido" value="{{ old('primer_Apellido') }}" required autocomplete="primer_Apellido" autofocus>
                                </div>
                            </div>
                            <div class="form-group col-md-4">
                                <label for="segundo_Apellido" >Segundo Apellido</label>
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="far fa-address-book"></i></span>
                                    </div>
                                    <input id="segundo_Apellido" type="text" class="form-control" name="segundo_Apellido" value="{{ old('segundo_Apellido') }}" autocomplete="segundo_Apellido" autofocus>
                                </div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="form-group col-md-4">
                                <label for="correo_electronico" >Correo Electronico</label>
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="fas fa-envelope"></i></span>
                                    </div>
                                    <input id="correo_electronico" type="email" class="form-control" name="correo_electronico" value="{{ old('correo_electronico') }}" required autocomplete="correo_electronico">
                                </div>
                            </div>
                            <div class="form-group col-md-4">
                                <label for="contrasena">Contraseña</label>
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend ">
                                    <span class="input-group-text "><i class="fas fa-lock"></i></span>
                                    </div>
                                    <input id="contrasena" type="password" class="form-control" name="contrasena" required autocomplete="contrasena">
                                </div>   
                            </div>
                            <div class="form-group col-md-4">
                                <label for="rol">Rol de Usuario</label>
                                <div class = "input-group mb-3">
                                    <div class="input-group-prepend ">
                                        <span class="input-group-text "><i class="fas fa-user-tag"></i></span>
                                    </div>
                                        <select class = "rol form-control" name="rol" id="rol">
                                            <option value="2" selected="selected">Instructor</option>
                                        </select>
                                </div>
                            </div> 
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-4">
                                <label for="telefono">Telefono</label>
                                <div class = "input-group mb-3">
                                    <div class="input-group-prepend ">
                                        <span class="input-group-text "><i class="fas fa-user-tag"></i></span>
                                    </div>
                                    <input type="tel" id="telefono" name="telefono" value="" class="form-control" required autocompleted=telefono autofocus>
                                </div>
                            </div>
                            <div class="form-group col-md-3">
                                <label for="genero">Genero</label>
                                <div class = "input-group mb-3">
                                    <div class="input-group-prepend ">
                                        <span class="input-group-text "><i class="fas fa-user-tag"></i></span>
                                    </div>
                                    <select class = "rol form-control" name="rol" id="rol">
                                        <option value="M" selected="selected">Masculino</option>
                                        <option value="F" selected="selected">Femenino</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group col-md-5">
                                <label for="constancia">Constancias</label>
                                <div class = "input-group mb-3">
                                    <div class="input-group-prepend ">
                                        <span class="input-group-text "><i class="fas fa-user-tag"></i></span>
                                    </div>
                                    <input type="file" multiple name="constancia" class="form-control" id="constancia">
                                </div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class=" col-md-2">
                            </div>
                            <div class="form-group col-md-9" id="permisosbox" >
                                <label for="rol" >Permisos</label>             
                                <div class ="input-group mb-9" id="permisos_checkbox_list" >
                                </div>
                            </div> 
                        </div>
                        <div class="form-group row mb-0">
                            <div class="col-md-7 offset-md-5">
                                <button type="submit" class="btn btn-primary">
                                    Crear
                                </button>
                            </div>
                        </div>    
                    </form>
                    @section('js_user_page')
                        <script>
                            $(document).ready(function(){
                                var permisosbox = $('#permisosbox');
                                var permisos_checkbox_list = $('#permisos_checkbox_list');

                                permisosbox.hide(); 
                                $('#rol').on('change', function(){
                                    var rol = $(this).find(':selected');
                                    var rol_id = rol.data('rol-id');
                                    var rol_slug = rol.data('rol-slug'); 
                                    
                                    permisos_checkbox_list.empty();
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
                                                
                                                '<div class = "col-md-2">' + 
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
