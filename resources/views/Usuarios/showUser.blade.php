@extends('nav.navTecGCD')
@section('content')
<div class="container">
  <div class="row justify-content-center">
    <div class="col-md-12">
        <div class="card mb-3">
            <div class="card-header" style=" height: 155px;background-color: #045cff;display: flex;">
                <img src="{{asset('storage').'/'.auth()->user()->imagen_usuario}}" class="rounded" style="width: 13%; height: 103%">
                <section style="text-align: center; width: 87%">
                    <h1 class="card-title" style="color:#ffffff">{{$usuario->nombre_usuario.' '.$usuario->apellido_paterno_usuario.' '.$usuario->apellido_materno_usuario}}</h1>
                    <h3 class="card-subtitle" style="color:#ffffff">{{$area->nombre_area}}</h3>
                </section>
                <section class="">
                    <div class="dropdown">
                        <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown">Editar
                        <span class="caret"></span></button>
                        <ul class="dropdown-menu dropdown-menu-right" style="text-align: right">
                          <li><a style="margin-right: 5px" href="{{route('edit',auth()->user()->id_Usuario)}}">Información general</a></li>
                          <li><a style="margin-right: 5px" 
                            href="
                            @error('experiencia_nueva')
                                {{}}
                            @enderror
                            {{route('experiencia.update', $user->id_Usuario)}}
                            "
                            >Experiencia</a></li>
                        </ul>
                      </div>
                </section>
            </div>

            <div class="card-body" style="display: flex">
                <section class="mr-2" style="width: 90%">
                    <h3>Información general</h3>
                    <section>
                        <div class="form-group row">
                            <div class="form-group col-md-4">  
                                <label for="nombre">Grado de estudio</label>
                                <div class="input-group mb-1">
                                    <span class="input-group-text" style="width: 120%">{{$user->grado_estudio}}</span>
                                </div>
                            </div>
                            <div class="form-group col-md-4">  
                                <label for="nombre">Num. Telefono</label>
                                <div class="input-group mb-1">
                                    <span class="input-group-text" style="width: 120%">{{$telefono->numero_telefonico}}</span>
                                </div>
                            </div>
                            
                            <div class="form-group col-md-4">  
                                <label for="nombre">Fecha de nacimiento</label>
                                <div class="input-group mb-1">
                                    <span class="input-group-text" style="width: 120%">
                                        {{$usuario->fecha_nacimiento}}
                                    </span>
                                </div>
                            </div>
                        </div>
                    </section>
                    <section>
                        <div class="form-group row">
                            <div class="form-group col-md-6">  
                                <label for="nombre">CURP</label>
                                <div class="input-group mb-1">
                                    <span class="input-group-text" style="width: 120%; text-align: center">{{$user->curp_usuario}}</span>
                                </div>
                            </div>
                            <div class="form-group col-md-6">  
                                <label for="nombre">RFC</label>
                                <div class="input-group mb-1">
                                    <span class="input-group-text" style="width: 120%">{{$user->rfc_usuario}}</span>
                                </div>
                            </div>
                        </div>
                    </section>
                    <section>
                        <div class="form-group row">
                            <div class="form-group col-md-6">  
                                <label for="nombre">Correo Electronico</label>
                                <div class="input-group mb-1">
                                    <span class="input-group-text" style="width: 120%; text-align: center">{{$user->correo_electronico}}</span>
                                </div>
                            </div>
                            <div class="form-group col-md-6">  
                                <label for="nombre">Ultima empresa</label>
                                <div class="input-group mb-1">
                                    <span class="input-group-text" style="width: 120%">{{$laboral->empresa}}</span>
                                </div>
                            </div>
                        </div>
                    </section>
                </section>
            </div>
        </div>
    </div>
  </div>
</div>
@section('cont')
@endsection
@endsection