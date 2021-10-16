@extends('nav.navTecGCD')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                
                <div class="card-header " style=" height: 60px;background-color: #ff4e00 ;">
                    <h5 class="card-title" style=" text-align: center; color:#ffffff">Inicio de Sesión</h5>
                </div>
                
                <div class="card-body">
                    <form method="POST" action="/Usuarios/login">
                        @csrf
                        <div class="form-group row">
                            <label for="correo_electronico" class="col-md-4 col-form-label text-md-right">Correo Electronico</label>
                            <div class="col-md-6">
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="fas fa-envelope"></i></span>
                                    </div>
                                    <input type="email" required autofocus id="correo_electronico" name = "correo_electronico" class="form-control" value="{{old('correo_electronico')}}">
                                </div>
                            </div>
                        </div>
                        @error('correo_electronico')
                            {{$message}}
                        @enderror
                        <div class="form-group row">
                            
                            <label for="contra" class="col-md-4 col-form-label text-md-right">Contraseña</label>
                            <div class="col-md-6">
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="fas fa-lock"></i></span>
                                    </div>
                                    <input type="password" required autofocus id="contra" name = "contra" class="form-control">
                                </div>
                            </div>
                        </div>
                        @error('contra')
                        {{$message}}
                         @enderror
                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <label>
                                <input type="checkbox" name = "remember">
                                Recuerdame
                                </label>
                                <button type="submit" class="btn btn-primary">
                                    Iniciar Sesión
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
<br>
@section('cont')
@endsection
@endsection