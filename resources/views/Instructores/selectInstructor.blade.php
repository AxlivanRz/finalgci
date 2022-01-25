@extends('blade.navTecGCD')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header " style=" height: 60px;background-color: #ff4e00 ;">
                    <h5 class="card-title" style=" text-align: center; color:#ffffff">Asignar instructor a un usuario</h5>
                </div>

                <div class="card-body">
                    <!--Esto enviara a la tabla del usuario, solo si el instructor cumple con los requisitos necesarios para instruir o impartir el respectivo usuario-->
                    <form action="{{route('save.instructor'), $curso}}" method="POST" ><!--enctype="multipart/form-data", sirve para enviar imagen -->
                        @csrf 
                        @method('put')
                        <div class="form-row mx-auto">
                            <div class="form-group col-md-4">
                                <div class="input-group mb-1">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="far fa-address-book">CURP</i></span>
                                    </div>
                                    <input type="text" value="{{old('curp_usuario')}}" class="form-control" name="curp_usuario" id="curp_usuario" autofocus>
                                </div>
                            </div>
                            <div class="form-group col-md-8">
                                <div class="input-group mb-1">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="far fa-address-book">Curso</i></span>
                                    </div>
                                    <input type="text" class="form-control" name="nombreCurso" id="nombreCurso" 
                                        @if (!empty($curso))
                                            value="{{$curso->nombre_curso}}"
                                        @else
                                            value=""
                                        @endif 
                                    disabled autofocus>
                                </div>
                            </div>
                        </div>
                        <hr class="bg-primary">
                        @error('general_user')
                            {{$message}}
                        @enderror
                        <div class="form-group">
                            <div class="form-group col-md-12">
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="far fa-address-book">Nombre Completo</i></span>
                                    </div>
                                    <input type="text" class="form-control" id="nombre"
                                        @if (!empty($usuario))
                                            value="{{$usuario->nombre_usuario.' '.$usuario->apellido_paterno_usuario.' '.$usuario->apellido_materno_usuario}}"
                                        @else
                                            value=""
                                        @endif  
                                    disabled autofocus>
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-col col-md-6">
                                <div class="form-group">
                                    <label for="correoElectronico">Correo Electronico</label>
                                    <input type="text" name="genero" class="form-control" id="correoElectronico"
                                        @if (!empty($usuario))
                                            value="{{$usuario->correo_electronico}}"
                                        @else
                                            value=""
                                        @endif
                                    disabled autofocus>
                                </div>
                                <div class="form-group">
                                    <label for="genero">Genero</label>
                                    <input type="text" name="genero" class="form-control" id="genero" 
                                        @if (!empty($usuario))
                                            value="{{$usuario->genero}}"
                                        @else
                                            value=""
                                        @endif
                                    disabled autofocus>
                                </div>
                            </div>
                            <div class="form-group col-md-5">
                                <label for="constancia">Constancias</label>
                                <textarea style="resize: none" class="form-control" id="" cols="34" rows="3">
                                    @error('constancia')
                                        {{$message}}
                                    @enderror    
                                    @if (!empty($constancias))
                                        @foreach ($constancias as $constancia)
                                            @if ($constancia->id_usuario == $usuario->id_usuario)
                                                {{$constancia->folio_constancia}}
                                            @else
                                                @break
                                            @endif
                                        @endforeach
                                    @endif
                                </textarea>
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
                                <input type="button" onclick="{{route('search.user')}}" name="buscar" value="Buscar">
                            </div>
                            <div class="col-md-7 offset-md-5">
                                <button type="submit" class="btn btn-primary">Guardar</button>
                            </div>
                        </div>    
                    </form>
                    
                    @section('js_user_page_instructor')
                        <script>
                            $(document).ready(function(){
                                var rfcText = $('#rfcTextSearch');
                                var permisos_checkbox_list = $('#permisos_checkbox_list');

                                rfcText.hide();
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
