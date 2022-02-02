@extends('nav.navTecGCD')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header " style=" height: 60px;background-color: #ff4e00 ;">
                    <h5 class="card-title" style=" text-align: center; color:#ffffff">Registro...</h5>
                </div>

                <div class="card-body">
                    <form action="{{route('usuarios.store')}}" method="POST" enctype="multipart/form-data"><!--enctype="multipart/form-data", sirve para enviar imagen -->
                        @csrf 
                        <div class="form-group row">
                            <div class="form-group col-md-6"> 
                                <label for="foto">Foto de perfil</label>
                                <div class="input-group mb-3">
                                    <input type="file" accept="image/*" name="foto" id="foto" aria-required="false">                        
                                </div> 
                            </div>  
                            <div class="form-group col-md-4">  
                                <label for="grado">Grado académico</label>
                                <div class="input-group mb-3">
                                  <div class="input-group-prepend">
                                  <span class="input-group-text"><i class="far fa-address-card"></i></span>
                                  </div>
                                  <input id="grado" type="text" class="form-control" name="grado" value="{{ old('grado') }}" required  autofocus placeholder="Lic. / M.R. y S.I. / LSCA. ">
                                </div>
                            </div>          
                        </div>
                        <div class="form-group row">
                            <div class="form-group col-md-3">  
                                <label for="nombre">Nombre</label>
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="far fa-address-card"></i></span>
                                    </div>
                                    <input id="nombre" type="text" class="form-control" name="nombre" value="{{ old('nombre') }}" required autofocus>
                                </div>
                            </div>
                            <div class="form-goup col-md-3">
                                <label for="primer_Apellido">Primer Apellido</label>
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="far fa-address-card"></i></span>
                                    </div>
                                    <input id="primer_Apellido" type="text" class="form-control" name="primer_Apellido" value="{{ old('primer_Apellido') }}" required autofocus>
                                </div>
                            </div>
                            <div class="form-group col-md-3">
                                <label for="segundo_Apellido" >Segundo Apellido</label>
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="far fa-address-card"></i></span>
                                    </div>
                                    <input id="segundo_Apellido" type="text" class="form-control" name="segundo_Apellido" value="{{ old('segundo_Apellido') }}" autofocus>
                                </div>
                            </div>
                            <div class="form-group col-md-3">
                                <label for="rfc" >RFC</label>
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="far fa-address-card"></i></span>
                                    </div>
                                    <input id="rfc" type="text" class="form-control" name="rfc" value="{{ old('rfc') }}" required >
                                </div>
                            </div>
                        </div>


                        <div class="form-group row">
                            <div class="form-group col-md-4">
                                <label for="curp">Curp</label>
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend ">
                                    <span class="input-group-text "><i class="far fa-address-card"></i></span>
                                    </div>
                                    <input id="curp" type="curp" class="form-control" name="curp" required>
                                </div>   
                            </div>
                            <div class="form-group col-md-4">
                                <label for="fecha">Fecha de nacimiento</label>
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend ">
                                    <span class="input-group-text "><i class="far fa-calendar-alt"></i></span>
                                    </div>
                                    <input type="date" class="form-control" id="fecha" name="fecha" data-inputmask-alias="date" data-inputmask-inputformat="dd/mm/yyyy" data-mask="" inputmode="numeric">
                                </div>   
                            </div>
                            <div class="form-group col-md-4">  
                                <label for="genero">Género</label>
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="far fa-address-card"></i></span>
                                    </div>
                                    <select class = "genero form-control" name="genero" id="genero">
                                        <option value="M" >Masculino</option>
                                        <option value="F" >Femenino</option>
                                        <option value="O" >Otro</option>
                                    </select>
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
                                    <input id="correo_electronico" type="email" class="form-control" name="correo_electronico" value="{{ old('correo_electronico') }}" required>
                                </div>
                            </div>
                            <div class="form-group col-md-2">

                            </div>
                            <div class="form-group col-md-5">
                                <label for="contrasena">Contraseña</label>
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend ">
                                    <span class="input-group-text "><i class="fas fa-lock"></i></span>
                                    </div>
                                    <input id="contrasena" type="password" class="form-control" name="contrasena" required>
                                </div>   
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-md-1">
                              <a href="#" class="btn btn-dark">
                                cancelar
                              </a>
                            </div>
                            <div class="col-md-2 offset-md-9">
                                <button type="submit" class="btn btn-success">
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