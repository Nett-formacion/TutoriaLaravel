@extends("layouts.layout")
@section("metaDescription")
    Explicacion sobre el desarrollo web con Laravel. Cubriendo los aspectos fullstack, con blade, plantillas y back.
    Autenticación y bases de datos
@endsection

@section("title")
    App laravel
@endsection
@section ("contenido")
    <div class="hero h-full"
                           style="background-image: url(https://daisyui.com/images/stock/photo-1507358522600-9f71e620c44e.jpg);">
        <div class="hero-overlay bg-opacity-60"></div>
        <div class="hero-content text-center text-neutral-content">
            <div class="max-w-md">
                <h1 class="mb-5 text-5xl font-bold">Bienvenido a nuestro proyecto de apredizaje</h1>
                <p class="mb-5">Accederás a las diferentes prácticas realizadas en las tutorías</p>
                <button class="btn btn-primary">Empezar</button>
            </div>
        </div>
    </div>
@endsection
