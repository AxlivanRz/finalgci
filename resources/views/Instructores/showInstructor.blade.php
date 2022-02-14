@extends('blade.navTecGCD')
@section('content')
<div class="container">
  <div class="row justify-content-center">
    <div class="col-md-12">
        <div class="card mb-3">
            <div class="card-header" style=" height: 155px;background-color: #045cff;display: flex;">
                <img src="{{asset('storage').'/'.auth()->user()->imagen_usuario}}" class="rounded" style="width: 13%; height: 103%">
                <section style="text-align: center; width: 87%">
                    <h1 class="card-title" style="color:#ffffff">
                        @if (!empty($usuario))
                            {{$usuario->nombre." ".$usuario->primer_apellido_usuario." ".$usuario->primer_apellido_usuario}}
                        @endif
                    </h1>
                    <h3 class="card-subtitle" style="color:#ffffff">
                        @if (!empty($area))
                            {{$area->carrera}}
                        @endif
                    </h3>
                </section>
            </div>

            <div class="card-body" style="display: flex">
                <section class="mr-2" style="width: 70%">
                    <h3>Descripcion</h3>
                    <section>
                        <div class="form-group row">
                            <div class="form-group col-md-4">  
                                <label for="nombre">Grado de estudio</label>
                                <div class="input-group mb-1">
                                    <span class="input-group-text" style="width: 120%">
                                        @if (!empty($usuario))
                                            {{$usuario->grado_max_estudio}}
                                        @endif
                                    </span>
                                </div>
                            </div>
                            <div class="form-group col-md-4">  
                                <label for="nombre">Ultima empresa</label>
                                <div class="input-group mb-1">
                                    <span class="input-group-text" style="width: 120%">
                                        @if (!empty($actividades))
                                            {{$actividades->empresa}}
                                        @endif
                                    </span>
                                </div>
                            </div>
                            <div class="form-group col-md-4">  
                                <label for="nombre">Edad</label>
                                <div class="input-group mb-1">
                                    <span class="input-group-text" style="width: 120%">
                                        @if (!empty($edad))
                                            {{$edad}}
                                        @endif
                                    </span>
                                </div>
                            </div>
                        </div>
                    </section>
                    <section>
                        <div class="form-group row">
                            <div class="form-group col-md-6">  
                                <label for="nombre">Entidad</label>
                                <div class="input-group mb-1">
                                    <span class="input-group-text" style="width: 120%">
                                        @if ($usuario->correo_electronico == )
                                            Tecnologico Nacional de México Campus Perote
                                        @endif
                                    </span>
                                </div>
                            </div>
                            <div class="form-group col-md-6">  
                                <label for="nombre">Curso</label>
                                <div class="input-group mb-1">
                                    <span class="input-group-text" style="width: 120%">
                                        @if (!empty($curso))
                                            {{$curso->nombre_curso}}
                                        @endif
                                    </span>
                                </div>
                            </div>
                        </div>
                    </section>
                    <section>
                        <h3>Contacto</h3>
                        <div class="form-group row">
                            <div class="form-group col-md-5">  
                                <label for="nombre">Num. Telefono</label>
                                <div class="input-group mb-1">
                                    <span class="input-group-text" style="width: 120%">
                                        @if (!empty($telefono))
                                            {{$telefono->numero_telefonico}}
                                        @endif
                                    </span>
                                </div>
                            </div>
                            <div class="form-group col-md-5">  
                                <label for="nombre">Correo Electronico</label>
                                <div class="input-group mb-1">
                                    <span class="input-group-text" style="width: 120%; text-align: center">
                                        @if (!empty($usuario))
    x                                        {{$usuario->correo_electronico}}
                                        @endif
                                    </span>
                                </div>
                            </div>
                        </div>
                    </section>
                </section>
                <section class="card" style="width: 30%;">
                    <h3 style="text-align: center; margin-top: 4px;">Materias impartidas</h3>
                    <ul class="list-group list-group-flush">
                        @if (!empty($materias))
                            @foreach ($materias as $materia)
                                <li class="list-group-item">{{$materia->materia.' '.$materia->periodo}}</li>
                            @endforeach
                        @endif
                        @error('materias_message')
                            {{$message)}}
                        @enderror
                    </ul>
                    <h3 style="text-align: center; margin-top: 4px;">Actividades</h3>
                    <ul class="list-group list-group-flush">
                        @if (!empty($actividades))
                            @foreach ($actividades as $actividad)
                                <li class="list-group-item">{{$actividad->actividades_empresa}}</li>
                            @endforeach    
                        @endif
                        @error('laborales_message')
                            {{$message}}
                        @enderror
                    </ul>
                </section>
            </div>
        </div>
    </div>
  </div>
</div>
@section('cont')
@endsection
@endsection