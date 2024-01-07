<nav class="hidden lg:flex h-10v bg-nav flex flex-row justify-start items-center space-x-2">
    <a href="{{ route('home') }}" class="btn ">Inicio</a>
    <a href="{{ route('about') }}" class="btn ">Acerca de Nosotros</a>
    <a href="{{ route('projects') }}" class="btn">Proyectos</a>
    <a href="{{ route('contact') }}" class="btn">Contacto</a>
    <a href="{{ route('students') }}" class="btn">Alumnos</a>
   {{$slot}}
</nav>
<nav class="lg:hidden bg-nav flex flex-col justify-start space-y-1 px-2">
    <a href="{{ route('home') }}" class="btn btn-primary  ">Inicio</a>
    <a href="{{ route('about') }}" class="btn btn-primary">Acerca de Nosotros</a>
    <a href="{{ route('projects') }}" class="btn btn-primary">Proyectos</a>
    <a href="{{ route('contact') }}" class="btn btn-primary">Contacto</a>
    <a href="{{ route('students') }}" class="btn btn-primary">Alumnos</a>
    {{$slot}}
</nav>
