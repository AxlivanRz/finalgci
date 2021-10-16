@extends('nav.navTecGCD')
@section('content') 
<br>
<section class="content-header">
    <div class="container-fluid">
    <div class="row mb-2">
    </div>
    </div><!-- /.container-fluid -->
</section>
    <!-- Main content -->

<section class="content">
    <div class="row ">
        <div class = "col-md-2">
        </div>
     <div class="col-md-7">
        <div class="card ">
            <div class="card-header " style="background-color: #09c6f9 ; background-image: linear-gradient(315deg, #09c6f9 10%, #045de9 74%);">
                <h4 class="card-title" style="color:#ffffff">Contenido del curso</h4>
            </div>
            <br>
            <div class = "col-md-11">
                <form action="{{route('Temas.store')}}" method="POST" ><!--enctype="multipart/form-data", sirve para enviar imagen -->
                    @csrf
                    @if (isset($have_id))
                    @foreach ( $have_id as $id )
                    <div class="form-group">
                        <label>ID del curso</label>
                    <input type="text " id="idCur" name="idCur"   class="form-control" value="{{$id->id_Curso}}" >
                    </div> 
                    @endforeach
                    @elseif (isset($have_id1))
                     @foreach ( $have_id1 as $id1 )
                     <div class="form-group">
                         <label>ID del curso</label>
                     <input type="text " id="idCur" name="idCur"   class="form-control" value="{{$id1->id_Curso}}" >
                     </div> 
                     @endforeach
                     @else
                         <div class="alert alert-danger alert-dismissible">
                            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                            <h5><i class="icon fas fa-ban"></i> Alerta!</h5>
                            Debe de regresar al formulario 1 para poder continuar, regrese a "Alta Curso",
                            identificado con el N°1 en el paginador 
                        </div> 
                     <br>
                    @endif
                    <div class="form-group " >
                        <label >Nombre del Tema/Subtema</label>
                        <textarea class="form-control" id = "nombreInst" name = "nombreInst" placeholder="Enter ..."></textarea>
                    </div>
                    <div class="form-group">
                        <label for="NomCurso">Tiempo programado</label>
                        <input type="text" id="tiempoInst" name = "tiempoInst" class="form-control">
                    </div>
                    <div class="form-group">
                        <label>Actividades de aprendizaje</label>
                        <textarea class="form-control" id = "actividadesInst" name = "actividadesInst" placeholder="Enter ..."></textarea>
                    </div>
                     
                    
                  </div>
                  <div class="card-footer " style="background-color: #045de9; background-image: linear-gradient(315deg, #045de9 10%, #09c6f9 74%);">
                    <input type="submit" value="Agregar" class="btn btn-success float-right">
                  </div>
                </form>
                </div>  
        <!-- /.card-body -->
     </div>
        <!-- /.card -->
    </div>
    <br>
        <div class="row ">
            <div class = "col-md-5">
            </div>
            <nav aria-label="...">
                <ul class="pagination pagination-lg">
                <li class="page-item disable"><a class="page-link ">1</a></li>
                <li class="page-item active"  aria-current="page">
                    <span class="page-link" >2</span>
                </li>
                <li class="page-item"><a class="page-link " href="{{ url('Curso/Instrumentos/create')}}" >3</a></li>

                </ul>
            </nav>
        </div>
</section> 
<br>
@section('cont')
@endsection
@endsection