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
                                <label for="contrasena">Contraseña</label>
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend ">
                                    <span class="input-group-text "><i class="fas fa-lock"></i></span>
                                    </div>
                                    <input id="contrasena" type="password" class="form-control" name="contrasena" required autocomplete="contrasena">
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