@extends('layouts.plantilla')
@section('titulo','SPM')
@section('contenido')
<div class="p-4" style="background-color: lightslategray; border:1px solid #ddd; border_radius: 10px;">

    <div id="Portada" class="d-flex justify-content-center align-items-center" style="height: 100vh;">
        <img src="{{ asset('images/PortadaSPM.jpg') }}" alt="Imagen de Portada" style="max-height: 100%; max-width: 100%; border-radius: 8px;">
    </div>
<!-- Sección: Proposito -->
<!-- borrar o comentar en caso de que algo salga mal -->
<div id="proposito" class="container my-5" style="background-color: orange">

    <div class="d-flex flex-column justify-content-center align-items-center text-center full-height" style="height: 50vh" >
        <h1 class="display-3" style="font-family: 'Noto Sans JP', sans-serif; ">{{__('Proposito') }}</h1>
        <p>{{ __('Nuestra misión es promover la cultura del deporte, incrementar el rendimiento de los atletas promedio y contagiar de ganas de hacer deporte a atletas casuales') }}</p>
        <p>{{__('Esto lo logramos en base de nuestro producto y servicio que es la banda de SPM, que brinda medicion de metricas especificas en tiempo real, que incluyen frecuencia cardiaca, oxigenacion, y temperatura')}}</p>

    </div>


</div>


<!-- Sección: Equipo -->
<div id="equipo" class="container my-5" style="background-color: white">
    <div class="d-flex flex-column justify-content-center align-items-center text-center full-height" style="height: 50vh" >

    <h1 class="display-3" style="font-family: 'Noto Sans JP', sans-serif;">{{ __('Equipo') }}</h1>
    <p>{{ __('Contamos con un equipo apasionado por el deporte, varios entusiastas del deporte y ex-atletas semi profesionales, todoes estamos comprometidos a brindar la mejor experiencia tanto al atleta experimentado como al atleta primerizo') }}</p>
    </div>
</div>

<!-- Sección: Beneficios -->
<div id="beneficios" class="container my-5" style="background-color: orange">
    <div class="d-flex flex-column justify-content-center align-items-center text-center full-height" style="height: 50vh" >

    <h1 class="display-3" style="font-family: 'Noto Sans JP', sans-serif;">{{ __('Beneficios') }}</h1>
    <p>{{ __('Al unirte a nuestra librería, accedes a descuentos, eventos exclusivos, y una comunidad de lectores entusiastas como tú.') }}</p>
    </div>
</div>

<!-- Sección: Contacto -->
<div class="container mt-5">
    <h2>Usuarios desde la API FastAPI</h2>
    <ul id="usuarios-api">
        <li>Cargando...</li>
    </ul>
</div>


</div>

@endsection
