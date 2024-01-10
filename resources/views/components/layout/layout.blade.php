@props(["titulo"=>"Proyecto Laravel", "metaDescription"=>"documentación  de cómo desarrollar una aplicación con laravel"])
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="description" content="{{$metaDescription}}"
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <title>{{$titulo}}</title>
</head>
<body>

    <x-layout.header />
    <x-layout.nav>
        @if(isset($slot_nav))
            {{ $slot_nav }}
        @endif
    </x-layout.nav>
    <x-layout.main >
        {{$slot_main}}
    </x-layout.main>
    <x-layout.footer>

    </x-layout.footer>



</body>
</html>
