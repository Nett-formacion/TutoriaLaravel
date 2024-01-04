{{--Especificamos que heredamos la estructura de esta página--}}
@extends("layouts.layout")

{{--    Especificamos que aportamos contenido específico para una sección--}}
@section ("contenido")
    <h1>About us</h1> {{--Código html normal--}}
    @if($user) {{--Directiva de tipo if (se sustituirá por código php)--}}
        <h1>Estás autenticado</h1>
    @endif
@endsection
