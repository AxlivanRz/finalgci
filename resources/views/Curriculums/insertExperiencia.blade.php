@extends('blade.navTecGCD')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header " style=" height: 60px;background-color: #ff4e00 ;">
                    <h5 class="card-title" style=" text-align: center; color:#ffffff">{{__('Registrar su experiencia laboral y docente del usuario')}}</h5>
                </div>

                <div class="card-body">
                    <form action="{{route(''), $user}}" method="POST" ><!--enctype="multipart/form-data", sirve para enviar imagen -->
                        @csrf 
                        <div class="form-row mx-auto">
                            <div class="form-group col-md-4">
                                <div class="input-group mb-1">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="far fa-address-book">CURP</i></span>
                                    </div>
                                    <input type="text" class="form-control" name="curp" id="curp" 
                                        @if (!empty($user))
                                            value = "{{ $user->curp_usuario }}"
                                        @else
                                            value=""
                                        @endif 
                                    disabled autofocus>
                                </div>
                            </div>
                            <div class="form-group col-md-8">
                                <div class="input-group mb-1">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="far fa-address-book">Nombre completo</i></span>
                                    </div>
                                    <input type="text" class="form-control" name="nombreCompleto" id="nombreCompleto" 
                                        @if (!empty($user))
                                            value="{{$user->nombre_usuario." ".$user->apellido_paterno_usuario." ".$user->apellido_materno_usuario}}"
                                        @else
                                            value=""
                                        @endif
                                    disabled autofocus>
                                </div>
                            </div>
                        </div>
                        <hr class="bg-primary">
                        <div class="form-row mx-auto">
                            <div class="form-group col-md-7">
                                <div class="input-group mb-1">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="far fa-address-book">Empresa</i></span>
                                    </div>
                                    <input type="text" name="nombreEmpresa" value="{{old('nombreEmpresa')}}" class="form-control" id="nombreEmpresa" autofocus>
                                </div>
                            </div>
                            <div class="form-group col-md-5">
                                <div class="input-group mb-1">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="far fa-address-book">Puesto</i></span>
                                    </div>
                                    <input type="text" name="puesto" value="{{old('puesto')}}" class="form-control" id="puesto" autofocus>
                                </div>
                            </div>
                        </div>
                        <div class="form-group col-mt-3">
                            <div class="input-group mb-1">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="far fa-address-book">Permanencia</i></span>
                                </div>
                                <input type="text" name="permanencia" value="{{old('permanencia')}}" class="form-control" id="permanencia" autofocus>
                            </div>
                        </div>
                        <div class="form-group col-mt-3">
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="far fa-address-book">Actividad</i></span>
                                </div>
                                <input type="text" name="actividad" class="form-control" id="actividad" value="{{old('actividad')}}" autofocus>
                            </div>
                        </div>
                        <hr>
                        {{-- Parte que muestra las opciones de materia y periodo que impartio --}}
                        <div class="form-row mx-auto">
                            <div class="form-group col-md-7">
                                <div class="input-group mb-1">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="far fa-address-book">Materia</i></span>
                                    </div>
                                    <input type="text" name="materia" class="form-control" id="materia" value="{{old('materia')}}" autofocus required>
                                </div>
                            </div>
                            <div class="form-group col-md-5">
                                <div class="input-group mb-1">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="far fa-address-book">Periodo</i></span>
                                    </div>
                                    <select class = "preriodo form-control" name="preriodo" id="preriodo">
                                        <option>Seleccionar una opción</option>
                                        <option value="AGO2021-FEB2022" >AGO2021-FEB2022</option>
                                        <option value="FEB2021-JUL2021" >FEB2021-JUL2021</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="form-group row justify-content-end mt-2 mb-0">
                            <div class="col-md-2 float-end">
                                <button type="submit" name="guardar" class="btn btn-primary rounded">Guardar</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<br> 
@endsection
