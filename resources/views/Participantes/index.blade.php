@extends('nav.navTecGCD')
@section('content')
<div class = "col-md-12">
    <div class = "row">
      <div class = "col-md-1">
      </div>
        <div class="col-md-10">
            <table class="table table-hover " style=" background-color: #ffffff">
                <thead>
                <tr>
                    <th scope="col">N°</th>
                    <th scope="col">Nombre del participante</th>
                    <th scope="col">RFC</th>
                    @if ($hoy >= $inicioCarbon || $hoy <= $finalCarbon  )
                        <th scope="col">Día: {{$hoy->isoFormat('dddd')}} </th> 
                    @else
                    <th scope="col">Fin de Curso</th>
                    @endif
                    
                    <th scope="col">Asistencia</th>
                </tr>
                </thead>
                <tbody> 
                    @foreach ( $usuarios as $usuario )
                        @foreach ( $participantes as $particpante )
                            @if ($usuario->id_Usuario == $particpante->id_Usuario)
                                <tr>                                
                                    <th scope="row">{{$particpante->id_participante}}</th>
                                    <td>{{$usuario->nombre_usuario}} {{$usuario->apellido_paterno_usuario}} {{$usuario->apellido_materno_usuario}}</td>
                                    <td>{{$usuario->rfc_usuario}}</td>
                                    @if ( $hoy->dayOfWeek == 6 || $hoy->dayOfWeek == 7)
                                        <td>No es un día hábil</td>
                                        <td>
                                            <select class = "asistencia form-control" name="asistencia" id="asistencia">
                                                <option value="1" >Sí</option>
                                                <option value="0" >No</option>
                                            </select>
                                        </td>
                                    @else
                                        <form action="{{route('Lista.store')}}" method="post">
                                            @csrf
                                            <td>{{$hoy->isoFormat('LL')}} </td>
                                            <input type="number" id="idP" name="idP" value="{{$particpante->id_participante}}" hidden>
                                            <input type="text" id="idC" name="idC" value="{{$vercurso->id_Curso}}" hidden>
                                            <input type="text"  id = "fecha" name="fecha" value="{{$hoy->isoFormat('YYYY/MM/DD')}}" hidden>                        
                                            <td>
                                                <select class = "asistencia form-control" name="asistencia" id="asistencia">
                                                    <option value="1" >Sí</option>
                                                    <option value="0" >No</option>
                                                </select>
                                            </td>
                                            <td>
                                                <a id="enviar" class="btn btn-success">Asignar</a>
                                            </td>
                                        </form>
                                    @endif
                                </tr>                                                     
                            @endif
                        @endforeach                
                    @endforeach 
                </tbody>
            </table>
            @section('js_asistencia_participante')
                <script>
                    $(document).ready(function (e){
                        e.preventDefault();
                        var idP = $('#idP').val();
                        var idC = $('#idC').val();  
                        var fecha = $('#fecha').val();
                        var asistencia = $('#asistencia').val();
                        $('#enviar').click( function(){
                            $.ajax({
                                url: "{{route('Lista.store')}}",
                                method: 'post',
                                dataType: 'json', 
                                data: { 
                                    idP = idP,
                                    idC = idC,
                                    fecha = fecha,
                                    asistencia = asistencia,
                                } 
                            }),success: function (msg) {
                                 console.log(data);
                                    alert("Se ha realizado el POST con exito " + msg);
                            }
                                
                        });
                    }); 
                </script>
            @endsection
        </div>
    </div>
</div>
@section('cont')
@endsection
@endsection