@extends('nav.navTecGCD')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header " style=" height: 60px;background-color: #ff4e00 ;">
                    <h5 class="card-title" style=" text-align: center; color:#ffffff">Registro...</h5>
                </div>

                <div class="card-body">
                    <form action="{{route('usuarios.store')}}" method="POST" ><!--enctype="multipart/form-data", sirve para enviar imagen -->
                        @csrf 
                            <div class="results">
                                @if (Session::get('Success'))
                                    <div class="alert alert-success">
                                        {{Session::get('success')}}
                                    </div>                                    
                                @endif
                            </div>
                            <div class="results">
                                @if (Session::get('fail'))
                                    <div class="alert alert-danger">
                                        {{Session::get('fail')}}
                                    </div>                                    
                                @endif
                            </div>
                        

                        <div class="form-group row">
                            <div class="form-group col-md-4">  
                                <label for="nombre_usuario">Nombre</label>
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="far fa-address-book"></i></span>
                                    </div>
                                    <input id="nombre_usuario" type="text" class="form-control" name="nombre_usuario" value="{{ old('nombre_usuario') }}" required autocomplete="nombre_usuario" autofocus>
                                </div>
                            </div>
                            <div class="form-goup col-md-4">
                                <label for="apellido_paterno_usuario">Primer Apellido</label>
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="far fa-address-book"></i></span>
                                    </div>
                                    <input id="apellido_paterno_usuario" type="text" class="form-control" name="apellido_paterno_usuario" value="{{ old('apellido_paterno_usuario') }}" required autocomplete="apellido_paterno_usuario" autofocus>
                                </div>
                            </div>
                            <div class="form-group col-md-4">
                                <label for=apellido_materno_usuario" >Segundo Apellido</label>
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="far fa-address-book"></i></span>
                                    </div>
                                    <input id="apellido_materno_usuario" type="text" class="form-control" name="apellido_materno_usuario" value="{{ old('apellido_materno_usuario') }}" autocomplete="apellido_materno_usuario" autofocus>
                                </div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="form-group col-md-6">
                                <label for="correo_electronico" >Correo Electronico</label>
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="fas fa-envelope"></i></span>
                                    </div>
                                    <input id="correo_electronico" type="email" class="form-control" name="correo_electronico" value="{{ old('correo_electronico') }}" required autocomplete="correo_electronico">
                                </div>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="contrasena_usuario">Contraseña</label>
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend ">
                                    <span class="input-group-text "><i class="fas fa-lock"></i></span>
                                    </div>
                                    <input id="contrasena_usuario" type="password" class="form-control" name="contrasena_usuario" required autocomplete="contrasena_usuario">
                                </div>   
                            </div>
                        </div>
                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    Registrarme
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<br>
@section('cont')
@endsection
@endsection