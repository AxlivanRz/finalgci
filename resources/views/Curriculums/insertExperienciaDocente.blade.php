@extends('blade.navTecGCD')
@section('content')
<div class="container">
    @section('js_exp_docente')
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.0.0-beta1/jquery.js"></script>
    <script>
        $(function(){
            // Clona la fila oculta que tiene los campos base, y la agrega al final de la tabla
            $("#adicional").on('click', function(){
                $("#tabla tbody tr:eq(0)").clone().removeClass('fila-fija').appendTo("#tabla");
            });
         
            // Evento que selecciona la fila y la elimina 
            $(document).on("click",".eliminar",function(){
                var parent = $(this).parents().get(0);
                $(parent).remove();
            });
        });
    </script>
    @endsection
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header " style=" height: 60px;background-color: #ff4e00 ;">
                    <h5 class="card-title" style=" text-align: center; color:#ffffff">{{__('Registrar su experiencia docente del usuario')}}</h5>
                </div>

                <div class="card-body">
                    <form action="" method="POST" ><!--enctype="multipart/form-data", sirve para enviar imagen -->
                        @csrf 
                        <div class="form-row mx-auto">
                            <div class="form-group col-md-4">
                                <div class="input-group mb-1">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="far fa-address-book">RFC</i></span>
                                    </div>
                                    <input type="text" value="" class="form-control" name="nombreCompleto" id="rfc" disabled autofocus>
                                </div>
                            </div>
                            <div class="form-group col-md-8">
                                <div class="input-group mb-1">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="far fa-address-book">Nombre completo</i></span>
                                    </div>
                                    <input type="text" placeholder="" class="form-control" name="nombreCompleto" id="nombreCompleto" disabled autofocus>
                                </div>
                            </div>
                        </div>
                        <hr class="bg-primary">
                        <table class="row border border-3 rounded" id="tabla">
                                <tr class="fila-fija">
                                    <td>
                                        <div class="form-group col mt-3">
                                            <div class="input-group">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text"><i class="far fa-address-book">Materia</i></span>
                                                </div>
                                                <input type="text" name="materia" class="form-control" id="materia" value="{{old('materia')}}" autofocus>
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="form-group col mt-3">
                                            <div class="input-group">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text"><i class="far fa-address-book">Periodo</i></span>
                                                </div>
                                                <input type="text" name="periodo" class="form-control" id="periodo" value="{{old('periodo')}}" autofocus>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="eliminar">
                                        <div class="form-group col-md-1 mt-3 ">
                                            <button type="button" class="btn btn-danger rounded rounded-pill"><i class="fas fa-minus-circle"></i></button>
                                        </div>
                                    </td>
                                </tr>
                        </table>
                        <div class="form-group row justify-content-end mt-2 mb-0">
                            <div class="col-md-2 float-end">
                                <button type="submit" name="guardar" class="btn btn-primary rounded">Guardar</button>
                            </div>
                            <div class="col-md-2 float-end">
                                <button type="button" class="btn btn-info rounded" id="adicional" name="adicional">Más...</button>
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
