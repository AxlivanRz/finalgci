@extends('nav.navTecGCD')
@section('content')
<div class="container-fluid">
    <div id="carouselExampleControls" class="carousel slide mb-2" data-ride="carousel">
        <div class="carousel-inner">
        <div class="carousel-item active">
            <div class="card bg-dark text-white">
                <img src="{{asset('img/tutoria.png')}}" class="card-img w-50 mx-auto" alt="...">
                <div class="card-img-overlay">
                </div>
            </div>
        </div>
        <div class="carousel-item">
            <div class="card bg-dark text-white">
                <img src="{{asset('img/java.png')}}" class="card-img mx-auto" style="width: 795px" alt="...">
                <div class="card-img-overlay">
                </div>
            </div>
        </div>
        <div class="carousel-item">
            <div class="card bg-dark text-white">
                <img src="{{asset('img/tutoria.png')}}" class="card-img w-50 mx-auto" alt="...">
                <div class="card-img-overlay">
                </div>
            </div>
        </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
        </a>
    </div>
</div>
<!-- Para todos -->
<div class="container-fluid border border-primary rounded-lg shadow mb-4">
    <div class="border-bottom border-dark">
        <h1 class="display-4">Cursos para todas las carreras</h1>
    </div>
    <div class="row row-cols-1 row-cols-md-4">
        <!-- 1 -->
        <div class="col mt-2 mb-3">
            <div class="card border-dark shadow-sm h-100">
                <img src="{{asset('img/tutoria.png')}}" class="card-img-top w-50 mx-auto" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Tutorias</h5>
                    <p class="card-text text-justify">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Dolor corrupti voluptate nobis architecto odio temporibus esse quo fugiat placeat tempora...</p>
                </div>
                <div class="card-footer bg-white border-0">
                    <a href="#" class="btn btn-primary float-left">Ver más...</a>
                    <input type="button" class="btn btn-success float-right" value="Registrarse">
                </div>
            </div>
        </div>
        <!-- 2 -->
        <div class="col mt-2 mb-3">
            <div class="card border-dark shadow-sm h-100">
                <img src="{{ asset('img/python.jpg') }}" class="card-img-top w-50 mx-auto" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Python para todos</h5>
                    <p class="card-text text-justify">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Aliquam id veniam perspiciatis, eligendi porro pariatur facilis perferendis...</p>
                </div>
                <div class="card-footer bg-white border-0">
                    <a href="#" class="btn btn-primary float-left">Ver más...</a>
                    <input type="button" class="btn btn-success float-right" value="Registrarse">
                </div>
            </div>
        </div>
        <!-- 3 -->
        <div class="col mt-2 mb-3">
            <div class="card border-dark shadow-sm h-100">
                <img src="{{asset('img/python.jpg') }}" class="card-img-top w-50 mx-auto" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text text-justify">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Beatae, debitis rerum dolore, est accusamus dolor inventore accusantium...</p>
                </div>
                <div class="card-footer bg-white border-0">
                    <a href="#" class="btn btn-primary float-left">Ver más...</a>
                    <input type="button" class="btn btn-success float-right" value="Registrarse">
                </div>
            </div>
        </div>
        <!-- 4 -->
        <div class="col mt-2 mb-3">
            <div class="card border-dark shadow-sm h-100">
                <img src="{{asset('img/planeacion.jpg')}}" class="card-img-top w-75 mx-auto" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text text-justify">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Atque deserunt voluptate eius amet possimus rerum voluptatum iure eos sit perspiciatis...</p>
                </div>
                <div class="card-footer bg-white border-0">
                    <a href="#" class="btn btn-primary float-left">Ver más...</a>
                    <input type="button" class="btn btn-success float-right" value="Registrarse">
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Informáticos -->
<div class="container-fluid border border-primary rounded-lg shadow mb-4">
    <div class="border-bottom border-dark">
        <h1 class="display-4">Cursos para Informática</h1>
    </div>
    <div class="row row-cols-1 row-cols-md-4">
        <!-- 1 -->
        <div class="col mt-2 mb-3">
            <div class="card border-dark shadow-sm h-100">
                <img src="{{ asset('img/raspberry.jpg') }}" class="card-img-top w-50 mx-auto" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Raspberry</h5>
                    <p class="card-text text-justify">Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolore non quasi id quod quaerat numquam et libero voluptatum sed omnis dicta...</p>
                </div>
                <div class="card-footer bg-white border-0">
                    <a href="#" class="btn btn-primary float-left">Ver más...</a>
                    <input type="button" class="btn btn-success float-right" value="Registrarse">
                </div>
            </div>
        </div>
        <!-- 2 -->
        <div class="col mt-2 mb-3">
            <div class="card border-dark shadow-sm h-100">
                    <img src="{{asset('img/arduino.jpg')}}" class="card-img-top w-50 mx-auto" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Arduino</h5>
                        <p class="card-text text-justify">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Maxime explicabo sed aut natus doloribus eligendi...</p>
                    </div>
                    <div class="card-footer bg-white border-0">
                        <a href="#" class="btn btn-primary float-left">Ver más...</a>
                        <input type="button" class="btn btn-success float-right" value="Registrarse">
                    </div>
            </div>
        </div>
        <!-- 3 -->
        <div class="col mt-2 mb-3">
            <div class="card border-dark shadow-sm h-100">
                <img src="{{asset('img/android.png')}}" class="card-img-top w-50 mx-auto" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Android Studio</h5>
                    <p class="card-text text-justify">Lorem ipsum dolor sit amet consectetur adipisicing elit. Animi qui harum...</p>
                </div>
                <div class="card-footer bg-white border-0">
                    <a href="#" class="btn btn-primary float-left">Ver más...</a>
                    <input type="button" class="btn btn-success float-right" value="Registrarse">
                </div>
            </div>
        </div>
        <!-- 4 -->
        <div class="col mt-2 mb-3">
            <div class="card border-dark shadow-sm h-100">
                <img src="{{asset('img/database.jpg')}}" class="card-img-top w-75 mx-auto" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Base de datos</h5>
                    <p class="card-text text-justify">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Minus fugit pariatur unde quaerat repellendus...</p>
                </div>
                <div class="card-footer bg-white border-0">
                    <a href="#" class="btn btn-primary float-left">Ver más...</a>
                    <input type="button" class="btn btn-success float-right" value="Registrarse">
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Forestal -->
<div class="container-fluid border border-primary rounded-lg shadow mb-4">
    <div class="border-bottom border-dark">
        <h1 class="display-4">Cursos para Forestal</h1>
    </div>
    <div class="row row-cols-1 row-cols-md-4">
        <!-- 1 -->
        <div class="col mt-2 mb-3">
            <div class="card border-dark shadow-sm h-100">
                <img src="{{asset('img/iotForestal.jpg')}}" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">IoT para el Ambiente</h5>
                    <p class="card-text text-justify">Aprenderemos como se puede implementer el IOT para el medio ambiente</p>
                </div>
                <div class="card-footer bg-white border-0">
                    <a href="#" class="btn btn-primary float-left">Ver más...</a>
                    <input type="button" class="btn btn-success float-right" value="Registrarse">
                </div>
            </div>
        </div>
        <!-- 2 -->
        <div class="col mt-2 mb-3">
            <div class="card border-dark shadow-sm h-100">
                <img src="{{asset('img/apMedioAmbient.jpg')}}" class="card-img-top w-75 mx-auto" alt="...">
                <div class="card-body">
                    <h5 class="card-title">App movil para chequeo de el desarrollo de mi invernadero</h5>
                    <p class="card-text text-justify">En este curso se aprenderá a realizar el desarrollo de codigó al igual que el diseño para una aplicación movil. 
                        <br> Requiere conocimientos previos en manejo de mircrocontroladores (Arduino) y android studio.</p>
                </div>
                <div class="card-footer bg-white border-0">
                    <a href="#" class="btn btn-primary float-left">Ver más...</a>
                    <input type="button" class="btn btn-success float-right" value="Registrarse">
                </div>
            </div>
        </div>
        <!-- 3 -->
        <div class="col mt-2 mb-3">
            <div class="card border-dark shadow-sm h-100">
                <img src="{{asset('img/tecForestal.jpg')}}" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Sistema automatizado de riego</h5>
                    <p class="card-text text-justify"> En este curso se aprenderá a realizar el desarrollo de codigó al igual que el diseño de un sistema de riego. 
                        <br> Requiere conocimientos previos en manejo de mircrocontroladores (Arduino). </p>
                </div>
                <div class="card-footer bg-white border-0">
                    <a href="#" class="btn btn-primary float-left">Ver más...</a>
                    <input type="button" class="btn btn-success float-right" value="Registrarse">
                </div>
            </div>
        </div>
        <!-- 4 -->
        <div class="col mt-2 mb-3">
            <div class="card border-dark shadow-sm h-100">
                <img src="{{asset('img/dron.jpg')}}" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Mi Primer dron</h5>
                    <p class="card-text text-justify"> En este curso se aprenderá a realizar el desarrollo de codigó al igual que el diseño de un dron. 
                        <br> Requiere conocimientos previos en manejo de mircrocontroladores (Arduino).</p>
                </div>
                <div class="card-footer bg-white border-0">
                    <a href="#" class="btn btn-primary float-left">Ver más...</a>
                    <input type="button" class="btn btn-success float-right" value="Registrarse">
                </div>
            </div>
        </div>
    </div>
</div>
@section('cont')
@endsection
@endsection